<?php

namespace App\Http\Controllers;
use App\MedicineSupplier;
use App\NonMedicationSupplier;
use App\Medicine;
use App\Supplier;
use App\Pharmacy;       
use Illuminate\Http\Request;
use App\PharmacyMedicine;
use Session;

class MedicineSupplierController extends Controller
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
         $medicineSuppliers = MedicineSupplier::where('supplierId', Session::get('pharmacy')->id)->latest()->get();
         $nonMedicationSupplier = NonMedicationSupplier::where('supplierId', Session::get('pharmacy')->id)->latest()->get();
         return view('Inventory.MedicationSupplier.viewAllHistory',compact("nonMedicationSupplier","medicineSuppliers",'pharmacy')); 
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
        $medicine = Medicine::latest()->get();
        return view('Inventory.MedicationSupplier.create',compact("suppliers","medicine","pharmacy"));
       
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
    
        $medicine = medicine::latest()->first();
        $medicineSuppliers = MedicineSupplier::create($request->all());
        return redirect()->route('medicineSuppliers.show',$medicineSuppliers->medicine->id);
        
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
        $medicineSuppliers = MedicineSupplier::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Inventory.MedicationSupplier.viewHistory',compact("medicine","medicineSuppliers",'pharmacy'));
        
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
