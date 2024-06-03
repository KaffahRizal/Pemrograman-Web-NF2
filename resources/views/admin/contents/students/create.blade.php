@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>+Students</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">+Students</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="section">
      <div class="card">
        <div class="card-body py-4">
            <form action="/admin/student/create" method="post" class="mt-3">
                @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="major" class="form-label">Major</label>
                        <select name="major" id="major" class="form-select">
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>

                    <div class="mb-2">
                      <label for="course_id" class="form-label">course_id</label>
                      <select name="course_id" id="course_id" class="form-select">
                          <option value="">choose Courses</option>
                          @foreach ($courses as $course)
                              <option value="{{ $course->id }}">{{ $course->name }}</option>
                          @endforeach
                      </select>
                  </div>

                    <div class="mb-2">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" name="class" id="class" class="form-control">
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </section>
@endsection