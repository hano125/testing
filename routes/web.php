<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

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


    Route::get('/', function () {return view('welcome');});
      //route of blade page tester
//    Route::get("/home",function (){return view("home");});
//    Route::get("/posts",function (){return view("posts");});
//    Route::get("/users",function (){return view("Users");});
 //---------------------------------------------------------------------------------
///  her use controller
//    Route::get("show",[postController::class,'showPage']);
// -------------------------normal controoler and route----------------------------
//    Route::get("show",[postController::class,'showPage']);
//    Route::get("post/create",[postController::class,'showPage']);
//    Route::get("post/update/{id}",[postController::class,'showPage']);
//    Route::get("post/edit/{id}",[postController::class,'showPage']);
//    Route::get("post/delete/{id}",[postController::class,'showPage']);
/////// or i use this method in laravel 9 i can use route controller function like this---------------------
//    Route::controller(postController::class)->group(function(){
//  -----------------------------------------     u can use this or this-------------------------------
//        Route::get('show','showPage');
//        Route::get('post/create','create');
//        Route::get('post/edit/{id}','uodate');
//        Route::get('post/edit/{id}','uodate');
//        Route::get('post/edit/{id}','uodate'); });
//----------------------------------------------new codeing ----------------------------------------------------





