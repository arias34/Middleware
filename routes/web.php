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
Route::get('nama', function () {
    echo "Hello World";
})->middleware('middleware1');

Route::get('admin', [
    'uses' => 'AdminController@index',
    'middleware' => 'middleware1'
]);

Route::get('/home', function () {
    echo '</h1>Ini Home</h1>';
});
