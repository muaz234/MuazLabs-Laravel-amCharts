<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function(Request $request){
    return response()->json(['success' => true, 'message' => 'Welcome'], 200);
})->name('api.index');
Route::get('/child', 'AdminController@childData')->name('api.child');
Route::get('/arrayChild', 'AdminController@forceDirected')->name('api.forceDirected');
Route::get('/parentsDT', 'AdminController@dt_parents')->name('api.parentsDT');
Route::get('/childrenDT', 'AdminController@dt_children')->name('api.childrenDT');
Route::get('/spouseDT', 'AdminController@dt_spouse')->name('api.spouseDT');
Route::get('roadmaps', 'RoadmapController@getData')->name('api.roadmapDT');

