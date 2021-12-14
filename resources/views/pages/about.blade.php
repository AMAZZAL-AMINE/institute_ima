@extends('layouts.app')
@section('isactivetwo', 'active')
@section('content')
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
</style>
    <div class="container">
        <div class="paneltopabout">
            <div class="panelabouttext">
                <div class="abouttoptitle">
                    <h1>A PROPOS DE NOUS</h1>
                </div>
                <div class="topaboutdesc">
                    <p>INSTITUT IMA STF de L'education et de formation professionnelle de renommée est fondé en 2016 par des lauréats de l’université.
                    L’institut IMA de formation professionnelle de renommée est fondé en 2016 par des lauréats de l’université Ibn Zohr.</p>
                </div>
            </div>
            <div class="panelaboutimg">
                <img src="/images/topabout.png" alt="">
            </div>
        </div>

        <div class="aboutmession">
            <div class="messiontitle">
                <h1>Sa mission ?</h1>
            </div>
            <div class="messiondesc">
                <p class="lepmession">
                    L’institut s’est vu confier, la responsabilité d’assurer des formations de qualité aux jeunes étudiants de la ville d’Agadir et les préparer à la fois pour réussir leurs examens et à la fois pour assurer leurs avenirs et booster leurs carrières académiques et professionnelles.
                </p>
                <p class="rightmess"> 
                    Pour accomplir ces missions-là, l’institut IMA met à la disposition de ses stagiaires et ses étudiants des équipes pédagogiques qualifiées et assure un environnent d’apprentissage favorable répondant à leurs attentes individuelles et collectives.
                </p>
            </div>
        </div>

        <div class="aboutcountstudent">
            <div class="allcountstud">
                <div class="countcart">
                    <div class="justformargintop"></div>
                    <b>100 %</b>
                    <h4>
                        Formation continue
                    </h4>
                </div>
                <div class="countcart">
                    <div class="justformargintop"></div>
                    <b>1000 +</b>
                    <h4>
                        Stage en entreprise
                    </h4>
                </div>
                <div class="countcart">
                    <div class="justformargintop"></div>
                    <b>300 +</b>
                    <h4>
                        Cours en e-learning
                    </h4>
                </div>
                <div class="countcart">
                    <div class="justformargintop"></div>
                    <b>5000 +</b>
                    <h4>
                        convention de stage
                    </h4>
                </div>
            </div>
            <div class="countdesc">
                <p>
                    Ces objectifs nécessitent un enthousiasme, une actualisation permanente des connaissances et un dévouement que nos professeurs et directeurs ne cessent de développer pour le plus grand bien des futures générations.
                </p>
            </div>
        </div>

        <div class="imagesliderabout">
            <div class="imagesliderstitle">
                <h2><i class="bi bi-window-stack"></i> Quelques photos de nos diplômés </h2>
            </div>
            <div class="imgcarsolabout">
                <div class="carousel" data-flickity='{ "wrapAround": true }'>
                   <img class="carousel-cell" src="/sliders/1.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/2.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/3.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/4.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/5.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/6.jpg" alt="">
                   <img class="carousel-cell" src="/sliders/7.jpg" alt="">
              </div>
              
            </div>
        </div>

        <div class="ifonetotrgister">
            <div class="registitle">
                <h2>Qu'est ce que tu attends ?</h2>
            </div>
            <div class="regisdesc">
                <p>
                    Avez-vous une passion pour l'apprentissage et 
                    la construction d'un bon avenir? Qu'attendez-vous, 
                    inscrivez-vous maintenant facilement
                </p>
            </div>
        </div>
    </div>

@endsection