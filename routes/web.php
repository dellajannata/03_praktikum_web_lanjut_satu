<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\contohController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
// No. 1
Route::get('/',[HomeController::class,'home']);


// No.2
Route::prefix('category')->group(function(){
    Route::get('/product',[ProductController::class,'product_1']);
});

//No.3
Route::get('news',[NewsController::class,'news_1']);
Route::get('/news1/{title}', [NewsController::class, 'news_2']);
// Route::get('/news/{title?}', function($title){
//     return redirect('https://www.educastudio.com/news/' .$title);
// });

// No.4
Route::prefix('program')->group(function(){
    Route::get('/program1',[ProgramController::class,'program_1']);
});

//No.5
Route::get('about',[AboutController::class,'about_1']);
// Route::get('AboutUs', function(){
//     return redirect('https://www.educastudio.com/about-us');
// });

// No.6
Route::resource('contactus', ContactController::class);

