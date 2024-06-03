<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
route::get('admin/course', [CoursesController::class, 'index']);

// route untuk menampilkan form tambah student
route::get('admin/student/create', [StudentController::class, 'create']);

// route untuk mengirim data form tambah student
route::post('admin/student/create', [StudentController::class, 'store']);

// route untuk menampilkan form edit student
route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

// route untuk menyimpan hasil update
route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// route untuk menghapus student
route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

