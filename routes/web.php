
<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/index', function () {
    return redirect()->route('admin.index');
});
