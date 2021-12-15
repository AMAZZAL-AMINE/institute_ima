@extends('layouts.app')
@section('isactiveseven', 'active')
@section('content')

<div class="container">
    <style>
        .ima_navbar .navList .active {
            color: orange;
        }
    </style>


    <div class="loginformforstudent">
        <div class="loginformimg">
            <img src="/images/login.jpg" alt="">
        </div>
        <div class="loginformrealform">
            <form action="{{ route("login") }}" method="post">
                @csrf
                <div class="loginuser">
                    @error("email")
                      <div class="text-warning p-2 rounded bg-dark">  {{ $message }}</div>
                    @enderror
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                </div>
                <div class="loginuser">
                    @error("password")
                        <div class="text-warning p-2 rounded bg-dark">  {{ $message }}</div>
                    @enderror 
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot De Pass" value="{{ old('password') }}">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit">Login</button>
                <div class="orregister">
                    <div class="lineagainghh"></div>
                        <span>Or</span>
                    <div class="lineagainghh"></div>
                </div>
               <div class="registecomnovo">
                <a  href="{{ route("register") }}">Register</a>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection
