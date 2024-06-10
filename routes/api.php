<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;


Route::controller(CompanyController::class)->group(function () {
    Route::get('/companies/{search?}', 'index');
});


Route::controller(TaskController::class)->group(function(){
    Route::post('/task/create','store');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/user/{id}','index');
});


