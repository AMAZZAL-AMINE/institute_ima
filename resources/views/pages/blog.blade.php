@extends('layouts.app')
@section('isactivefive', 'active')
@section("content")
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
</style>

    <div class="container">
        <div class="blogtitletop">
            <h1>Le Blog</h1>
        </div>

        <div class="blogpaneltop">
            <div class="blogimg">
                <img src="/images/blog.svg" alt="">
            </div>
            <div class="blogtexxxx">
                <div class="bogpaneltitle">
                    <h2>Regardez Nos Nouvelles Et Quoi De Neuf</h2>
                </div>
                <div class="blogpaneldesc">
                    <p>
                        Ici dans cette Page, vous trouverez toutes les nouveautés 
                        et toutes les nouvelles formations ajoutées récemment
                        à l'Institut IMA
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection