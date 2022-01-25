@extends("layouts.admin")

@section("content")
    <div class="container">

            <!-- Page Heading -->

               

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tous les étudiants sélectionnés <span class="text-danger">{{ $formation->name }}</span></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead >
                                <tr>
                                    <th class="text-primary">Id</th>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Prénom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Phone</th>
                                    <th class="text-primary">Formation</th>
                                    <th class="text-primary">D.D’inscription</th>
                                    <th class="text-primary">Profile</th>
                                </tr>
                            </thead>
                            <tfoot >
                                <tr>
                                <th class="text-primary">Id</th>
                                    <th class="text-primary">Nom</th>
                                    <th class="text-primary">Prénom</th>
                                    <th class="text-primary">Cin</th>
                                    <th class="text-primary">Phone</th>
                                    <th class="text-primary">Formation</th>
                                    <th class="text-primary">D.D’inscription</th>
                                    <th class="text-primary">Profile</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($formation->students as $student)
                                    @if ($student->firstPayed != null)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->fname }}</td>
                                        <td>{{ $student->lname }}</td>
                                        <td>{{ $student->cin }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->formations->name ?? 'none' }}</td>
                                        <td>{{ $student->created_at->format('Y-m-d') }}</td>
                                        <td><a class="btn btn-primary" href="{{ route("student.profile",$student->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> </a></td>
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