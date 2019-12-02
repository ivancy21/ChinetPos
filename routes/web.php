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

Route::get('/medlist', function () {
    return view('Panels.MedicineList.medIndex');
});

Route::get('/medCreate', function () {
    return view('Panels.MedicineList.medCreate');
});

Route::get('/medShow', function () {
    return view('Panels.MedicineList.medShow');
});

Route::get('/medEdit', function () {
    return view('Panels.MedicineList.medEdit');
});

Route::get('/invenIndex', function () {
    return view('Panels.MedicineInventory.inventoryIndex');
});

Route::get('/invenAdd', function () {
    return view('Panels.MedicineInventory.inventoryAdd');
});

Route::get('/viewHistory', function () {
    return view('Panels.MedicineInventory.viewHistory');
});

