@extends('customer.layouts.app')

@section('content')
<!-- Content -->
<!-- Content -->
<div class="content-keranjang-wrapper">
    <h3>Keranjang Belanja</h3>
    <nav>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><b>Dashboard</b></a></li>
            <li class="breadcrumb-item-active">Keranjang</li>
        </ul>
    </nav>
    </div>

    <table class="table-keranjang"> 
        <thead class="table-thead-keranjang">
            <tr>
                <th><p>Foto Produk</p></th>
                <th><p>Name & Seller</p></th>
                <th><p>Price</p></th>
                <th><p>Menu</p></th>
            </tr>
        </thead>
        <tbody class="table-tbody-keranjang">
            <tr>
                <td><img src="images/to_customer/product-sus-coklat-1.png" alt=""></td>
                <td>
                    <h4>Sus Coklat</h4></br>
                    <p>Makanan Manis</p>
                </td>
                <td><h4>Rp 7.000</h4></td>
                <td>
                    <a href="Keranjang2.html"><button>Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td><img src="images/to_customer/PisangAroma.png" alt=""></td>
                <td>
                    <h4>Pisang Aroma</h4></br>
                    <p>Pisang</p>
                </td>
                <td><h4>Rp 8.000</h4></td>
                <td>
                    <a href="#"><button>Hapus</button></a>
                </td>
            </tr>
            <tr>
                <td><img src="images/to_customer/Bakso-Aci-Geprek.png" alt=""></td>
                <td>
                    <h4>Bakso Aci Geprek</h4></br>
                    <p>Bakso Aci</p>
                </td>
                <td><h4>Rp 14.000</h4></td>
                <td>
                    <a href="#"><button>Hapus</button></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="total-belanja-wrapper">
        <h4>Total Belanja</h4>
        <div class="voucher-wrapper">
            <div style="width: 551px; height: 97px;">
                <ul>
                    <p>Voucher</p>
                </ul>
                <ul class="ul-voucher">
                    <input type="text" style="width: 408px; height: 61px; background: #ffff;">
                    <button type="submit" style="width: 145px; height: 61px; background-color: green; border-color: transparent;">Tambahkan</button>
                </ul>
            </div>
            <div class="table-detail-voucher">
                <table>
                    <tr>
                        <td><p>Sub Total</p></td>
                        <td><p>Rp 22.000</p></td>
                    </tr>
                    <tr>
                        <td><p>Diskon Voucher</p></td>
                        <td><p>(-)</p></td>
                    </tr>
                    <tr>
                        <td><p><b>Total</b></p></td>
                        <td><p><b>Rp 22.000</b></p></td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        <div class="button-voucher-checkout">
            <a href="/"><button style="background-color: #9A9A9A; color: #000000; border-color: transparent; border-radius: 8px;">Kembali Berbelanja</button></a>
            <a href="checkout"><button style="background-color: #FFA900; color: #fff; border-color: transparent; border-radius: 8px;">Beli Sekarang</button></a>
        </div>
    </div>

    <div class="whatsapp-button">
        <a href="#"><img src="images/to_customer/logo-chat.png" alt="Chat-WhatsApp"></a>
    </div>


    <div class="space-content">
    </div>

@endsection