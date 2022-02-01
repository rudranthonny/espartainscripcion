<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\FieldController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class,'index'])->name('admin.home');
/*categorias*/ 
Route::resource('categories', CategoryController::class)->middleware('can:admin.administrador.index')->names('admin.categories');
Route::get('categories/{category}/{signo}/mover',[CategoryController::class,'mover'])->middleware('can:admin.administrador.index')->name('admin.categories.mover');
/*campos*/
Route::resource('fields', FieldController::class)->names('admin.fields')->middleware('can:admin.administrador.index');
Route::get('fields/{field}/{signo}/mover',[FieldController::class,'mover'])->middleware('can:admin.administrador.index')->name('admin.fields.mover');
Route::get('fields/{tcampo}/{categoria}/create2',[FieldController::class,'create2'])->middleware('can:admin.administrador.index')->name('admin.fields.create2');
/*end*/ 
Route::resource('users', UserController::class)->names('admin.users')->middleware('can:admin.administrador.index');
/*---------------------*/
Route::get('users/{id}/generarficha',[UserController::class,'generar_ficha_pdf'])->middleware('can:admin.administrador.index')->name('admin.users.generarficha');