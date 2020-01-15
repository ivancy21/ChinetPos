<?php

namespace App\Http\Controllers;
use App\MedicineSuppliers;
use App\Medicine;
use App\Suppliers;
use Illuminate\Http\Request;
use App\PharmacyMedicine;
use Session;

class MedicineSuppliersController extends Controller
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
         Session::put('inventoryTab', 'stockHistory');
         $medicineSuppliers = MedicineSuppliers::latest()->get();
         $medicine = Medicine::latest()->get();
         return view('Panels.MedicineSuppliers.viewAllHistory',compact("medicine","medicineSuppliers")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suppliers = Suppliers::latest()->get();
        $medicine = Medicine::latest()->get();
        return view('Panels.MedicineSuppliers.create',compact("suppliers","medicine"));
       
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
        $medicineSuppliers = MedicineSuppliers::create($request->all());
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
        $medicineSuppliers = MedicineSuppliers::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Panels.MedicineSuppliers.viewHistory',compact("medicine","medicineSuppliers"));
        
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
