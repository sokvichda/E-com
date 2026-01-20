<?php

use Illuminate\Support\Facades\Route;

Route::get('/student', [StudentController::class, "index"]);
