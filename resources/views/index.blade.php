@extends('customer.layouts.app')

@section('content')
<!-- Banner -->
<div class="banner-container">
    <a href="#" class="banner"><img src="{{ asset('images/to_customer/banner homepage.png') }}" alt="Banner" class="banner-homepage"></a>
</div>
<div>
    
</div>
<ul class="product-container">
    <div class="product-container-1">
    <ul>
        <li>
        <h4>Pecinta Bakso Aci</h4></br>
        </li>
        <li>
        <p>Rasakan kelezatan bakso aci dengan      
        </br>beragam varian pilihan!     </p>
        </li>
        <li>
        <a href="#" class="discover-now">Discover Now</a>
        </li>
    </ul>
    <ul>
        <img src="{{ asset('images/to_customer/bakso aci.png') }}" alt="Produk" class="">
    </ul>
    </a>
    </div>
    <div class="product-container-2">
    <ul>
        <li>
        <h4>Pecinta Basreng</h4></br>
        </li>
        <li>
        <p>Nikmati cemilan Pedas terbaik dengan 
        </br>berbagai pilihan yang direkomendasikan 
        </br>untuk Anda! Yuk, rasakan sensasi  
        </br>kelezatan yang tak terlupakan.</p>
        </li>
        <li>
        <a href="#" class="discover-now">Discover Now</a>
        </li>
    </ul style>
    <ul>
        <img src="{{ asset('images/to_customer/basreng.png') }}" alt="Produk">
    </ul>
    </a>
    </div>
</ul>

<!-- Kategori -->
<div class="kategori-section">
    <h4>Kategori</h4>
    <ul class="kategori-wrapper">  
    <div class="card-kategori">
        <a href="#" class="">
        <ul>
        <li>
            <img src="{{ asset('images/to_customer/basreng-1.png') }}" alt="Basreng" class="product-kategori">
        </li>
        <li>
            <p>Basreng</p>
        </li>
        </ul>
        </a>
    </div>
    <div class="card-kategori">
    <a href="#" class="">
    <ul>
        <li>
        <img src="{{ asset('images/to_customer/bakso aci.png') }}" alt="Bakso Aci" class="product-kategori">
        </li>
        <li>
        <p>Bakso Aci</p>
        </li>
    </ul>
    </a>
    </div>
    <div class="card-kategori">
    <a href="#" class="">
    <ul>
        <li>
        <img src="{{ asset('images/to_customer/pisang.png') }}" alt="Pisang" class="product-kategori">
        </li>
        <li>
        <p>Pisang</p>
        </li>
    </ul>
    </a>
    </div>
    <div class="card-kategori">
    <a href="#" class="">
    <ul>
        <li>
        <img src="{{ asset('images/to_customer/seblak.png') }}" alt="Seblak" class="product-kategori">
        </li>
        <li>
        <p>Seblak</p>
        </li>
    </ul>
    </a>
    </div>
    </ul>
</div>

<!-- Produk Terbaru -->
<div class="product-terbaru-section">
    <a href="#" class="">
    <h3 style="color: black;"><b>Produk Terbaru</b></h3>
    </a>
    <ul class="product-terbaru-wrapper">      
    <div class="product-terbaru-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terbaru-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>          
    </div>
    <div class="product-terbaru-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terbaru-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    <div class="product-terbaru-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terbaru-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    <div class="product-terbaru-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terbaru-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    </ul>
</div>

<!-- Produk Terlaris -->
<div class="product-terlaris-section">
    <a href="#" class="">
    <h3 style="color: black;"><b>Produk Terbaru</b></h3>
    </a>
    <ul class="product-terlaris-wrapper">      
    <div class="product-terlaris-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terlaris-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>          
    </div>
    <div class="product-terlaris-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terlaris-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    <div class="product-terlaris-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terlaris-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    <div class="product-terlaris-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terlaris-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>
    </div>
    </ul>
</div>

<!-- Produk Recomendasi -->
<div class="product-terlaris-section">
    <a href="#" class="">
    <h3 style="color: black;"><b>Produk Recomendasi</b></h3>
    </a>
    <ul class="product-terlaris-wrapper">      
    <div class="product-terlaris-container">
        <img src="{{ asset('images/to_customer/kerupuk-kancing.png') }}" alt="">
        <div class="detail-product-terlaris-container">
            <ul>
            <h4 style="color: black;">Kerupuk Kancing</h4>
            <p style="color: rgba(255, 113, 88, 1);"><b>Rp 7.000</b></p>
            </ul>
            <a href="#"><img src="{{ asset('images/to_customer/logo-keranjang.png') }}" alt=""></a>
        </div>          
    </div>

</div>

<div class="space-content">

</div>
@endsection