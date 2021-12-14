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
  
               <img class="carousel-cell" src="/sliders/2.jpg" alt="">
               <img class="carousel-cell" src="/sliders/3.jpg" alt="">
               <img class="carousel-cell" src="/sliders/4.jpg" alt="">
               <img class="carousel-cell" src="/sliders/5.jpg" alt="">
        </div>
       

        <div class="formationinlistwithdetails">
            
            <div class="fomationdetailssss">
                <h1>Hello This Is Formation One</h1>
                <p>
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                </p>
            </div>
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
        </div>
    </div>
@endsection