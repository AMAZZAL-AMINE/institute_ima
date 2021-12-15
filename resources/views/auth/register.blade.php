@extends('layouts.app')

@section('content')
<div class="container">
    <div class="registeruseraccont">
        <div class="registerleftimg">
            <img src="/images/register.png" alt="ima register">
        </div>
        <div class="registerformssss">
            <form method="POST" action="{{ route('register') }}">
        </div>
    </div>
</div>
@endsection
