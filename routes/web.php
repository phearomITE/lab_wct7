<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing page
Route::get('/', function () {
    return view('layouts.index');
})->name('home');

// Dashboard route
Route::get('/dashboard/index', function () {
    return view('layouts.dashboard.analytics');
})->name('dashboard.index');

// Elements routes (for "Explore Components" link in template)
Route::get('/elements/bc_alert', function () {
    return view('layouts.elements.bc_alert');
})->name('elements.alert');

// Additional routes for other elements pages
Route::prefix('elements')->group(function () {
    Route::get('/bc_typography', function () {
        return view('layouts.elements.bc_typography');
    });
    
    Route::get('/bc_color', function () {
        return view('layouts.elements.bc_color');
    });
   
    Route::get('/icon-tabler', function () {
        return view('layouts.elements.icon-tabler');
    });
    
    Route::get('/bc_button', function () {
        return view('layouts.elements.bc_button');
    });
    
    Route::get('/bc_badges', function () {
        return view('layouts.elements.bc_badges');
    });
    
    Route::get('/bc_breadcrumb', function () {
        return view('layouts.elements.bc_breadcrumb');
    });
    
    Route::get('/bc_card', function () {
        return view('layouts.elements.bc_card');
    });
    
    Route::get('/bc_collapse', function () {
        return view('layouts.elements.bc_collapse');
    });
});

// Auth routes
Route::get('/pages/login', function () {
    return view('layouts.pages.login');
})->name('login');

Route::get('/pages/register', function () {
    return view('layouts.pages.register');
})->name('register');

Route::get('/pages/forgot-password', function () {
    return view('layouts.pages.forgot-password');
})->name('password.request');


// other 

Route::get('/other/sample-page', function () {
    return view('layouts.other.sample-page');
});

// Fallback for 404
Route::fallback(function () {
    return view('layouts.errors.404');
});