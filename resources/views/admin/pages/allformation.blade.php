@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tou Les Formations</h6>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>{{ session("message") }}</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Created On</th>
                                <th>Edit</th>
                                <th>Show</th>
                                <th>Delet</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Created On</th>
                                <th>Edit</th>
                                <th>Show</th>
                                <th>Delet</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($formations as $formation)
                            <tr>
                                <td>{{ $formation->id }}</td>
                                <td>{{ $formation->name }}</td>
                                <td>{{ $formation->slug }}</td>
                                <td>{{ $formation->created_at->format('Y-m-d') }}</td>
                                <td><a class="btn btn-success" href="{{ route("admin.pageeditforma",$formation->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                <td><a class="btn btn-primary" href="{{ route("student.formation",$formation->id) }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                                <td><form action="#" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-success" href="{{ route("formation.add") }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Formation</a>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("/js/demo/datatables-demo.js") }}"></script>
@endsection
