@extends("layouts.admin")

@section("content")
<div class="container">
    @if(session()->has("message"))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session("message") }} <i class="fa fa-check text-white" aria-hidden="true"></i></strong> 
          </div>
          
          <script>
            $(".alert").alert();
          </script>
        @endif
    <table class="table table-light">
        <thead>
            <h3 class="text-dark font-weight-bold mt-5">Les Absences  personnel Du <span class="text-primary">{{ $student->fname }} {{ $student->lname }}</span></h3>
        </thead>
        <tbody>
            <tr>
                <td>Nom Et Prénom : </td>
                <td> {{ $student->fname }} {{ $student->lname }}</td>
            </tr>
            <tr>
                <td>Student Cin : </td>
                <td> {{ $student->cin }} </td>
            </tr>
        </tbody>
    </table>
<table border   class="table border text-center mt-5 border bg-white  ">
                <thead>
                  <tr>
                    <th scope="col">Le Mois</th>
                    <th scope="col">Nomber Séance</th>
                    <th scope="col">Présent </th>
                    <th scope="col">Absent </th>
                    <th scope="col">La Date</th>
                    <th scope="col">Edite</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($absences as $absencet)
                    <tr>
                        <th scope="row">{{ $absencet->month }}</th>
                        <td>{{ $absencet->seance }}</td>
                        <td>
                            @if($absencet->apsence === null && $absencet->precent === "yes")
                                <span class="text-success"> <i class="fa fa-check" aria-hidden="true"></i> </span>
                                @else
                                {{ null }}
                            @endif
                        </td>
                        <td>
                            @if($absencet->precent === null && $absencet->apsence === "yes")
                                <span class="text-success"> <i class="fa fa-check" aria-hidden="true"></i> </span>
                                @else
                                {{ null }}
                            @endif
                        </td>
                        <td>{{ $absencet->date }}</td>
                        
                        <td ><a href="{{ route("admin.createAbsence",$student->id) }}"  class="btn btn-outline-primary text-center"><i class="fas fa-tools"></i>  </a></td>
                    </tr> 
                    @endforeach
                </tbody>

               
            </table>
            
           <div class="text-center">
                <a href="{{ route("admin.createAbsence",$student->id) }}" class="btn btn-success text-center"><i class="fa fa-edit" aria-hidden="true"></i> Créer nouvel</a>
           </div>
@endsection