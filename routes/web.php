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
//    $users = \App\Models\User::whereLike('name', 'Dr')->get()->pluck('name')->toArray();
//
//    dd($users);

    dd(now()->isEgyptionChristmasDay());
});
