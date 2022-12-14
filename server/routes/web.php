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

// Landing pages
Route::get('/', function () { return view('frontend.index'); });
Route::get('/404', function () { return view('frontend.404'); });
Route::get('/about', function () { return view('frontend.about'); });
Route::get('/blog-details', function () { return view('frontend.blog-details'); });
Route::get('/blog-three', function () { return view('frontend.blog-three'); });
Route::get('/blog-two', function () { return view('frontend.blog-two'); });
Route::get('/blog', function () { return view('frontend.blog'); });
Route::get('/case-details', function () { return view('frontend.case-details'); });
Route::get('/case', function () { return view('frontend.case'); });
Route::get('/contact', function () { return view('frontend.contact'); });
Route::get('/country-coverage', function () { return view('frontend.country-coverage'); });
Route::get('/email-service', function () { return view('frontend.email-service'); });
Route::get('/faq', function () { return view('frontend.faq'); });
Route::get('/index-two', function () { return view('frontend.index-two'); });
Route::get('/location-based-sms', function () { return view('frontend.location-based-sms'); });
Route::get('/masking-sms', function () { return view('frontend.masking-sms'); });
Route::get('/non-masking-sms', function () { return view('frontend.non-masking-sms'); });
Route::get('/operators', function () { return view('frontend.operators'); });
Route::get('/pricing-plan', function () { return view('frontend.pricing-plan'); });
Route::get('/privacy', function () { return view('frontend.privacy'); });
Route::get('/promothional-sms', function () { return view('frontend.promothional-sms'); });
Route::get('/promotional-sms', function () { return view('frontend.promotional-sms'); });
Route::get('/registration', function () { return view('frontend.registration'); });
Route::get('/reseller', function () { return view('frontend.reseller'); });
Route::get('/service-promotion', function () { return view('frontend.service-promotion'); });
Route::get('/service', function () { return view('frontend.service'); });
Route::get('/sign-in', function () { return view('frontend.sign-in'); });
Route::get('/sign-up', function () { return view('frontend.sign-up'); });
Route::get('/voice-message', function () { return view('frontend.voice-message'); });

// Documentation pages
Route::get('/documentation', function () { return view('documentation.index'); });
Route::get('/documentation/404', function () { return view('documentation.404'); });
Route::get('/documentation/alert', function () { return view('documentation.alert'); });
Route::get('/documentation/approach', function () { return view('documentation.approach'); });
Route::get('/documentation/article-2', function () { return view('documentation.article-2'); });
Route::get('/documentation/article', function () { return view('documentation.article'); });
Route::get('/documentation/badge', function () { return view('documentation.badge'); });
Route::get('/documentation/bootstrap-2', function () { return view('documentation.bootstrap-2'); });
Route::get('/documentation/bootstrap', function () { return view('documentation.bootstrap'); });
Route::get('/documentation/contact', function () { return view('documentation.contact'); });
Route::get('/documentation/content', function () { return view('documentation.content'); });
Route::get('/documentation/faq', function () { return view('documentation.faq'); });
Route::get('/documentation/layout', function () { return view('documentation.layout'); });
Route::get('/documentation/login', function () { return view('documentation.login'); });
Route::get('/documentation/pagination', function () { return view('documentation.pagination'); });
Route::get('/documentation/semantic', function () { return view('documentation.semantic'); });
Route::get('/documentation/sign-up', function () { return view('documentation.sign-up'); });
Route::get('/documentation/typography', function () { return view('documentation.typography'); });

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