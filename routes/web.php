<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('pos','PosController');
Route::resource('medicineSuppliers','MedicineSuppliersController');
Route::resource('medicine','MedicineController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');
Route::resource('pos','PosController');
Route::resource('home','HomeController');
Route::resource('settings','SettingsController');
Route::resource('formulation','FormulationController');
Route::resource('suppliers','SuppliersController');
Route::resource('sideEffects','SideEffectsController');
Route::resource('diagnosis','DiagnosisController');

Route::get('/formulation', function () {
    return view('LookupTable.LookupTableIndex.lookupIndex');
});


Route::get('/DiagnosisIndex', function () {
    return view('LookupTable.Diagnosis.diagnosisIndex');
});

Route::get('/SupplierIndex', function () {
    return view('LookupTable.Supplier.supplierIndex');
});


Route::get('/formulationCreate', function () {
    return view('LookupTable.Formulation.formulationCreate');
});

Route::get('/sideEffectCreate', function () {
    return view('LookupTable.SideEffect.sideEffectCreate');
});

Route::get('/diagnosisCreate', function () {
    return view('LookupTable.Diagnosis.diagnosisCreate');
});

Route::get('/supplierCreate', function () {
    return view('LookupTable.Supplier.supplierCreate');
});

Route::get('/pharmacy/list', function () {
    return view('Panels.Pharmacy.pharmacyList');
});

Route::get('/pharmacy/create', function () {
    return view('Panels.Pharmacy.pharmacyCreate');
});

Route::get('/pharmacy/edit', function () {
    return view('Panels.Pharmacy.pharmacyEdit');
});

Route::get('/pharmacy', function () {
    return view('Panels.Pharmacy.pharmacyIndex');
});
