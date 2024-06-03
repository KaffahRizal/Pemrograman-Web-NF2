<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

// root route

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/salam',function(){
//     return "Assalamualaikum";
// });





/**
 * method HTTP
 * 1 get digunakan untuk menampilkan halaman 
 * 2 post digunakan untuk mengirim data
 * 3 put digunakan untuk meng-update data
 * delete digunakan untuk meng-hapus data
 */

//route untuk menampilkan dashboard
route::get('admin/dashboard', [DashboardController::class, 'index']);

// route untuk menampilkan student 
route::get('admin/student', [StudentController::class, 'index']);

// route untuk menampilkan course
route::get('admin/courses', [CoursesController::class, 'index']);

// route untuk menampilkan form tambah student
route::get('admin/student/create', [StudentController::class, 'create']);

// route untuk menampilkan form tambah course
route::get('admin/courses/create', [CoursesController::class, 'create']);

// route untuk mengirim data form tambah student
route::post('admin/student/create', [StudentController::class, 'store']);

// route untuk mengirim data form tambah course
route::post('admin/courses/create', [CoursesController::class, 'store']);

// route untuk menampilkan form edit student
route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

// route untuk menampilkan form edit course
route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit'])->name('course.edit');

// route untuk menyimpan hasil update student
route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// route untuk menyimpan hasil update course
route::put('admin/courses/update/{id}', [CoursesController::class, 'update']);

// route untuk menghapus student
route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

// route untuk menghapus course
route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']);

