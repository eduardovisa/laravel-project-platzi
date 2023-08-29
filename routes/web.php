<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/expense_reports', ExpenseReportController::class);

Route::get('/expense_reports/{id}/confirmDelete', [ExpenseReportController::class, 'confirmDelete']);
