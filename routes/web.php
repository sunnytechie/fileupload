<?php

use App\Http\Controllers\VideoUploadController;
use App\Livewire\VideoUpload;
use Illuminate\Support\Facades\Route;

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

Route::get('/videos', [VideoUploadController::class, 'index']);
Route::post('/post-video', [VideoUploadController::class, 'store'])->name('post.video');

//Route::get('/video-upload', VideoUpload::class);
