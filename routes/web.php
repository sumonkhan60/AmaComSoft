<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('/show-price', [FrontController::class, 'show'])->name('price.show');
Route::get('/detail-price{id}', [FrontController::class, 'priceDetail'])->name('price.detail');
Route::get('/blog-all', [FrontController::class, 'allBlogs'])->name('blog.all');
Route::get('/blog-detail{id}', [FrontController::class, 'detail'])->name('blog.detail');
Route::get('/all-marketing', [FrontController::class, 'localSeo'])->name('marketing.all');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/add-category', [CategoryController::class, 'index'])->name('category.add');
Route::post('/new-category', [CategoryController::class, 'create'])->name('category.new');
Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
Route::get('/edit-category{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/update-category{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/delete-category{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/add-blog', [BlogController::class, 'index'])->name('blog.add');
Route::post('/new-blog', [BlogController::class, 'create'])->name('blog.new');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('blog.manage');
Route::get('/edit-blog{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/update-blog{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/delete-blog{id}', [BlogController::class, 'delete'])->name('blog.delete');

Route::get('/add-product', [ProductController::class, 'index'])->name('product.add');
Route::post('/new-product', [ProductController::class, 'create'])->name('product.new');
Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');
Route::get('/edit-product{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update-product{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/delete-product{id}', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/add-service', [ServiceController::class, 'index'])->name('service.add');
Route::post('/new-service', [ServiceController::class, 'create'])->name('service.new');
Route::get('/manage-service', [ServiceController::class, 'manage'])->name('service.manage');
Route::get('/edit-service{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/update-service{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/delete-service{id}', [ServiceController::class, 'delete'])->name('service.delete');

Route::get('/add-marketing', [DigitalMarketingController::class, 'index'])->name('marketing.add');
Route::post('/new-marketing', [DigitalMarketingController::class, 'create'])->name('marketing.new');
Route::get('/manage-marketing', [DigitalMarketingController::class, 'manage'])->name('marketing.manage');
Route::get('/edit-marketing{id}', [DigitalMarketingController::class, 'edit'])->name('marketing.edit');
Route::post('/update-marketing{id}', [DigitalMarketingController::class, 'update'])->name('marketing.update');
Route::get('/delete-marketing{id}', [DigitalMarketingController::class, 'delete'])->name('marketing.delete');

