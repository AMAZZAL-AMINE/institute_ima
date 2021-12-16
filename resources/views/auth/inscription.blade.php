@extends("layouts.app")

@section('content')
<div class="inscriptiontoptitle">
    <h1>Inscription</h1>
</div>
<div class="container">
    <div class="inscriptionformsall">
        <form action="" method="post" encrypted="">
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
                <div>Ta Photo</div>
                <input type="file" name="img">
            </div>
            <div class="ninsnational">
                <input type="text" name="cin" placeholder="N° national d'identité" value="{{ old("cin") }}">
            </div>
            <div class="ninsctelephone">
                <input type="number" name="phone" placeholder="N° De Téléphone" value="{{ old("phone") }}">
            </div>
            <div class="dinscberth">
                <div>Date de naissance</div>
                <input type="date" name="dberth" value="{{ old("dberth") }}">
            </div>
            <div class="ninscschole">
                <div><span>Date de naissance</span></div>
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
                <div><span>Select Formation:</span></div>
                <select name="formation">
                    <option value="">...</option>
                    <option value="sans niveau">AIDE PHARMACIE مساعد صيدلي</option>
                    <option value="Primaire">ASSISTANTE SOCIALE مساعد اجتماعي</option>
                    <option value="Secondaire du premier cycle"> ASSISTANTE MÉDICALE السكرتارية الطبية</option>
                    <option value="Secondaire">CENTRE D’APPEL تكوين في مراكز الاتصال</option>
                    <option value="Université">COMPTABILITÉ ET GESTION المحاسبة و التسيير</option>
                    <option value="Université">CUISINE الطبخ</option>
                    <option value="Université">DÉVELOPPEMENT WEB البرمجة المعلوماتية</option>
                    <option value="Université">DIAGNOSTIQUE AUTOMOBILE تشخيص الإلكتروني للسيارات</option>
                    <option value="Université">EDUCATION PHYSIQUE اساتذة التربية البدنية</option>
                    <option value="Université">ÉDUCATRICE DE LA PETITE ENFANCE مربية الأطفال</option>
                    <option value="Université">ELECTRICITÉ BÂTIMENT الكهرباء المعمارية و الصناعية</option>
                    <option value="Université">FITNESS مدربي اللياقة البدنية و كمال الأجسام</option>
                    <option value="Université">INFOGRAPHIE الطباعة المعلوماتية</option>
                    <option value="Université">INFORMATIQUE المعلوميات المكتبية</option>
                    <option value="Université">LES LANGUES اللغات</option>
                    <option value="Université">MENUISERIE ALUMINIUM نجارة الألمنيوم</option>
                    <option value="Université">PÂTISSERIE الحلويات العصرية</option>
                    <option value="Université">PÉDAGOGIE الاساتذة للتعليم الخصوصي</option>
                    <option value="Université">PREMIERS SECOURS الإسعافات الأولية</option>
                    <option value="Université">PROGRAMMATION AUTOMOBILE برمجة عقول السيارات</option>
                    <option value="Université">RÉCEPTION HÔTELIÈRE تكوين استقبال الفندق</option>
                    <option value="Université">RÉPARATION TÉLÉPHONIQUE إصلاح الهواتف النقالة</option>
                    <option value="Université">SOUDURE تكوين في اللحام</option>
                    <option value="Université">STYLISME & MODÉLISME الخياطة و الفصالة</option>
                    <option value="Université">TÉLÉSURVEILLANCE تركيب كاميرات المراقبة و اجهزة الانذار</option>
                    <option value="Université">Secrétariat administratif - السكرتارية الإدارية</option>
                    <option value="Université">Logistique - النقل و اللوجستيك</option>
                    <option value="Université">Qualité - مراقبة الجودة</option>
                    <option value="Université">Service Restauration (Serveur / Serveuse) - خدمة تموين (نادل / نادلة)</option>
                    <option value="Université">Tâpisserie - صناعة الافرشة العصرية</option>
                    <option value="Université">Clark chariot élévateur c3 الرافعات الشوكية</option>
                    <option value="Université">Produits Cosmétiques - صناعة مستحضرات التجميل</option>
                    <option value="Université">تكوين سيارة الإسعاف</option>
                    <option value="Université">COIFFURE HOMME – الحلاقة للرجال</option>

                </select>
            </div>
        </form>
    </div>
</div>
@endsection