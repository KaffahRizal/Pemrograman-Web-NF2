@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Students</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="section">
      <div class="card">
        <div class="card-body py-4">
          <a href="/admin/student/create" class="btn btn-primary m-3">Create+</a>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Name</th>
                <th>Major</th>
                <th>Class</th>
                <th>Course</th>
                <th>Action</th>

                @foreach ($students as $student)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->major }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{!! $student->course->name ?? '<span class="badge bg-danger">Belum mengikuti Course</span>' !!}</td>
                    <td class="d-flex">
                      <a href="{{route('student.edit', $student->id)}}" class="btn btn-warning me-2">Edit</a>
                      <form action="/admin/student/delete/{{ $student->id }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection