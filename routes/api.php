<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SujetController;
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

//Route::get('/sujet', [SujetController::class, 'index']);
//Route::get('/sujet/{id}', [SujetController::class, 'show']);
// Route::get('/post/search/{name}', [ProductController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

//Protected Routes
// Route::group(['middleware' => ['auth:sanctum']], function () {
Route::post('/sujet', [SujetController::class, 'store']);
Route::put('/sujet/{id}', [SujetController::class, 'update']);
Route::delete('/sujet/{id}', [SujetController::class, 'destroy']);