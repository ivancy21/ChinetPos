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

Route::get('/', function () {
    return view('Panels.home');
});

Route::resource('pos','PosController');
Route::resource('inventory','InventoryController');
Route::resource('medicine','MedicineController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');
Route::resource('pos','PosController');

Route::get('/posIndex', function () {
    return view('Panels.Pos.posIndex');
});
