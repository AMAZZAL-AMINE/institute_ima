@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="card shadow mb-4">
        @if (session()->has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session("message") }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
        <div class="card-header py-3">
            <?php

            use App\Models\Student;

            $students = Student::whereNotNull("firstPayed")->get();
            ?>
            <h6 class="m-0 font-weight-bold text-primary">Touts Les étudiants ({{ $students->count() }})</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive table-bordered">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-primary">Nom</th>
                            <th class="text-primary">Cin</th>
                            <th class="text-primary">Phone</th>
                            <th class="text-primary">Formation</th>
                            <th class="text-primary">D.D’inscription</th>
                            <th class="text-primary">Profile</th>
                            <th class="text-primary">Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-primary">Nom</th>
                            <th class="text-primary">Cin</th>
                            <th class="text-primary">Phone</th>
                            <th class="text-primary">Formation</th>
                            <th class="text-primary">D.D’inscription</th>
                            <th class="text-primary">Profile</th>
                            <th class="text-primary">Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->fname }} {{ $student->lname }}</td>
                            <td>{{ $student->cin }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->formations->name ?? 'none' }}</td>
                            <td>{{ $student->created_at->format('Y-m-d') }}</td>
                            <td><a class="btn btn-primary" href="{{ route("student.profile",$student->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                            <td>
                                @if (auth()->user()->is_admin_pro === "yes")
                                    <form action="{{ route("admin.delete.student",$student->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                    </form>
                                @endif
                            </td>
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