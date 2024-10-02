<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('index_home'); // Ganti dengan view yang sesuai
});

// Halaman About
Route::get('/about', function () {
    return view('about'); // Ganti dengan view yang sesuai
});

// Halaman Blog
Route::get('/blog', function () {
    return view('blog'); // Ganti dengan view yang sesuai
});

// Halaman Blog Single
Route::get('/blog/{id}', function ($id) {
    return view('blog_single', ['id' => $id]); // Ganti dengan view yang sesuai
});

// Halaman Portfolio
Route::get('/portofolio', function () {
    return view('portofolio'); // Ganti dengan view yang sesuai
});

// Halaman Pricing
Route::get('/pricing', function () {
    return view('pricing'); // Ganti dengan view yang sesuai
});

// Halaman Services
Route::get('/service', function () {
    return view('service'); // Ganti dengan view yang sesuai
});

// Halaman Team
Route::get('/team', function () {
    return view('team'); // Ganti dengan view yang sesuai
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact'); // Ganti dengan view yang sesuai
});

// Halaman Testimonial
Route::get('/testimonial', function () {
    return view('testimonial'); // Ganti dengan view yang sesuai
});
