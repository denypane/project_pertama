<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cemilanpuas</title>
    <link rel="icon" href="{{ asset('images/to_customer/LOGO Cemilanpuas.png') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="customer/keranjang" rel="stylesheet" />
    <link href="css/profil.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/produk.css" rel="stylesheet" />
    <link href="css/pengiriman.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/keranjang.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>

  <body>
    <!-- Navbar -->
    <div class="navbar-wrapper">
        <header>
            <nav class="navbar">
                <div class="logo-navbar">
                    <a href="/"><img src="images/to_customer/LOGO Cemilanpuas.png" alt="" style="width: 82px; height: 75.44px;"></a>
                </div>
                <div class="search-navbar">
                    <!-- <form> -->
                        <input type="text" placeholder="Masukkan kata Kunci" style="background-color: transparent; border-color: transparent; width: 570px; height: 44px; color: #000000;">
                        <button type="submit" style="background-color: transparent; border-color: transparent;"><i class="fa fa-search"></i></button>
                    <!-- </form> -->
                </div>
                @guest
                  <div class="otorisasi-wrapper">
                      <a href="masuk" class="btn-masuk">Masuk</a>
                      <a href="daftar" class="btn-daftar">Daftar</a>
                  </div>
                  @else
                  <div class="notifikasi-navbar">
                    <a data-toggle="modal" data-target="#myModal"><img src="images/to_customer/icon-notifikasi.png" alt=""></a>
                      <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Pengumuman</h4>
                          </div>
                          <div class="modal-body">
                            <p>Belum terdapat pengumuman pada halaman anda</p>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>    
                  <div class="keranjang-navbar">
                          <a href="keranjang"><img src="images/to_customer/icon-keranjang.png" alt=""></a>
                      </div>
                      <div class="dropdown-profil">
                          <a class="btn-profil-dropdown"><img src="images/to_customer/Profil.png" alt=""></a>
                          <div class="profil-dropdown-content">
                              <a href="./profil">My Profil</a>
                              <a href="Pesanan">Pesanan</a>
                              <a href="./masuk">Keluar</a>
                          </div>
                      </div>
                  @endguest
            </nav>
        </header>
    </div>

    @yield('content')
    
  <!--Footer  -->
  <footer class="footer">
      <div class="footer-content">
        <div class="col-content-1">
          <a href="#"><img src="{{ asset('images/to_customer/LOGO Cemilanpuas.png') }}" alt=""></a>
        </div>
        <div class="col-content-2">
          <div>
            <ul>
                <h3 style="size: 24px;"><b>Get in touch</b></h3></br>
            </ul>
            <ul>
              <li style="display: flex; flex-direction: row;">
                <a href="https://www.instagram.com/cemilan.puas/"><img src="{{ asset('images/to_customer/icon-facebook.png') }}" alt="" style=" width: 32px; height: 32px; padding-right: 2px;"></a>
                <a href="https://www.instagram.com/cemilan.puas/"><img src="{{ asset('images/to_customer/icon-Instagram.png') }}" alt="" style=" width: 32px; height: 32px; padding-right: 2px;"></a>
                <a href="https://www.instagram.com/cemilan.puas/"><img src="{{ asset('images/to_customer/icon-twitter.png') }}" alt="" style=" width: 32px; height: 32px;"></a>
              </li></br>
            </ul>
            <ul>
              <h4 style="size: 20px;">Office Hour</h4></br>
              <p style="size: 16px;">Monday - Sunday </br>10.00 - 18.00</p>
            </ul>
          </div>
        </div>
        <div class="col-content-3">
          <ul>
            <h4>Address</h4></br>
          </ul>
          <ul>
            <p>Store & Office</br>
            </br>Jl. Setrasari Kulon III, No. 10-12, </br>
            </br>Sukarasa, Sukasari, Bandung, </br>
            </br>Jawa Barat, Indonesia 40152
          </p>
          </ul>          
        </div>
      </div>
  </footer>
  
  </body>
</html>
