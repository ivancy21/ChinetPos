<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\MedicineSupplier;
use App\Medicine;
use App\NonMedication;
use App\Pharmacy;
use Session;    

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('CustomSettingTab', 'Supplier');
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $suppliers= Supplier::latest()->get();
        return view('LookupTable.Suppliers.suppliersIndex',compact("suppliers",'pharmacy'));
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
        return view('LookupTable.Suppliers.suppliersCreate',compact('pharmacy'));
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
        $suppliers = supplier::create($request->all());
        return redirect()->route("suppliers.index");
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $suppliers = Supplier::latest()->get();
        $medicine = Medicine::where('id','=',$id)->latest()->first();
        $nonMedication = NonMedication::where('id','=',$id)->latest()->first();
        if(Session::get('medicationType') == 'medicine')
        {
            return view('Inventory.MedicationSupplier.add',compact('medicine',"suppliers","pharmacy"));
        }
        else if(Session::get('medicationType') == 'nonMedication')
        {
            return view('Inventory.NonMedicationSupplier.add',compact('nonMedication',"suppliers","pharmacy"));
        }
    
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
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $supplier = Supplier::find($id);
        return view('LookupTable.Suppliers.suppliersEdit',compact("supplier","pharmacy"));
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
        $suppliers=Supplier::find($id);
        $suppliers->update($request->all());
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
    }
}
