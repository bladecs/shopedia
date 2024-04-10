@extends('/items/layout_items_paage')
@section('title','items')
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
    <div class="main-content">
        <div class="main">
            <div class="top-content">
                <div class="img-slide">

                </div>
                <div class="detail">

                </div>
            </div>
            <div class="bottom-content">
                <div class="rating">

                </div>
                <div class="review">

                </div>
            </div>
            <div class="footer-content">

            </div>
        </div>
        <div class="side-plane"></div>
    </div>
    <div class="footer-main-content">
        
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
