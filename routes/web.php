<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return Inertia::render('Home/Index');
});
Route::get('/about',function(){
    return Inertia::render('About/Index');
});
Route::get('/contact',function(){
    return Inertia::render('Contact/Index');
});
Route::get('/gallery',function(){
    return Inertia::render('Gallery/Index');
});