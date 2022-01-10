@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Saisir les informations sur l'étudiant</h1>

        <form action="" method="post">
            @csrf
            <div class="deplom_name">
                <div class="deplom_fr_name"><input type="text" name="name_fr" placeholder="Entrez le nom en français" required></div>
                <div class="deplom_ar_name"><input type="text" name="name_ar" placeholder="أدخل الإسم بالعربية" required></div>
            </div>
            <div class="deplom_date_naisans">
               <div> <span for="berth">Ne (e) المزداد في</span> </div>
                <input id="berth" type="date" name="deplom_berth" required>
            </div>
            <div class="deplom_cin">
                <input type="text" name="deplom_cin" placeholder="Cin" required>
            </div>
            <div class="deplom_formation">
                <div class="deplom_form_fr"><input type="text" name="formation_fr" placeholder="Entrez Formation en français" required></div>
                <div class="deplom_form_ar"><input type="text" name="formation_ar" placeholder="أدخل إسم الدورة التكوينية بالعربية" required></div>
            </div>
            <div class="deplom_promotion">
                <input type="text" name="promotion" placeholder="Promotion" required>
            </div>
             <div class="deplom_mois">
                 <div class="deplom_moi_fr"><input type="text" name="moi_fr" placeholder="Nombre de mois" required></div>
                 <div class="deplom_moi_fr"><input type="text" name="moi_ar" placeholder="عدد الأشهر" required></div>
             </div>
             <div class="deplom_itablesment">
                 <div class="deplom_etablisnebt_fr"><input type="text" name="etabliesmant_fr" placeholder="Etablisemont" required></div>
                 <div class="deplom_etablisnebt_ar"><input type="text" name="etabliesmant_ar" placeholder="المؤسسة" required></div>
             </div>
             <div class="deplom_fait">
                 <input type="text" name="fiat_a" placeholder="Fit A Agadir Le">
             </div>
             <button class=" mt-5"type="submit">Submit </button>
        </form>
    </div>
@endsection