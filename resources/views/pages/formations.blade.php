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
                            <div>{{ $fname->name }}</div>
                            <div><i class="bi bi-arrow-right"></i></div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection