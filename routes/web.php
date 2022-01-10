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
Route::get('/', 'PostsController@index')->name('top');

//メンバー募集
Route::get('/member', function () {
    return view('member.index');
})->name('member.index');
//記事
Route::get('/recruiting', function () {
    return view('recruiting.index');
})->name('recruiting.index');

Auth::routes();

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);

Route::prefix('user')->middleware(['auth'])->group(function() {

    // 課金
    Route::get('subscription', 'User\SubscriptionController@index')->name('cash_test1');
    Route::get('ajax/subscription/status', 'User\Ajax\SubscriptionController@status');
    Route::post('ajax/subscription/subscribe', 'User\Ajax\SubscriptionController@subscribe');
    Route::post('ajax/subscription/cancel', 'User\Ajax\SubscriptionController@cancel');
    Route::post('ajax/subscription/resume', 'User\Ajax\SubscriptionController@resume');
    Route::post('ajax/subscription/change_plan', 'User\Ajax\SubscriptionController@change_plan');
    Route::post('ajax/subscription/update_card', 'User\Ajax\SubscriptionController@update_card');

});


Route::get('/recruiting', function () {
    return view('recruiting.index');
})->name('recruiting.index');

//ユーザ画面サンプル
Route::get('/user', function () {
    return view('user.index');
});

Route::resource('artists', 'ArtistsController')->middleware(['auth']);