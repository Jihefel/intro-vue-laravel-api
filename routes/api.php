<?php

use App\Http\Controllers\Api\User\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Vrai route ici : api/users
// index en users.index => dans RouteServiceProvider avec as
Route::get('users', IndexController::class)->name('index');
