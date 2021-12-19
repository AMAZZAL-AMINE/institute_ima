@extends('layouts.admin')

@section("content")
    <div class="container">
          @foreach ($student as $stud)
              {{ $stud->fname }}  {{ $stud->lname }}
          @endforeach
    </div>
@endsection