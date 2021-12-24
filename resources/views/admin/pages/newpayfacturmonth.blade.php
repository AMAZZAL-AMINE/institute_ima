@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="d-flex align-items-center">
            <h2>Nom & Prénom : </h2> <h2 class="text-primary ml-3"> {{ $student->fname }} {{ $student->lname }}</h2>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <h2>Cart Nationale : </h2> <h2 class="text-primary ml-3"> {{ $student->cin }} {{ $student->lname }}</h2>
        </div>
        <hr>
        <div class="d-flex align-items-center">
            <h2>Mois payés  : </h2> 
            <h2 class="text-primary ml-3"> 
                @foreach ($months as $month)
                    <span>{{ $month->name }}</span>
                @endforeach 
        </h2>
        </div>
    </div>
@endsection