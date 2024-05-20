<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

<body>

    @include('admin.partials._header')
    @include('admin.partials._sidebar')
    @include('admin.partials._scripts')
    
    
    
    <main id="main" class="main">

    @yield('content')
    
</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<script src="{{ asset('NiceAdmin') }}/assets/js/main.js"></script>

</body>
@include('admin.partials._footer')

</html>