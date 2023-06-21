@extends('customer.layouts.app')

@section('content')

    <!-- Content -->
    <div class="content-kategori-wrapper">
    <h3>Kategori Bakso Aci</h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item" style="padding-right: 8px;"><a href="Homepage.html" style="color: #FFA900;"><b>Dashboard</b></a></li>
            <li style="padding-right: 8px;">></li>
            <li class="breadcrumb-item" style="padding-right: 8px;"><a href="Keranjang.html" style="color: #FFA900;"><b>Keranjang</b></a></li>
            <li style="padding-right: 8px;">></li>
            <li class="breadcrumb-item active" aria-current="page"  style="color: #272727;">Pengiriman</li>
        </ul>
    </nav>
    </div>

<div class="wrapper-items">
    <div class="pengiriman-wrapper">
        <h4 >Alamat Store</h4>
        <table class="pengiriman-content">
            <tr>
                <td>Nama Store</td>
                <td>:</td>
                <td>Cemilanpuas</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Jalan Seraja Gg. Pertama No.3</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>Medan Sungga</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>Kota Medan</td>
            </tr>
        </table>
    </div>
    <div class="ringkasan-pesanan-wrapper">
        <h4>Ringkasan Pesanan</h4>
        <div>
        <table class="table-ringkasan-pesanan">
            <tr>
                <td><img src="images/to_customer/PisangAroma.png" alt=""></td>
                <td>Pisang Aroma</td>
                <td>Rp 8.000</td>
            </tr>
            <tr>
                <td><img src="images/to_customer/Bakso-Aci-Geprek.png" alt=""></td>
                <td>Bakso Aci Geprek</td>
                <td>Rp 8.000</td>
            </tr>
        </table>
        </div>
        <div>
        <table class="table-sub-ringkasan-pesanan">
            <tr>
                <td>Sub Total</td>
                <td>Rp 22.000</td>
            </tr>
            <tr>
                <td>Ongkir</td>
                <td style="color: red;">Rp -</td>
            </tr>
            <tr>
                <td>Diskon Voucher</td>
                <td style="color: red;">(-)Rp 10.000</td>
            </tr>
            <br>
            <tr>
                <td>Total</td>
                <td>Rp -</td>
            </tr>
        </table>
        </div>
        <!-- Trigger/Open The Modal -->
        <button id="btn-MetodePembayaran">Metode Pembayaran</button>

        <div id="metodePembayaranModal" class="metode-pembayaran-modal">
            <div class="metode-pembayaran-modal-content">
                <span class="metode-pembayaran-close">&times;</span>
                <h2>Metode Pembayaran</h2>
                <label for="metode-pembayaran"></label>
                <select class="selection-metode-pembayaran" name="metode-pembayaran" id="metode-pembayaran" style="width: 316px; height: 46px; background: #F6F7F8;;">
                    <option value="COD">COD (Cash and Delivery)</option>
                    <option value="Transfer">Transfer Bank</option>
                </select>

                <a href="Pengiriman2.html"><button class="btn-konfirmasi-metode-pembayaran">Konfirmasi</button></a>
            </div>
        </div>

        <!-- script for modal metode pembayaran -->
        <script>
            // Get the modal
            var modal = document.getElementById("metodePembayaranModal");
            
            // Get the button that opens the modal
            var btn = document.getElementById("btn-MetodePembayaran");
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("metode-pembayaran-close")[0];
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
        </script>

        <a href="#">
            <button style="background-color: rgba(41, 168, 103, 0.5); border-color: transparent;">Checkout</button>
        </a>
    </div>
</div>

    <div class="whatsapp-button">
        <a href="#"><img src="images/to_customer/logo-chat.png" alt="Chat-WhatsApp"></a>
    </div>


    <div class="space-content">
    </div>
    
@endsection