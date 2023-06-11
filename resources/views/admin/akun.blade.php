@extends('admin.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 0px 27px;
            border: 1px solid #888;
            width: 30%;
        }


        .contentAkun {
            padding: 60px 91px;
            background-color: white;
            display: flex;
            flex-direction: column;
            row-gap: 25px;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;

        }

        .content3 {
            font-weight: 400;
        }

        .telpon3 .content3 {
            font-size: 14px;
            font-weight: 300;
            line-height: 21px;
            color: #CECECE;

        }

        .telpon {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
            padding-bottom: 25px;
        }

        .telpon2 {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
            padding-bottom: 25px;
        }

        .telpon3 {
            display: flex;
            justify-content: space-between;
        }

        button.ubah {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            padding: 7px 18px;
            background-color: #CECECE;
            border: 1px solid black;
            color: white;
            border-radius: 10px;
        }

        .telpon .content2 {
            transform: translateX(-175px);
        }

        .telpon2 .content2 {
            transform: translateX(-145px);
        }

        .telpon3 .content2 {
            transform: translateX(-85px);
        }

        .telpon .content3 {
            transform: translateX(-220px);
        }

        .telpon2 .content3 {
            transform: translateX(-160px);
        }

        .telpon3 .content3 {
            transform: translateX(-123px);
        }

        .modal-buttons {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 10px 12px;
        }

        .modal-buttons button {
            background-color: #29A867;
            box-shadow: 0px 6px 16px 0px #00000033;
            padding: 12px 24px;
            color: white;
            border: none;
            border-radius: 9px;
        }

        .modal-content input {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            margin-bottom: 12px;
            margin-top: 12px;

        }

        .modal-content input {
            background-color: #F6F7F8;
            padding: 10px 14px;
            border-radius: 8px;
            width: 100%;
            border: none;
            box-sizing: border-box;
        }

        @media only screen and (max-width: 1446px) {
            .telpon .content2 {
                transform: translateX(-130px);

            }

            .telpon2 .content2 {
                transform: translateX(-115px);
            }

            .telpon3 .content2 {
                transform: translateX(-55px);
            }

            .telpon .content2 {
                transform: translateX(-155px);
            }

            .telpon2 .content2 {
                transform: translateX(-125px);
            }

            .telpon3 .content2 {
                transform: translateX(-65px);
            }
        }

        .lihat {
            color: #A3A3A3;
        }
    </style>
</head>

<body>
    <div class="headAkun">
        <h2>Akun</h2>
        <p class="lihat">Lihat penilaian Toko </p>
    </div>
    <br><br>
    <div class="contentAkun">
        <div class="telpon">
            <div><img src="{{ asset('images/telepon.png') }}" alt="image"></div>
            <p class="content2">Telepon</p>
            <p class="content3">08********78</p>
            <button class="ubah" onclick="openModal1()">Ubah</button>
        </div>
        <div class="telpon2">
            <div> <img src="{{ asset('images/email.png') }}" alt="image"></div>
            <p class="content2">Email</p>
            <p class="content3">y*******02@gmail.com</p>
            <button class="ubah" onclick="openModal2()">Ubah</button>
        </div>
        <div class="telpon3">
            <div><img src="{{ asset('images/password.png') }}" alt="image"></div>
            <p class="content2">Katasandi Akun</p>
            <p class="content3">Harap diganti katasandi secara berkala</p>
            <button class="ubah" onclick="openModal()">Ubah</button>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <br>
            <p>Katasandi</p>
            <input type="password" placeholder="Katasandi">
            <div class="modal-buttons">
                <button type="button" class="btn btn-primary" onclick="submitModal()">Konfirmasi</button>
            </div>
        </div>
    </div>
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <br>
            <p>Katasandi</p>
            <input type="password" placeholder="Katasandi">

            <input type="password" placeholder="Konfirmasi katasandi">
            <div class="modal-buttons">

                <div class="modal-buttons">
                    <button type="button" class="btn btn-primary" onclick="submitModal3()">Konfirmasi</button>
                </div>
            </div>
        </div>
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <br>
                <p>Nomor Telepon</p>
                <input type="tel" placeholder="Nomor Telepon">
                <div class="modal-buttons">
                    <button type="button" class="btn btn-primary" onclick="submitModal1()">Konfirmasi</button>
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal">
            <div class="modal-content">
                <br>
                <p>Email</p>
                <input type="text" placeholder="Email">
                <div class="modal-buttons">
                    <button type="button" class="btn btn-primary" onclick="submitModal2()">Konfirmasi</button>
                </div>
            </div>
        </div>
        <script>
            function openModal() {
                document.getElementById("myModal").style.display = "block";
            }

            function closeModal() {
                document.getElementById("myModal").style.display = "none";
            }

            function submitModal() {
                // Perform actions on modal submit
                // You can add your custom logic here
                openModal3();
            }


            function openModal1() {
                document.getElementById("myModal1").style.display = "block";
            }

            function closeModal1() {
                document.getElementById("myModal1").style.display = "none";
            }

            function submitModal1() {
                // Perform actions on modal submit
                // You can add your custom logic here
                closeModal1();
            }

            function openModal2() {
                document.getElementById("myModal2").style.display = "block";
            }

            function closeModal2() {
                document.getElementById("myModal2").style.display = "none";
            }

            function submitModal2() {
                // Perform actions on modal submit
                // You can add your custom logic here
                closeModal2();
            }

            // modal baru

            function openModal3() {
                document.getElementById("myModal3").style.display = "block";
            }

            function closeModal3() {
                document.getElementById("myModal3").style.display = "none";
            }

            function submitModal3() {
                // Perform actions on modal submit
                // You can add your custom logic here
                closeModal();
                closeModal3();
            }
        </script>
</body>

</html>
@endsection