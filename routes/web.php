<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

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

Route::get('/users', function(Request $request){
    return 'hello Request';
});

// Route::get('/', function(){
//     return views('welcome');
// });

Route::get('/user', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/greeting', function (){
    return 'Hello, I greet you!!....';
});
