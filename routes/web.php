
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $artikel = DB::table('artikel')->get();

    return view('index', compact('artikel'));
})->name('home');

Route::get('/index', function () {
    $artikel = DB::table('artikel')->get();

    return view('index', compact('artikel'));
})->name('index');

Route::get('/biodata', function () {
    return view('biodata');
})->name('biodata');

Route::get('/projek', function () {
    return view('projek');
})->name('projek');
