@extends("layouts.app")

@section('content')
<div class="container">

    @if(auth()->user()->students()->count() === 0)
    <div class="inscriptiontoptitle">
        <h1>Inscription</h1>
    </div>
    <div class="inscriptionformsall">
        <form action="{{ route('admin.insertdatauser') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="inscriusername">
                <div class="fname">
                    <input type="text" name="fname" placeholder="Nom" value="{{ old('fname') }}">
                    @error("fname")
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="lname">
                    <input type="text" name="lname" placeholder="Prénom" value="{{ old('lname') }}">
                    @error("lname")
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            </div>
            <div class="inscrimgphoto">
                <div class="inputtitle">Select Une Photo</div>
                <input type="file" name="img">
            </div>
            <div class="ninsnational">
                <input type="text" name="cin" placeholder="N° national d'identité" value="{{ old("cin") }}">
                @error("cin")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="inscrimgphoto">
                <div class="inputtitle">Select  Photo De CIN</div>
                <input type="file" name="cin_img">
                @error("cin_img")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="ninsctelephone">
                <input type="number" name="phone" placeholder="N° De Téléphone" value="212">
                @error("phone")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="dinscberth">
                <div class="inputtitle">Date de naissance</div>
                <input type="date" name="dberth" value="{{ old("dberth") }}">
                @error("dberth")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="ninscschole">
                <div class="inputtitle">Niveau Scolaire</div>
                <select name="nschole">
                    <option value="">...</option>
                    <option value="sans niveau">sans niveau</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire du premier cycle"> secondaire du premier cycle</option>
                    <option value="Secondaire">secondaire</option>
                    <option value="Université">Université</option>

                </select>
                @error("nschole")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="ninscschole">
                <div class="inputtitle">Select Formation:</div>
                <select name="formation">
                    <option value="">...</option>
                    @foreach ($formations as $formation)
                     <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                    @endforeach
                   
                </select>
                @error("formation")
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
        @else
        @if (session()->has('message'))
                <div class="alert alert-primary" role="alert">
                    Merci pour votre inscription. Vos données personnelles ont été envoyées avec succès. Soyez prêt. Nous vous contacterons bientôt. Nous nous rencontrerons bientôt
                </div>
        @endif
        @if(auth()->user()->students->firstPayed)
                {{-- <div class="mt-5 mb-5">
                    <h1> Bienvenue {{ auth()->user()->students->fname }} {{ auth()->user()->students->lname }}  dans Ima</h1>
                </div> --}}
                <div class="bgtop">Page personnelle de l'étudiant</div>
            <div class="profileimg">
                <img src="{{ asset("/storage/".auth()->user()->students->image) }}" alt="">
            </div>
            <div class="studentsname">
                <h1>{{ ucfirst(trans(auth()->user()->students->fname)) }} {{ ucfirst(trans(auth()->user()->students->lname)) }}</h1><br>
            </div>
            <div class="joinedat">
                <p>date de l'inscription {{ auth()->user()->students->created_at->format('Y-m-d') }}</p>
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
                            <div><span> {{ auth()->user()->students->cin }}</span></div>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Phone Number: </div>
                            <span> {{ auth()->user()->students->phone }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Date De Naissance: </div>
                            <span> {{ auth()->user()->students->berthday }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Niveau School:</div>
                            <span> {{ auth()->user()->students->nvschole }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Formation: </div>
                            <span> {{ auth()->user()->students->formations->name }}</span>
                        </div>
                        <hr>
                        <div class="stdtitle">
                            <div>Prix Dinscription: </div>
                            <span> {{ auth()->user()->students->firstPayed }} DH</span>
                        </div>
                         
                    </div>
                </div>
            </div>
           
 
            @else
            <div class="messageauipatrlee">
                <h1>
                    Inscription en cours d'examen...
                </h1>
                <p>
                    Vos données sont en attente d'examen. Une fois 
                    les données confirmées, vous serez contacté. Soyez prêt à vous voir bientôt
                </p>
            </div>
        @endif

    @endif

   
</div>
@endsection