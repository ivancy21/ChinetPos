<?php

namespace App\Http\Controllers;

use App\PharmacyMedicine;
use Illuminate\Http\Request;
use App\Medicine;

class PharmacyMedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pharmacyMedicine=PharmacyMedicine::latest()->get();
        $medicine=Medicine::latest()->get();
        return view('Panels.PharmacyMedicine.pharMedIndex',compact("medicine","pharmacyMedicine"));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Medicine $medicine)
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
        $pharmacyMedicine=PharmacyMedicine::create($request->all());
        return redirect()->route('inventory.index')->with('success','Pharmacy Medicine has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PharmacyMedicine  $PharmacyMedicine
     * @return \Illuminate\Http\Response
     */
    public function show($PharmacyMedicine)
    {
        
        //
        $pharmacyMedicine=PharmacyMedicine::where('medicineId','=',$PharmacyMedicine)->latest()->get();
        $medicine=Medicine::where('id','=',$PharmacyMedicine)->latest()->first();
        return view('Panels.PharmacyMedicine.pharMedCreate',compact("medicine","pharmacyMedicine"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PharmacyMedicine  $PharmacyMedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(PharmacyMedicine $PharmacyMedicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PharmacyMedicine  $PharmacyMedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PharmacyMedicine $PharmacyMedicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PharmacyMedicine  $PharmacyMedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(PharmacyMedicine $PharmacyMedicine)
    {
        //
    }
}
