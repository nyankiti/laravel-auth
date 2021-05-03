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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//read token  sjBLoKdq4TnggufiwmqMsZLEnRWoFvXiYUiDImC6
Route::middleware('auth:sanctum')->get('/articles', function (Request $request) {
    if($request->user()->tokenCan('read')){
        return response('hey');
    }else{
        return response('unauthorized');
    }
});
