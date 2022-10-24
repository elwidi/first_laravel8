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

Route::get('my-home', [App\Http\Controllers\HomeController::class, 'myHome']);
Route::get('my-home', [App\Http\Controllers\HomeController::class, 'myHome']);
Route::get('show-clinic', [App\Http\Controllers\ClinicController::class, 'showClinic'])->name('list-clinic');
// Route::get('test-tabel', [App\Http\Controllers\HomeController::class, 'testLabel']);

