@extends("layouts.admin")

@section("content")
    <div class="">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Les mois payés par les étudiants</h6>
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
                    <table  class="table table-bordered  table-hover" id="dataTable" cellspacing="0" >
                        <thead>
                            <tr>
                                <th >Nom</th>
                                <th >Cin</th>
                               
                                <th>Premier Mois</th>
                                <th>2eme Mois</th>
                                <th>3eme Mois</th>
                                <th>4eme Mois</th>
                                <th>5eme Mois</th>
                                <th>6eme Mois</th>
                                <th>7eme Mois</th>
                                <th>8eme Mois</th>
                                <th>9eme Mois</th>
                                <th>10eme Mois</th>
                                <th>11eme Mois</th>
                                <th>12eme Mois</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th >Nom</th>
                                <th >Cin</th>
                              
                                <th>Premier Mois</th>
                                <th>2eme Mois</th>
                                <th>3eme Mois</th>
                                <th>4eme Mois</th>
                                <th>5eme Mois</th>
                                <th>6eme Mois</th>
                                <th>7eme Mois</th>
                                <th>8eme Mois</th>
                                <th>9eme Mois</th>
                                <th>10eme Mois</th>
                                <th>11eme Mois</th>
                                <th>12eme Mois</th>
                            </tr>
                        </tfoot>
                        <tbody class="text-center">
                            @foreach($payments as $pay)
                                <tr>
                                    <td  class="">{{ $pay->name }}</td>
                                    <td  class="">{{ $pay->cin }}</td>
                                    <td>
                                        @if($pay->fisrtMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->twoemeMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->treeMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->phorMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->fiveMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->sixMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->sivenMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->eightMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->nineMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->teenMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->elevMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($pay->twilvMois != null)
                                        <span style="font-size: 30px; color: lightgreen"> <i class="fa fa-check" aria-hidden="true"></i></span>
                                            @else
                                            <span style="font-size: 30px; color: red"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                                        @endif
                                    </td>

                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <h1>Totam : {{ $payments->sum('prix'); }}</h1> --}}

        <button class="btn btn-primary" onclick="printTable();"><span class="glyphicon glyphicon-print"></span> Print</button>
    </div>

@endsection
@section('scripts')
<script>
    function printTable() {
	var el=document.getElementById("dataTable");
	el.setAttribute('border', '1px');
	el.setAttribute('cellpadding', '5');
	newPrint=window.open("");
	newPrint.document.write(el.outerHTML);
	newPrint.print();
	newPrint.close();
}
</script>
<script src="{{ asset("/vendor/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("/vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("/js/demo/datatables-demo.js") }}"></script>
@endsection
