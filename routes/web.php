<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return ('welcome guys');
});

Route::group([], function () {
    Route::get('/', function () {
        return "<h1>Welcome to Home Page</h1>";
    });

    Route::get('/about', function () {
        return "<h1>About Us</h1><p>Lorem ipsum dolor sit amet...</p>";
    });

    Route::get('/program', function () {
        return "<h1>Our Program</h1><p>Program description goes here.</p>";
    });

    Route::get('/team', function () {
        return "<h1>Our Team</h1><p>Meet our awesome team!</p>";
    });

    Route::get('/contact', function () {
        return "<h1>Contact Us</h1><p>You can reach us at: contact@email.com</p>";
    });
});

// ===== Route dengan parameter =====
Route::get('/program/{name}', function ($name) {
    return "<h1>Program Detail</h1><p>You selected program: <b>$name</b></p>";
});

// ===== Redirect =====
Route::redirect('/home', '/');

// ===== Fallback (jika route tidak ditemukan) =====
Route::fallback(function () {
    return "<h1>404 - Page Not Found</h1><p>Sorry, the page you are looking for does not exist.</p>";
});
