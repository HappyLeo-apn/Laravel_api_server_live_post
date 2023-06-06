<?php

use App\Helpers\Routes\RouteHelper;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\JsonResponse;
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
Route::prefix('v1')
       ->group(function(){
        RouteHelper::includeRouteFiles(__DIR__ . '/api/v1');
        });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
