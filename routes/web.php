<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
Route::get('/course-details', [FrontendController::class, 'course_details'])->name('course-details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('userdashboard');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index']);