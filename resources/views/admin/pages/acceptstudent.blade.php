@extends('layouts.admin')

@section("content")
    <div class="container ">
        @if (session()->has('message'))
            <h1>Done, Click The Button To Prit Invoice</h1>
                <a href="{{ route("admin.printinvoice",$student->id) }}" class="btn btn-success"> <i class="fa fa-print" aria-hidden="true"></i>Print The Invoice</a>
        @else
         @if($student->firstPayed === null)
         <div class="card">
            <div class="card-header">
                Informations sur cet étudiant
            </div>
        <div class="card-body">
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>Nom & Prénom : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->fname }} {{ $student->lname }} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>Carte/N : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->cin }} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>Phone : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->phone }} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>D.Inscription : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->created_at->format('Y-m-d') }} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>D.De Naissance : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->berthday}} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-flex align-items-center mb-3">
                <div> <span>Formation : </span> </div> 
                <div><b class="text-primary">&nbsp;&nbsp;&nbsp; {{ $student->formations->name ?? "None" }} </b></div>
            </div>
            <hr>
            <div class="container-fluid input-group d-block align-items-center mb-3">
                <div> <span>Image De Cart Nationale : </span> </div> 
                <div>
                    <img style="width: 400px;<" src="{{ asset("/storage/".$student->cin_img) }}" alt="">
                </div>
            </div>
            <hr>
            <div class="container-fluid  mb-3">
                    <form action="{{ route("studnet.active",$student->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="my-select">Chose Center</label>
                            <select  class="form-control" name="isiphicorima">
                                <option value="">...</option>
                                <option value=">Institute-Ima">Institute-Ima</option>
                                <option value="Institute-Iphec">Institute-Iphec</option>
                            </select>
                            @error('isiphicorima')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>{{ $message }}</strong> 
                                </div>
                                
                                <script>
                                  $(".alert").alert();
                                </script>
                            @enderror
                        </div>
                        <div class="form-group input-group d-flex align-items-center">
                            <div> <span>Prix ​​d'inscription :</span> </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <input class="form-control" type="number"  name="prix_iscription" placeholder="Prix (DH)">
                        </div>

                        <div class="form-group input-group d-flex align-items-center">
                            <div> <span>Select Le Mois :</span> </div>
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
 
    @else
    <div class="containe">
        <div class="text-center" style="margin-top: 300px">
             <b>
                 Désoly, Cet étudiant a Déja Payé Le Premier Mois 
             </b> <br>
             <a href="" class="btn btn-success">Visit Le Profile De Cet étudiant</a>
        </div>
    </div
        @endif
  
        @endif
    </div>
@endsection