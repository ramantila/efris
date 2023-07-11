<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('authenticate.login');
//});
//
//Auth::routes();

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/postLogin', [App\Http\Controllers\LoginController::class, 'postLogin'])->name('processLogin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'postLogin'])->name('processLogin');

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Route for Package
Route::group(['prefix' => 'packages-type'], function () {
    Route::get('view', [App\Http\Controllers\PackageTypeController::class, 'index']);
    Route::post('store',[App\Http\Controllers\PackageTypeController::class, 'store']);

});

//Route for Package
Route::group(['prefix' => 'efris/package'], function () {
    Route::get('view', [App\Http\Controllers\PackageController::class, 'index']);
    Route::get('create', [App\Http\Controllers\PackageController::class, 'create']);
    Route::post('store',[App\Http\Controllers\PackageController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\PackageController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\PackageController::class, 'update']);

});



//Route for Companies
    Route::group(['prefix' => 'companies'], function () {

    Route::get('view', [App\Http\Controllers\CompanyController::class, 'index']);
    Route::get('show', [App\Http\Controllers\CompanyController::class, 'index2']);
    Route::get('create', [App\Http\Controllers\CompanyController::class, 'create2']);
    Route::post('store',[App\Http\Controllers\CompanyController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\CompanyController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\CompanyController::class, 'update']);
    Route::post('data',[App\Http\Controllers\CompanyController::class, 'search']);
    Route::get('searchview',[App\Http\Controllers\CompanyController::class, 'search1']);


});


//Route for Companies Types
Route::group(['prefix' => 'company-types'], function () {
    Route::get('view', [App\Http\Controllers\Company_tpyesController::class, 'index']);
    Route::get('create', [App\Http\Controllers\Company_tpyesController::class, 'create']);
    Route::post('store',[App\Http\Controllers\Company_tpyesController::class, 'store']);
    Route::get('edit{id}',[App\Http\Controllers\Company_tpyesController::class, 'edit']);
    Route::post('update{id}',[App\Http\Controllers\Company_tpyesController::class, 'update']);
});


//Route for Branch
Route::group(['prefix' => 'efris/branches'], function () {
    Route::get('view', [App\Http\Controllers\BranchController::class, 'index']);
    Route::get('create', [App\Http\Controllers\BranchController::class, 'create']);
    Route::post('store',[App\Http\Controllers\BranchController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\BranchController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\BranchController::class, 'update']);
});


//Route for catalog
Route::group(['prefix' => 'efris/product-catalogue'], function () {

    Route::get('view', [App\Http\Controllers\Product_catalogueController::class, 'index']);
    Route::get('create', [App\Http\Controllers\Product_catalogueController::class, 'create']);
    Route::post('store',[App\Http\Controllers\Product_catalogueController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\Product_catalogueController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\Product_catalogueController::class, 'update']);

});


//Route for company products
Route::group(['prefix' => 'efris/companyproducts'], function () {
    Route::get('view', [App\Http\Controllers\CompamyproductController::class, 'index']);
    Route::get('create', [App\Http\Controllers\CompamyproductController::class, 'create']);
    Route::post('store',[App\Http\Controllers\CompamproductController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\CompamproductController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\CompamproductController::class, 'update']);

});

// users

Route::group(['prefix' => 'efris/users'], function () {
    Route::get('view', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('store',[App\Http\Controllers\UserController::class, 'store']);
    Route::get('edit/{id}',[App\Http\Controllers\UserController::class, 'edit']);
    Route::post('update/{id}',[App\Http\Controllers\UserController::class, 'update']);

});