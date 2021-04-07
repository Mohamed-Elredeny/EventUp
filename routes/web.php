<?php

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

Route::get('/', function () {
    return view('site.index');

});

Route::get('/allHalls', function () {
    return view('site.allHalls');
});

Route::get('/allOrganizers', function () {
    return view('site.allOrganizers');
});

Route::get('/allRests', function () {
    return view('site.allRests');
});

Route::get('/aboutUs', function () {
    return view('site.aboutUs');
});

Route::get('/contactUs', function () {
    return view('site.contactUs');
});

Route::get('/eventDetails', function () {
    return view('site.eventDetails');
});

Route::get('/favorateHalls', function () {
    return view('site.favorateHalls');
});

Route::get('/favorateResets', function () {
    return view('site.favorateResets');
});

Route::get('/followingOrganizer', function () {
    return view('site.followingOrganizer');
});

Route::get('/forgetPassword', function () {
    return view('site.forgetPassword');
});

Route::get('/hallDetails', function () {
    return view('site.hallDetails');
});

Route::get('/hallEvents', function () {
    return view('site.hallEvents');
});

Route::get('/organizerEvents', function () {
    return view('site.organizerEvents');
});

Route::get('/myRequest', function () {
    return view('site.myRequest');
});

Route::get('/profile', function () {
    return view('site.profile');
});

Route::get('/resetPassword', function () {
    return view('site.resetPassword');
});

Route::get('/restDetails', function () {
    return view('site.restDetails');
});

Route::get('/signIn', function () {
    return view('site.signIn');
});

Route::get('/signUp', function () {
    return view('site.signUp');
});

Route::get('/updateProfile', function () {
    return view('site.updateProfile');
});

Route::get('/signInOrganizer', function () {
    return view('organizer.signIn');
});

Route::get('/resetPasswordOrganizer', function () {
    return view('organizer.resetPassword');
});

Route::get('/forgetPasswordOrganizer', function () {
    return view('organizer.forgetPassword');
});

Route::get('/signUpOrganizer', function () {
    return view('organizer.signUp');
});

Route::get('/signInAdmin', function () {
    return view('admin.signIn');
});

Route::get('/resetPasswordAdmin', function () {
    return view('admin.resetPassword');
});

Route::get('/forgetPasswordAdmin', function () {
    return view('admin.forgetPassword');
});

Route::get('/eventSchedules', function () {
    return view('site.eventSchedules');
});
