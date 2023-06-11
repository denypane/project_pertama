<!DOCTYPE html>
<html>

<head>
    <title>Cemilnapuas Seller Center</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        
        .profile {
            width: 20px ;
            height: auto;
        }        

        .dropdown-content {
            display: none;
            /* Add your styles for the dropdown content */
        }

        header {
            padding: 10px 100px;
            display: flex;
            column-gap: 7px;
            align-items: center;
        }



        .tokoList:hover .dropdown-content {
            display: block;
            /* Add your styles for the visible dropdown content when the 'Toko' element is active */
        }

        .pengaturanList:hover .dropdown-content {
            display: block;
            /* Add your styles for the visible dropdown content when the 'Toko' element is active */
        }

        .dropdown-content.active {
            display: block;
        }

        .dropdown-content .active {
            background-color: #FFD37F;
        }

        ul.dropdown-content {
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="topSidebar">
            <img src="{{ asset('images/logoWeb.png') }}" alt="image" class="logoWeb">
            <p>Seller Center</p>
        </div>
        <ul class="side">
            <li class="dashboardList{{ Request::is('dashboard') ? ' active' : '' }}">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('images/dashboardLogo.png') }}" alt="image" class="menuLogo dashboard">
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="produkList{{ Request::is('produk') ? ' active' : '' }}">
                <a href="{{ url('/produk') }}">
                    <img src="{{ asset('images/produkLogo.png') }}" alt="image" class="menuLogo produk">
                    <p>Produk</p>
                </a>
            </li>
            <li class="pelangganList{{ Request::is('pelanggan') ? ' active' : '' }}">
                <a href="{{ url('/pelanggan') }}">
                    <img src="{{ asset('images/pelangganLogo.png') }}" alt="image" class="menuLogo pelanggan">
                    <p>Pelanggan</p>
                </a>
            </li>
            <li class="pesananList{{ Request::is('pesanan') ? ' active' : '' }}">
                <a href="{{ url('/pesanan') }}">
                    <img src="{{ asset('images/pesananLogo.png') }}" alt="image" class="menuLogo pesanan">
                    <p>Pesanan</p>
                </a>
            </li>
            <li class="analisisList{{ Request::is('analisis') ? ' active' : '' }}">
                <a href="{{ url('/analisis') }}">
                    <img src="{{ asset('images/analisisLogo.png') }}" alt="image" class="menuLogo analisis">
                    <p>Analisis</p>
                </a>
            </li>
            <li class="tokoList{{ Request::is('penilaian') || Request::is('kategori') || Request::is('profilToko') ? ' active' : '' }}">
                <a href="{{ url('/toko') }}" class="dropdown-trigger tokoContainer">
                    <div>
                        <img src="{{ asset('images/tokoLogo.png') }}" alt="image" class="menuLogo toko">
                        <p>Toko</p>
                    </div>
                    <img src="{{ asset('images/dropdown.png') }}" alt="image" class="menuLogo dropdown">
                </a>
                <!-- Add the dropdown content -->
                <ul class="dropdown-content">
                    <li class="isiDrop {{ Request::is('penilaian') ? 'active' : '' }}">
                        <a href="{{ url('/penilaian') }}">&nbsp
                            <img src="{{ asset('images/penilaian.png') }}" alt="image" class="menuLogo dropdown">
                            <p>Penilaian</p>
                        </a>
                    </li>
                    <li class="isiDrop {{ Request::is('kategori') ? 'active' : '' }}">
                        <a href="{{ url('/kategori') }}">&nbsp
                            <img src="{{ asset('images/kategori.png') }}" alt="image" class="menuLogo dropdown">
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="isiDrop {{ Request::is('profilToko') ? 'active' : '' }}">
                        <a href="{{ url('/profilToko') }}">&nbsp
                            <img src="{{ asset('images/toko.png') }}" alt="image" class="menuLogo dropdown">
                            <p>Profil toko</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pengaturanList{{ Request::is('alamat') || Request::is('akun') ? ' active' : '' }}">
                <a href="{{ url('/pengaturan') }}" class="dropdown-trigger tokoContainer">
                    <div>
                        <img src="{{ asset('images/pengaturanLogo.png') }}" alt="image" class="menuLogo pengaturan">
                        <p>Pengaturan</p>
                    </div>
                    <img src="{{ asset('images/dropdown.png') }}" alt="image" class="menuLogo dropdown">
                </a>
                <!-- Add the dropdown content -->
                <ul class="dropdown-content">
                    <li class="pengaturanDrop {{ Request::is('alamat') ? 'active' : '' }}">
                        <a href="{{ url('/alamat') }}">&nbsp
                            <img src="{{ asset('images/alamatWhite.png') }}" alt="image" class="menuLogo dropdown">
                            <p>Alamat</p>
                        </a>
                    </li>
                    <li class="pengaturanDrop {{ Request::is('akun') ? 'active' : '' }}">
                        <a href="{{ url('/akun') }}">&nbsp
                            <img src="{{ asset('images/akun.png') }}" alt="image" class="menuLogo dropdown">
                            <p>akun</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="container">
        <header>
            <img src="{{ asset('images/profile.png') }}" alt="image" class="profile">
            <p>Hi, Admin</p>
            <p>|</p>
            <img src="{{ asset('images/keluar.png') }}" alt="image" class="keluar">
        </header>
        <div class="content">

            @yield('content')

            
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.dashboardList, .produkList, .pelangganList, .pesananList, .analisisList, .tokoList, .pengaturanList').click(function() {
                $('.dashboardList, .produkList, .pelangganList, .pesananList, .analisisList, .tokoList, .pengaturanList').removeClass('active');
                $(this).addClass('active');
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the elements with class "isiDrop"
            var isiDropItems = document.querySelectorAll('.isiDrop');

            // Loop through each "isiDrop" element
            isiDropItems.forEach(function(item) {
                // Check if the element has the class "active"
                if (item.classList.contains('active')) {
                    // Get the parent <ul> element with class "dropdown-content"
                    var dropdownContent = item.closest('.dropdown-content');
                    // Set the display property of the parent <ul> element to "block"
                    dropdownContent.style.display = 'block';
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the elements with class "isiDrop"
            var isiDropItems = document.querySelectorAll('.pengaturanDrop');

            // Loop through each "isiDrop" element
            isiDropItems.forEach(function(item) {
                // Check if the element has the class "active"
                if (item.classList.contains('active')) {
                    // Get the parent <ul> element with class "dropdown-content"
                    var dropdownContent = item.closest('.dropdown-content');
                    // Set the display property of the parent <ul> element to "block"
                    dropdownContent.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>