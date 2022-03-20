<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Models\Author;
use App\Models\Category;

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
    return view('welcome');
});

Route::prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
    Route::get("/name/{name}", function ($name) {
        return "Pegawai dengan name: " . $name . ".";
    })->whereAlpha('name');
});

Route::redirect("/employee", "/pegawai");

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/respon', function() {
    return view('respon');
});

// basic response
Route::get('/basic', function () {
    return 'Hallo ngab, coba basic';
});

// object response
Route::get('/header', function () {
    return response('Hallo', 200)->header('Content-Type', 'text/html');
});

// json response
Route::get('/json', function () {
    return response()->json([
        'Nama1' => 'Fitrah',
        'Nama2' => 'Ryan'
    ]);
});

// attach cookie
Route::get('/header-cookie', function () {
    return response('Hallo', 200)
        ->header('Content-Type', 'text/html')
        ->withcookie('name', 'Fitrah Arie');
});

// cookie to response
Route::get('/cookie', function () {
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
        ->header('Content-Type', $type)
        ->cookie('name', 'value', $minutes);
});

// redirect response
Route::get('/dashboard', function () {
    return redirect('/');
});

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get("/categories", function(){
    return view('categories', [
        'title' => 'Article Categories',
        'categories' => Category::all()
    ]);
});

Route::get("/categories/{category:slug}", function(Category $category){
    return view('article', [
        'title' => $category->name,
        'articles' => $category->article,
        'category' => $category->name
    ]);
});

Route::get("/authors/{author:username}", function(Author $author){
    return view('article', [
        'title' => $author->name,
        'articles' => $author->article,
        'category' => $author->name
    ]);
});
