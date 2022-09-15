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
    $header_links = config('header_links');
    $comics = config('comics');
    $banner_links = config('banner_links');
    $footer_links = config('footer_links');

    return view('home', compact('header_links', 'comics', 'banner_links', 'footer_links'));
});
