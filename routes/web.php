<?php

use App\Http\Controllers\KoiController;
use App\Http\Controllers\KoiDFilterController;
use App\Http\Controllers\KoiFilterController;
use App\Http\Controllers\KoiFoodController;
use App\Http\Controllers\KoiMedController;
use Illuminate\Support\Facades\Route;

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
    return view('koi.home');
});

Route::get('/contacts', function () {
    return view('koi.contacts');
});

Auth::routes([
    'register'=> false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Products Index
Route::get('/products/koi', [KoiController::class, 'index']);

Route::get('/products/koifoods', [KoiFoodController::class, 'index']);

Route::get('/products/koifilters', [KoiFilterController::class, 'index']);

Route::get('/products/koimedicines', [KoiMedController::class, 'index']);

Route::get('/products/koidfilters', [KoiDFilterController::class, 'index']);

// AdminLTE

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware('auth');

// Indexes
Route::get('/admin/tables/koi', [KoiController::class,'indexadmin'])->middleware('auth');

Route::get('/admin/tables/koifood', [KoiFoodController::class, 'indexadmin'])->middleware('auth');

Route::get('/admin/tables/koifilter', [KoiFilterController::class, 'indexadmin'])->middleware('auth');

Route::get('/admin/tables/koimed', [KoiMedController::class, 'indexadmin'])->middleware('auth');

Route::get('/admin/tables/koidfilter', [KoiDFilterController::class, 'indexadmin'])->middleware('auth');

// IndexesEnd

// Create

Route::get('/admin/create/koi', function () {
    return view('admin.create.koicreate');
})->middleware('auth');

Route::post('/admin/create/newkoi', [KoiController::class, 'create'])->middleware('auth');

Route::get('/admin/create/koifood', function () {
    return view('admin.create.koifoodcreate');
})->middleware('auth');

Route::post('/admin/create/newkoifood', [KoiFoodController::class, 'create'])->middleware('auth');

Route::get('/admin/create/koifilter', function () {
    return view('admin.create.koifiltercreate');
})->middleware('auth');

Route::post('/admin/create/newkoifilter', [KoiFilterController::class, 'create'])->middleware('auth');

Route::get('/admin/create/koimed', function () {
    return view('admin.create.koimedcreate');
})->middleware('auth');

Route::post('/admin/create/newkoimed', [KoiMedController::class, 'create'])->middleware('auth');

Route::get('/admin/create/koidfilter', function () {
    return view('admin.create.koidfiltercreate');
})->middleware('auth');

Route::post('/admin/create/newkoidfilter', [KoiDFilterController::class, 'create'])->middleware('auth');


// CreateEnd


// Details

Route::get('/admin/details/koi/{id}', [KoiController::class, 'showadmin'])->middleware('auth');

Route::get('/admin/details/koifood/{id}', [KoiFoodController::class, 'showadmin'])->middleware('auth');

Route::get('/admin/details/koifilter/{id}', [KoiFilterController::class, 'showadmin'])->middleware('auth');

Route::get('/admin/details/koimed/{id}', [KoiMedController::class, 'showadmin'])->middleware('auth');

Route::get('/admin/details/koidfilter/{id}', [KoiDFilterController::class, 'showadmin'])->middleware('auth');

// DetailsEnd

// PostDetails

Route::post('/admin/details/koi/{id}', [KoiController::class, 'postadmin'])->middleware('auth');

Route::post('/admin/details/koifood/{id}', [KoiFoodController::class, 'postadmin'])->middleware('auth');

Route::post('/admin/details/koifilter/{id}', [KoiFilterController::class, 'postadmin'])->middleware('auth');

Route::post('/admin/details/koimed/{id}', [KoiMedController::class, 'postadmin'])->middleware('auth');

Route::post('/admin/details/koidfilter/{id}', [KoiDFilterController::class, 'postadmin'])->middleware('auth');


// PostEnd

// Delete

Route::get('admin/delete/koi/{id}',[KoiController::class,'destroy'])->middleware('auth');

Route::get('admin/delete/koifood/{id}',[KoiFoodController::class,'destroy'])->middleware('auth');

Route::get('admin/delete/koifilter/{id}',[KoiFilterController::class,'destroy'])->middleware('auth');

Route::get('admin/delete/koimed/{id}',[KoiMedController::class,'destroy'])->middleware('auth');

Route::get('admin/delete/koidfilter/{id}',[KoiDFilterController::class,'destroy'])->middleware('auth'); 

// DeleteEnd
