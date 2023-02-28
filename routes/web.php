<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadEvent;
use App\Http\Controllers\FileUploadController;

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

Route::get('/newEvent', function () {
    return view('newEvent');
})->name("newEvent");
Route::get('/fileuploaded', [FileUploadController::class, 'fileuploaded'])->name('fileuploaded');
Route::post('/multiplefileupload', [FileUploadController::class, 'multipleUpload'])->name('multiplefileupload');

Route::post("/uploadEvent", [UploadEvent::class, "uploadEvent"])->name("uploadEvent");
