@extends("layouts.admin")

@section("content")
    <div class="container">
         {{-- {{ $payedmonths }} --}}
              <h4 class="text-center text-primary">Touts Les Bénéfices De Mois <span class="text-danger">{{ $month }}/{{ $year }}</span> En <span class="text-danger">{{ $formation }}</span> </h5> 
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
        <tr class="bg-warning text-white">
            <th  scope="row">Total</th>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $payedmonths->sum('prix');  }} DH</td>
        </tr>
        </tbody>
        </table>
        <hr>
        <h4 style="margin-top: 150px;" class="  text-primary">Nombre Total de nouveaux étudiants ce mois-ci <span class="text-danger">{{ $month }}/{{ $year }}</span> </h5> 
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
                @foreach ($newstudents as $std)
                    <tr>
                        <th scope="row">{{ $std->student_cin }}</th>
                        <td >{{ $std->name }}</td>
                        <td>{{ $std->formation }}</td>
                        <td>{{ $std->prix }} DH</td>
                        <td>{{ $std->created_at->format('Y-m') }}</td>
                    </tr>
                    
                   
                @endforeach
                <tr class="bg-primary text-white">
                    <th  scope="row">Total</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $newstudents->sum('prix');  }} DH</td>
                </tr>
                </tbody>

    </div>
@endsection