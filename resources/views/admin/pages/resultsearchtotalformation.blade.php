@extends("layouts.admin")

@section("content")
    <div class="container">
         {{-- {{ $payedmonths }} --}}
                 <h1>Total : {{ $payedmonths->sum('prix');  }} DH</h1>

    </div>
@endsection