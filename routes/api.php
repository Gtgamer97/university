<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/* Public Routes Start()-----------------------------------------------------------------------------*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/* Public Routes End-----------------------------------------------------------------------------*/

/* Protected Routes Start()-----------------------------------------------------------------------------*/

Route::group(['middleware' => ['auth:sanctum']], function () {

    /* Lecturer Start()-----------------------------------------------------------------------------*/

    // Route::get('/lecturers', [LecturerController::class , 'index']);
    // Route::post('/lecturers', [LecturerController::class , 'store']);
    // Route::put('/lecturers', [LecturerController::class, 'update']);
    Route::resource('/lecturers', LecturerController::class);

    /* Lecturer End-----------------------------------------------------------------------------*/

    /* Student Start()-----------------------------------------------------------------------------*/

    //get all students
    // Route::get('/students', [StudentController::class, 'index']);
    // Route::post('/students', [StudentController::class, 'store']);
    // Route::put('/students', [StudentController::class, 'update']);
    Route::resource('/students', StudentController::class);

    /* Student End-----------------------------------------------------------------------------*/

    /* Courses Start()-----------------------------------------------------------------------------*/

    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courseswithclasses', [CourseController::class, 'coursesWithClasses'])->middleware('admin');

    /* Courses End-----------------------------------------------------------------------------*/

    Route::post('/logout', [AuthController::class, 'logout']);

});
/* Protected Routes End-----------------------------------------------------------------------------*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
