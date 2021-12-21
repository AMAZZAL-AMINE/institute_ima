@extends('layouts.admin')

@section("content")
    <div class="container ">
          @foreach ($student as $stud)
                <div class="card">
                        <div class="card-header">
                            Informations sur cet étudiant
                        </div>
                    <div class="card-body">
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>Nom & Prénom : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->fname }} {{ $stud->lname }} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>Carte/N : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->cin }} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>Phone : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->phone }} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>D.Inscription : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->created_at->format('Y-m-d') }} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>D.De Naissance : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->berthday}} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid input-group d-flex align-items-center mb-3">
                            <div> <span>Formation : </span> </div> 
                            <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $stud->formations->name ?? "None" }} </b></div>
                        </div>
                        <hr>
                        <div class="container-fluid  mb-3">
                                <form action="{{ route("studnet.active",$stud->id) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group input-group d-flex align-items-center">
                                        <div> <span>Prix ​​d'inscription :</span> </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <input class="form-control" type="number"  name="prix_iscription" placeholder="Prix (DH)">
                                    </div>

                                    <div class="form-group input-group d-flex align-items-center">
                                        <div> <span>Prix ​​d'inscription :</span> </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <select class="form-control"  name="month">
                                            <option class="bg-gradient-success " value="">...</option>
                                            @foreach ($months as $month)
                                                 <option value="{{ $month->month_num }}">{{ $month->month_num }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>

                                    <div class="form-group input-group d-flex align-items-center">
                                        <div> <span>Prix  le premier mois :</span> </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <input class="form-control" type="number"  name="prix_firstmonth" placeholder="Prix (DH)">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save And Next To Page Print</button>
                                </form>
                        </div>

                    </div>
                </div>
          @endforeach
    </div>
@endsection