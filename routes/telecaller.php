<?php

namespace App\Http\Controllers\TeleCaller;
use App\Http\Controllers\TeleCaller\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'telecaller'], function () {
    Route::middleware(['isStaff'])->group(function () {
        Route::controller(HomeController::class)->group(function () {
            // Dashboard
            Route::get('dashboard', 'dashboard')->name('telecaller.dashboard');
            
            // Appointment Management
            Route::get('view-appointment', 'viewAppointment')->name('telecaller.view-appointment');
            Route::get('view-outreach', 'viewOutReach')->name('telecaller.view-outreach');
            Route::post('store-appointment', 'storeAppointment')->name('telecaller.store-appointment');
            Route::delete('view-appointment/{id}', 'deleteAppointment')->name('appointment.delete');
            Route::get('edit-appointment/{id}', 'editAppointment')->name('telecaller.edit-appointment');
            
            // API Endpoints
            Route::post('phone-suggestions', 'getPhoneSuggestions')->name('telecaller.phone-suggestions');
            Route::post('check-time-availability', 'checkTimeAvailability')->name('telecaller.check-time-availability');
        });       
    });
});