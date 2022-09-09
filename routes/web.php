<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// 1.view routing
// Route::get('/',function(){
//     return view('Homepage');
// });

// Route::get('/about',function(){
//     return view('AboutPage');
// });

// Route::get('/contact',function(){
//     return view('ContactPage');
// });

// 2.Controller method routing

Route::get('/', [SiteController::class,'Home']);
Route::get('/about', [SiteController::class,'About']);
Route::get('/contact', [SiteController::class,'Contact']);

//Routing with parameter

Route::get('Name/{namevalue}', [SiteController::class,'MyName']);

//  Multi Parameter pasing Routing

Route::get('FullName/{firstName}/{MiddleName}/{lastname}', [SiteController::class,'FullName']);





