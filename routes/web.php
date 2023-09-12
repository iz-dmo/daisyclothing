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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/item',App\Http\Controllers\ItemController::class);
Route::get('/item/feature/{id}',[App\Http\Controllers\ItemController::class,'featureDetail'])->name('featuredetail');
Route::get('/item/popular/{id}',[App\Http\Controllers\ItemController::class,'popularDetail'])->name('newitemdetail');
Route::get('/item/hot/{id}',[App\Http\Controllers\ItemController::class,'hotDetail'])->name('hotdetail');
Route::get('/item/sale/{id}',[App\Http\Controllers\ItemController::class,'saleDetail'])->name('saledetail');
Route::get('/item/deal/{id}',[App\Http\Controllers\ItemController::class,'dealDetail'])->name('dealdetail');
Route::get('/item/topselling/{id}',[App\Http\Controllers\ItemController::class,'topDetail'])->name('topsellingdetail');
Route::get('/item/trend/{id}',[App\Http\Controllers\ItemController::class,'trendDetail'])->name('trenddetail');
Route::get('/shop',[App\Http\Controllers\ItemController::class,'shop'])->name('shop');
Route::get('/cart',[App\Http\Controllers\ItemController::class,'cart'])->name('cart');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'backend','as'=>'backend.'],function(){
    Route::get('/',[App\Http\Controllers\Admin\DashBoardController::class,'index'])->name('dashboard');
    Route::resource('features',App\Http\Controllers\Admin\FeatureController::class);
    Route::resource('newitems',App\Http\Controllers\Admin\NewItemController::class);
    Route::resource('newaddeditems',App\Http\Controllers\Admin\NewaddedItemController::class);
    Route::resource('saleitems',App\Http\Controllers\Admin\SaleController::class);

});
