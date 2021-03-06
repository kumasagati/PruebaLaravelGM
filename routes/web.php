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

#region DashBoard
Route::get("/", "DashboardController@index")->name("inicio");
#endregion

#region Categories
Route::resource("categories", "CategoryController");
#endregion

#region Medicines
Route::resource("medicines", "MedicineController");
#endregion

#region Users
Auth::routes();
#endregion
