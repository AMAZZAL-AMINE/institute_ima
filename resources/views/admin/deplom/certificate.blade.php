@extends("layouts.admin")

@section('content')
    <div class="container">
        <div id="dvContents">
            <div class="certificate" >
                <div class="certi_header">
                    <div class="line"></div>
                    <div class="logo"><span>IPHEC</span></div>
                    <div class="line"></div>
                </div>
    
                <div class="body_one">
                    <div class="title_one">
                        <p>INSTITUT PRATIQUE DES HAUTES ETUDES COMMERCIALE</p>
                    </div>
                    <div class="title_bold">CERTIFICAT DE FORMATION</div>
                    <div class="title_formation">{{ $formation }}</div>
                    <div class="title_description">Mr. le directeur de l’institut <span>IPHEC</span> de formation
                        professionnelle Atteste par la présente</div>
                </div>
                <div class="student-name-and-cin">
                    <div class="linett"></div>
                    <div class="studen-name">Mr (Mlle, Mme) : <span> {{ $student->fname }} {{ $student->lname }}</span>
                    </div>
                    <div class="studen-cin">CIN :<span> {{ $student->cin }}</span></div>
                    <div class="linett"></div>
                </div>
                <div class="certifi-bottom">
                    <span class="etet">A terminé une formation en <b>{{ $formation }}</b></span>
                    <div class="tdtd">Dans le cadre de la formation continue et ce pour une période de six mois de
                        l’année scolaire <b>2002/2001</b></div>
                </div>
    
                <div class="thederectories">
                    <h2>DIRECTEUR GENERAL :</h2>
                    <h2>ABDOULLAH ELMARTOUB</h2>
                </div>
    
                <div class="desc-footer">
                    <p>Cette Attestation est délivrée à l’intéressé (e) pour servir et valoir ce que de droit.</p>
                    <p class="sholdbeboldbr">Fait à Agadir le 11/07/2021</p>
                </div>
    
                <div class="certificate-footer">
                    Institut IPHEC de Formation Privée /cite Salam a coté de Barid Bank et en face de Faculté des lettres et
                    sciences humaines et Lycée Ibn Maja AGADIR/MAROC
                    Email : iphecinstitut@gmail.com/ FIX: 0528238703 / Tel : 0629732615 /0661586669 RC: 42323 Patente : 67501736
                    ID: 42712084 ICE:002385241000091
                </div>
            </div>
        </div>
        <div class="text-center mt-3 mb-5">
            <button id="btnPrint" onclick="PrintContent()" class="btn btn-primary"><i class="fa fa-print"
                    aria-hidden="true"></i> Print Certificate</button>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        function PrintContent() {
            var DocumentContainer = document.getElementById('dvContents');
            var WindowObject = window.open();
            WindowObject.document.writeln('<link rel="stylesheet" href="{{ asset('/css/admin.css') }}">');
            WindowObject.document.writeln(DocumentContainer.innerHTML);
            WindowObject.document.close();
            WindowObject.focus();
            setTimeout(() => {
                WindowObject.print();
                window.close();
            }, 500);
           
        }
    </script>
@endsection
