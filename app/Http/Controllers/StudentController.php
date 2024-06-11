<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;


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


    // method untk menampilkan form tambah student
    public function create(){
        
        //dapatkan data course dari database
        $courses = Course::all();

        return view('admin.contents.students.create' , [
                'courses' => $courses
        
        ]);
    
    }

    // method untuk menyimpan data student
    public function store(Request $request)
    {
        // dd($request->all()); "buat nguji coba"
        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'numeric|nullable'
        ]);

        // simpan data ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
        ]);

        // arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'berhasil menambahkan data.');
        
        
    }

    // method untk menampilkan form edit student
    public function edit($id){
        // cari data course dari database
        $courses = Course::all();

        // cari data student berdasarkan id
        $student = Student::find($id); //select * from student where id = $id

        // kirim student ke view edit
        return view('admin.contents.students.edit', [
            'student' => $student,
            'courses' => $courses
        ]); 
    }

    // method untk menyimpan hasil update data student
    public function update($id,Request $request){

        // cari data student berdasarkan id
        $student = Student::find($id); //select * from student where id = $id
        

        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'numeric|nullable'
        ]);
        //simpan perubahan data ke database
        
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
        ]);

        // alihkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'berhasil mengupdate data.');
    }

    // method untk menghapus data student
    public function destroy($id){
        // cari data student berdasarkan id
        $student = Student::find($id); //select * from student where id = $id

        // hapus data student
        $student->delete();


        // alihkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'berhasil menghapus data.');
    }
}