<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\PharmacyMedicine;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;



class MedicineController extends Controller
{
     
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request   )
    {
        //
        $pharmacyMedicine=PharmacyMedicine::latest()->get();
        $medicines=Medicine::paginate(24);
        if($request->has('search')){
            $query = $request->get('search');
            $medicines = Medicine::where("name", 'LIKE', '%'.$query.'%')->orWhere("genericName", 'LIKE', '%'.$query.'%')
                    ->paginate(24);
        }             
        
        if($request->has('latest')){
            $medicines=Medicine::orderBy('created_at','desc')->paginate(24);
        
        }
        if($request->has('oldest')){
            $medicines=Medicine::orderBy('created_at','asc')->paginate(24);
        }
        
        // Active
        if($request->has('activeAll')){
            $medicines=Medicine::where('medicine_status','1')->orderBy('name','asc')->paginate(24);
        }
        
        if($request->has('activeTablets')){
        $medicines=Medicine::where('medicine_status','1')->where('type','Tablets')->orderBy('name','desc')->paginate(24);    
        }
        if($request->has('activeDrops')){
            $medicines=Medicine::where('medicine_status','1')->where('type','Drops')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeBottles')){
        $medicines=Medicine::where('medicine_status','1')->where('type','Bottles')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeInhalers')){
        $medicines=Medicine::where('medicine_status','1')->where('type','Inhalers')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeInjections')){
        $medicines=Medicine::where('medicine_status','1')->where('type','Injections')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeCapsules')){
        $medicines=Medicine::where('medicine_status','1')->where('type','Capsules')->orderBy('name','desc')->paginate(24);    
        }
        


        // Inactive
        if($request->has('inactiveAll')){
            $medicines=Medicine::where('medicine_status','0')->orderBy('name','asc')->paginate(24);
        }
        
        if($request->has('inactiveTablets')){
        $medicines=Medicine::where('medicine_status','0')->where('type','Tablets')->orderBy('name','desc')->paginate(24);    
        }
        if($request->has('inactiveDrops')){
            $medicines=Medicine::where('medicine_status','0')->where('type','Drops')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveBottles')){
        $medicines=Medicine::where('medicine_status','0')->where('type','Bottles')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveInhalers')){
        $medicines=Medicine::where('medicine_status','0')->where('type','Inhalers')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveInjections')){
        $medicines=Medicine::where('medicine_status','0')->where('type','Injections')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveCapsules')){
        $medicines=Medicine::where('medicine_status','0')->where('type','Capsules')->orderBy('name','desc')->paginate(24);    
        return view('Panels.MedicineList.medIndex',compact("medicines"));
        
        }
        
        
        
            return view('Panels.MedicineList.medIndex',compact("medicines","pharmacyMedicine"))->with('success','no data');
     
        
 
    }
    
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medicine = Medicine::latest()->first();
        return view('Panels.MedicineList.medCreate',compact('medicine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'productCode' => 'required|string|max:20|unique:medicine',
            'name' => 'required|string|max:20|unique:medicine',
            
        ],
        );

        $medicine=Medicine::create($request->except('medicinePic','medicinePhoto'));
         if ($request->hasFile('medicinePic')){
            $this->validate($request, [
                'medicinePic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->medicinePic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('medicinePic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $medicine->medicinePic = $filename;
        //     $resizedImage->save(public_path().'/images/medicinePhotos/' .  $filename);
        //     $medicine->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('medicinePhoto') != NULL){
            $screen = $request->input('medicinePhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $medicinePhoto = Image::make($unencoded_data);
            $medicinePhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $medicine->medicinePhoto = $name;
            $medicine->save();
        }               

        return redirect()->route('medicine.show',$medicine->id)->with('success','Successfully Added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pharmacyMedicine = PharmacyMedicine::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Panels.MedicineList.medShow',compact("medicine","pharmacyMedicine"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $medicine = Medicine::find($id);
        return view('Panels.MedicineList.medEdit',compact("medicine"));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $request->validate([
                
                'productCode' => 'required|unique:medicine,productCode,'.$id,
                'name' => 'required|unique:medicine,name,'.$id,
            ],
            );
    
        $medicine = Medicine::find($id);
        $medicine->update($request->except('medicinePic','medicinePhoto'));
        if ($request->hasFile('medicinePic')){
            $this->validate($request, [
                'medicinePic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->medicinePic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('medicinePic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $medicine->medicinePic = $filename;
        //     $resizedImage->save(public_path().'/images/medicinePhotos/' .  $filename);
        //     $medicine->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('medicinePhoto') != NULL){
            $screen = $request->input('medicinePhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $medicinePhoto = Image::make($unencoded_data);
            $medicinePhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $medicine->medicinePhoto = $name;
            $medicine->save();
        }               
        return redirect()->route('medicine.show',$medicine->id)->with('success','Medicine has been Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $Medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
        $medicine->delete();
        return redirect()->route('medicine.index');
    }
    
}
