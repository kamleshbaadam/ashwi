<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Auth;
use Artisan;

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', function () {
		return redirect('admin/adminlogin');
	});

	Route::controller(UserController::class)->group(function () {
		Route::get('adminlogin', 'LoginForm');
		Route::POST('login-store', 'login');
		Route::get('logout', 'logout');
	});

	Route::middleware(['isAdmin'])->group(function () {
		Route::controller(HomeController::class)->group(function () {
			Route::get('dashboard', 'dashboard');
		});

		Route::controller(StaffController::class)->group(function () {
			Route::get('staffList', 'staffList');
			Route::get('staffAdd', 'staffAdd');
			Route::get('staffAdd/{id}', 'staffAdd');
			Route::POST('addStaff', 'addStaff');
		});
		Route::controller(MedicineCategoryController::class)->group(function () {
			Route::get('medicine_list', 'medicineList');
			Route::get('medicine_category_list', 'medicineCategoryList');
			Route::get('add_medicine_category', 'addMedicineCategory');
			Route::post('store_medicine_category', 'storeMedicineCategory');
			Route::get('add_medicine_category/{id}', 'addMedicineCategory');
			Route::get('add_medicine', 'addMedicine');
			Route::post('store_medicine', 'storeMedicine');
			Route::get('add_medicine/{id}', 'addMedicine');
		});
		Route::controller(DiagnosticsController::class)->group(function () {
			Route::get('diagnostics_list', 'diagnosticsList');
			Route::get('add_diagnostics', 'addDiagnostics');
			Route::post('store_diagnostics', 'storeDiagnostics');
			Route::get('add_diagnostics/{id}', 'addDiagnostics');
		});
		Route::controller(DiagnosticsMedicineController::class)->group(function () {
			Route::get('diagnostics_medicine_list', 'diagnosticsMedicineList');
			Route::get('add_diagnostics_medicine', 'adddiagnosticsMedicine');
			Route::get('add_diagnostics_medicine/{id}', 'adddiagnosticsMedicine');
			Route::post('store_diagnostics_medicine', 'storeDiagnosticsMedicine');
		});
		Route::controller(AdminServiceController::class)->group(function () {
			Route::get('services/list', 'servicesList');
			Route::get('add-service', 'addService');
			Route::post('addService', 'storeService');
			Route::get('add-service/{id}', 'addService');
			Route::get('delete-service/{id}', 'deleteService');
		});
		Route::controller(ResourceManagmentController::class)->group(function () {
			Route::get('resources/list', 'resourcesList');
			Route::get('add-resource', 'addResource');
			Route::post('addResource', 'storeResource');
			Route::get('add-resource/{id}', 'addResource');
			Route::get('delete-resource/{id}', 'deleteResource');
		});
		Route::controller(InstrumentController::class)->group(function () {
			Route::get('instruments/list', 'instrumentsList');
			Route::get('add-instrument', 'addInstrument');
			Route::post('addInstrument', 'storeInstrument');
			Route::get('add-instrument/{id}', 'addInstrument');
			Route::get('delete-instrument/{id}', 'deleteInstrument');
		});
	});
});
