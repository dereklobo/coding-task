<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditCardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('phpmyinfo', function () {
    phpinfo(); 
})->name('phpmyinfo');

Route::post('/mask-card', [CreditCardController::class, 'mask']);