<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

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

Route::get('/', [ImagesController::class, 'index'] )->name('home');
Route::get('/imagepreview/{image}', [ImagesController::class, 'previewImage'] )->name('imagepreview');
Route::get('/search',[ImagesController::class, 'searchImage'])->name('search');

Route::get('/upload', function () {
    return view('uploadimage');
})->name('uploadimage')->middleware('auth');

Route::post('/storeimage',[ImagesController::class, 'storeImage'])->name('storeimage');
Route::post('/deleteimage',[ImagesController::class, 'deleteImage'])->name('deleteimage');


Route::get('/dashboard', [ImagesController::class, 'viewDashboard'] )->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
