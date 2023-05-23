<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\ProfileController;



Route::controller(ProfileController::class)->group(function (){
    Route::get('/','profileView')->name('profile-view');
});

//Route::get('/', function () {
//    return view('frontend.master');
//});


