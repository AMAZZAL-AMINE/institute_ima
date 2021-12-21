@extends("layouts.admin")

@section("content")
    <div class="container">

            <!-- Page Heading -->

               

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Les demandes des étudiants</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Cin</th>
                                    <th>Phone</th>
                                    <th>Formation</th>
                                    <th>D.D’inscription</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Cin</th>
                                    <th>Phone</th>
                                    <th>Formation</th>
                                    <th>D.D’inscription</th>
                                    <th>Profile</th>
       
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->fname }}</td>
                                    <td>{{ $student->lname }}</td>
                                    <td>{{ $student->cin }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->formations->name ?? 'none' }}</td>
                                    <td>{{ $student->created_at->format('Y-m-d') }}</td>
                                    <td><a class="btn btn-primary" href="{{ route("student.profile",$student->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> Details</a></td>
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