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
    </div>
@endsection