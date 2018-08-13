<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/submitProperty', function () {
    return view('submit');
});
Route::get('/listingMap', function () {
    return view('listing-map');
});
Route::get('/myProperties', function () {
    return view('my-properties');
});
Route::get('/editAgentProfile', function () {
    return view('edit-agent-profile');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/agents', function () {
    return view('agents');
});
Route::get('/agentDetails', function () {
    return view('agent-detail');
});
Route::get('/galerie', function () {
    return view('gallery');
});
Route::get('/blog', function () {
    return view('blog');
})
;Route::get('/submit', function () {
    return view('submit');
});
;Route::get('/propertyDetail', function () {
    return view('property-detail');
});

;Route::get('/achatMaison', function () {
    return view('achat-maison');
});
;Route::get('/venteTerrain', function () {
    return view('vente-terrain');
});
;Route::get('/locationSaisonniere', function () {
    return view('location-saisonniere');
});


;Route::get('/listView', function () {
    return view('simple-listing');
});
;Route::get('/gridListing', function () {
    return view('grid-listing');
});
;Route::get('/gridListingFw', function () {
    return view('grid-listing-fw');
});
;Route::get('/gridMap', function () {
    return view('grid-map');
});
;Route::get('/agentDetail', function () {
    return view('agent-detail');
});
