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
Route::get('/home', function () {
    return view('home');
});
Route::get('/registeration', function () {
    return view('EventRegisteration');
});
Route::get('/webCommitee', function () {
    return view('web');
});
Route::get('/gameCommitee', function () {
    return view('game');
});
Route::get('/lrCommitee', function () {
    return view('lr');
});
Route::get('/hrCommitee', function () {
    return view('hr');
});
Route::get('/prCommitee', function () {
    return view('pr');
});
Route::get('/linuxCommitee', function () {
    return view('linux');
});
Route::get('/artCommitee', function () {
    return view('art');
});
Route::get('/englishHeroesCommitee', function () {
    return view('eh');
});
Route::get('/projectsCommitee', function () {
    return view('projects');
});
Route::get('/blenderCommitee', function () {
    return view('blender');
});
Route::get('/cccCommitee', function () {
    return view('ccc');
});