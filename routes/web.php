<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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



//home
Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('home'); });


//Call for Papers
Route::get('/call-for-papers', function () { return view('call-for-papers'); });
Route::get('/special-sessions', function () { return view('special-sessions'); });


//Registration
Route::get('/crc-info', function () { return view('crc-info'); });
Route::get('/submission-guidelines', function () { return view('submission-guidelines'); });

//Auther Info
Route::get('/registration', function () { return view('registration'); });



//Important Dates
Route::get('/important-dates', function () { return view('important-dates'); });

//Committees
Route::get('/committees', function () { return view('committees'); });

//Program
Route::get('/program-schedule', function () { return view('program-schedule'); });
Route::get('/online-presentation', function () { return view('online-presentation'); });
Route::get('/parallel-tracks', function () { return view('parallel-tracks'); });

//Publication
Route::get('/previous-publications', function () { return view('previous-publications'); });


//Speackers
Route::get('/keynote-speakers', function () { return view('speakers-keynote'); });
Route::get('/guests', function () { return view('guests'); });
Route::get('/session-chairs', function () { return view('session-chairs'); });
Route::get('/session-chairs-past', function () { return view('session-chairs-past'); });
Route::get('/previous-speakers', function () { return view('speakers-previous'); });
Route::get('/past-delegates', function () { return view('delegates-past'); });

//Gallery
Route::get('/gallery', function () { return view('gallery'); });

//Travel
Route::get('/visa', function () { return view('visa'); });
Route::get('/how-to-reach', function () { return view('how-to-reach'); });
Route::get('/accommodation', function () { return view('accommodation'); });
Route::get('/near-by-attractions', function () { return view('near-by-attractions'); });

//Policies
Route::get('/terms-and-conditions', function () { return view('policy-terms-and-conditions'); });
Route::get('/payment-policy', function () { return view('policy-payment'); });
Route::get('/refund-policy', function () { return view('policy-refund'); });
Route::get('/privacy-policy', function () { return view('policy-privacy'); });
Route::get('/publication-policy', function () { return view('policy-publication'); });
Route::get('/editorial-policy', function () { return view('policy-editorial'); });



//Contact
Route::get('/contact-us', function () { return view('contact-us'); });
