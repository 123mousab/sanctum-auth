<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use \App\Http\Controllers\auth\admin\AuthController as AdminAuthController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('admin/login', [AdminAuthController::class, 'login']);
