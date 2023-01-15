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
Route::get('/', function(){
    return view('homepage');
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/Manage Registration/RegNewMem', function(){
    return view('Manage Registration/RegNewMem');
});

Route::get('/Manage Committee Election/Student/StudCandidateListPage', function () {
    return view('Manage Committee Election/Student/StudCandidateListPage');
});

Route::get('/Manage Committee Election/Student/VotingPage', function () {
    return view('Manage Committee Election/Student/VotingPage');
});

Route::get('/Manage Committee Election/Student/ElectionResultPage', function () {
    return view('Manage Committee Election/Student/ElectionResultPage');
});

Route::get('/Manage Registration/SearchProfileOption', function () {  //route for search profile
    return view('Manage Registration/SearchProfileOption');
});

Route::get('/Manage Registration/Student/SearchStudent', function () { //route for search student page
    return view('Manage Registration/Student/SearchStudent');
});

Route::get('/Manage Registration/Lecturer/SearchLecturer', function () { //route for search lecturer page
    return view('Manage Registration/Lecturer/SearchLecturer');
});

Route::get('/Manage Registration/Lecturer/addLecturerProfile', function () {  //route for add lecturer page
    return view('Manage Registration/Lecturer/addLecturerProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {  //route for add student page
    return view('Manage Registration/Student/addStudentProfile');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
