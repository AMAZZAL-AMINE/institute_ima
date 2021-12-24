@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tou Les Payments</h6>
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
                                <th>Prix</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Prix</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->prix }} DH</td>
                                <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <h1>Totam : {{ $payments->sum('prix'); }}</h1> --}}
        </div>
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
