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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <div class="header-with-logo">
      <header>
          <nav class="navbar">
            <div class="nav-wrapper">
              <a href="#"><img class="img-logo" src="images/LOGO Cemilanpuas.png"></a>
              <div class="search-container">
                <form class="search-bar">
                  <input type="text" class="header-search-input" placeholder="Masukkan kata Kunci">
                  <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                  <!-- <div class="header-search-keyword">
                    <h3 class="header-search-keyword-heading">Rekomendasi keyword</h3>
                    <ul class="header-search-keyword-list">
                      <li class="header-search-keyword-item">
                        <a href="">Bakso Aci</a>
                      </li>
                      <li class="header-search-keyword-item">
                        <a href="">Basreng</a>
                      </li>
                    </ul>
                  </div> -->
                </form>
              </div>
              <div class="otorisasi-wrapper">
                <a href="Masuk.html" class="btn-masuk">Masuk</a>
                <a href="Daftar.html" class="btn-daftar">Daftar</a>
              </div>
            </div>
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
