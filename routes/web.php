<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'heading' => 'Listing Details',
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }

// });
//alternatively

Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'heading' => 'Listing Details',
        'listing' => $listing
    ]);
});
