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
//top ページ
Route::get('/', function () {
    return view('index');
});

//メンバー募集
Route::get('/member', function () {
    return view('member.index');
})->name('member.index');
//記事
Route::get('/recruiting', function () {
    return view('recruiting.index');
})->name('recruiting.index');

