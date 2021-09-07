<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementAPIController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ManagementAPIController::class, 'home_data']);
Route::get('/exp',[ManagementAPIController::class, 'exp_data']);
Route::get('/biography',[ManagementAPIController::class, 'bio_data']);
Route::get('/skill', [ManagementAPIController::class, 'skill_data']);
Route::get('/contact', [ManagementAPIController::class, 'contact_data']);

 