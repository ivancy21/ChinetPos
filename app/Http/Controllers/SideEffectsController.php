<?php

namespace App\Http\Controllers;
use App\SideEffects;
use App\MedicineSideEffects;
use App\Pharmacy;
use Illuminate\Http\Request;
use Session;

class SideEffectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Session::put('CustomSettingTab', 'SideEffects');

        //
        $pharmacy = Pharmacy::where('id', Session::get('pharmacy')->id)->latest()->first();
        $sideEffects= SideEffects::latest()->get();
        return view('LookupTable.SideEffects.sideEffectsIndex',compact("sideEffects",'pharmacy'));
     
     
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
        return view('LookupTable.SideEffects.sideEffectsCreate',compact('pharmacy'));
    
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
        $sideEffects = SideEffects::create($request->all());
        return redirect()->route("sideEffects.index");
    
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
        $sideEffect = SideEffects::find($id);
        return view('LookupTable.SideEffects.sideEffectsEdit',compact("sideEffect","pharmacy"));
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
        $sideEffects=SideEffects::find($id);
        $sideEffects->update($request->all());
        return redirect()->route("sideEffects.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SideEffects $sideEffects,$id)
    {
        //
        $sideEffects = SideEffects::find($id);
        $medicineSideEffects = MedicineSideEffects::find($id);
        $sideEffects->delete();
        $medicineSideEffects->delete();
        return redirect()->route('sideEffects.index');
    }
}
