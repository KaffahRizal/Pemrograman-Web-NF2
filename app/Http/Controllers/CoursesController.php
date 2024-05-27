<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //method untk menampilkan halaman courses
    public function index(){
        //mendapatkan data courses dari database
        $courses = Course::all();

        //panggil view dan kirim data ke view
        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);
    }
}
