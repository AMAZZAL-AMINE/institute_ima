@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="text-center d-flex align-items-center">ERROR 419</h1>
        <p  class="text-center d-flex align-items-center">Malheureusement, votre session a expiré, veuillez vous reconnecter</p>
        <a  class="btn btn-primary text-center d-flex align-items-center" href="{{ route("login") }}">login</a>
    </div>
@endsection