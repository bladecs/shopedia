@extends('login_register/layout_login_register_page')
@section('title', 'landing')
@section('content')
<div class="container">
    <section id="home">
        <img src="{{asset('images/background_landing4.jpg')}}" class="background">
        <div class="main_form" id="main">
            <div class="content-form" id="login">
                <form action="post" class="form-login">
                    <div class="form-logo">
                        <img src="{{asset('images/logo_shopedia2.png')}}" alt="">
                        <h1>WELCOME TO SHOPEDIA</h1>
                    </div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="input-login">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input-login">
                    <div class="terms-register">
                        <div class="terms">
                            <input type="checkbox" name="termschb" id="termschb" placholder="are you verified">
                            <label for="termschb"><a href="#">Terms and condition</a></label>
                        </div>
                        <div class="register">
                            <a href="" id="switch-register">Don't have account</a>
                        </div>
                    </div>
                    <button class="login">Login</button>
                    <div class="google login">
                        <ion-icon name="logo-google"></ion-icon>
                        <button>Login With</button>
                    </div>
                </form>
            </div>
            <div class="content-form-register" id="register">
                <form action="post" class="form-login">
                    <div class="form-logo">
                        <img src="{{asset('images/logo_shopedia2.png')}}" alt="">
                        <h1>WELCOME TO SHOPEDIA</h1>
                    </div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="input-login">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="input-login">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input-login">
                    <div class="terms-register">
                        <div class="terms">
                            <input type="checkbox" name="termschb" id="termschb" placholder="are you verified">
                            <label for="termschb"><a href="#">Terms and condition</a></label>
                        </div>
                        <div class="loged">
                            <a href="" id="switch-login">Already have account</a>
                        </div>
                    </div>
                    <button class="login">SignUp</button>
                    <div class="google login">
                        <ion-icon name="logo-google"></ion-icon>
                        <button>SignUp With</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<footer>
    <div class="list-footer">
        <div class="list-text">
            <ul>
                <li><h1>SHOPEDIA</h1></li>
                <li><h2>Tentang Kami</h2></li>
                <li><h2>Blog</h2></li>
                <li><h2>Mitra Blog</h2></li>
                <li><h2>Hak Kekayaan</h2></li>
            </ul>
            <ul>
                <li><h1>BELI</h1></li>
                <li><h2>Tagihan & Top Up</h2></li>
                <li><h2>Tukar Tambah Handphone</h2></li>
                <li><h2>Shopedia COD</h2></li>
            </ul>
        </div>
        <div class="list-text">
            <ul>
                <li><h1>BELI</h1></li>
                <li><h2>Tagihan & Top Up</h2></li>
                <li><h2>Tukar Tambah Handphone</h2></li>
                <li><h2>Shopedia COD</h2></li>
            </ul>
            <ul>
                <li><h1>BELI</h1></li>
                <li><h2>Tagihan & Top Up</h2></li>
                <li><h2>Tukar Tambah Handphone</h2></li>
                <li><h2>Shopedia COD</h2></li>
            </ul>
            <ul>
                <li><h1>BELI</h1></li>
                <li>
                    <div class="sosmed">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="adds">
        <img src="{{asset('images/logo_footer_sample.png')}}" alt="">
        <div class="apps-store">
            <button type="button">Google Play</button>
            <button type="button">App Store</button>
            <button type="button">AppGallery</button>
        </div>
        <h2>&copy 2022 - 2024 PT. Shopedia.</h2>
    </div>
</footer>
@endsection
