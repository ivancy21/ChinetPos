<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\Pharmacy;
use App\PharmacyMedicine;
use App\MedicineSideEffect;
use App\MedicineSupplier;
use App\SideEffect;
use App\Formulation;
use App\Diagnosis;
use App\MedicineUse;

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
        

        Session::put('sideTab', 'medication');
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $pharmacyMedicine = PharmacyMedicine::where('pharmacyId', Session::get('pharmacy')->id)->latest()->get();
        $medicines = Medicine::latest()->paginate(24);
        
        return view('Inventory.Medication.medicationIndex',compact("medicines", 'pharmacyMedicine','pharmacy'))->with('success','no data');
     
        
 
    }
    
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Medicine $medicine)
    {
        //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $diagnosiss = Diagnosis::latest()->get();
        $formulations = Formulation::latest()->get();
        $sideEffects = SideEffect::latest()->get();
        return view('Inventory.Medication.medicationCreate',compact("sideEffects","formulations","diagnosiss","pharmacy"));
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $request->validate([
            
            'productCode' => 'required|string|max:20|unique:Medicines',
            
        ],
        );
        $medicine=Medicine::create($request->except('medicinePic','medicinePhoto','sideEffectsId','medicineId','diagnosisId','pharmacyId'));
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
           MedicineSideEffect::create([
               'medicineId' => $medicine->id,
               'sideEffectsId' => $sideEffectsId
           ]
           );
       }
       
        if ($request->input('diagnosisId')!=null){
            $diagnosisId = $request->input('diagnosisId');
            MedicineUse::create([
            'medicineId' => $medicine->id,
            'diagnosisId' => $diagnosisId
            ]
            );
        }

        if ($request->input('pharmacyId')!=null){
            $pharmacyId = $request->input('pharmacyId');
            PharmacyMedicine::create([
            'medicineId' => $medicine->id,
            'pharmacyId' => $pharmacyId
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
        Session::put('medicationType','medicine');
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $medicineUse = MedicineUse::where('medicineId','=',$id)->latest()->get();
        $medicineSuppliers = MedicineSupplier::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Inventory.Medication.medicationShow',compact("medicine","medicineSuppliers","medicineUse","pharmacy"));
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
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $diagnosiss = Diagnosis::latest()->get(); 
        $medicineSideEffects = MedicineSideEffect::latest()->get();
        $sideEffects = SideEffect::latest()->get();
        $formulations = Formulation::latest()->get();
        $medicine = Medicine::find($id);
        return view('Inventory.Medication.medicationEdit',compact("medicine","sideEffects","formulations","medicineSideEffects","diagnosiss","pharmacy"));
    
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
                
                'productCode' => 'required|unique:Medicines,productCode,'.$id,
            ],
            );
    
        $medicine = Medicine::find($id);
        $medicineSideEffects = MedicineSideEffect::latest()->get();
        $medicine->update($request->except('medicinePic','medicinePhoto','sideEffectsId','medicineId','diagnosisId'));
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
                        MedicineSideEffect::where('medicineId','=',$id)->delete();
                        foreach($request->input('sideEffectsId') as $sideEffectsId) {
                            MedicineSideEffect::where('medicineId','=',$id)->create([
                            'medicineId' => $medicine->id,
                            'sideEffectsId' => $sideEffectsId
                        ]
                        );
                    }
                        
                        
                }
                
         }

         if ($request->input('diagnosisId')!=null){
            $diagnosisId = $request->input('diagnosisId');
            MedicineUse::where('medicineId','=',$id)->delete();
            MedicineUse::create([
            'medicineId' => $medicine->id,
            'diagnosisId' => $diagnosisId
            ]
            );
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
