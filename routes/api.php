<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importa ProjectController
use App\Http\Controllers\Api\ProjectController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Prendi rotta /projects richiamando la classe ProjectController (prefix: api) e la sua funzione index
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');