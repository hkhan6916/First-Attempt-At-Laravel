<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     echo 'hello';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('tenants/{id}', 'PagesController@index');

// Route::get('/tenants/{id}', function ($id) {
//     return 'This is user '.$id;
// });
