<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use App\Models\Listing;
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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

/* require __DIR__.'/auth.php'; */

//Common Resource Routes:
// index - show all listings
// show - show single listings
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

/* All listings */
Route::get('/', [ListingController::class, 'index']);

/* Show Create Form */
Route::get('/listings/create', [ListingController::class, 'create']);

/* Store listing data */
Route::post('/listings', [ListingController::class, 'store']);

/* Single Listing */
Route::get('/listings/{listing}', [ListingController::class, 'show']);


