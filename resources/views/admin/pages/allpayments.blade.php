@extends("layouts.admin")

@section("content")
    @if (auth()->user()->is_admin_pro === "yes")
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(isset($year))
                   <h6 class="m-0 font-weight-bold text-primary">Tous les prix payés De La Date : <span class="text-danger">{{ $day }}/{{ $month }}/{{ $year }}</span> </h6>
                   @else
                   <h6 class="m-0 font-weight-bold text-primary">Tous les prix payés  </h6>                      
                @endif
               
            </div>
            <div class="filtersearchpay ">
                    <div> <b>Custom Filter Search</b> </div>
                    <div>
                        <form action="{{ route("search.with.paymnets") }}" method="get"> 
                            <select name="day" id="day">
                                <option value="">Jour</option>
                                <?php
                                for ($i = 1; $i < 32; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                            </select>

                            <select name="month" id="month" >
                                <option value="" >Mois</option>
                                <?php
                                    for ($i = 1; $i < 13; $i++) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }
                                ?>
                            </select>

                            <input type="number" name="year" id="year" value="{{ date("Y") }}">
                            <button type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </form>
                    </div>
            </div>
            <hr>
            
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
                    @if(isset($year))
                    <table class="table table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Cin</th>
                                <th>Mois</th>
                                <th>Prix</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Cin</th>
                                <th>Mois</th>
                                <th>Prix</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                       
                        <tbody>
                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->students_name }}</td>
                                <td>{{ $payment->student_cin }}</td>
                                <td>{{ $payment->name }}</td>
                                <td>{{ $payment->prix }} DH</td>
                                <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    @endif
                </div>

            </div>
            @if(isset($year))
            <div class="card-footer text-muted text-center">
                <b>Totale : </b> <b> {{ $payments->sum('prix') }} DH</b>
            </div>
            @endif
            {{-- <a class="btn btn-success w-100 p-3" href="{{ route("admin.search.foration.pay.total") }}"><i class="fa fa-search" aria-hidden="true">
                </i> Recherche Par Formation
            </a> --}}
        </div>
        {{-- <h1>Total : {{ $payments->sum('prix'); }}</h1> --}}

        @if(isset($year))
        <button class="btn btn-primary" onclick="printTable();"><span class="glyphicon glyphicon-print"></span> Print</button>
        @endif
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
@else
    <div class="text-center mt-5">
         <h1>لست مسموح بالدخول إلى هده الصفحة .</h1>
         <br>
         <h1>المرجو العودة و شكرا</h1>
    </div>
@endif
@endsection
