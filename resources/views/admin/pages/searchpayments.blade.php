@extends("layouts.admin")

@section("content")
@if (auth()->user()->is_admin_pro === "yes")
<div class="container">
    <div class="kjgjgjdgjkdgqioghqkjgbqdkjg">
        <h2>Statistiques des formations</h2>
    </div>

    <div class="searchfrmationusingmonth">
        <form action="{{ route("formation.search.pay.result") }}" method="get">
            @csrf
            <div class="allinputs">
                <div class="selectformation">
                    <div>Select Le Formation</div>
                    <select name="formation">
                        <option value="">...</option>
                        @foreach ($formations as $formation)
                        <option value="{{ $formation->name }}">{{ $formation->name }}</option>
                        @endforeach
                        <option class="bg-light" value="allformation">Touts Les Formation</option>
                    </select>
                </div>
                <div class="selectmonth">
                    <div>Select Le Mois</div>
                    <select name="month">
                        <?php
                        for ($i = 1; $i < 13; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="selectmonth">
                    <div>Select L'année</div>
                    <input type="number" name="year" value="<?php echo date('Y'); ?>">
                </div>
            </div>
            <button type="submit"><i class="fa fa-search"></i> Search</button>
        </form>
    </div>
</div>
@else
<div class="text-center mt-5">
    <h1>لست مسموح بالدخول إلى هده الصفحة .</h1>
    <br>
    <h1>المرجو العودة و شكرا</h1>
</div>
@endif
@endsection