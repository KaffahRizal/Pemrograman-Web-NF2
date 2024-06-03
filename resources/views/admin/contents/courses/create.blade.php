@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>+Courses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">+Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="section">
      <div class="card">
        <div class="card-body py-4">
            <form action="/admin/courses/create" method="post" class="mt-3">
              @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    {{-- <div class="mb-2">
                        <label for="kategori" class="form-label">kategori</label>
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="">Pilih Kategori</option>
                            <option value="Teknik Informatika">Bahasa Inggris</option>
                            <option value="Sistem Informasi">Bahasa Rusia</option>
                            <option value="Bisnis Digital">Bahasa Polandia</option>
                        </select>
                    </div> --}}

                    <div class="mb-2">
                      <label for="category" class="form-label">category</label>
                      <input type="text" name="category" id="category" class="form-control">
                    </div>

                    <div class="mb-2">
                      <label for="desc" class="form-label">Desc</label>
                      <input type="text" name="desc" id="desc" class="form-control">
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