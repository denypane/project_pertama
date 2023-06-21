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
    <link href="{{ asset('css/otorisasi.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('js/main.js') }}">
  </head>
  <body>
    <div class="content-wrapper">
        <form action="{{ url('/PostRegister') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <ul>
                    <li class="img-logo">
                        <a href="./"><img style="width: 70px; height: 64px;" src="{{ asset('images/to_customer/LOGO Cemilanpuas.png') }}" alt=""></a>
                    </li>
                    <li>
                        <br><h3>Daftar</h3>
                    </li>
                    <div class="form-daftar">
                        <ul>
                            <li>
                                <p style="color: black;">Selamat Datang, Silahkan Daftar akun Anda</p></br>
                            </li>
                            <li>
                                <h5>Nama Lengkap</h5>
                            </li>
                            <li>
                                <input name="nama" type="text" placeholder="Masukkan nama lengkap" required></br>
                            </li>
                            <li>
                                <h5>Email</h5>
                            </li>
                            <li>
                                <input name="email" type="email" placeholder="Masukkan email pengguna" required></br>
                            </li>
                            <li>
                                <h5>Nomor Telepon</h5>
                            </li>
                            <li>
                                <input name="nomor_telepon" type="number" placeholder="Masukkan nomor telepon anda" required></br>
                            </li>
                            <li>
                                <h5>Katasandi</h5>
                            </li>
                            <li>
                                <input name="password" type="password" id="passwordInput" placeholder="Masukkan katasandi">
                                </br>    
                                <!-- checkbox-->
                                <div class="checkbox">
                                    <input type="checkbox" style="width: 25px; height: 25px;" class="custom-control-input" id="showPassLogin" onClick="showPasswordLogin()">
                                    <label class="custom-control-label" for="showPassLogin">Tampilkan Password</label>
                                </div>
                            </li>
                            <script>                            
                                function showPasswordLogin()
                                {
                                    var y = document.getElementById('passwordInput');

                                    if (y.type === 'password') { y.type = "text"; }
                                    else { y.type = 'password'; }
                                }
                            </script>
                            <li>
                                <button type="submit">Daftar</button></br>
                            </li>
                            <li>
                                <p style="color: black; text-align: center;">Sudah Punya Akun? <a href="./masuk" style="color:  #FFA900;">Masuk</a></p>
                            </li>
                        </ul>
                    </div>
                </ul>
                <ul>
                    <div class="ul-gambar-otorisasi">
                        <img src="{{ asset('images/to_customer/gambar-otorisasi.png') }}" alt="" class="img-otorisasi" >
                    </div>
                </ul>
            </div>
        </form>
    </div>    
  </body>
</html>