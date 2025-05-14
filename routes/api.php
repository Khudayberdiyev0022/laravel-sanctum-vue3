<?php

use App\Http\Controllers\Api\Auth\Spa\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth/spa')->group(function (){
  Route::post('login', LoginController::class)->middleware('guest');
});
