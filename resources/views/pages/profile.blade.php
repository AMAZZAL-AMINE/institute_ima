@extends("layouts.app")

@section("content")
    <div class="container">
        @if(Auth::check() && auth()->user()->id === $student->user_id)
            <div class="bgtop">Page personnelle de l'étudiant</div>
            <div class="profileimg">
                <img src="{{ asset("/storage/".$student->image) }}" alt="">
            </div>
            <div class="studentsname">
                <h1>{{ ucfirst(trans($student->fname)) }} {{ ucfirst(trans($student->lname)) }}</h1><br>
            </div>
            <div class="joinedat">
                <p>date de l'inscription {{ $student->created_at->format('Y-m-d') }}</p>
            </div>
            <hr>
     
            <div class="formsupdatingdatastudents">
               
                <div class="leftimg">
                    {{-- <img src="/images/details.svg" alt=""> --}}
                </div>
                <div class="infpstudentsss">
                    <div class="datauser">
                        <div class="stdtitle">
                            <div>Cart Nationale :</div>
                            <div><span> {{ $student->cin }}</span></div>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Phone Number: </div>
                            <span> {{ $student->phone }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Date De Naissance: </div>
                            <span> {{ $student->berthday }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Niveau School:</div>
                            <span> {{ $student->nvschole }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Formation: </div>
                            <span> {{ $student->formations->name }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Prix Dinscription: </div>
                            <span> {{ $student->firstPayed }} DH</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <table class="table table-light">
                <h1></h1>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            @else
            <h1>This Not Your Profile Go Away Please (: XD</h1>
        @endif
    </div>

@endsection