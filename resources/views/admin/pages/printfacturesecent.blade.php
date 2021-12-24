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
       <div class="" >
           <div class="row">
               <div class="col-md-9 col-md-offset-3 body-main">
                   <div class="col-md-12">
                       <div class="row">
                           <div class="col-md-4"> <img class="img" alt="Invoce Template" src="/images/logo.png" /> </div>
                           <div class="col-md-8 text-right">
                               <h4 style="color: #4400ff;"><strong>Institute Ima</strong></h4>
                               <p>Avenue Abdellah Guenoun Agadir 80000 Maroc</p>
                               <p>08:30 – 21:00</p>
                               <p>institutimastf@gmail.com</p>
                           </div>
                       </div> <br />
                       <div class="row">
                           <div class="col-md-12 text-center">
                               <h2>FACTURE D'ACHAT</h2>
                               <h5>N- #{{  $month->id  }}</h5>
                           </div>
                       </div> <br />
                       <div>
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>
                                           <h5>Description</h5>
                                       </th>
                                       <th>
                                           <h5>Amount</h5>
                                       </th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td class="col-md-9">Le Mois</td>
                                       <td class="col-md-3"> {{ $month->name }}  </td>
                                   </tr>
                                   <tr>
                                       <td class="col-md-9">Prix De mois</td>
                                       <td class="col-md-3">{{ $month->prix }} DH</td>  </td>
                                   </tr>
                                   <thead>
                                       <tr>
                                           <th>
                                               <h5>Name</h5>
                                           </th>
                                           <th>
                                               <h5>Descrition</h5>
                                           </th>
                                       </tr>
                                   </thead>
                                   <tr>
                                       <td class="col-md-9">Nom de l'étudiant</td>
                                       <td class="col-md-3"> {{ $student->fname }} {{ $student->lname }} </td>
                                   </tr>
                                   <tr>
                                       <td class="col-md-9">Formation</td>
                                       <td class="col-md-3"> {{ $student->formations->name ?? "No Formation Right now" }} </td>
                                   </tr>
                                   <tr>
                                       <td class="col-md-9">date de Payment</td>
                                       <td class="col-md-3"> {{ $month->created_at->format('Y-m-d') }}</td> </td>
                                   </tr>
                                   {{-- <tr style="color: #F81D2D;">
                                       <td class="text-right">
                                           <h4><strong>Total:</strong></h4>
                                       </td>
                                       <td class="text-left">
                                           <h4><strong> {{ $student->firstPayed  + $invoice->prix }} DH</strong></h4>
                                       </td>
                                   </tr> --}}
                               </tbody>
                           </table>
                       </div>
                       <div>
                           <div class="col-md-12">
                               <p><b>Date Print De FACTURE :</b> <?php echo date("Y-m-d"); ?> </p> </p> <br />
                           </div>
                       </div>
                   </div>
               </div>
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