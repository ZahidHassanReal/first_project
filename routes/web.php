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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home-page', function () {
    return view('home');
})->name('home');
Route::get('/service-details', function () {
    return view('service');
})->name('service');
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
Route::get('/about-me', function () {
    return view('about');
})->name('about');






















//route problem
// Route::get('/service-details/{service_id}/{service_name?}', function ($service_id, $service_name=null) {
//     return "service_details". $service_id. ' '.$service_name;
// })->name('service');
// Route::get('/user/{name}/{id}', function ($name ,$id) {
//     echo $name, $id;
// })->where(['id' => '[0-9]+' , 'name'=> '[A-Za-z]+'] );

// Route::get('/category/{category_name}', function ($category_name){
//     echo $category_name;
// })->whereIn('category_name', ['electronics', 'movie', 'books', 'watch', 'laptop']);


// Route::get('/search/{keywords}', function($keywords){
//     echo "$keywords";
// })->where('keywords', '.*');
