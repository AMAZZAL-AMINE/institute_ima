@extends("layouts.app")

@section('content')
<div class="inscriptiontoptitle">
    <h1>Inscription</h1>
</div>
<div class="container">
    <div class="inscriptionformsall">
        <form action="{{ route('admin.insertdatauser') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="inscriusername">
                <div class="fname">
                    <input type="text" name="fname" placeholder="Nom" value="{{ old('fname') }}">
                </div>
                <div class="lname">
                    <input type="text" name="lname" placeholder="Prénom" value="{{ old('lname') }}">
                </div>
            </div>
            <div class="inscrimgphoto">
                <div class="inputtitle">Select Une Photo</div>
                <input type="file" name="img">
            </div>
            <div class="ninsnational">
                <input type="text" name="cin" placeholder="N° national d'identité" value="{{ old("cin") }}">
            </div>
            <div class="ninsctelephone">
                <input type="number" name="phone" placeholder="N° De Téléphone" value="{{ old("phone") }}">
            </div>
            <div class="dinscberth">
                <div class="inputtitle">Date de naissance</div>
                <input type="date" name="dberth" value="{{ old("dberth") }}">
            </div>
            <div class="ninscschole">
                <div class="inputtitle">Niveau Scolaire</div>
                <select name="nschole">
                    <option value="">...</option>
                    <option value="sans niveau">sans niveau</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire du premier cycle"> secondaire du premier cycle</option>
                    <option value="Secondaire">secondaire</option>
                    <option value="Université">Université</option>

                </select>
            </div>
            <div class="ninscschole">
                <div class="inputtitle">Select Formation:</div>
                <select name="formation">
                    <option value="">...</option>
                    <option value="34">AIDE PHARMACIE مساعد صيدلي</option>
                    <option value="33">ASSISTANTE SOCIALE مساعد اجتماعي</option>
                    <option value="32"> ASSISTANTE MÉDICALE السكرتارية الطبية</option>
                    <option value="1">CENTRE D’APPEL تكوين في مراكز الاتصال</option>
                    <option value="2">COMPTABILITÉ ET GESTION المحاسبة و التسيير</option>
                    <option value="3">CUISINE الطبخ</option>
                    <option value="4">DÉVELOPPEMENT WEB البرمجة المعلوماتية</option>
                    <option value="5">DIAGNOSTIQUE AUTOMOBILE تشخيص الإلكتروني للسيارات</option>
                    <option value="6">EDUCATION PHYSIQUE اساتذة التربية البدنية</option>
                    <option value="7">ÉDUCATRICE DE LA PETITE ENFANCE مربية الأطفال</option>
                    <option value="8">ELECTRICITÉ BÂTIMENT الكهرباء المعمارية و الصناعية</option>
                    <option value="9">FITNESS مدربي اللياقة البدنية و كمال الأجسام</option>
                    <option value="10">INFOGRAPHIE الطباعة المعلوماتية</option>
                    <option value="11">INFORMATIQUE المعلوميات المكتبية</option>
                    <option value="12">LES LANGUES اللغات</option>
                    <option value="13">MENUISERIE ALUMINIUM نجارة الألمنيوم</option>
                    <option value="14">PÂTISSERIE الحلويات العصرية</option>
                    <option value="15">PÉDAGOGIE الاساتذة للتعليم الخصوصي</option>
                    <option value="16">PREMIERS SECOURS الإسعافات الأولية</option>
                    <option value="17">PROGRAMMATION AUTOMOBILE برمجة عقول السيارات</option>
                    <option value="18">RÉCEPTION HÔTELIÈRE تكوين استقبال الفندق</option>
                    <option value="19">RÉPARATION TÉLÉPHONIQUE إصلاح الهواتف النقالة</option>
                    <option value="20">SOUDURE تكوين في اللحام</option>
                    <option value="21">STYLISME & MODÉLISME الخياطة و الفصالة</option>
                    <option value="22">TÉLÉSURVEILLANCE تركيب كاميرات المراقبة و اجهزة الانذار</option>
                    <option value="23">Secrétariat administratif - السكرتارية الإدارية</option>
                    <option value="24">Logistique - النقل و اللوجستيك</option>
                    <option value="25">Qualité - مراقبة الجودة</option>
                    <option value="26">Service Restauration (Serveur / Serveuse) - خدمة تموين (نادل / نادلة)</option>
                    <option value="27">Tâpisserie - صناعة الافرشة العصرية</option>
                    <option value="28">Clark chariot élévateur c3 الرافعات الشوكية</option>
                    <option value="29">Produits Cosmétiques - صناعة مستحضرات التجميل</option>
                    <option value="30">تكوين سيارة الإسعاف</option>
                    <option value="31">COIFFURE HOMME – الحلاقة للرجال</option>

                </select>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
        @if (auth()->user()->has()->students())
            <h1>Done You Already Registered /:</h1>
        @endif
    </div>
</div>
@endsection