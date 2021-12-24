@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1 class="text-center mt-5">Search For Students</h1>
    <form method="get" action="" class="form-inline d-flex justify-content-center md-form form-sm active-purple-2 mt-2">
        @csrf
        <input class="form-control form-control-sm mr-3 w-75 " type="text" placeholder="Search"
            aria-label="Search">
        <button class="btn btn-primary " type=""><i class="fas fa-search" aria-hidden="true"></i></button>
    </form>
    </div>
@endsection