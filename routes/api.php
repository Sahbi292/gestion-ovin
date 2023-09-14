<?php

use App\Http\Controllers\AlimentationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\MaladieController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\VaccinController;
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


// Route::get('/post/search/{name}', [ProductController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

//Protected Routes
// Route::group(['middleware' => ['auth:sanctum']], function () {
 Route::get('/list-sujet', [SujetController::class, 'indexsujet']);
Route::get('/sujet/{identifiant}', [SujetController::class, 'show']);
Route::post('/sujet', [SujetController::class, 'storesujet']);
Route::post('/update-sujet/{id}', [SujetController::class, 'updatesujet']);
Route::delete('/destroy-sujet/{id}', [SujetController::class, 'destroysujet']);

// Race Route
Route::post('/race', [RaceController::class, 'storerace']);
Route::get('/list-race', [RaceController::class, 'indexrace']);
Route::post('/update-race/{id}', [RaceController::class, 'updateRace']);
Route::delete('/destroy-race/{id}', [SujetController::class, 'destroyrace']);

// Lot Route 
Route::post('/lot', [LotController::class, 'storelot']);
Route::get('/list-lot', [LotController::class, 'indexlot']);
Route::post('/update-lot/{id}', [LotController::class, 'updatelot']);
Route::delete('/destroy-lot/{id}', [LotController::class, 'destroylot']);

// Alimentation Route 

Route::post('/alimentation', [AlimentationController::class, 'storealimentation']);
Route::get('/list-alimentation', [AlimentationController::class, 'indexalimentation']);
Route::post('/update-alimentation/{id}', [AlimentationController::class, 'updatealimentation']);
Route::delete('/destroy-alimentation/{id}', [AlimentationController::class, 'destroyalimentation']);


// Maladie Route 

Route::post('/maladie', [MaladieController::class, 'storemaladie']);
Route::get('/list-maladie', [MaladieController::class, 'indexmaladie']);
Route::post('/update-maladie/{id}', [MaladieController::class, 'updatemaladie']);
Route::delete('/destroy-maladie/{id}', [MaladieController::class, 'destroymaladie']);

// Vaccin Route 

Route::post('/vaccin', [VaccinController::class, 'storevaccin']);
Route::get('/list-vaccin', [VaccinController::class, 'indexvaccin']);
Route::post('/update-vaccin/{id}', [VaccinController::class, 'updatevaccin']);
Route::delete('/destroy-vaccin/{id}', [VaccinController::class, 'destroyvaccin']);

// Tache Route 
Route::post('/tache', [TacheController::class, 'storetache']);
Route::get('/list-tache', [TacheController::class, 'indextache']);
Route::post('/update-tache/{id}', [TacheController::class, 'updatetache']);
Route::delete('/destroy-tache/{id}', [TacheController::class, 'destroytache']);
