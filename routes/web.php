<?php

use \App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Listingcontroller;
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


// all Listings
Route::get('/',[Listingcontroller::class ,'index']);

//single Listings
Route::get('/Listings/{listing}',[Listingcontroller::class ,'show']);

//store Listings data
Route::post('/Listings',[Listingcontroller::class ,'store']);

// show create form
Route::get('/listings/create',[Listingcontroller::class ,'create']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
// Route::post('/users/authenticate', [UserController::class, 'authenticate']);