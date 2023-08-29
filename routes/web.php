<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;

use Illuminate\Support\Facades\Route;

Route::get('/',  [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/expense_reports', ExpenseReportController::class);
Route::get('/expense_reports/{id}/confirmDelete', [ExpenseReportController::class, 'confirmDelete']);

Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);
