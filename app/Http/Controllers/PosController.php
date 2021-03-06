<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\NonMedication;
use App\MedicineSupplier;
use App\NonMedicationSupplier;
use App\Pharmacy;
use App\PharmacyMedicine;
use Session;
class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
         $medicineSuppliers = MedicineSupplier::where('supplierId', Session::get('pharmacy')->id)->latest()->get();
         $nonMedicationSuppliers = NonMedicationSupplier::where('supplierId', Session::get('pharmacy')->id)->latest()->get();
         return view('Panels.Pos.posIndex',compact("medicineSuppliers","nonMedicationSuppliers","pharmacy"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $pharmcyMedicine = DB::table('PharmacyMedicine')
        // ->whereColumn([
        //     ['quantity', '=', 'quantity'],
        //     ['updated_at', '>', 'created_at']
        // ])->get();
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
