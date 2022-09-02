<?php

use App\Http\Resources\BooksCollection;
use App\Http\Resources\BooksResource;
use App\Http\Resources\QuotesCollection;
use App\Http\Resources\QuotesResource;
use App\Models\Books;
use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/books', function(){
    return new BooksCollection(Books::all());
});

Route::get('/book/{id}', function ($id) {
    return new BooksResource(Books::findOrFail($id));
});

Route::get('/quotes', function () {
    return new QuotesCollection(Quotes::all());
});

Route::get('/quote/{id}', function ($id) {
    return new QuotesResource(Quotes::findOrFail($id));
});