@extends('landing/layout_landing_page')
@section('title', 'landing')
@section('content')
<nav>
    <div class="logo">
        <img src="{{asset('images/logo_shopedia2.png')}}" alt="">
        <h1>SHOPEDIA</h1>
    </div>
    <div class="searchbox">
        <input type="text" name="searchbox" id="searchbox" placeholder="Search in shopedia">
        <ion-icon name="search"></ion-icon>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="/cart"><ion-icon name="cart-outline"></ion-icon></a></li>
            <li><a href="/notification"><ion-icon name="notifications-outline"></ion-icon></a></li>
            <li><a href="/mail"><ion-icon name="mail-outline"></ion-icon></a></li>
            <li><a href="/login"><ion-icon name="person-circle-outline"></ion-icon></a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="banner-content">
        <div class="slider">
            <img src="{{asset('images/banner-1.png')}}" alt="" class="banner">
            <img src="{{asset('images/banner-2.png')}}" alt="" class="banner active">
            <img src="{{asset('images/banner-3.png')}}" alt="" class="banner">
            <div class="btn-slider">
                <span class="left"><ion-icon name="chevron-back-circle"></ion-icon></span>
                <span class="right"><ion-icon name="chevron-forward-circle"></ion-icon></span>
            </div>
        </div>
        <div class="slider-indicator">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <div class="category">
        <h1>Category</h1>
        <div class="box" id="box">
            <div class="box-category"><a href="#technology">
                <ion-icon name="hardware-chip"></ion-icon>
                <h3>Technology</h3>
            </a></div>
            <div class="box-category"><a href="#sport">
                <ion-icon name="american-football"></ion-icon>
                <h3>Sport</h3>
            </a></div>
            <div class="box-category"><a href="#fashion">
                <ion-icon name="shirt"></ion-icon>
                <h3>Fashion</h3>
            </a></div>
            <div class="box-category"><a href="#school">
                <ion-icon name="school"></ion-icon>
                <h3>School</h3>
            </a></div>
            <div class="box-category"><a href="#home">
                <ion-icon name="home"></ion-icon>
                <h3>Home</h3>
            </a></div>
            <div class="box-category"><a href="#games">
                <ion-icon name="game-controller"></ion-icon>
                <h3>Games</h3>
            </a></div>
            <div class="box-category"><a href="#topup">
                <ion-icon name="wallet"></ion-icon>
                <h3>Top Up</h3>
            </a></div>
        </div>
    </div>
    <div class="recent-view">
        <h1>Recent View</h1>
        <div class="card-view" id="card-recent">
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
        </div>
    </div>
    <div class="recent-view">
        <h1>Recent View</h1>
        <div class="card-view" id="card-most">
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <h2>Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, architecto!</p>
                <button><a href="#">button</a></button>
            </div>
        </div>
    </div>
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
