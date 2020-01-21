<?php

namespace App\Http\Controllers;
use App\Diagnosis;
use Illuminate\Http\Request;
use App\MedicineUse;
use App\Pharmacy;
use Session;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('CustomSettingTab', 'Diagnosis');
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $diagnosiss= Diagnosis::latest()->get();
        return view('LookupTable.Diagnosis.diagnosisIndex',compact("diagnosiss",'pharmacy'));
     
     
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
        return view('LookupTable.Diagnosis.diagnosisCreate',compact('pharmacy'));
    
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
        $diagnosis = Diagnosis::create($request->all());
        return redirect()->route("diagnosis.index");
    
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
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $diagnosis = Diagnosis::find($id);
        return view('LookupTable.Diagnosis.diagnosisEdit',compact("diagnosis","pharmacy"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $diagnosis=Diagnosis::find($id);
        $diagnosis->update($request->all());
        return redirect()->route("diagnosis.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosis $diagnosis,$id)
    {
        //
        $diagnosis = Diagnosis::find($id);
        MedicineUse::where('diagnosisId','=',$id)->delete();
        $diagnosis->delete();
        return redirect()->route('diagnosis.index');
    }
}
