@extends("layouts.admin")

@section("content")
<div class="container">
    @if (auth()->user()->is_admin_pro === "yes")
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alerte de paiement Le Moi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-primary">Nom</th>
                                <th class="text-primary">email</th>
                                <th class="text-primary">Edit Profile</th>
                                <th class="text-primary">Delete User</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-primary">Nom</th>
                                <th class="text-primary">email</th>
                                <th class="text-primary">Edit Profile</th>
                                <th class="text-primary">Delete User</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route("admin.edit_profile",$user->id) }}">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form>
                                            <button class="btn btn-danger" type="">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
@section('scripts')
<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("/js/demo/datatables-demo.js") }}"></script>
@endsection