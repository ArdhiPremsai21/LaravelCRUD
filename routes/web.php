<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/TableView' , [TaskController::class, 'index']);
Route::get('/FormView' , [TaskController::class, 'createDate']);
Route::post('/submitData' , [TaskController::class, 'insertData']);
Route::get('/updateForm/{id}' , [TaskController::class, 'updateForm']);
Route::post('/updateData/{id}' , [TaskController::class, 'updateData']);
Route::post('/deleteData/{id}' , [TaskController::class, 'deleteData']);