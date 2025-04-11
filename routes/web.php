<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/get-tabs-content', [ChatController::class, 'getTabContent'])->name('get-tabs-content');

Route::get('/analysis', 'App\Http\Controllers\IndexController@analysis')->name('analysis');

Route::post('/paraphrase', 'App\Http\Controllers\ChatController@paraphrase')->name('paraphrase');


Route::get('/blank', 'App\Http\Controllers\IndexController@blank');

Route::get('/chat', 'App\Http\Controllers\ChatController@chat');