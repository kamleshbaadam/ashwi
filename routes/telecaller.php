<?php

namespace App\Http\Controllers\TeleCaller;
use App\Http\Controllers\TeleCaller\HomeController;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Auth;
use Artisan;

Route::group(['prefix' => 'telecaller'], function () {
    Route::middleware(['isStaff'])->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('dashboard', 'dashboard');
            //add data
            Route::get('view-appointment', 'viewAppointment');
            Route::get('view-outreach', 'viewOutReach');
            Route::post('store-appointment', 'storeAppointment');
            //delete data
            Route::delete('view-appointment/{id}', 'deleteAppointment');
            //edit data
            Route::get('edit-appointment/{id}', 'editAppointment');
            //phone number data
            Route::post('phone-suggestions', 'getPhoneSuggestions');
            Route::post('check-time-availability',  'checkTimeAvailability');
            Route::post('/get-booked-times', 'getBookedTimes');
        });       
    });
});