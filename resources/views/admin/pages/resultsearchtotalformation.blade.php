@extends("layouts.admin")

@section("content")
    <div class="container">


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
                                <th scope="col">Mois</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Date</th>
                            </tr>
                            </tr>
                        </thead>
                        <tfoot >
                            <tr>
                            <th class="text-primary">Id</th>
                            <th scope="col">Cin</th>
                            <th scope="col">Mois</th>
                            <th scope="col">Formation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Date</th>
                         </tr>
   
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($payedmonths as $payment)
                            <tr>
                                <th>{{ $payment->student_cin }}</th>
                                <td >{{ $payment->name }}</td>
                                <td>{{ $payment->formation }}</td>
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
        </div>



         {{-- {{ $payedmonths }} --}}
            
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
                                        <th scope="col">Formation</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tfoot >
                                    <tr>
                                        <th scope="col">Cin</th>
                                        <th scope="col">Mois</th>
                                        <th scope="col">Formation</th>
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
                                            <td>{{ $std->formation }}</td>
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
@section('scripts')
<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("/js/demo/datatables-demo.js") }}"></script>
@endsection