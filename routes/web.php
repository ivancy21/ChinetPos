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
Route::resource('pharmacy','PharmacyController');
Route::resource('pharMedCreate','PharmacyMedicineCreateController');



Route::get('/medication', function () {
    return view('Inventory.Medication.medicationIndex');
});


Route::get('/medicationCreate', function () {
    return view('Inventory.Medication.medicationCreate');
});

Route::get('/medicationShow', function () {
    return view('Inventory.Medication.medicationShow');
});


Route::get('/nonmedication', function () {
    return view('Inventory.NonMedication.nonMedicationIndex');
});

Route::get('/nonmedicationCreate', function () {
    return view('Inventory.NonMedication.nonMedicationCreate');
});
