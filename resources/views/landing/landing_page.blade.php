@extends('landing/layout_landing_page')
@section('title', 'landing')
@section('content')
<nav>
    <div class="logo">
        <img src="{{asset('images/logo_shopedia2.png')}}" alt="">
        <h1>SHOPEDIA</h1>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#catalog">Catalog</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
</nav>
@endsection
