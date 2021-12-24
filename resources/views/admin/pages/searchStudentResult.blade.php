@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Search Of Student Result </h1>
        <div class="contentofresultstudent">
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
        </div>
    </div>
@endsection