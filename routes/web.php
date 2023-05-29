<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SkillController;

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

    Route::controller(SkillController::class)->group(function (){
        Route::get('skill/view-skill','viewSkill')->name('skill.view');
        Route::get('skill/add-skill','addSkill')->name('skill.add');
        Route::post('skill/store-skill','storeSkill')->name('skill.store');
    });

});
