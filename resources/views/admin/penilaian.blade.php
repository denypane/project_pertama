@extends('admin.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .menu-tab.actived {
            border-bottom: 3px solid #FFA900;
        }

        .menu-tab {
            cursor: pointer;
        }

        .menu-tab2.actived {
            background-color: #FFA900;
            border-radius: 12px;
            color: white;
        }

        .menu-tab2 {
            padding: 6px 10px;
            font-size: 16px;
            font-weight: 400;
            cursor: pointer;

        }

        .menu-tab2 button {
            cursor: pointer;
            border: none;
            outline: none;
            background: transparent;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.actived {
            display: block;
        }

        .tab-panel2 {
            display: none;
        }

        .tab-panel2.actived {
            display: block;

        }

        .menu-tab {
            padding: 10px 24px;
        }

        ul#tabs {
            display: flex;
            column-gap: 18px;
            list-style: none;
        }

        ul#subTabs {
            display: flex;
            column-gap: 18px;
            list-style: none;
        }

        .headSemua {
            display: flex;
            width: 100%;
            background: #9A9A9A;
            border-radius: 10px;
            padding-left: 12px;
            margin-bottom: 27px;
        }

        .headSemua .head1 {
            width: 23%;
            padding: 7px;
        }

        .headSemua .head2 {
            width: 50%;
            padding: 7px;

        }

        .headSemua .head3 {
            width: 27%;
            padding: 7px;

        }

        .bodyContent {
            display: flex;
        }

        .bodyContent .subBodyContent1 {
            width: 23%;
        }

        .bodyContent .subBodyContent2 {
            width: 50%;
        }

        .bodyContent .subBodyContent3 {
            width: 27%;
        }

        .rating {
            display: flex;
            column-gap: 8px;
            margin-bottom: 10px;
        }

        .subBodyContent1 {
            display: flex;
            font-family: Poppins;
            font-size: 18px;
            font-weight: 500;
            line-height: 24px;
            column-gap: 10px;
        }

        .subBodyContent1,
        .subBodyContent3 {
            padding: 15px;
        }

        .subBodyContent3 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .subBodyContent3 button {
            outline: none;
            border: none;
            padding: 22px 50px;
            background: #800000;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            border-radius: 8px;
            color: white;

        }

        .content1 {
            border: 1px solid grey;
            border-radius: 15px;
        }

        .subBodyContent2 {
            border-left: 1px solid grey;
            border-right: 1px solid grey;
            padding: 10px;
        }

        .headContent {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid grey;
        }

        .huruf {
            background: #D9D9D9;
            padding: 8px 14px;
            border-radius: 50%;
            font-family: Poppins;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;

        }

        .headContent {
            padding-left: 20px;
            padding-right: 80px;
        }

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
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        .modal-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .modal-buttons button {
            outline: none;
            border: none;
            background: #800000;
            color: white;
            border-radius: 9px;
            box-shadow: 0px 6px 16px 0px #00000033;
            padding: 10px 16px;
        }

        .modal-buttons button.btn-primary {
            background: white;
            color: black;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        .pagination {
            display: flex;
        }

        .fill {
            padding: 8px 12px;
            border-left: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            background-color: #D7DBDF;
        }

        .fill img {
            transform: rotate(90deg);
        }

        .arrow img {
            transform: rotate(-90deg);
        }

        .pagination {
            margin-top: 38px;
        }

        .arrow {
            padding: 8px 12px;
            border: 1px solid black;
        }

        .satu,
        .dua,
        .tiga {
            padding: 8px 16px;
        }

        .satu {
            background-color: #F47032;
            color: white;
        }

        .dua {
            border-right: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .tiga {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .paginationContainer {
            display: flex;
            justify-content: flex-end;
        }

        .headPenilaian p {
            color: #A3A3A3;
        }

        ul#subTabs {
            margin: 20px 0;
        }

        .empty {
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }

        .white {
            background-color: white;
            padding: 26px 41px;
        }
        .belum{
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="headPenilaian">
        <h2>Penilaian Toko</h2>
        <p>Lihat penilaian Toko </p>
    </div>
    <br><br>
    <div class="tabbed-menu white">
        <div class="tab-content">
            <div id="tab1" class="tab-panel actived">
                <div class="tabbed-menu2">
                    <ul id="subTabs" class="menu-tabs2">
                        <li class="menu-tab2 actived" data-target="tab7"><button>Semua</button></li>
                        <li class="menu-tab2" data-target="tab2"><button>Bintang 5</button></li>
                        <li class="menu-tab2" data-target="tab3"><button>Bintang 4</button></li>
                        <li class="menu-tab2" data-target="tab4"><button>Bintang 3</button></li>
                        <li class="menu-tab2" data-target="tab5"><button>Bintang 2</button></li>
                        <li class="menu-tab2" data-target="tab6"><button>Bintang 1</button></li>
                    </ul>
                    <div class="tab-content2">
                        <div id="tab1" class="tab-panel2 actived">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starEmpty.png') }}" alt="image" class="starEmpty">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="paginationContainer">
                                <div class="pagination">
                                    <div class="fill">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                    <div class="satu">1</div>
                                    <div class="dua">2</div>
                                    <div class="tiga">3</div>
                                    <div class="arrow">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab2" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="paginationContainer">
                                <div class="pagination">
                                    <div class="fill">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                    <div class="satu">1</div>
                                    <div class="dua">2</div>
                                    <div class="tiga">3</div>
                                    <div class="arrow">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab3" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starEmpty.png') }}" alt="image" class="starEmpty">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="paginationContainer">
                                <div class="pagination">
                                    <div class="fill">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                    <div class="satu">1</div>
                                    <div class="dua">2</div>
                                    <div class="tiga">3</div>
                                    <div class="arrow">
                                        <img src="{{ asset('images/dropdown.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab4" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="empty">
                                <div>
                                    <img src="{{ asset('images/empty.png') }}" alt="image">
                                </div>
                            </div>
                            <p class="belum">Belum Ada Penilaian</p>
                        </div>
                        <div id="tab5" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="empty">
                                <div>
                                    <img src="{{ asset('images/empty.png') }}" alt="image">
                                </div>
                            </div>
                            <p class="belum">Belum Ada Penilaian</p>
                        </div>
                        <div id="tab6" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="empty">
                                <div>
                                    <img src="{{ asset('images/empty.png') }}" alt="image">
                                </div>
                            </div>
                            <p class="belum">Belum Ada Penilaian</p>
                        </div>
                        <div id="tab7" class="tab-panel2">
                            <div class="headSemua">
                                <div class="head1">Informasi produk</div>
                                <div class="head2">Penilaian Pembeli</div>
                                <div class="head3">Balasan toko</div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content1">
                                <div class="headContent">
                                    <div class="huruf">A</div>
                                    <div>No. Pesanan ID102197221</div>
                                </div>
                                <div class="bodyContent">
                                    <div class="subBodyContent1">
                                        <img src="{{ asset('images/produkImage.png') }}" alt="image" class="produkImage">
                                        <p>Pisang Coklat</p>
                                    </div>
                                    <div class="subBodyContent2">
                                        <div class="rating">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starFill.png') }}" alt="image" class="starFill">
                                            <img src="{{ asset('images/starEmpty.png') }}" alt="image" class="starEmpty">
                                        </div>
                                        <p>Komentar : Udah kedua kalinya beli disini, insyaallah
                                            enak semuaa yaa baso acinyaa. Perdana juga
                                            ngerasain basreng dan cuanki instant semoga enak🥰 </p>
                                    </div>
                                    <div class="subBodyContent3">
                                        <button onclick="openModal()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more tab panels corresponding to menu tabs -->
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-panel">
                <p>ini menu 2</p>
            </div>
            <div id="tab3" class="tab-panel">
                <p>ini menu 3</p>
            </div>
            <!-- Add more tab panels corresponding to menu tabs -->
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <br>
            <p>Apakah Anda Yakin untuk menghapusnya ?</p>
            <div class="modal-buttons">
                <button type="button" class="btn btn-primary" onclick="submitModal()">Batalkan</button>
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Hapus</button>
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
            closeModal();
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.menu-tab').click(function() {
                // Remove active class from all menu tabs and tab panels
                $('.menu-tab').removeClass('actived');
                $('.tab-panel').removeClass('actived');

                // Add active class to the clicked menu tab and corresponding tab panel
                $(this).addClass('actived');
                var target = $(this).data('target');
                $('#' + target).addClass('actived');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.menu-tab2').click(function() {
                // Remove active class from all menu tabs and tab panels
                $('.menu-tab2').removeClass('actived');
                $('.tab-panel2').removeClass('actived');

                // Add active class to the clicked menu tab and corresponding tab panel
                $(this).addClass('actived');
                var target = $(this).data('target');
                $('#' + target).addClass('actived');
            });
        });
    </script>
</body>

</html>
@endsection