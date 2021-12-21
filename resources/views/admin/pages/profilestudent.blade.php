@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>{{ $student->fname }} {{ $student->lname }}</h1>
        @foreach ($mounths as $month)
            <p>{{ $month->name }}</p>
        @endforeach

    </div>
@endsection