<?php

use Illuminate\Support\Facades\Route;

Route::get("", \App\Http\Controllers\DashboardController::class);
Route::get("/categories", fn() => view("pages.categories.index"));
