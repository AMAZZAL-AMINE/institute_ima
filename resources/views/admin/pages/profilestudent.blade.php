@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="topheaderprofile">
             <div class="addbackgroungdark"></div>
             <div class="studentprofileimg">
                    <img src="{{ asset("/storage/".$student->image) }}" alt="">
             </div>
        </div>
        <div class="userdetailbody">
            <div class="">

            </div>
        </div>
    </div>
@endsection