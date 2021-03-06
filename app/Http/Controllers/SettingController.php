<?php

namespace App\Http\Controllers;
use App\Formulation;
use App\Supplier;
use App\SideEffect;
use App\Diagnosis;
use App\Pharmacy;
use Illuminate\Http\Request;
use Session;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('sideTab', 'customSetting');

        //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $sideEffects= SideEffect::latest()->get();
        $suppliers= Supplier::latest()->get();
        $diagnosis= Diagnosis::latest()->get();
        $formulations= Formulation::latest()->get();
        return view('LookupTable.SideEffects.sideEffectsIndex',compact("formulations","sideEffects","diagnosis","suppliers","pharmacy"));
     
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
