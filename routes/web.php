<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadEventController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\KeyManagement;
use App\Http\Controllers\BadarEngineering;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\Approach;
use App\Http\Controllers\Venues;
use App\Http\Controllers\userSignUp;
use App\Http\Controllers\userSignIn;
use App\Http\Controllers\userSignOut;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\SignUpController;

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
Route::get('/Category/{name}', [CategoryPageController::class, 'categoryPage'])->name('categoryPage');
Route::get('/Event/{name}', [EventPageController::class, 'eventPage'])->name('eventPage');
Route::get("/About", [AboutUs::class, "aboutUs"])->name("aboutUs");
Route::get("/Management", [KeyManagement::class, "keyManagement"])->name("keyManagement");
Route::get("/Engineering", [BadarEngineering::class, "badarEngineering"])->name("badarEngineering");
Route::get("/Portfolio", [Portfolio::class, "portfolio"])->name("portfolio");
Route::get("/Approach", [Approach::class, "approach"])->name("approach");
Route::get("/Venues", [Venues::class, "venues"])->name("topVenues");
Route::get('/Gallery', [GalleryController::class, "index"])->name("galleryPage");
Route::get('/Contact', [ContactController::class, "index"])->name("contactPage");
Route::get('/imageGallery', [ImageGalleryController::class, "index"])->name("imageGallery");

Route::get('/admin', [SignUpController::class, 'index'])->name("admin");


Route::get('/logout', [userSignOut::class, 'logout'])->name("logout");


Route::post('/Contact', [ContactController::class, 'ContactUsForm'])->name('contactPage.store');
Route::post('/userSignUp', [userSignUp::class, 'userSignUp'])->name("userSignUp");
Route::post('/userSignIn', [userSignIn::class, 'userSignIn'])->name("userSignIn");
Route::post('/userReset', [userResetController::class, 'userReset'])->name("userReset");




Route::group(['middleware' => 'prevent-back-history'], function () {
    Route::get('/newEvent', function () {
        return view('newEvent');
    })->name("newEvent");
    Route::post("/eventUpload", [UploadEventController::class, "eventUpload"])->name("eventUpload");

    Route::get('/categoryUpload', [FileUploadController::class, 'categoryUpload'])->name('categoryUpload');
    Route::post('/multiplefileupload', [FileUploadController::class, 'multipleUpload'])->name('multiplefileupload');

    Route::get('/galleryUpload', [ImageGalleryController::class, 'renderGalleryUpload'])->name('galleryUpload');
    Route::post('/imageGallery',  [ImageGalleryController::class, "upload"])->name('imageGalleryPost');
    Route::delete('/imageGallery/{id}', [ImageGalleryController::class, "destroy"])->name('imageGalleryDelete');
});
