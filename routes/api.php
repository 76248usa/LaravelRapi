<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\Home;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});
//Chart Route
Route::get('/chartdata', [ChartController::class, 'onAllSelect']);
//Client Review Route
Route::get('/clientreview', [ClientReviewController::class, 'onAllSelect']);
//Contact Form Route
Route::post('/contactsend', [ContactController::class, 'onSendContact']);
//Courses Route
Route::get('/courses', [CoursesController::class, 'selectCourses']);
Route::get('/coursedetails/{courseId}', [CoursesController::class, 'courseDetails']);
//Footer Route
Route::get('/footer', [FooterController::class, 'onSelectAll']);
//Information Route
Route::get('/information', [InformationController::class, 'onSelectAll']);
//Services Route
Route::get('/services', [ServiceController::class, 'onSelectAll']);
//Projects Route
Route::get('/threeprojects', [ProjectController::class, 'onSelectThree']);
Route::get('/projects', [ProjectController::class, 'onSelectAll']);
Route::get('/projectdetails/{projectId}', [ProjectController::class, 'projectDetails']);

//Home Route
Route::get('/home/video', [Home::class, 'selectVideo']);
Route::get('/totalhome', [Home::class, 'selectTotalHome']);
Route::get('/techhome', [Home::class, 'selectTechHome']);
Route::get('/homepage/title', [Home::class, 'selectHomeTitle']);