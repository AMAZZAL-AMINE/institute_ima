@extends('layouts.app')
@section('isactivephor', 'active')
@section("content")
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
</style>
    <div class="container">
        <div class="contacttitle">
            <h1>Contact Nous</h1>
        </div>
        <div class="contactmapandformes">

            <div class="contcatforms">
                <form action="" method="post">
                    @csrf
                    <div class="nputdata">
                        <input type="text" name="username" placeholder="Nom & Prénom">
                    </div>
                    <div class="nputdata">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="nputdata">
                        <input type="number" name="phone" placeholder="Telephone">
                    </div>
                    <div class="nputdata">
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="nputdata">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
            <div class="contactmapes">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3441.1592181987435!2d-9.547844805701438!3d30.403224236160835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4eb13d16ba344019!2sInstitut%20IMA!5e0!3m2!1sar!2sma!4v1639559633612!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="contactinfo">
                <div class="contactdatas">
                    <div class="emailcontac">
                        <b><i class="bi bi-envelope"></i> institutimastf@gmail.com</b>
                    </div>
                    <div class="numecontact">
                        <b><i class="bi bi-telephone"></i> 0626-400022</b>
                    </div>
                    <div class="numecontact">
                        <b><i class="bi bi-telephone"></i> 05282-39873</b>
                    </div>
                </div>
                <div class="contactopeningatto">
                    <h2>Horaires d'ouverture</h2>
                    <div><p>lun.:	08:30 - 21:00</p></div>
                    <div><p>mar.:	08:30 - 21:00</p></div>
                    <div><p>mer.:	08:30 - 21:00</p></div>
                    <div><p>jeu.:	08:30 - 21:00</p></div>
                    <div><p>ven.:	08:30 - 21:00</p></div>
                    <div><p>sam.:	08:30 - 21:00</p></div>
                    <div><p>dim.:	08:30 - 21:00</p></div>
                </div>
        </div>
    </div>
@endsection