@extends('layouts.app')

@section('content')
<div class="container">
    <div class="intitut-descrition-top-home">
        <div class="text-top-home">
            <div class="hedtit"><h1>INSTITUTE IMA AGADIR</h1></div>
            <div class="heddesc">
                <p>
                    INSTITUT IMA STF de L'education et de formation professionnelle de renommée est fondé en 2016 par des lauréats de l’université
                </p>
            </div>
            <div class="buttongotoabout">
                <a href="">Propos De Nous <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="img-top-home">
            <img src="/images/plateima.png" alt="ima work">
        </div>
    </div>

    <div class="ima-mession-home">
        <div class="ima-mession-image">
            <img src="/images/mission.png" alt="">
        </div>
        <div class="ima-mession-text">
            <div class="ima-mess-title">
                <h1>Sa mission ?</h1>
            </div>
            <div class="ima-mess-desc">
                <p>
                    L’institut s’est vu confier, la responsabilité d’assurer des 
                    formations de qualité aux jeunes étudiants de 
                    la ville d’Agadir et les préparer à la fois pour 
                    réussir leurs examens et à la fois pour assurer 
                    leurs avenirs et booster leurs carrières académiques 
                    et professionnelles.
                </p>
            </div>
            <div class="ima-mess-button">
                <a href="#">Lire la suite <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="videowhodescrib">
        <div class="titlevideo">
            <h2><i class="bi bi-play-btn-fill"></i> Vidéo de mouvement graphique</h2>
        </div>
        <div class="videonow">
            <iframe width="790" height="444" src="https://www.youtube.com/embed/bQ-OcsgCU2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="actualisezhome">
        <div class="actualizertitle">
            <h2><i class="bi bi-flower3"></i> INSTITUTE IMA BLOG</h2>
        </div>
        <div class="actualiserstextimg">
            <div class="actutext">
                <div class="actitle">
                    <h2>ACTUALITÉS INSTITUTE IMA </h2>
                </div>
                <div class="actdesc">
                    <p>
                        Nous vous proposons une actualité très riche tout 
                        au long de l’année : des news, des billets d’experts 
                        sur nos blogs, des enquêtes annuelles, des événements 
                        pour nos communautés et des dossiers spéciaux pour 
                        décrypter la réforme de la formation ou pour approfondir 
                        des tendances métier.
                    </p>
                </div>
                <div class="actbtn">
                    <a href="">ActualitéS</a>
                </div>
            </div>
            <div class="actualimg">
                    <img src="/images/logo.png" >
            </div>
        </div>
    </div>
    
</div>
@endsection
