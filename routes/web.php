<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('langs/{locale}',function ($locale){
    if (in_array($locale,['az','en','ru'])) {
        session()->put('locale', $locale);
    }
    else
    {
        session()->put('locale', 'az');
    }

    return redirect()->back();
})
    ->name('lang.swithcher');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/',[PagesController::class, 'index'])->name('front.home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web','auth']], function () {
    Lfm::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('option',App\Http\Controllers\OptionController::class);
Route::resource('product',App\Http\Controllers\ProjectController::class);
Route::resource('simple',App\Http\Controllers\SimpleController::class);
Route::resource('blog',App\Http\Controllers\BlogController::class);
Route::resource('menu',App\Http\Controllers\MenuController::class);
Route::resource('services',App\Http\Controllers\ServicesController::class);
Route::resource('question',App\Http\Controllers\QuestionController::class);
Route::get('contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
