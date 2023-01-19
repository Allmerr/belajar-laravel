<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\LoginController;

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Monolog\Registry;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function(){
    return view('index', [
        'title' => 'Home',
    ]);
});

Route::get('/category', [CategoryController::class,'index']);


Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function (){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth') ;

Route::get('/dashboard/blog/checkSlug', [DashboardBlogController::class , 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');


Route::resource('/dashboard/category', AdminCategoryController::class)->middleware('isAdmin');