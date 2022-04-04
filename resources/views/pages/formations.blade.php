@extends("layouts.app")
@section("content")
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
    
.imagesliderabout {
    margin-top: 90px;
}

.imagesliderabout .imagesliderstitle h2{
    text-align: center;
    font-weight: bold;
    color: #0A0882;

}


.imagesliderabout .imgcarsolabout {
    margin-top: 30px;
}
.carousel-cell {
    width: 100%;
    object-fit: contain;
    max-height: 500px;
    min-height: 500px;
    margin-right: 10px;
    background: rgb(255, 171, 171);
    background: linear-gradient( 351deg, rgba(255, 171, 171, 1) 0%, rgba(255, 47, 47, 1) 100% );
    border-radius: 5px;
    counter-increment: carousel-cell;
  }
.flickity-page-dots {
    position: absolute;
    width: 100%; 
    bottom: 0;
    padding: 0;
    margin: 0;
    text-align: center;
    line-height: 1;
  }
  
@media only screen and (max-width: 810px) {
    .carousel-cell {
        height: 100vh;
        object-fit: contain;
    }
}

.ifonetotrgister {
    margin-top: 90px;
    text-align: center;
    padding: 50px;
    margin-bottom: 90px;
}
.ifonetotrgister .registitle h2 {
    font-weight: bold;
    color: #0A0882;
}

.ifonetotrgister  .regisdesc p {
    font-size: 25px !important;
    font-weight: 200;
}
.ifonetotrgister .registerbutin a {
    text-decoration: none;
    background-color: #0A0882;
    color: white;
    font-weight: bold;
    padding: 15px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

@media only screen and (max-width: 772px) {
    .ifonetotrgister  .regisdesc p{
        font-size: 17px !important;
        font-weight: 200;
    }
    .ifonetotrgister {
        padding: 25px;
    }
}


.formationinlistwithdetails  {
    margin-top: 50px;
    display: flex;
}
.formationinlistwithdetails .formationtitleee {
    background-color: #0A0882;
    padding: 25px;
    text-align: center;
    color: #fff;
    font-weight: bold;
    border-radius: 5px 5px 0 0;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    -ms-border-radius: 5px 5px 0 0;
    -o-border-radius: 5px 5px 0 0;
}

.formationinlistwithdetails .allformationlefftt {
    flex: 2;
    margin-right: 25px;
    border-radius: 5px;
    width: 100%;
}

.formationinlistwithdetails .fomationdetailssss {
    flex: 4;
     
}
.formationinlistwithdetails .allformationlefftt ul a {
    display: flex;  
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
    background: rgb(255, 171, 171);
    background: linear-gradient( 351deg, rgba(255, 171, 171, 1) 0%, rgba(255, 47, 47, 1) 100% );
    padding: 15px;
    color: white;
    font-weight: bold;
    border-bottom: 1px solid rgba(70, 70, 70, 0.438);
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
    width: 100%;
}

.formationinlistwithdetails .allformationlefftt ul a:hover {
    background-color: rgb(241, 201, 127);
}
 
.formationinlistwithdetails .fomationdetailssss {
    background-color: rgba(189, 189, 189, 0.349);
    padding: 15px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}
 
 

@media only screen and (max-width: 998px) {
    .formationinlistwithdetails {
        display: block;
    }   
    .formationinlistwithdetails .allformationlefftt {
        margin-top: 20px;
        margin-left: -15px;
    }
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
                <h1>{{ $formation->name }}</h1>
                <p>
                    <?php echo $formation->description; ?>
                </p>
            </div>
            <div class="allformationlefftt">
                <ul>
                    <div class="formationtitleee">
                         <b>Toutes les  Formations</b>
                          
                    </div>
                    @foreach ($fomationname as $fname)
                        <a href="{{ route("list.formations",$fname->slug) }}">
                            <div style="text-align: center;">{{ $fname->name }}</div>
                            <div><i class="bi bi-arrow-right"></i></div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection