<?php

namespace App\Http\Controllers;
use App\NonMedicationSupplier;
use App\NonMedication;
use App\Supplier;
use App\Pharmacy;
use Illuminate\Http\Request;
use App\PharmacyNonMedication;
use Session;

class NonMedicationSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
         Session::put('sideTab', 'stockHistory');
         $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
         $nonMedicationSuppliers = NonMedicationSupplier::latest()->get();
         $nonMedication = Medicine::latest()->get();
         return view('Panels.MedicineSuppliers.viewAllHistory',compact("nonMedication","nonMedicationSuppliers",'pharmacy')); 
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
        $suppliers = Supplier::latest()->get();
        $nonMedication = Medicine::latest()->get();
        return view('Inventory.MedicationSupplier.create',compact("suppliers","nonMedication","pharmacy"));
       
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
    
        $nonMedication = NonMedication::latest()->first();
        $nonMedicationSuppliers = NonMedicationSupplier::create($request->all());
        return redirect()->route('nonMedicationSuppliers.show',$nonMedicationSuppliers->nonMedication->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $nonMedicationSuppliers = NonMedicationSupplier::where('nonMedicationId','=',$id)->latest()->get();
        $nonMedication = NonMedication::where('id','=',$id)->latest()->first();
        return view('Inventory.NonMedicationSupplier.viewHistory',compact("nonMedication","nonMedicationSuppliers",'pharmacy'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
