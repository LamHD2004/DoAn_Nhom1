<?php

use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

    // Homepage

Route::get('/ShowFormHomePage',[App\Http\Controllers\Homepage::class,'ShowFormHomePage'])->name('ShowFormHomePage');

Route::get('/ShowFormAbout',[App\Http\Controllers\About::class,'ShowFormAbout'])->name('ShowFormAbout');

Route::get('/ShowForHowWork',[App\Http\Controllers\HowWork::class,'ShowForHowWork'])->name('ShowForHowWork');

Route::get('/ShowFormBroweProduct',[App\Http\Controllers\BroweProduct::class,'ShowFormBroweProduct'])->name('ShowFormBroweProduct');

Route::get('/ShowFormBlog',[App\Http\Controllers\Blog::class,'ShowFormBlog'])->name('ShowFormBlog');

Route::get('/ShowFormBlogDetails',[App\Http\Controllers\BlogDetails::class,'ShowFormBlogDetails'])->name('ShowFormBlogDetails');

Route::get('/ShowFormAuctionDetails/{id}',[App\Http\Controllers\AuctionDetails::class,'ShowFormAuctionDetails'])->name('ShowFormAuctionDetails');

Route::get('/ShowFormFAQ',[App\Http\Controllers\faq::class,'ShowFormFAQ'])->name('ShowFormFAQ');

Route::get('/ShowFormHistories',[App\Http\Controllers\Histories::class,'ShowFormHistories'])->name('ShowFormHistories');



Route::get('/Error_404',[App\Http\Controllers\Error_404::class,'Error_404'])->name('Error_404');

Route::get('/contact',[App\Http\Controllers\Contact::class,'contact'])->name('contact');

    // Auth Register

Route::get('/ShowFormSignup',[App\Http\Controllers\Signup::class,'ShowFormSignup'])->name('ShowFormSignup');

Route::post('/getRegister',[App\Http\Controllers\Signup::class,'getRegister'])->name('getRegister');

    //Auth Login

Route::get('/ShowFormLogin',[App\Http\Controllers\Login::class,'ShowFormLogin'])->name('ShowFormLogin');

Route::post('/getLogin',[App\Http\Controllers\Login::class,'getLogin'])->name('getLogin');

Route::get('/getLogout',[App\Http\Controllers\Homepage::class,'getLogout'])->name('getLogout');
