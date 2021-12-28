@extends("layouts.admin")

@section("content")
    <div class="container">
         {{-- {{ $payedmonths }} --}}
              <h4 class="text-center text-primary">To Les Bénéfices De Mois <span class="text-danger">{{ $month }}/{{ $year }}</span> En <span class="text-danger">{{ $formation }}</span> </h5> 
                <hr>
        <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col">Mois</th>
            <th scope="col">Formation</th>
            <th scope="col">Prix</th>
            <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($payedmonths as $payment)
            <tr>
                <th scope="row">{{ $payment->name }}</th>
                <td>{{ $payment->formation }}</td>
                <td>{{ $payment->prix }} DH</td>
                <td>{{ $payment->created_at->format('Y-m') }}</td>
            </tr>
           
        @endforeach

        </tbody>
        </table>
        <tr class="bg-light">
            <th  scope="row">Total</th>
            <td></td>
            <td></td>
            <td>{{ $payedmonths->sum('prix');  }} DH</td>
        </tr>
    </div>
@endsection