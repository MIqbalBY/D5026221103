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

    // Welcome (Week 8)
    Route::get('/', function ()
    {
        return view('welcome');
    });

    Route::get('week8', function ()
    {
        return view('welcome');
    });

    // Week 1
    Route::get('week1', function()
    {
    return view('week1');
    });

    // Week 2
    Route::get('week2', function()
    {
    return view('week2');
    });

    // Week 3
    Route::get('week3', function()
    {
    return view('week3');
    });

    // Week 4
    Route::get('week4', function()
    {
    return view('week4');
    });

    // Week 5
    Route::get('week5', function()
    {
    return view('week5');
    });

    // Week 6
    Route::get('week6', function()
    {
    return view('week6');
    });

    // Week 7
    Route::get('week7', function()
    {
    return view('week7');
    });

    // Week 9
    Route::get('week9', function()
    {
    return view('week9');
    });

    // Week 10
    Route::get('week10', function()
    {
    return view('week10');
    });
