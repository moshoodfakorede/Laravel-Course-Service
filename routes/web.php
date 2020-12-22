<?php

use App\Series;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $featuredSeries = Series::take(3)->latest()->get();
    return view('front', compact('featuredSeries'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/series', 'SeriesController');
Route::get('/series/{series}/episode/{episodeNumber}', 'SeriesController@episode')->name('series.episode');
