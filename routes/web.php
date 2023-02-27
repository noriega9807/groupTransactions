<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use Inertia\Inertia; 

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

Route::get('/',  [GroupController::class, 'showGroups']);

Route::prefix('groups')->group(function () {
    Route::get('/{id}',  [GroupController::class, 'showGroup']);

    Route::get('/',  [GroupController::class, 'showGroups']);
});
