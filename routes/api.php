<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Template Routes
Route::resource('/templates', TemplateController::class);

// Template Component

Route::resource('/components', ComponentController::class);

// Get  Template (fetch specific template)

Route::get('getTemplateData', [TemplateController::class, "getTemplateData"]);
Route::post('insertData', [TemplateController::class, "insertData"]);
Route::post('updateTemplateData', [TemplateController::class, "updateTemplateData"]);