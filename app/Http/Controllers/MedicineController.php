<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\PharmacyMedicine;
use App\MedicineSideEffects;
use App\MedicineSuppliers;
use App\SideEffects;
use App\Formulation;
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

        Session::put('inventoryTab', 'medicineList');

        //
        $pharmacyMedicine=PharmacyMedicine::latest()->get();
        $medicines=Medicine::paginate(24);
        if($request->has('search')){
            $query = $request->get('search');
            $medicines = Medicine::where("brandName", 'LIKE', '%'.$query.'%')->orWhere("genericName", 'LIKE', '%'.$query.'%')
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
            $medicines=Medicine::where('medicine_status','1')->orderBy('brandName','asc')->paginate(24);
        }
        
        if($request->has('activeTablets')){
        $formulations=Formulation::where('medicine_status','1')->where('formulation','1')->orderBy('name','desc')->paginate(24);    
        }
        if($request->has('activeDrops')){
            $formulations=Formulation::where('medicine_status','1')->where('formulation','2')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeBottles')){
        $formulations=Formulation::where('medicine_status','1')->where('formulation','3')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeInhalers')){
        $formulations=Formulation::where('medicine_status','1')->where('formulation','4')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeInjections')){
        $formulations=Formulation::where('medicine_status','1')->where('formulation','5')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('activeCapsules')){
        $formulations=Formulation::where('medicine_status','1')->where('formulation','6')->orderBy('name','desc')->paginate(24);    
        }
        


        // Inactive
        if($request->has('inactiveAll')){
            $medicines=Medicine::where('medicine_status','0')->orderBy('brandName','asc')->paginate(24);
        }
        
        if($request->has('inactiveTablets')){
        $medicines=Medicine::where('medicine_status','0')->where('formulation','1')->orderBy('name','desc')->paginate(24);    
        }
        if($request->has('inactiveDrops')){
            $formulations=Formulation::where('medicine_status','0')->where('formulation','2')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveBottles')){
        $formualtions=Formulation::where('medicine_status','0')->where('formulation','3')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveInhalers')){
        $formulations=Formulation::where('medicine_status','0')->where('formulation','4')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveInjections')){
        $formulations=Formulation::where('medicine_status','0')->where('formulation','5')->orderBy('name','desc')->paginate(24);    
        }
        
        if($request->has('inactiveCapsules')){
        $formulations=Formulation::where('medicine_status','0')->where('formulation','6')->orderBy('name','desc')->paginate(24);    
        return view('Panels.MedicineList.medIndex',compact("medicines"));
        
        }
        else{
            return view('Panels.MedicineList.medIndex',compact("medicines"))->with('success','no data');
     
        }
        
        
            
        
 
    }
    
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Medicine $medicine)
    {
        //
        $formulation = Formulation::latest()->get();
        $sideEffect = SideEffects::latest()->get();
        return view('Panels.MedicineList.medCreate',compact('medicine','sideEffect','formulation'));
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
            'brandName' => 'required|string|max:20|unique:medicine',
            
        ],
        );
        $medicine=Medicine::create($request->except('medicinePic','medicinePhoto','sideEffectsId','medicineId'));
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
        
        
       foreach($request->input('sideEffectsId') as $sideEffectsId) {
           MedicineSideEffects::create([
               'medicineId' => $medicine->id,
               'sideEffectsId' => $sideEffectsId
           ]
           );
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
        // $sideEffects = SideEffects::where('id','=',$id)->latest()->get();
       
        $medicineSuppliers = MedicineSuppliers::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Panels.MedicineList.medShow',compact("medicine","medicineSuppliers"));
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
        $medicineSideEffects = MedicineSideEffects::latest()->get();
        $sideEffects = SideEffects::latest()->get();
        $formulations = Formulation::latest()->get();
        $medicine = Medicine::find($id);
        return view('Panels.MedicineList.medEdit',compact("medicine","sideEffects","formulations","medicineSideEffects"));
    
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
                'brandName' => 'required|unique:medicine,brandName,'.$id,
            ],
            );
    
        $medicine = Medicine::find($id);
        $medicineSideEffects = MedicineSideEffects::latest()->get();
        $medicine->update($request->except('medicinePic','medicinePhoto','sideEffectsId','medicineId'));
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
        
        if($request->input('sideEffectsId')!=null)
        {
            $sideEffectsId = $request->input('sideEffectsId');
            $sideEffectsId = implode(',',$sideEffectsId);
        

                    foreach($request->input('sideEffectsId') as $sideEffectsId) {
                        MedicineSideEffects::where('medicineId','=',$id)->delete();
                        foreach($request->input('sideEffectsId') as $sideEffectsId) {
                            MedicineSideEffects::where('medicineId','=',$id)->create([
                            'medicineId' => $medicine->id,
                            'sideEffectsId' => $sideEffectsId
                        ]
                        );
                    }
                        
                        
                }
                
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
