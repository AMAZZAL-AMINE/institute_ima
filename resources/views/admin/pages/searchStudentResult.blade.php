@extends("layouts.admin")

@section("content")
    <div class="container">
        @if($students->isNotEmpty())
        @if(!empty($search))
        <h1>Search  Result Of <span class="text-danger">{{ $search }}</span> </h1>
        @endif
        @endif
        <div class="contentofresultstudent">
            @if($students->isNotEmpty())
           
            @if(!empty($search))
            @foreach ($students as $student)
            <div class="cartcontentofresult">
                <div class="img"><img src="/images/logo.png" alt=""></div>
                <div class="cartcontentbody">
                    <div><h1>{{ $student->fname }} {{ $student->lname }}</h1></div>
                    <div class="cartbodyformandcin">
                        <div><b>Tel: {{ $student->phone }}</b></div>
                        <div><b>Cin: {{ $student->cin }}</b></div>
                    </div>
                    <div class="buttontoselect -100">
                        <a  href="">Select </a>
                    </div>
                </div>
            </div>
           
          @endforeach
          @else
          <p>Sorry We Dot Found This</p>
          @endif
         @else
         <p>Sorry We Dot Found This</p>
           @endif
        </div>
    </div>
@endsection