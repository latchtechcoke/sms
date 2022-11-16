<?php

use Illuminate\Support\Facades\Auth;
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

// Landing page
Route::get('/', function () { return view('welcome'); });

// Authentication pages
Auth::routes();

// Dashboard
Route::get('/home', 'HomeController@index')->name('home');

//Bulk SMS pages
Route::get('/bulksms/dashboard', 'BulkSmsController@blank');
Route::get('/bulksms/contact-groups', 'BulkSmsController@contactGroups');
Route::get('/bulksms/contacts', 'BulkSmsController@contacts');
Route::get('/bulksms/contact-text', 'BulkSmsController@contactText');
Route::get('/bulksms/delivery-report', 'BulkSmsController@deliveryReport');
Route::get('/bulksms/edit-group', 'BulkSmsController@editGroup');
Route::get('/bulksms/group-text', 'BulkSmsController@groupText');
Route::get('/bulksms/single-text', 'BulkSmsController@singleText');
Route::get('/bulksms/text-messages', 'BulkSmsController@textMessages');
Route::get('/bulksms/set-webhook', 'BulkSmsController@webhook');

// Posts
Route::get('/posts', 'PostsController@index');

// API credentials
Route::get('/developers', 'DevelopersController@index');