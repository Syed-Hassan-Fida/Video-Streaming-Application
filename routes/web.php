<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website;
use App\Http\Controllers\AllUpdates;
use App\Http\Controllers\NewOrderController;

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

Route::get('index/', function () {
    return view('welcome');
});

Route::get('/', [website::class, 'brebowIndex'])->name('brebow-index');
Route::get('about/', [website::class, 'contact'])->name('contact');
Route::get('archive/', [website::class, 'archive'])->name('archive');

Route::get('alldata/', [website::class, 'allData'])->name('alldata');


Route::post('contacts/', [website::class, 'contacts'])->name('contacts');

Route::post('clients/', [website::class, 'clients'])->name('clients');
Route::post('partners/', [website::class, 'partners'])->name('partners');
Route::post('letters/', [website::class, 'letters'])->name('letters');
Route::post('archives/', [website::class, 'archives'])->name('archives');

Route::get('video', [website::class, 'videos'])->name('video');

Route::get('deleteContact', [website::class, 'deleteContact'])->name('deleteContact');
Route::get('deletePertners', [website::class, 'deletePertners'])->name('deletePertners');
Route::get('deleteLetters', [website::class, 'deleteLetters'])->name('deleteLetters');
Route::get('deleteArchives', [website::class, 'deleteArchives'])->name('deleteArchives');

Route::post("home-video", [website::class, 'homeVideoSave'])->name("home-video");
Route::get('home-video-display', [website::class, 'homeVideoDisplay'])->name("home-video-display");

Route::get("updateA", [website::class, 'updateA'])->name("updateA");
Route::post("updateArchives", [website::class, 'updateArchives'])->name("updateArchives");
Route::post("updateAvideo", [website::class, 'updateAvideo'])->name("updateAvideo");
Route::post("updateAgif", [website::class, 'updateAgif'])->name("updateAgif");

// about contact form 
Route::post("sent-mail",[website::class, "sendEmail"])->name("sent-mail");

// update about
Route::get("about-edit-view",[AllUpdates::class, "aboutEditView"])->name("about-edit-view");
Route::post("about-edit",[AllUpdates::class, "aboutEdit"])->name("about-edit");
Route::post("update-about-video",[AllUpdates::class, "updateAboutVideo"])->name("update-about-video");

// update home videos and info
Route::get("home-video-edit-view",[AllUpdates::class, "homeVideoEditView"])->name("home-video-edit-view");
Route::post("home-video-edit",[AllUpdates::class, "homeVideoEdit"])->name("home-video-edit");
Route::post("home-info-edit",[AllUpdates::class, "homeInfoEdit"])->name("home-info-edit");

// update home single videos and info
Route::post("home-single-video", [website::class, 'homeSingleVideoSave'])->name("home-single-video");
Route::get('home-single-video-display', [website::class, 'homeSingleVideoDisplay'])->name("home-single-video-display");
Route::get("home-single-video-delete",[website::class, "homeSingleVideoDelete"])->name("home-single-video-delete");

Route::get("home-single-video-edit-view",[AllUpdates::class, "homeSingleVideoEditView"])->name("home-single-video-edit-view");
Route::post("home-single-video-edit",[AllUpdates::class, "homeSingleVideoEdit"])->name("home-single-video-edit");
Route::post("home-single-info-edit",[AllUpdates::class, "homeSingleInfoEdit"])->name("home-single-info-edit");


Route::post("archive-single-info-edit",[AllUpdates::class, "archieveSingleInfoEdit"])->name("archive-single-info-edit");

Route::get("check-order-view", [NewOrderController::class, 'newOrderView'])->name("check-order-view");

Route::post("save-order", [NewOrderController::class, 'saveOrder'])->name("save-order");

// home videos
Route::get("home-order-view", [NewOrderController::class, 'homeOrderView'])->name("home-order-view");

Route::post("home-save-order", [NewOrderController::class, 'homeSaveOrder'])->name("home-save-order");


// users
Route::get("all-users", [NewOrderController::class, "allUsers"])->name("all-users");
Route::get("edit-user", [NewOrderController::class, "editUser"])->name("edit-user");
Route::get("delete-user", [NewOrderController::class, "deleteUser"])->name("delete-user");

Route::post("resgister-user", [NewOrderController::class, "resgisterUser"])->name("resgister-user");
Route::get("edit-user",[NewOrderController::class, "editUser"])->name("edit-user");
Route::post("update-user",[NewOrderController::class, "updateUser"])->name("update-user");




Route::get('video1/',function(){
    return view('videos.video1');
})->name('video1');

Route::get('video2/',function(){
    return view('videos.video2');
})->name('video2');

Route::get('video3/',function(){
    return view('videos.video3');
})->name('video3');

Route::get('video4/',function(){
    return view('videos.video4');
})->name('video4');

Route::get('video5/',function(){
    return view('videos.video5');
})->name('video5');

Route::get('video6/',function(){
    return view('videos.video6');
})->name('video6');

Route::get('video7/',function(){
    return view('videos.video7');
})->name('video7');






Route::get('/dashboard', function () {
    return view('dashboard');


})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
