@extends("layouts.app")

@section('content')
    <div class="page-wrap d-flex flex-row align-items-center mt-5 mb-5">
        <div class="container mt-5">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-md-12 text-center mt-5">
                    <span class="display-1 d-block mt-5">404</span>
                    <div class="mb-4 lead">La page que vous recherchez n'existe pas.</div>
                    <a href="{{ route('home') }}" class="btn btn-link">Retour Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection