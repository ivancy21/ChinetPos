<?php

namespace App\Http\Controllers;
use App\Pharmacy;
use App\Formulation;
use App\SideEffect;
use App\Supplier;
use App\Diagnosis;
use App\Medicine;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use App\PharmacyMedicine;
use Session;


class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pharmacys = Pharmacy::latest()->get();
        return view('Panels.Pharmacy.pharmacyIndex',compact("pharmacys"));
     
     
    }

    public function selectPharmacy(Request $request)
    {
        $pharmacy = Pharmacy::findOrFail($request->input('pharmacyId'));
        Session::put('pharmacy', $pharmacy);
        return redirect()->route('medicine.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pharmacy = Pharmacy::latest()->first();
        return view('Panels.Pharmacy.pharmacyCreate',compact('pharmacy'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @f
     */
    public function store(Request $request)
    {
        //
       $pharmacy = Pharmacy::create($request->except('pharmacyPic','pharmacyPhoto'));
        if ($request->hasFile('pharmacyPic')){
            $this->validate($request, [
                'pharmacyPic' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
        //     $filename = time().'.'.$request->pharmacyPic->getClientOriginalExtension();
        //     $resizedImage = Image::make($request->file('pharmacyPic')->getRealPath());
        //     $resizedImage->resize(100, 100);
        //     $pharmacy->pharmacyPic = $filename;
        //     $resizedImage->save(public_path().'/images/pharmacyPhotos/' .  $filename);
        //     $pharmacy->save(); 
        //     $alert = $filename;
        } 
       
        if ($request->input('pharmacyPhoto') != NULL){
            $screen = $request->input('pharmacyPhoto');
            $filterd_data = substr($screen, strpos($screen, ",")+1);
            //Decode the string
            $unencoded_data=base64_decode($filterd_data);
            $name = time().'.png';
            $pharmacyPhoto = Image::make($unencoded_data);
            $pharmacyPhoto->save(public_path().'/images/pharmacyPhotos/' .  $name);
            $pharmacy->pharmacyPhoto = $name;
            $pharmacy->save();
        
        }
        
       return redirect()->route('pharmacy.index');
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
        $pharmacys = PharmacyMedicine::where('pharmacyId','=',$id)->paginate(24);
        return view('Panels.MedicineList.medIndex',compact("pharmacys"))->with('success','no data');}

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
    public function update(Request $request,$id)
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
