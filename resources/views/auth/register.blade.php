@extends('layouts.app')
@section('isactiveseven', 'active')
@section('content')
<link rel="stylesheet"  href="{{ asset("/css/style.css") }}">
<style>
    .ima_navbar .navList .active {
        color: orange;
    }
</style>
<div class="container">
    <div class="registeruseraccont">
        <div class="registerleftimg">
            <img src="/images/homa.jpg" alt=" register">
        </div>
        <div class="registerformssss">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="useregisinp">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>
                </div>
                <div class="useregisinp">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                </div>
                <div class="useregisinp">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot De Pass">
                </div>
                <div class="useregisinp">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Mot De Pass">
                </div>
                <button type="submit" class="registerbtntnt">
                    {{ __('Register') }}
                </button>
                <span>Avez-vous déjà un compte ?  <a href="{{ route("login") }}"> S'identifier</a></span>
            </form>
        </div>
    </div>
</div>
@endsection
