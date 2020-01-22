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

Route::get('pharmacySelect','PharmacyController@selectPharmacy')->name('selectPharmacy');
Route::resource('pos','PosController');
Route::resource('medicineSuppliers','MedicineSupplierController');
Route::resource('nonMedicationSuppliers','NonMedicationSupplierController');
Route::resource('medicine','MedicineController');
Route::resource('nonMedication','NonMedicationController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');
Route::resource('pos','PosController');
Route::resource('home','HomeController');
Route::resource('settings','SettingController');
Route::resource('formulation','FormulationController');
Route::resource('suppliers','SupplierController');
Route::resource('sideEffects','SideEffectController');
Route::resource('diagnosis','DiagnosisController');
Route::resource('pharmacy','PharmacyController');
Route::resource('pharMedCreate','PharmacyMedicineCreateController');
Route::resource('inventory','InventoryController');

Route::get('/', function () {
    return redirect()->route(('pharmacy.index'));
});




