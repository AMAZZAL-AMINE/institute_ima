@extends("layouts.admin")

@section("content")
    <style>
        .body-main {
        background: #ffffff;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #e9e9e9be;
        font-size: 10px;
        margin:  auto;
        width: 100;
    }
    
   
    .main thead {
        background: #1E1F23;
        color: #fff
    }
   
    .img {
        height: 100px
    }
   
    h1 {
        text-align: center
    }
    
   </style>
   <div class="container" id="printableArea">
    <div class="invoice_factur">
            <div class="navlogos">
                <div class="imalogo">
                    <img src="/images/logo.png" alt="">
                </div>
                <div class="ipheclogo">
                    <img src="/images/iphec.png" alt="">
                </div>
            </div>
            <div class="topcontentdesc">
                <h2>Le Facture De Paiement</h2>
                <p>Le Facture N #{{ $month->id }}</p>
                <p class="text-muted"> {{ $student->formations->name }}</p>

            </div>

            <div class="tabledepayment">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nom & Prénom</th>
                            <th>Le Mois</th>
                            <th>Le Prix</th>
                            <th>La Date De Paiement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td>{{ $student->fname }} {{ $student->lname }} </td>
                            <td>{{ $month->name }}</td>
                            <td>{{ $month->prix }} DH</td>
                            <td>{{ $month->created_at->format('Y-m-d') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoicefooter">
                <div><h2>Copyright<?php echo date("Y") ?><i class="fa fa-copyright"></i> Institute-Ima.ma</h2></div>
                <div><b><i class="fab fa-whatsapp"></i> : +212 626-400022 | <i class="fas fa-phone-alt"></i> : 05282-39873</b></div>
                <div><b><i class="fab fa-whatsapp"></i> : +212 661586669 / 0629732615 | <i class="fas fa-phone-alt"></i> : 0528238703</b></div>
                <div><b>Institute-Ima@gmail.com</b></div>
            </div>
        </div> 
   </div>

   
   <div class="container">
      <center>
       <button style="margin-top:50px; margin-bottom:50px; " class="btn btn-primary" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print This Invoice</i></button>
      </center>
   </div>


   <script>
   function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
   }
   </script>
@endsection