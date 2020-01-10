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
Route::resource('inventory','InventoryController');
Route::resource('medicine','MedicineController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');
Route::resource('pos','PosController');
Route::resource('home','HomeController');


Route::get('/formulation', function () {
    return view('LookupTable.LookupTableIndex.lookupIndex');
});

Route::get('/formulationCreate', function () {
    return view('LookupTable.Formulation.formulationCreate');
});

Route::get('/sideEffectCreate', function () {
    return view('LookupTable.SideEffect.sideEffectCreate');
});

Route::get('/categoryCreate', function () {
    return view('LookupTable.Category.categoryCreate');
});

Route::get('/supplierCreate', function () {
    return view('LookupTable.Supplier.supplierCreate');
});