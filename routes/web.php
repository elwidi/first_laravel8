<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CustomAuthController;

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
    return view('welcome');
});

Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']);
Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/demo', function () {
    return view('demo');
});

Route::get('my-home', [App\Http\Controllers\HomeController::class, 'myHome'])->name('home');
Route::get('add-book', [App\Http\Controllers\HomeController::class, 'addBook'])->name('addBook');
Route::post('save-book', [App\Http\Controllers\HomeController::class, 'saveBook'])->name('save-book');
Route::get('/update-book/{id}', [App\Http\Controllers\HomeController::class, 'updateBook'])->name('update-book');
Route::post('/modify-book/{id}', [App\Http\Controllers\HomeController::class, 'modifyBook'])->name('modify-book');

#Owner Module Routes
Route::get('/new-owner', [App\Http\Controllers\OwnerController::class, 'addOwner'])->name('new-owner');
Route::post('/store-owner', [App\Http\Controllers\OwnerController::class, 'storeOwner'])->name('store-owner');
Route::post('/owner/json', [App\Http\Controllers\OwnerController::class, 'json']);
Route::get('/owner', [App\Http\Controllers\OwnerController::class, 'ownerList'])->name('owner-list');
Route::post('/owner/save-owner', [App\Http\Controllers\OwnerController::class, 'saveOwnerAjax'])->name('save-list');
Route::get('/owner/detail/{id}', [App\Http\Controllers\OwnerController::class, 'ownerDetailAjax']);
Route::get('/owner/delete/{id}', [App\Http\Controllers\OwnerController::class, 'ownerDelete']);
Route::get('/owner/view/{id}', [App\Http\Controllers\OwnerController::class, 'ownerDetail'])->name('owner-view');

#Clinic Module Routes
Route::get('/clinic', [App\Http\Controllers\ClinicController::class, 'showClinic'])->name('clinic-list');
Route::post('/clinic/datatable', [App\Http\Controllers\ClinicController::class, 'json']);
Route::post('/clinic/store', [App\Http\Controllers\ClinicController::class, 'storeClinicAjax']);
Route::get('/clinic/delete/{id}', [App\Http\Controllers\ClinicController::class, 'clicDeleteAjax']);

#Pet Module Routes
Route::get('/pet', [App\Http\Controllers\PetController::class, 'showPet'])->name('pet');
Route::get('/pet/detail_ajax/{id}', [App\Http\Controllers\PetController::class, 'detailbyAjax']);
Route::post('/pet/datatable', [App\Http\Controllers\PetController::class, 'dtJson']);;

#pet visit module routes
Route::get('/visit', [App\Http\Controllers\PetVisitController::class, 'visitList']);
Route::post('/visit/dt', [App\Http\Controllers\PetVisitController::class, 'dtJson']);
Route::post('/visit/new', [App\Http\Controllers\PetVisitController::class, 'saveNewVisit'])->name('new_visit');
Route::get('/visit/ceki', [App\Http\Controllers\PetVisitController::class, 'cekiData']);



// Route::get('test-tabel', [App\Http\Controllers\HomeController::class, 'testLabel']);

