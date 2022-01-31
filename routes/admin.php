<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\FieldController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class,'index'])->name('admin.home');
/*categorias*/ 
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::get('categories/{category}/{signo}/mover',[CategoryController::class,'mover'])->name('admin.categories.mover');
/*campos*/
Route::resource('fields', FieldController::class)->names('admin.fields');
Route::get('fields/{field}/{signo}/mover',[FieldController::class,'mover'])->name('admin.fields.mover');
Route::get('fields/{tcampo}/{categoria}/create2',[FieldController::class,'create2'])->name('admin.fields.create2');
/*end*/ 
Route::resource('users', UserController::class)->names('admin.users');
/*---------------------*/
Route::get('users/{id}/generarficha',[UserController::class,'generar_ficha_pdf'])->name('admin.users.generarficha');