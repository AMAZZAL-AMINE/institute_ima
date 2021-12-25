@extends("layouts.admin")

@section("content")
    <div class="container">
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
                <p>Le Facture N #325</p>
                <p><?php echo date("Y-m-d"); ?></p>
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
                        <tr>
                            <td>Amine Amazzal</td>
                            <td>Premier Mois</td>
                            <td>500 DH</td>
                            <td>25/12/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection