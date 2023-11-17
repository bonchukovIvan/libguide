<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CategoryGroupController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('v1/')->group(function () {
//     // Route::controller(CategoryGroupController::class)->group(function () {
//     //     Route::get('category-group', 'index');
//     // });
//     Route::get('category-group', 'Api\V1\CategoryGroupController@index');
// });

Route::group([
    'controller' => CategoryGroupController::class,
    'prefix' => 'v1/category-group',
    'as' => 'category-group',
],function() {
    Route::get('/', 'index');
});