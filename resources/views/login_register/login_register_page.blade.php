@extends('login_register/layout_login_register_page')
@section('title', 'landing')
@section('content')
<!-- <nav>
    <div class="logo">
        <img src="{{asset('images/logo_shopedia2.png')}}" alt="">
        <h1>SHOPEDIA</h1>
    </div>
    <div class="navbar">
        <ul>
            <li>Login</li>
        </ul>
    </div>
</nav> -->
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

</footer>
@endsection
