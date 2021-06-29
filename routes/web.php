<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\DynamicInputController;
use App\Http\Controllers\CkEditorController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SideNavController;
use App\Http\Controllers\CurbBackController;
use App\Http\Controllers\TestimonialController;


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

Route::get('/', function () {
    return view('welcome');
});
/**
 * Pagination Routes
 */
Route::get('/pagination', [PaginationController::class, 'pagination']);

/**
 * Dynamic Input field Routes
 */
Route::get('/dynamic-input', [DynamicInputController::class, 'index']);
Route::get('/dynamic-input/create', [DynamicInputController::class, 'create']);
Route::post('/dynamic-input/store', [DynamicInputController::class, 'store'])->name('dynamic-input.store');
/**
 * Ck-Editor Routes
 */
Route::get('/ck-editor', [CkEditorController::class, 'index']);
/**
 * Navbar Routes
 */
Route::get('/navbar/v1', [NavbarController::class, 'v1Method']);
Route::get('/navbar/v2', [NavbarController::class, 'v2Method']);
Route::get('/navbar/v3', [NavbarController::class, 'v3Method']);
Route::get('/navbar/v4', [NavbarController::class, 'v4Method']);
Route::get('/navbar/v5', [NavbarController::class, 'v5Method']);
Route::get('/navbar/v6', [NavbarController::class, 'v6Method']);
Route::get('/navbar/v7', [NavbarController::class, 'v7Method']);
Route::get('/navbar/v8', [NavbarController::class, 'v8Method']);
Route::get('/navbar/v9', [NavbarController::class, 'v9Method']);
/**
 * Side Navbar Routes
 */
Route::get('/side-nav/v1', [SideNavController::class, 'v1Method']);
/**
 * Curb - Background Routes
 */
Route::get('/curb-background/v1', [CurbBackController::class, 'v1Method']);
/**
 * Testimonial Routes
 */
Route::get('/testimonial/v1', [TestimonialController::class, 'v1Method']);
Route::get('/testimonial/v2', [TestimonialController::class, 'v2Method']);
Route::get('/testimonial/v3', [TestimonialController::class, 'v3Method']);
Route::get('/testimonial/v4', [TestimonialController::class, 'v4Method']);
Route::get('/testimonial/v5', [TestimonialController::class, 'v5Method']);
Route::get('/testimonial/v6', [TestimonialController::class, 'v6Method']);
Route::get('/testimonial/v7', [TestimonialController::class, 'v7Method']);
Route::get('/testimonial/v8', [TestimonialController::class, 'v8Method']);
Route::get('/testimonial/v9', [TestimonialController::class, 'v9Method']);
