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
            Route::get('dashboard', 'dashboard')->name('telecaller.dashboard');
            //add data
            Route::get('view-appointment', 'viewAppointment')->name('telecaller.view-appointment');
            Route::get('view-outreach', 'viewOutReach')->name('telecaller.view-outreach');
            Route::post('store-appointment', 'storeAppointment')->name('telecaller.store-appointment');
            //delete data
            Route::delete('view-appointment/{id}', 'deleteAppointment')->name('appointment.delete');
            //edit data
            Route::get('edit-appointment/{id}', 'editAppointment')->name('telecaller.edit-appointment');
            //phone number data
            Route::post('phone-suggestions', 'getPhoneSuggestions');
            Route::post('check-time-availability',  'checkTimeAvailability');
        });       
    });
});