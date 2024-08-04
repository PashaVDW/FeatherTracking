<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("", \App\Http\Controllers\DashboardController::class);

Route::middleware('auth')->group(function (){
    Route::get("/categories", fn() => view("pages.categories.index"));
    Route::get("/category/{id]", fn($id) => view("pages.categories.show"));
});


Auth::routes();
