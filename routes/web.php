<?php

use App\Http\Controllers\HomeController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;


Route::post('/Bstore', [HomeController::class, 'Bstore'])->name('Bstore');
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/userblog/{id}', [HomeController::class, 'userblog'])->name('userblog');
Route::get('{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::put('{id}/update', [HomeController::class, 'update'])->name('update');



Route::get('/Login', [HomeController::class, 'Login'])->name('Login');
Route::get('/Register', [HomeController::class, 'Register'])->name('Register');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::post('/Slogin', [HomeController::class, 'Slogin'])->name('Slogin');
Route::get('/Dashboard', [HomeController::class, 'Dashboard'])->name('Dashboard');
Route::get('/Create', [HomeController::class, 'Create'])->name('Create');
Route::get('/bloglist', [HomeController::class, 'bloglist'])->name('bloglist');
Route::get('index', [HomeController::class, 'index'])->name('index');



Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware('role:admin')->get('/users', function () {});