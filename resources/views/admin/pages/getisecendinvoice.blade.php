@extends("layouts.admin")

@section("content")
    <div class="container text-center mt-5">
        @if(session()->has('message'))
            <p>Le Facture De Payment Is Reafy To Print </p>
            <a class="btn btn-success" href="">
                Go To Print Le Facture
            </a>
            @else
            <div >
                <h3>The Student Pay Not Found</h3>
            </div>
        @endif
    </div>
@endsection