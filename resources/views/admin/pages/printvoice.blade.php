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
   <div class="" id="printableArea">


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
                <p>Le Facture N #{{ $invoice->id }}</p>
                <p><?php echo date("Y-m-d"); ?></p>
            </div>

            <div class="tabledepayment">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nom</th>
                            <th>Formation</th>
                            <th>Le Mois</th>
                            <th>Le Prix</th>
                            <th>Prix ​​d'inscription</th>
                            <th>Total</th>
                            <th>La Date De Paiement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td>{{ $student->fname }} {{ $student->lname }} </td>
                            <td>{{ $student->formations->name ?? "No" }} </td>
                            <td>{{ $invoice->name }}</td>
                            <td>{{ $invoice->prix }} DH</td>
                            <td>{{ $student->firstPayed }} DH</td>
                            <td>{{ $student->firstPayed  + $invoice->prix }} DH</td>
                            <td>{{ $student->created_at->format('Y-m-d') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoicefooter">
                <div><h2>Copyright<?php echo date("Y") ?><i class="fa fa-copyright"></i> Institute-Ima.ma</h2></div>
                <div><b><i class="fab fa-whatsapp"></i> : +212 626-400022 | <i class="fas fa-phone-alt"></i> : 05282-39873</b></div>
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