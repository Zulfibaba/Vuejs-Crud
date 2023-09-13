<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('contacts', [ContactController::class, 'contacts']);

Route::get('get_contact/{id}', [ContactController::class, 'getContact']);

Route::post('save_contact', [ContactController::class, 'saveContact']);

Route::delete('delete_contact/{id}', [ContactController::class, 'deleteContact']);

Route::post('update_contact/{id}', [ContactController::class, 'updateContact']);
