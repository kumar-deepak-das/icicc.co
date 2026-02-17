<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Xyz;
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

//deadlines
Route::get('/important-dates', function () { return view('important-dates'); });


//Committees
Route::get('/committee', function () { return view('committee'); });

//papers
// Route::get('/cpf-poster', function () { return view('cpf-poster'); });
Route::get('/call-for-papers', function () { return view('call-for-papers'); });
Route::get('/call-for-special-session', function () { return view('call-for-special-session'); });

//registration
Route::get('/registration', function () { return view('registration'); });
Route::get('/paper-submission', function () { return view('paper-submission'); });

//program
Route::get('/conference-schedule', function () { return view('conference-schedule'); });
Route::get('/keynote-speaker', function () { return view('speaker-keynote'); });
Route::get('/session-chair', function () { return view('session-chair'); });
// Route::get('/special-session', function () { return view('special-session'); });

//Publication
Route::get('/previous-publications', function () { return view('previous-publications'); });
Route::get('/crc-guidelines', function () { return view('crc-guidelines'); });

//Venue
Route::get('/visa-info', function () { return view('visa-info'); });
Route::get('/how-to-reach', function () { return view('how-to-reach'); });
Route::get('/accommodation', function () { return view('accommodation'); });
Route::get('/near-by-attractions', function () { return view('near-by-attractions'); });

//Policies
Route::get('/terms-and-conditions', function () { return view('terms-and-conditions'); });
Route::get('/payment-policy', function () { return view('policy-payment'); });
Route::get('/refund-policy', function () { return view('policy-refund'); });
Route::get('/privacy-policy', function () { return view('policy-privacy'); });
Route::get('/publication-policy', function () { return view('policy-publication'); });

//Contact
Route::get('/contact-us', function () { return view('contact-us'); });
