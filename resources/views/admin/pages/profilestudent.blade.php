@extends("layouts.admin")

@section("content")
<style>
    .topheaderprofile .addbackgroungdark {
        background-color: #665E70;
        width: 100%;
        padding: 130px;
        border-radius: 6px;
    }
    .topheaderprofile .studentprofileimg {
        display: flex;
    }
    .topheaderprofile .studentprofileimg .text  {
        line-height: 1px;
        margin-left: 40px;
    }
    .topheaderprofile .studentprofileimg .text h1 {
        color: black;
        font-weight: bold;
    }
    .topheaderprofile .studentprofileimg img {
        width: 250px !important;
        height: 250px !important;
        border-radius: 50% !important;
        margin-top: -100px;
        margin-left: 40px;
        object-fit: cover;
    }
</style>
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
        <div class="userdetailbody">
            <div class="">
                 
            </div>
        </div>
    </div>
@endsection