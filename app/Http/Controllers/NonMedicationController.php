<?php

namespace App\Http\Controllers;

use App\NonMedication;
use Illuminate\Http\Request;
use App\Pharmacy;
use App\Supplier;
use App\PharmacyNonMedication;
use App\MedicineSupplier;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;



class NonMedicationController extends Controller
{
     
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request   )
    {

        Session::put('inventoryTab', 'nonMedicationList');
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $pharmacyNonMedication = PharmacyNonMedication::where('pharmacyId', Session::get('pharmacy')->id)->latest()->get();
        $nonMedication = $pharmacyNonMedication->where('pharmacyId', Session::get('pharmacy')->id);
        $nonMedications = NonMedication::latest()->paginate(24);
            return view('Inventory.NonMedication.nonMedicationIndex',compact("nonMedication","nonMedications",'pharmacyNonMedication','pharmacy'))->with('success','no data');
     
        
 
    }
    
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        return view('Inventory.NonMedication.nonMedicationCreate',compact("pharmacy"));
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
            
            'productCode' => 'required|string|max:20|unique:NonMedications',
            
        ],
        );
        $nonMedication=NonMedication::create($request->except('nonMedicationPic','nonMedicationPhoto','pharmacyId'));
        if ($request->hasFile('nonMedicationPic')){
            $this->validate($request, [
                'nonMedicationPic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->nonMedicationPic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('nonMedicationPic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $nonMedication->nonMedicationPic = $filename;
        //     $resizedImage->save(public_path().'/images/nonMedicationPhotos/' .  $filename);
        //     $nonMedication->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('nonMedicationPhoto') != NULL){
            $screen = $request->input('nonMedicationPhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $nonMedicationPhoto = Image::make($unencoded_data);
            $nonMedicationPhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $nonMedication->nonMedicationPhoto = $name;
            $nonMedication->save();
        
        }
        
        
       
        if ($request->input('pharmacyId')!=null){
            $pharmacyId = $request->input('pharmacyId');
            PharmacyNonMedication::create([
            'nonMedicationId' => $nonMedication->id,
            'pharmacyId' => $pharmacyId
            ]
            );
        }
        
                       

        return redirect()->route('nonMedication.show',$nonMedication->id)->with('success','Successfully Added');
    }
    /** 
     * Display the specified resource.
     *
     * @param  \App\nonMedication  $nonMedication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        Session::put('medicationType','nonMedication');
        
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $medicineSuppliers = MedicineSupplier::where('medicineId','=',$id)->latest()->get();
        $nonMedication = NonMedication::where('id','=',$id)->latest()->first();
        return view('Inventory.NonMedication.nonMedicationShow',compact("nonMedication","medicineSuppliers","pharmacy"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nonMedication  $nonMedication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $nonMedication = NonMedication::find($id);
        return view('Inventory.NonMedication.nonMedicationEdit',compact("nonMedication","pharmacy"));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nonMedication  $nonMedication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $request->validate([
                
                'productCode' => 'required|unique:NonMedications,productCode,'.$id,
            ],
            );
    
        $nonMedication = NonMedication::find($id);
        $nonMedication->update($request->except('nonMedicationPic','nonMedicationPhoto'));
        if ($request->hasFile('nonMedicationPic')){
            $this->validate($request, [
                'nonMedicationPic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->nonMedicationPic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('nonMedicationPic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $nonMedication->nonMedicationPic = $filename;
        //     $resizedImage->save(public_path().'/images/nonMedicationPhotos/' .  $filename);
        //     $nonMedication->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('nonMedicationPhoto') != NULL){
            $screen = $request->input('nonMedicationPhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $nonMedicationPhoto = Image::make($unencoded_data);
            $nonMedicationPhoto->save(public_path().'/images/medicinePhotos/' .  $name);
            $nonMedication->nonMedicationPhoto = $name;
            $nonMedication->save();
        }   
        
        
        return redirect()->route('nonMedication.show',$nonMedication->id)->with('success','nonMedication has been Updated');
       
    }



  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nonMedication  $nonMedication
     * @return \Illuminate\Http\Response
     */
    public function destroy(nonMedication $nonMedication)
    {
        //
        $nonMedication->delete();
        return redirect()->route('nonMedication.index');
    }
    
}
