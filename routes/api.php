<?php

use App\Http\Controllers\Api\AuthorityAuthController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\AuthorityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

require __DIR__.'/auth.php'; //Auth for users

//Auth for authority
Route::prefix('authority')->group(function(){
    Route::post('/signup', [AuthorityAuthController::class, 'signup']);
    Route::post('/login', [AuthorityAuthController::class, 'login']);
});

//Create, Update and Delete report operations
Route::post('reports', [ReportController::class, 'store']);

//Read a/all report(s)
Route::get('reports', [ReportController::class, 'index'])->middleware('throttle:api');
Route::get('reports/{report}', [ReportController::class, 'show']);

//update status
Route::middleware('auth:sanctum')->group(function(){
    Route::put('reports/{report}', [ReportController::class, 'update']);
    Route::patch('reports/{report}', [ReportController::class, 'status_update']);
    Route::delete('reports/{report}', [ReportController::class, 'destroy']);
});

Route::get('/authority', [AuthorityController::class, 'index'])->middleware('auth:sanctum');

