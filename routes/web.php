<?php

use App\Http\Controllers\ActivityController;
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

// Route for Manage Registration
Route::get('/Manage Registration/RegNewMem', function(){
    return view('Manage Registration/RegNewMem');
});

Route::get('/Manage Registration/Lecturer/addLecturerProfile', function () {
    return view('Manage Registration/Lecturer/addLecturerProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {
    return view('Manage Registration/Student/addStudentProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {
    return view('Manage Registration/Student/addStudentProfile');
});

Route::get('/Manage Registration/SearchProfileOption', function () {
    return view('Manage Registration/SearchProfileOption');
});

Route::get('/Manage Registration/Lecturer/SearchLecturer', function () { //route for search lecturer page
    return view('Manage Registration/Lecturer/SearchLecturer');
});

Route::get('/Manage Registration/Student/SearchStudent', function () { //route for search student page
    return view('Manage Registration/Student/SearchStudent');
});

Route::get('/Manage Registration/Student/viewStudentProfile', function () { //test
    return view('Manage Registration/Student/viewStudentProfile');
});
// end manage register

Route::get('/Manage Committee Election/Student/StudCandidateListPage', function () {
    return view('Manage Committee Election/Student/StudCandidateListPage');
});

Route::get('/Manage Committee Election/Student/VotingPage', function () {
    return view('Manage Committee Election/Student/VotingPage');
});

Route::get('/ElectionResultPage', function () {
    return view('ElectionResultPage');
});

Route::get('/Manage Committee Election/Committee/CandidateListPage', function () {
    return view('Manage Committee Election/Committee/CandidateListPage');
});

Route::get('/Manage Committee Election/Student/StudCandidateProfilePage', function () {
    return view('Manage Committee Election/Student/StudCandidateProfilePage');
});

//Routes for ManageActivity
Route::resource("activity", ActivityController::class);
Route::get('activityListCommitteePage', [App\Http\Controllers\ActivityController::class,'index']);
Route::post('addActivityPage', [App\Http\Controllers\ActivityController::class,'store'])->name('activity.store');
Route::get('activityListCommitteePage/{ActivityID}', [App\Http\Controllers\ActivityController::class,'edit'])->name('activity.edit');
Route::post('activityListCommitteePage/{ActivityID}', [App\Http\Controllers\ActivityController::class,'update'])->name('activity.update');
Route::get('activityListCommitteePage/destroy/{ActivityID}', [App\Http\Controllers\ActivityController::class,'destroy'])->name('activity.destroy');
Route::get('activityListUsersPage', [App\Http\Controllers\ActivityController::class,'studentMenu']);
Route::get('activityDetailsUsersPage/{ActivityID}', [App\Http\Controllers\ActivityController::class,'studentView']);
Route::post('activityDetailsCommitteePage', [App\Http\Controllers\ActivityController::class,'show']);
Route::resource("activityDetailsUsersPage", ActivityController::class);
Route::get('createActivityPage', [App\Http\Controllers\ActivityController::class,'create'])->name('activity.create');
Route::get('/click_delete/{ActivityID}','ActivityController@destroy');



//Routes for Manage Bulletin
Route::get('/Manage Bulletin/viewBulletinListCommittee', function(){
    return view('/Manage Bulletin/viewBulletinListCommittee');
});

Route::get('/Manage Bulletin/addBulletin', function(){
    return view('/Manage Bulletin/addBulletin');
});

Route::get('/Manage Bulletin/editBulletin', function(){
    return view('/Manage Bulletin/editBulletin');
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
