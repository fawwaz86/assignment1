
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/syahmi',function(){
    return view(view:'about');
})->name("about");

Route::get('/fawwaz',function(){
    return view(view:'about_fawwaz');
})->name("fawwaz");
