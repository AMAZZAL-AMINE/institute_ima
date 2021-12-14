@extends("layouts.app")
@section('isactivetree', 'active')
@section("content")
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
</style>
    <div class="container">
        <div class="imgcarsolabout">
            <div class="carousel" data-flickity='{ "wrapAround": true }'>
               <img class="carousel-cell" src="/sliders/1.jpg" alt="">
               <img class="carousel-cell" src="/sliders/2.jpg" alt="">
               <img class="carousel-cell" src="/sliders/3.jpg" alt="">
               <img class="carousel-cell" src="/sliders/4.jpg" alt="">
               <img class="carousel-cell" src="/sliders/5.jpg" alt="">
        </div>

        <div class="formationinlistwithdetails">
            <div class="allformationlefftt">
                <ul>
                    <div class="formationtitleee">
                         <b>Toutes les  Formations</b>
                    </div>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                    <a href="">
                        <div>Formation Num One</div>
                        <div><i class="bi bi-arrow-right"></i></div>
                    </a>
                </ul>
            </div>
            <div class="fomationdetailssss">
                
            </div>
        </div>
    </div>
@endsection