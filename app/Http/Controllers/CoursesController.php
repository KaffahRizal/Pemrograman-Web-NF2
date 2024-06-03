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

    public function create(){

        return view('admin.contents.courses.create' );
    
    }

    // method untuk menyimpan data course ['name', 'category','desc'];
    public function store(Request $request)
    {
        // dd($request->all()); "buat nguji coba"
        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

        // simpan data ke database
        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        // arahkan ke halaman course index
        return redirect('/admin/courses')->with('pesan', 'berhasil menambahkan data.');
        
        
    }

    // method untk menampilkan form edit course
    public function edit($id){
        // cari data course berdasarkan id
        $courses = Course::find($id); //select * from course where id = $id

        // kirim course ke view edit
        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]); 
    }

    // method untk menyimpan hasil update data course
    public function update($id,Request $request){

        // cari data course berdasarkan id
        $courses = Course::find($id); //select * from course where id = $id

        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);
        //simpan perubahan data ke database
        
        $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        // alihkan ke halaman course index
        return redirect('/admin/courses')->with('pesan', 'berhasil mengupdate data.');

    }

    // method untk menghapus data course
    public function destroy($id){
        // cari data course berdasarkan id
        $courses = Course::find($id); //select * from course where id = $id

        // hapus data course
        $courses->delete();


        // alihkan ke halaman course index
        return redirect('/admin/courses')->with('pesan', 'berhasil menghapus data.');
    }
}
