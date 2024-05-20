<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // method untk menampilkan halaman student
    public function index(){
        // mendapatkan data student dri database
        $students = Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.students.index', [
            'students' => $students 
        ]);
    }
}
