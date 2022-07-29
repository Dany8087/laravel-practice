<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\addCategoryController;
use App\Http\Controllers\updateCategoryController;
use App\Http\Controllers\subCategoryController;
use App\Http\Controllers\AddsubCategorController;
use App\Http\Controllers\updateSubCategoryController;
use App\Http\Controllers\addBlogController;

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

Route::get('/', function () { return view('auth/login');})->middleware('alreadyLoggedIn');

Route::get('/login',[Auth::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[Auth::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[Auth::class,'registerUser'])->name('register-user');
Route::post('login-user',[Auth::class,'loginUser'])->name('login-user');

Route::get('/dashboard', [Auth::class,'dashboard'])->name('dashboard')->middleware('isLoggedIn');

Route::get('/slider', [sliderController::class,'slider'])->name('slider')->middleware('isLoggedIn');
Route::post('/add-slider', [sliderController::class,'addSlider'])->name('add-slider')->middleware('isLoggedIn');



Route::get('/category', [categoryController::class,'category'])->name('category')->middleware('isLoggedIn');
Route::get('/addCategory', [addCategoryController::class,'addcategory'])->name('addCategory')->middleware('isLoggedIn');
Route::post('/add-category', [addCategoryController::class,'addingcategory'])->name('add-category')->middleware('isLoggedIn');
Route::get('/updatecategory', [updateCategoryController::class,'updatecategory'])->name('updatecategory')->middleware('isLoggedIn');

Route::get('/subCategory', [subCategoryController::class,'subCategory'])->name('subCategory')->middleware('isLoggedIn');
Route::get('/addsubCategory', [AddsubCategorController::class,'addsubcategory'])->name('addsubCategory')->middleware('isLoggedIn');
Route::post('/add-subCategory', [AddsubCategorController::class,'addingsubcategory'])->name('add-subCategory')->middleware('isLoggedIn');
Route::get('/updatesubcategory/{$id}', [updateSubCategoryController::class,'updatesubcategory'])->name('updatesubcategory')->middleware('isLoggedIn');

Route::get('/deletesc/{$id}',[subCategoryController::class,'deletesc'])->name('deletesc');

Route::get('/logout',[Auth::class,'logout'])->name('logout');