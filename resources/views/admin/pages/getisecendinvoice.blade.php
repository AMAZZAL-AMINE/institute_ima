@extends("layouts.admin")

@section("content")
    <div class="container text-center mt-5">
        @if(session()->has('message'))
            <p>Le Facture De Payment Is Ready To Print </p>
            <a class="btn btn-success" href="{{ route("admin.facture.print",$student->id) }}">
                Go To Print Le Facture
            </a>
            @else
            <div >
                <h3>The Student Pay Not Found</h3>
                <a class="btn btn-primary" href="{{ route("admin.search.student") }}">Create A Facture</a>
            </div>
        @endif
    </div>
@endsection