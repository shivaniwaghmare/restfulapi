<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PetitionController;
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

Route::apiResource(name: '/petitions', controller:PetitionController::class);

Route::apiResource(name:'/authors', controller:AuthorController::class)->only([
    'index', 'show'
]);