
@extends("layouts.admin")

@section("content")
    <div class="container">

            <!-- Page Heading -->

           

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Créer une absence d'étudiant </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead >
                                <tr>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Formation</th>
                                    <th class="text-primary">Absence</th>
                                    <th class="text-primary">T.Absence</th>
                                </tr>
                            </thead>
                            <tfoot >
                                <tr>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Formation</th>
                                    <th class="text-primary">Absence</th>
                                    <th class="text-primary">T.Absence</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->fname }} {{ $student->lname }}</td>
                                    <td>{{ $student->cin }}</td>
                                    <td>{{ $student->formations->name ?? 'none' }}</td>
                                    <td><a href="{{ route("admin.createAbsence",$student->id) }}" class="btn btn-outline-primary">Créer</a></td>
                                    <td><a class="btn btn-success" href=""><i class="fa fa-eye" aria-hidden="true"></i> Vue </a></td>
                                </tr>
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