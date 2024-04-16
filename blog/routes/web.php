<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');    
});
Route::get('/posts',[PostController::class ,'index']);
Route::get('/posts/create', [PostController::class , 'create']);
Route::post('/posts' ,  [PostController::class , 'store']);
Route::get('/post/{id}' ,[PostController::class , 'show']);
Route::get('/post/{id}/edit' ,[PostController::class , 'edit']);
Route::put('/posts/{id}',[PostController::class , 'update']);
Route::delete('/posts/{id}',[PostController::class , 'destroy']);
