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


// Route::prefix('api')->group(function(){
//     // get Contacts all
//     Route::get('getContacts', 'ContactController@getContacts');

//     // Save Contacts 
//     Route::post('save_contact', 'ContactController@save_contact');
// });