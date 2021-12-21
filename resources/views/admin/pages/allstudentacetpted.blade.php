@extends("layouts.admin")

@section("content")
    <div>
        @foreach ($students as $std)
            {{ $std->fname }} <br>
        @endforeach
    </div>
@endsection