@extends("layouts.admin")

@section("content")
    <div class="container">
        <b>Saisir les informations sur l'étudiant</b>

        <form action="{{ route("admin.print.deplom.data",$student->id) }}" method="post">
            @csrf
            <div class="deplom_name">
                <div class="deplom_ar_name"><input type="text" name="name_ar" placeholder="أدخل الإسم بالعربية" required></div>
            </div>
            <div class="deplom_formation">
                <div class="deplom_form_fr"><input type="text" name="formation_fr" placeholder="Entrez Nom De Formation en français" required></div>
                <div class="deplom_form_ar"><input type="text" name="formation_ar" placeholder="أدخل إسم الدورة التكوينية بالعربية" required></div>
            </div>
             <button class="deplom_hada_button" type="submit">Submit </button>
        </form>
    </div>
@endsection