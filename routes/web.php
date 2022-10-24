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


Route::get('/new-owner', [App\Http\Controllers\OwnerController::class, 'addOwner'])->name('new-owner');
Route::post('/store-owner', [App\Http\Controllers\OwnerController::class, 'storeOwner'])->name('store-owner');
Route::post('/owner/json', [App\Http\Controllers\OwnerController::class, 'json']);
Route::get('/owner-list', [App\Http\Controllers\OwnerController::class, 'ownerList'])->name('owner-list');
Route::post('/owner/save-owner', [App\Http\Controllers\OwnerController::class, 'saveOwnerAjax'])->name('save-list');
// Route::get('test-tabel', [App\Http\Controllers\HomeController::class, 'testLabel']);

