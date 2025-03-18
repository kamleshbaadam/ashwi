<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Support\Facades\Route;
use Auth;
use Artisan;

Route::group(['prefix' => 'reception'], function () {
    Route::middleware(['isStaff'])->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('reception.dashboard');
            Route::get('view-appointment', 'viewAppointment')->name('view-appointment');
            Route::get('view-outreach', 'viewOutReach')->name('view-outreach');
            Route::get('edit-appointment', 'editAppointment');
            Route::get('edit-appointment/{id}', 'editAppointment');
            Route::get('edit-opd/{id}', 'editOpd');
            //dashboard add patient
            // Route::get('add_appointment', 'viewAddAppointmentForm');
            Route::get('patientList', 'viewPatientList');
            // store record
            Route::post('add_appointment', 'addAppointment')->name('add_appointment');
        });

        Route::get('view_opd_appointment',[AppointmentController::class,'view_opd_appointment']);

        Route::get('create-bill/{id}', [OpdController::class,'createBill']);
        Route::post('store_bill', [OpdController::class,'storeBill']);
        Route::get('preview_bill/{id}', [OpdController::class,'previewBill']);
    });
});