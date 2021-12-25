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
                    <div>
                        <small>Formation : {{ $student->formations->name }}</small>
                    </div>
                    <div class="buttontoselect mt-5 text-center">
                        <a  href="{{ route("admin.payment.newmonth",$student->id) }}">Select </a>
                    </div>
                </div>
            </div>
           
          @endforeach
          @else
            <div class="text-center">
                <img src="/images/empty.png" alt="IMAGE EMPTY DATA">
                <p>
                    Aucune donnée n’a été saisie pour tenter de rechercher à 
                    <br>nouveau à l’aide du numéro de téléphone thalmid ou 
                    <br>du numéro de carte nationale
                </p>
                <a class="btn btn-primary" href="{{ route("admin.search.student") }}">Search Again</a>
            </div>
          @endif
         @else
         <div class="text-center">
            <img src="/images/notfound.webp" alt="IMAGE Not Found DATA">
            <p>
                 Ces trois-là n’ont pas été retrouvés.
                <br>tenter de rechercher à  nouveau à l’aide du numéro de téléphone thalmid ou 
                <br>du numéro de carte nationale
            </p>
            <a class="btn btn-primary" href="{{ route("admin.search.student") }}">Search Again</a>
        </div>
     
           @endif
        </div>
    </div>
@endsection