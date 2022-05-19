<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/uiux', [LandingController::class, 'uiux'])->name('uiux');
Route::get('/case-study', [LandingController::class, 'case_study'])->name('case-study');
Route::get('/about-us', [LandingController::class, 'about_us'])->name('about-us');
Route::get('/portfolio', [LandingController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/blog/{postId}', [LandingController::class, 'single_blog'])->name('single-blog');
Route::post('/send-email',[ContactController::class, 'sendEmail'])->name('send.email');

Auth::routes([
    'register' => false
]);
//admin
Route::get('/admin/dashboard', [HomeController::class, 'admin_index'])
    ->name('admin_index')
    ->middleware('auth');

