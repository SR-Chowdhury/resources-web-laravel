<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\DynamicInputController;
use App\Http\Controllers\CkEditorController;


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

