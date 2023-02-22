<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsewaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EsewaController::class)->prefix('esewa')->group(function () {
    Route::get('fail', 'fail')->name('esewa.fail');
    Route::get('success', 'success')->name('esewa.success');
});