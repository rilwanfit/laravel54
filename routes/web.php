<?php

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

use App\Notice;

Route::get('/', function () {
    $data = [
        'provider_id' => 1,
        'title' => 'Notice 1',
        'description' => 'Description 1',
    ];
//    Notice::open($data)->useTemplate("Template: Notice 1 Description 1")->save();
    $notice = Notice::open($data)->useTemplate("Template: Notice 1 Description 1");

    \Auth::user()->notices()->save($notice);

    return Notice::all();

    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
