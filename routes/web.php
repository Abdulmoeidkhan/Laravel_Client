<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadEventController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CategoryPageController;

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

Route::get('/', [MainPageController::class, "index"])->name("mainPage");
Route::get('/categories', [FileUploadController::class, "index"])->name("categories");
Route::get('/category/{name}', [CategoryPageController::class, 'categoryPage'])->name('categoryPage');

Route::get('/newEvent', function () {
    return view('newEvent');
})->name("newEvent");
Route::get('/galleryUpload', [FileUploadController::class, 'galleryUpload'])->name('galleryUpload');
Route::post('/multiplefileupload', [FileUploadController::class, 'multipleUpload'])->name('multiplefileupload');

Route::post("/eventUpload", [UploadEventController::class, "eventUpload"])->name("eventUpload");
