@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="topheaderprofile">
             <div class="addbackgroungdark"></div>
             <div class="studentprofileimg">
                    <div class="img">
                        <img src="{{ asset("/storage/".$student->image) }}" alt="">
                    </div>
                    <div class="text">
                        <h1>{{ strtoupper($student->fname) }} {{  strtoupper($student->lname) }}</h1>
                        <p>{{ $student->users->email }}</p>
                    </div>
             </div>
        </div>
        <hr>
        <div class="userdetailbody">
            <div class="gropone">
                <div class="leftone">1</div>
                <div class="contetn">
                    <p>Nom Et Prénom : <b>Amine Amazzal</b> </p>
                </div>
            </div>
            <div class="inespan"></div>
        </div>
    </div>
@endsection