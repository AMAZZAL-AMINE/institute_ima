@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Les Donnée De Payment De Le Tétdient</h1>
        <div class="bg-white rounded border p-5 mt-5">
            <div class="d-flex align-items-center">
                <h2>Nom & Prénom : </h2> <h2 class="text-primary ml-3"> {{ $student->fname }} {{ $student->lname }}</h2>
            </div>
            <hr>
            <div class="d-flex align-items-center">
                <h2>Cart Nationale : </h2> <h2 class="text-primary ml-3"> {{ $student->cin }} {{ $student->lname }}</h2>
            </div>
            <hr>
            <div class="d-flex align-items-center">
                <h2>Mois payés  : </h2> 
                <h2 class="text-primary ml-3"> 
                    @foreach ($months as $month)
                        <span style="font-size: 25px">{{ $month->name }}</span>,
                    @endforeach 
            </h2>
            </div>
            <hr>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="my-select">Choisissez le mois de paiement</label>
                    <select id="my-select" class="form-control" name="">
                        <option value="">Choisissez le mois</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="my-input">Choisissez le prix à payer</label>
                    <input id="my-input" class="form-control" type="text" name="prix" placeholder="Prix (DH)">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Save Le Payment And Go To Print</button>
            </form>
        </div>
    </div>
@endsection