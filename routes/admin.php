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
		Route::get('adminlogin', 'LoginForm')->name('admin.adminlogin');
		Route::POST('login-store', 'login')->name('admin.login-store');
		Route::get('logout', 'logout')->name('admin.logout');
	});

	Route::middleware(['isAdmin'])->group(function () {
		Route::controller(HomeController::class)->group(function () {
			Route::get('dashboard', 'dashboard')->name('admin.dashboard');
		});

		Route::controller(StaffController::class)->group(function () {
			Route::get('staffList', 'staffList')->name('admin.staffList');
			Route::get('staffAdd', 'staffAdd');
			Route::get('staffAdd/{id}', 'staffAdd');
			Route::POST('addStaff', 'addStaff')->name('admin.addStaff');
		});
		Route::controller(MedicineCategoryController::class)->group(function () {
			Route::get('medicine_list', 'medicineList');
			Route::get('medicine_category_list', 'medicineCategoryList');
			Route::get('add_medicine_category', 'addMedicineCategory');
			Route::post('store_medicine_category', 'storeMedicineCategory');
			Route::get('add_medicine_category/{id}', 'addMedicineCategory');
			Route::get('add_medicine','addMedicine');
			Route::post('store_medicine','storeMedicine');
			Route::get('add_medicine/{id}','addMedicine');
		});
		Route::controller(DiagnosticsController::class)->group(function () {
			Route::get('diagnostics_list','diagnosticsList');
			Route::get('add_diagnostics','addDiagnostics');
			Route::post('store_diagnostics','storeDiagnostics');
			Route::get('add_diagnostics/{id}','addDiagnostics');

		});
		Route::controller(DiagnosticsMedicineController::class)->group(function () {
			Route::get('diagnostics_medicine_list','diagnosticsMedicineList');
			Route::get('add_diagnostics_medicine','adddiagnosticsMedicine');
			Route::get('add_diagnostics_medicine/{id}','adddiagnosticsMedicine');
			Route::post('store_diagnostics_medicine','storeDiagnosticsMedicine');
		});
	});

});