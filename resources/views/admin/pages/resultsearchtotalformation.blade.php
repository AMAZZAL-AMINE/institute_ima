@extends("layouts.admin")

@section("content")
    <div class="container">
         {{-- {{ $payedmonths }} --}}
              <h4 class="text-center text-primary">To Les Bénéfices De Mois <span class="text-danger">{{ $month }}/{{ $year }}</span> En <span class="text-danger">{{ $formation }}</span> </h5> 
                <hr>
        <table class="table mt-5 table-responsive">
        <thead>
            <tr>
            <th scope="col">Cin</th>
            <th scope="col">Mois</th>
            <th scope="col">Formation</th>
            <th scope="col">Prix</th>
            <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($payedmonths as $payment)
            <tr>
                <th scope="row">{{ $payment->student_cin }}</th>
                <td >{{ $payment->name }}</td>
                <td>{{ $payment->formation }}</td>
                <td>{{ $payment->prix }} DH</td>
                <td>{{ $payment->created_at->format('Y-m') }}</td>
                @if($payment->name === "Premier Mois")
                    <th> <div class="badge badge-danger">New Student</div> </th>  
                @endif
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