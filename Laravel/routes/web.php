<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;



Route::get('/login',
    [LoginController::class, 'index']);
Route::get('/register',
    [RegisterController::class, 'index']);
Route::get('/home',
    [HomeController::class, 'index']);
    Route::get('/',
    [HomeController::class, 'index']);

Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/mycontroller', [MyController::class, 'myfunction']);


Route::get('/mm', function () {
    return view('myview');
});

//Route::get('/hello/{id?}', function ($val = "") {
//   return "<h1>Hello World $val</h1>";
//});
