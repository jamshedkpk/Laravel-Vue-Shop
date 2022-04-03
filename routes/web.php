<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', function ()
{
    return view('product');
});


Auth::routes();
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('admin',[AdminController::class,'index'])->name('admin');
Route::fallback(function(){
return view('product');
});