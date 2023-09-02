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
    return view('home' ,[
        'page_title' => 'Home Page',
        'name' => 'Laravel 9 master Classs'
    ]);
})->name('home');
Route::get('/donate-page', function () {
    return view('donate');
})->name('donate');
Route::get('/service-details', function () {
 $services = [
    'web development',
    'App development',
    'grapics development',
    'design development',
    'fluter development',

 ];
    return view('service', compact('services'));
})->name('service');
Route::get('/contact-us', function () {
   $page_name = "Contact Page";
    $product_count = 15;

    $products=[
               1 => [
        'name' => 'Bag',
        'color' => 'Red',
        'price' => '1200',
       ],
       2 => [
        'name' => 'Sunglass',
        'color' => 'Black',
        'price' => '550',
       ],
       3 => [
        'name' => 'BodySpray',
        'color' => 'Blue',
        'price' => '850',
       ],

    ];
    $product_count = count($products);

    return view('contact', compact(
        'page_name',
        'product_count',
        'products'
    ));
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
