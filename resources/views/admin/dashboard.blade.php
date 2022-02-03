@extends('layouts.admin')

@section('content')
        <div class="container">
            <h1></h1>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="{{ route("student.whoaccepted") }}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            All Students</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $students->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                       <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <a href="{{ route("admin.all.payments.students") }}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Checking Les Paiement</div>
                              
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-list-alt fa-2x text-gray-300" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <a href="{{ route("admin.allformations") }}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Toutes Les Formations
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    {{ $formations->count() }}
                                                </div>
                                            </div>
         
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <a href="{{ route("admin.requestusers") }}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Les demandes des étudiants
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $invitations->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4 p-5">
                         <a class="btn "  rel="nofollow" href="{{ route("admin.manager.rooms") }}"> <i class="fa fa-table" aria-hidden="true"></i> Gestion Des Emplois &rarr;</a>
                    </div>

                    <!-- Color System -->
          
                            <div class="card shadow mb-4 p-5 w-100">
                                <a class="btn text-primary "  rel="nofollow" href="{{ route("admin.manager.absences") }}"> <i class="fa fa-table" aria-hidden="true"></i> Gestion  Des Sabsences Des Etudiants &rarr;</a>
                            </div>
                </div>

                <div class="col-lg-6 mb-4">

                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lemplois</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="https://cdni.iconscout.com/illustration/premium/thumb/website-programming-2496188-2107745.png" alt="...">
                            </div>
                            <p>Créer Un Deplom Pour Etudiant</p>
                          
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
        </div>
@endsection