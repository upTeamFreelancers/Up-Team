<?php

use Illuminate\Support\Facades\Route;

use App\Team;
use App\Message;
use App\Project;

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
    $tea = Team::paginate(4);
    $pro = Project::paginate(3);
    $ctea = Team::count();
    $cmes = Message::count();
    $cpro = Project::count();
    return view('welcome', [
        'tea' => $tea,
        'pro' => $pro,
        'ctea' => $ctea,
        'cmes' => $cmes,
        'cpro' => $cpro
    ]);
});

Auth::routes();

// view
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teamm', 'HomeController@team');
Route::get('/message', 'HomeController@message');
Route::get('/projectt', 'HomeController@projectt');
Route::get('/title', 'HomeController@title');

// add save
Route::post('/addteasave', 'HomeController@addteasave');
Route::post('/sendmes', 'MessageController@addmes');
Route::post('/addprosave', 'HomeController@addprosave');

// delete
Route::get('/dtea/{id}', 'HomeController@dtea');
Route::get('/dmes/{id}', 'HomeController@dmes');
Route::get('/dpro/{id}', 'HomeController@dpro');

// edit view
Route::get('/etea/{id}', 'HomeController@etea');
Route::get('/epro/{id}', 'HomeController@epro');

// edit save
Route::post('/editteasave/{id}', 'HomeController@editteasave');
Route::post('/editprosave/{id}', 'HomeController@editprosave');
 // other
Route::get('/read/{id}', 'HomeController@read');
Route::get('/{message}', function () {
    return view('404');
});