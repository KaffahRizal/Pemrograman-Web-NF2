@extends('Admin.main')

@section('content')
    


<div class="pagetitle">
    <h1>Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="card">
        <div class="card-body py-4">
            <a href="/admin/courses/create" class="btn btn-primary m-3">+ Course</a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Desc</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($courses as $course)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->category }}</td>
                        <td>{{ $course->desc }}</td>
                        <td class="d-flex">
                          <a href="{{route('course.edit', $course->id)}}" class="btn btn-warning me-2">Edit</a>
                          <form action="/admin/courses/delete/{{ $course->id }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
  </section>

@endsection