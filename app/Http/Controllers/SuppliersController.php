<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use App\MedicineSuppliers;
use App\Medicine;
use Session;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('CustomSettingTab', 'Supplier');
        //
        $suppliers= Suppliers::latest()->get();
        return view('LookupTable.Suppliers.suppliersIndex',compact("suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('LookupTable.Suppliers.suppliersCreate');
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
        $suppliers = suppliers::create($request->all());
        return redirect()->route("suppliers.index");
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
        $suppliers = Suppliers::latest()->get();
        $medicineSuppliers = MedicineSuppliers::where('medicineId','=',$id)->latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        return view('Panels.MedicineSuppliers.create',compact('medicine',"medicineSuppliers","suppliers"));
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
        $supplier = Suppliers::find($id);
        return view('LookupTable.Suppliers.suppliersEdit',compact("supplier"));
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
        $suppliers=Suppliers::find($id);
        MedicineSuppliers::where('medicineId','=',$id)->delete();
        $suppliers->create($request->all());
        return redirect()->route("suppliers.index");
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
        $suppliers = Suppliers::find($id);
        MedicineSuppliers::where('medicineId','=',$id)->delete();
        $suppliers->delete();
        return redirect()->route('suppliers.index');    }
}
