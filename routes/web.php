<?php

use App\Http\Controllers\ManagementController;
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
    return view('welcome');
});

Route::match(['get', 'post'], '/studentsignup', [ManagementController::class, 'Studentsignup']);

Route::match(['get', 'post'], '/studentsignup/{id}', [ManagementController::class, 'Studentsignup']);

Route::match(['get', 'post'], '/instructorsignup', [ManagementController::class, 'Instructorsignup']);

Route::match(['get', 'post'], '/adminsignup', [ManagementController::class, 'Adminsignup']);

Route::match(["GET", "POST"], '/payment', [ManagementController::class, "payment"]);


// Laravel 8
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

Route::match(['get', 'post'],'/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->name('callback');

Route::match(['get', 'post'], '/payment', [ManagementController::class, 'payment']);

Route::match(['get', 'post'], '/login', [ManagementController::class, 'Login'])->name('login');

Route::match(['get', 'post'], '/logout', [ManagementController::class, 'logout']);

Route::get('/home', [ManagementController::class, 'homepage']);

Route::get('/course', [ManagementController::class, 'Course']);

Route::get('/course/{id}', [ManagementController::class, 'Course']);

Route::get('/courseSingle/{id}', [ManagementController::class, 'CourseSingle']);

Route::get('/courseSingle/{id}/{user_id}', [ManagementController::class, 'CourseSingle']);

Route::get('/courseSingle', [ManagementController::class, 'CourseSingle']);

Route::get('/studentDashboard', [ManagementController::class, 'StudentDashboard'])->middleware('auth');

Route::get('/studentProfile', [ManagementController::class, 'StudentProfile'])->middleware('auth');

Route::get('/studentCourse', [ManagementController::class, 'StudentCourse'])->middleware('auth');

Route::get('/instructorDashboard', [ManagementController::class, 'InstructorDashboard'])->middleware('auth');

Route::get('/instructorProfile', [ManagementController::class, 'InstructorProfile'])->middleware('auth');

Route::get('/instructorStudent', [ManagementController::class, 'InstructorStudent'])->middleware('auth');

Route::get('/instructorCourse', [ManagementController::class, 'InstructorCourse'])->middleware('auth');

Route::match(['get', 'post'],'/lesson', [ManagementController::class, 'Lesson'])->middleware('auth')->name('lesson');

Route::match(['get', 'post'],'/createCourse', [ManagementController::class, 'CreateCourse'])->middleware('auth');

Route::get('/adminDashboard', [ManagementController::class, 'AdminDashboard'])->middleware('auth');

Route::match(['get', 'post'],'/addcategory', [ManagementController::class, 'Addcategory'])->middleware('auth');

Route::get('adminProfile', [ManagementController::class, 'AdminProfile'])->middleware('auth');

Route::get('adminCourse', [ManagementController::class, 'AdminCourse'])->middleware('auth');

Route::match(["GET", "POST"], '/featured/{id}', [ManagementController::class, "feature_a_course"])->middleware('auth');

Route::get('adminStudent', [ManagementController::class, 'AdminStudent'])->middleware('auth');

Route::match(['get', 'post'], 'adminInstructor', [ManagementController::class, 'AdminInstructor'])->middleware('auth');


