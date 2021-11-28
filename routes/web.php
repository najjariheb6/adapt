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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/iheb',function(){
    return view('layouts.test');
});
Route::get('/home', 'HomeController@index')->name('home');

// category route
Route::resource('category', 'CategoryController');
Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);

// ticket
Route::resource('ticket', 'TicketController');
Route::resource('client', 'ClientController');
Route::post('/ticket/addclient','TicketController@addClient');
Route::get('ticket/pdf-view/{id}','TicketController@pdfView');
Route::get('ticket/pdf-save/{id}','TicketController@pdfSave');

// intervention
Route::resource('intervention', 'InterventionController');
Route::post('intervention/new', 'InterventionController@new');
Route::get('intervention/pdf-view/{id}','InterventionController@pdfView');
Route::get('intervention/pdf-save/{id}','InterventionController@pdfSave');
       