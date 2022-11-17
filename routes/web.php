<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/login', function() {
//     return view('auth.login');
// });

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class], 'login')->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    // Route::resource('users', App\Http\Controllers\AdminUserController::class);
    Route::prefix("/users")->group(function() {
        Route::get('/', [App\Http\Controllers\AdminUserController::class, 'index'])->name('admin-user');
        Route::get('/create', [App\Http\Controllers\AdminUserController::class, 'create'])->name('create-admin-user');
        Route::post('/', [App\Http\Controllers\AdminUserController::class, 'store'])->name('store-admin-user');
        Route::get('/show/{id}', [App\Http\Controllers\AdminUserController::class, 'show'])->name('show-admin-user');
        Route::post('/{id}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('update-admin-user');
        Route::delete('/{id}', [App\Http\Controllers\AdminUserController::class, 'destroy']);
    });
});

Route::group(['prefix' => 'employee', 'middleware' => ['isEmployee', 'auth']], function() {
    Route::get('dashboard', 'EmployeeController@index');
});

Route::group(['prefix' => 'customer', 'middleware' => ['isCustomer', 'auth']], function() {
    Route::get('dashboard', 'CustomerController@index');
});
