@extends("layouts.admin")

@section("content")
    <div class="container">

      <div  style="text-align: center; margin-bottom: 50px;">
        <b >Les Statistiques En <span class="text-danger">{{ $formation }}</span> </b>
        <hr>
      </div>

        <div class="card shadow mb-4">
              
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Toutes les statistiques du mois de <span class="text-danger">{{ $month }}/{{ $year }}</span> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr>
                                <th scope="col">Cin</th>
                                <th>Nom</th>
                                <th scope="col">Mois</th>
                                {{-- <th scope="col">Formation</th> --}}
                                <th scope="col">Prix</th>
                                <th scope="col">Date</th>
                            </tr>
                            </tr>
                        </thead>
                        <tfoot >
                            <tr>
                            <th scope="col">Cin</th>
                            <th>Nom</th>
                            <th scope="col">Mois</th>
                            {{-- <th scope="col">Formation</th> --}}
                            <th scope="col">Prix</th>
                            <th scope="col">Date</th>
                         </tr>
   
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($payedmonths as $payment)
                            <tr>
                                <td>{{ $payment->student_cin }}</td>
                                <td>{{ $payment->students_name }}</td>
                                <td >{{ $payment->name }}</td>
                                {{-- <td>{{ $payment->formation }}</td> --}}
                                <td>{{ $payment->prix }} DH</td>
                                <td>{{ $payment->created_at->format('Y-m') }}</td>
                                @if($payment->name === "Premier Mois")
                                    <th> <div class="badge badge-danger">nouvel élève</div> </th>  
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted text-center">
                <b>Totale : </b> <b> {{ $payedmonths->sum('prix');  }} DH</b>
            </div>
        </div>


 
            
                <hr>
    

                <div class="card shadow mb-4">
              
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Nombre Total de nouveaux étudiants ce mois-ci <span class="text-danger">{{ $month }}/{{ $year }}</span> </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-bordered">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead >
                                    <tr>
                                        <th scope="col">Cin</th>
                                        <th scope="col">Mois</th>
                                        {{-- <th scope="col">Formation</th> --}}
                                        <th scope="col">Prix</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tfoot >
                                    <tr>
                                        <th scope="col">Cin</th>
                                        <th scope="col">Mois</th>
                                        {{-- <th scope="col">Formation</th> --}}
                                        <th scope="col">Prix</th>
                                        <th scope="col">Date</th>
                                    </tr>
           
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($newstudents as $std)
                                        <tr>
                                            <th scope="row">{{ $std->student_cin }}</th>
                                            <td >{{ $std->name }}</td>
                                            {{-- <td>{{ $std->formation }}</td> --}}
                                            <td>{{ $std->prix }} DH</td>
                                            <td>{{ $std->created_at->format('Y-m') }}</td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="card-footer text-muted text-center">
                        <b>Totale : </b> <b> {{ $newstudents->sum('prix');  }} DH</b>
                      </div>
                </div>

    </div>
@endsection
@section('scripts')
<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("/js/demo/datatables-demo.js") }}"></script>
@endsection