<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

// root route

Route::get('/', function () {
    return view('welcome');
});

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