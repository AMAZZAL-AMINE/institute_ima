@extends("layouts.admin")

@section("content")
    @if (auth()->user()->is_admin_pro === "yes")
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tous les prix payés</h6>
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
                                <th>Cin</th>
                                <th>Prix</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Cin</th>
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
                                <td>{{ $payment->prix }} DH</td>
                                <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-success w-100 p-3" href="{{ route("admin.search.foration.pay.total") }}"><i class="fa fa-search" aria-hidden="true">
                </i> Recherche Par Mois
            </a>
        </div>
        {{-- <h1>Total : {{ $payments->sum('prix'); }}</h1> --}}

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
@else
    <div class="text-center mt-5">
         <h1>لست مسموح بالدخول إلى هده الصفحة .</h1>
         <br>
         <h1>المرجو العودة و شكرا</h1>
    </div>
@endif
@endsection
