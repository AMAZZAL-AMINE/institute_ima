@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Users Request</h1>
            <p class="mb-4">This Tables Showing All User Who Send Data From Website
               

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Cin</th>
                                    <th>Phone</th>
                                    <th>D.Naissance</th>
                                    <th>Schole</th>
                                    <th>Formation</th>
                                    <th>D.D’inscription</th>
                                    <th>Accept</th>
                                    <th>Show</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Cin</th>
                                    <th>Phone</th>
                                    <th>D.Naissance</th>
                                    <th>Schole</th>
                                    <th>Formation</th>
                                    <th>D.D’inscription</th>
                                    <th>Accept</th>
                                    <th>Show</th>
                                    <th>Delete</th>
       
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td><img style="width: 100%" src="{{ asset("/storage/".$student->image ) }}" alt=""></td>
                                    <td>{{ $student->fname }}</td>
                                    <td>{{ $student->lname }}</td>
                                    <td>{{ $student->cin }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->berthday }}</td>
                                    <td>{{ $student->nvschole }}</td>
                                    <td>{{ $student->formations->name ?? 'none' }}</td>
                                    <td>{{ $student->created_at->format('Y-m-d') }}</td>
                                    <td><a class="btn btn-success" href=""><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                    <td><a class="btn btn-primary" href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                                    <td><form action="" method="post">
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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