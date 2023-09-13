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
    Route::post('store', [App\Http\Controllers\PackageTypeController::class, 'store']);
});


//Route for Companies
Route::group(['prefix' => 'companies'], function () {

    Route::get('view', [App\Http\Controllers\CompanyController::class, 'index']);
    Route::get('show', [App\Http\Controllers\CompanyController::class, 'index2']);
    Route::get('create', [App\Http\Controllers\CompanyController::class, 'create2']);
    Route::post('store', [App\Http\Controllers\CompanyController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\CompanyController::class, 'update']);
    Route::post('data', [App\Http\Controllers\CompanyController::class, 'search']);
    Route::get('searchview', [App\Http\Controllers\CompanyController::class, 'search1']);
    Route::get('details/{id}', [App\Http\Controllers\CompanyController::class, 'details']);

    //Route for Currency
    Route::get('get-currency', [App\Http\Controllers\CompanyController::class, 'getCurrency']);
    Route::post('{id}/storecurrency', [App\Http\Controllers\CompanyController::class, 'storeCurrrency']);
});


//Route for Companies Types
Route::group(['prefix' => 'company-types'], function () {
    Route::get('view', [App\Http\Controllers\Company_tpyesController::class, 'index']);
    Route::get('create', [App\Http\Controllers\Company_tpyesController::class, 'create']);
    Route::post('store', [App\Http\Controllers\Company_tpyesController::class, 'store']);
    Route::get('edit{id}', [App\Http\Controllers\Company_tpyesController::class, 'edit']);
    Route::post('update{id}', [App\Http\Controllers\Company_tpyesController::class, 'update']);
});


//Route for Currencies
Route::group(['prefix' => 'efris/currencies'], function () {
    Route::get('view', [App\Http\Controllers\CurrenciesController::class, 'index']);
    Route::post('store', [App\Http\Controllers\CurrenciesController::class, 'store']);
    Route::post('update/{currency_id}', [App\Http\Controllers\CurrenciesController::class, 'update']);
    Route::post('delete/{currency_id}', [App\Http\Controllers\CurrenciesController::class, 'delete']);
});

//Route for measurement-units
Route::group(['prefix' => 'efris/measurement-units'], function () {
    Route::get('view', [App\Http\Controllers\MeasurementUnitsController::class, 'index']);
    Route::post('store', [App\Http\Controllers\MeasurementUnitsController::class, 'store']);
    Route::post('update/{unit_id}', [App\Http\Controllers\MeasurementUnitsController::class, 'update']);
    Route::post('delete/{unit_id}', [App\Http\Controllers\MeasurementUnitsController::class, 'delete']);
});

//Route for payment-modes
Route::group(['prefix' => 'efris/payment-modes'], function () {
    Route::get('view', [App\Http\Controllers\PaymentModesController::class, 'index']);
    Route::post('store', [App\Http\Controllers\PaymentModesController::class, 'store']);
    Route::post('update/{mode_id}', [App\Http\Controllers\PaymentModesController::class, 'update']);
    Route::post('delete/{mode_id}', [App\Http\Controllers\PaymentModesController::class, 'delete']);
});

//Route for tax-codes
Route::group(['prefix' => 'efris/tax-codes'], function () {
    Route::get('view', [App\Http\Controllers\TaxCodeController::class, 'index']);
    Route::post('store', [App\Http\Controllers\TaxCodeController::class, 'store']);
    Route::post('update/{tax_id}', [App\Http\Controllers\TaxCodeController::class, 'update']);
    Route::post('delete/{tax_id}', [App\Http\Controllers\TaxCodeController::class, 'delete']);
});

//Route for products
Route::group(['prefix' => 'efris/product'], function () {
    Route::get('category-segment', [App\Http\Controllers\ProductCodesController::class, 'categorySegment']);
    // Route::get('get-category-segment', [App\Http\Controllers\ProductCodesController::class, 'getcategorySegment']);
    Route::get('segment-family', [App\Http\Controllers\ProductCodesController::class, 'segmentFamily']);
    Route::get('segment-class', [App\Http\Controllers\ProductCodesController::class, 'segmentClass']);
    Route::get('segment-codes', [App\Http\Controllers\ProductCodesController::class, 'segmentCodes']);
});

//Route for Package
Route::group(['prefix' => 'efris/package'], function () {
    Route::get('view', [App\Http\Controllers\PackageController::class, 'index']);
    Route::get('create', [App\Http\Controllers\PackageController::class, 'create']);
    Route::post('store', [App\Http\Controllers\PackageController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\PackageController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\PackageController::class, 'update']);
});


//Route for Branch
Route::group(['prefix' => 'efris/branches'], function () {
    Route::get('view', [App\Http\Controllers\BranchController::class, 'index']);
    Route::get('create', [App\Http\Controllers\BranchController::class, 'create']);
    Route::post('store', [App\Http\Controllers\BranchController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\BranchController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\BranchController::class, 'update']);
});


//Route for catalog
Route::group(['prefix' => 'efris/product-catalogue'], function () {

    Route::get('view', [App\Http\Controllers\Product_catalogueController::class, 'index']);
    Route::get('create', [App\Http\Controllers\Product_catalogueController::class, 'create']);
    Route::post('store', [App\Http\Controllers\Product_catalogueController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\Product_catalogueController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\Product_catalogueController::class, 'update']);
});


//Route for company products
Route::group(['prefix' => 'efris/companyproducts'], function () {
    Route::get('view', [App\Http\Controllers\CompamyproductController::class, 'index']);
    Route::get('create', [App\Http\Controllers\CompamyproductController::class, 'create']);
    Route::post('store', [App\Http\Controllers\CompamproductController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\CompamproductController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\CompamproductController::class, 'update']);
});

// users

Route::group(['prefix' => 'efris/users'], function () {
    Route::get('view', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('store', [App\Http\Controllers\UserController::class, 'store']);
    Route::get('userdetails/{id}', [App\Http\Controllers\UserController::class, 'userdetail']);

    Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\UserController::class, 'update']);
    Route::post('change-password/update/{id}', [App\Http\Controllers\UserController::class, 'changePassword']);
});


Route::group(['prefix' => 'efris/sales'], function () {
    Route::get('view', [App\Http\Controllers\SalesController::class, 'sale']);
    Route::get('create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('store', [App\Http\Controllers\UserController::class, 'store']);
    Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('update/{id}', [App\Http\Controllers\UserController::class, 'update']);
});
