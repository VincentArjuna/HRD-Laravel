<?php

use App\Http\Controllers\CompanyAssetControler;
use App\Http\Controllers\EmployeeAssetController;
use App\Http\Controllers\EmployeeProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NavigationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/navigation', [MenuController::class, 'navigation']);
Route::get('/company-asset', [CompanyAssetControler::class, 'index']);
Route::get('/employee-asset', [EmployeeAssetController::class, 'index']);
Route::get('/employee-profile', [EmployeeProfileController::class, 'index']);
