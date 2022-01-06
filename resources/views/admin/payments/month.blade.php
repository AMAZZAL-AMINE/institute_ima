
@extends("layouts.admin")

@section("content")
    <div class="container">

            <!-- Page Heading -->

           

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Alerte de paiement Le Moi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead >
                                <tr>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Phone</th>
                                    <th class="text-primary">Alert</th>
                                    <th class="text-primary">Message</th>
                                    <th class="text-primary">Payer Facture</th>
                                </tr>
                            </thead>
                            <tfoot >
                                <tr>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Phone</th>
                                    <th class="text-primary">Alert</th>
                                    <th class="text-primary">Message</th>
                                    <th class="text-primary">Payer Facture</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($payedmonths as $student)
                                @if($student->updated_at->diffForHumans() == "1 month ago" OR $student->updated_at->diffForHumans() == "1 month ago")
                                <tr>
                                    <td>{{ $student->students->fname }} {{ $student->students->lname }}</td>
                                    <td>{{ $student->cin }}</td>
                                    <td>{{ $student->students->phone }}</td>
                                    <td> <b><span class="badge badge-danger p3">il doit payer</span></b> </td>
                                    <td><a class="btn btn-success"href=""><i class="far fa-envelope"></i> Envoyer SMS</a></td>
                                    <td><a class="btn btn-primary"href="{{ route("payment-store.data.new.month",$student->student_id) }}"><i class="fas fa-money-check-alt"></i> Payer Facture</a></td> 
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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