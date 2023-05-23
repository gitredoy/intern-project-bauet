<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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



Route::prefix('admin')->name('admin.')->group(function (){
    Route::controller(AdminController::class)->group(function (){
        Route::get('/dashboard','dashboardView')->name('dashboard.view');
        Route::get('/profile','profileView')->name('profile.view');
    });
});
