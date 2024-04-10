@extends('shoping/layout_shoping_page')
@section('title','shoping')
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
    <div class="side-panel">
        <h1>Filter</h1>
        <div class="filter">
            <div class="category">
                <div class="division">
                    <h2>Category</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division">
                    <ion-icon name="chevron-down"></ion-icon>
                    <h3>Pertukaran</h3>
                </div>
                <div class="sub-sub-division">
                    <ion-icon name="chevron-up"></ion-icon>
                    <h3>Baut & Mur</h3>
                </div>
                <div class="sub-division">
                    <ion-icon name="chevron-down"></ion-icon>
                    <h3>Pertukaran</h3>
                </div>
                <div class="sub-sub-division">
                    <ion-icon name="chevron-up"></ion-icon>
                    <h3>Baut & Mur</h3>
                </div>
                <div class="sub-division">
                    <ion-icon name="chevron-down"></ion-icon>
                    <h3>Pertukaran</h3>
                </div>
                <div class="sub-sub-division">
                    <ion-icon name="chevron-up"></ion-icon>
                    <h3>Baut & Mur</h3>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Jenis Toko</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Official Store</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Power Merchant Pro</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Power Merchant</h3></label>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Lokasi</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Bandung</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Depok</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Makassar</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>DKI Jakarta</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Jabodetabek</h3></label>
                    </div>
                    <h3 class="popup">Lihat selengkapnya</h3>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Harga</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="input-sub-division">
                        <label for="store"><h3>Rp</h3></label>
                        <input type="number" name="store" id="input-price" placeholder="Harga Minimum">
                    </div>
                    <div class="input-sub-division">
                        <label for="store"><h3>Rp</h3></label>
                        <input type="number" name="store" id="input-price" placeholder="Harga Maximum">
                    </div>
                    <div class="price-sub-division">
                        <h3>Rp110rb - Rp200rb</h3>
                    </div>
                    <div class="price-sub-division">
                        <h3>Rp110rb - Rp200rb</h3>
                    </div>
                    <div class="price-sub-division">
                        <h3>Rp110rb - Rp200rb</h3>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Kondisi</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Baru</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Bekas</h3></label>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Pengiriman</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Bandung</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Depok</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Makassar</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>DKI Jakarta</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Jabodetabek</h3></label>
                    </div>
                    <h3 class="popup">Lihat selengkapnya</h3>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Rating</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>4 Keatas</h3></label>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="division">
                    <h2>Penawaran</h2>
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
                <div class="sub-division-horizontal">
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Mumpung Murah</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Cashback</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Gratis Ongkir</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>COD</h3></label>
                    </div>
                    <div class="items-sub-division">
                        <input type="checkbox" name="store" id="">
                        <label for="store"><h3>Harga Diskon</h3></label>
                    </div>
                    <h3 class="popup">Lihat selengkapnya</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="sort">
            <h2>Hasil menampilkan</h2>
            <div class="sort-btn">
                <label for="sort">Sort by :</label>
                <select name="sort" id="sort">
                    <option value="paling sesuai">Paling Sesuai</option>
                    <option value="ulasan">Ulasan</option>
                    <option value="terbaru">Terbaru</option>
                    <option value="harga tertinggi">Harga Tertinggi</option>
                    <option value="harga terendah">Harga Terendah</option>
                </select>
            </div>
        </div>
        <div class="card-view">
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 230.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 130.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('images/img_sample.jpg')}}" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, non!</p>
                <h3>Rp. 300.000</h3>
                <h4>Bandung</h4>
                <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <h4>4.8 | 60+ sale</h4>
                </div>
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
