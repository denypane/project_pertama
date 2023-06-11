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
        .headPesanan h2 {
            font-size: 24px;
            font-weight: 600;
            line-height: 36px;
            letter-spacing: 0px;

        }

        .headPesanan p {
            font-family: Poppins;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            letter-spacing: 0px;
            color: #A3A3A3;

        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        table td,
        table th {
            padding: 0;
        }

        table th {
            text-align: left;
            padding: 10px;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid black;
        }

        thead tr {
            background: #CECECE;

        }

        tbody tr {
            background-color: white;
        }

        .tableContainer {
            border-radius: 10px;
            overflow: hidden;
        }

        .status {
            padding: 5px;
            text-align: center;
            background: #FFA90080;
            color: #FFA900;
            border-radius: 9px;
        }

        .inputanPesanan {
            display: flex;
            justify-content: space-between;
            column-gap: 32px;
            padding: 27px 35px;
            background-color: white;
        }

        .inputanPesanan input {
            background-color: #F6F7F8;
            padding: 12px;
            border: none;
            border-radius: 9px;
            border: 1px solid #CECECE
        }

        .inputanPesanan button.download {
            background-color: #29A867;
            padding: 12px 40px;
            border: none;
            border-radius: 9px;
            color: white;
            font-size: 16px;
            font-weight: 500;

        }

        .simpan {
            background-color: #29A867;
            padding: 12px 40px;
            border: none;
            border-radius: 9px;
            color: white;
            font-size: 16px;
            font-weight: 500;
        }

        .dropdownContent {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            transform: translate(-15px, 40px);
            width: 170px;
            border-radius: 9px;
        }

        .dropdownContent ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #F6F7F8;
        }

        .dropdownContent ul li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdownContent ul li:hover {
            background-color: #f1f1f1;
        }

        .textDropdown {
            display: flex;
            flex-direction: column;
            row-gap: 3px;
        }

        ul#dropList li {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;


        }

        button.dropdownContainer {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            height: 100%;
            width: 100%;
            padding: 15px;
            border-radius: 9px;
            border: 1px solid #CECECE
        }


        /* ini dropdown 2 */

        .dropdownContent2 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            transform: translate(-15px, 40px);
            width: 170px;
            border-radius: 9px;
        }

        .dropdownContent2 ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #F6F7F8;
        }

        .dropdownContent2 ul li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdownContent2 ul li:hover {
            background-color: #f1f1f1;
        }

        .textDropdown2 {
            display: flex;
            flex-direction: column;
            row-gap: 3px;
        }

        ul#dropList2 li {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;


        }

        button.dropdownContainer2 {
            cursor: pointer;
            display: flex;
            height: 100%;
            width: 100%;
            padding: 15px;
            border-radius: 9px;
            border: 1px solid #CECECE;
            justify-content: space-between;
        }

        /* ini dropdown 3 */

        .dropdownContent3 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.3);
            z-index: 1;
            transform: translate(-15px, 40px);
            width: 170px;
            border-radius: 9px;
        }

        .dropdownContent3 ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #F6F7F8;
        }

        .dropdownContent3 ul li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdownContent3 ul li:hover {
            background-color: #f1f1f1;
        }

        .textDropdown3 {
            display: flex;
            flex-direction: column;
            row-gap: 3px;
        }

        ul#dropList3 li {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;


        }

        button.dropdownContainer3 {
            cursor: pointer;
            display: flex;
            height: 100%;
            width: 100%;
            padding: 15px;
            border-radius: 9px;
            border: 1px solid #CECECE;
            justify-content: space-between;
        }

        /* ini dropdown 4 */

        .dropdownContent4 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.4);
            z-index: 1;
            transform: translate(-15px, 40px);
            width: 150px;
            border-radius: 9px;
        }

        .dropdownContent4 ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #F6F7F8;
        }

        .dropdownContent4 ul li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdownContent4 ul li:hover {
            background-color: #f1f1f1;
        }

        .textDropdown4 {
            display: flex;
            flex-direction: column;
            row-gap: 3px;
        }

        ul#dropList4 li {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;
        }

        button.dropdownContainer4 {
            cursor: pointer;
            display: flex;
            height: 100%;
            width: 150px;
            padding: 15px;
            border-radius: 9px;
            border: 1px solid #CECECE;
            justify-content: space-between;
        }

    </style>
</head>

<body>
    <div id="layer1">
        <div class="headPesanan">
            <h2>Pesanan</h2>
            <p>Transaksi</p>
        </div>
        <br><br>
        <div class="inputanPesanan">
            <input type="text" placeholder="Cari No Pesanan">
            <button class="dropdownContainer" onclick="toggleDropdown()">
                <div class="textDropdown">
                    <span id="selectedOption" class="day">Pengiriman</span>
                </div>
                <div id="dropdownContent" class="dropdownContent">
                    <ul id="dropList">
                        <li onclick="selectOption('Dikirim Alamat')">Dikirim Alamat</li>
                        <li onclick="selectOption('Ambil DI Store')">Ambil DI Store</li>
                    </ul>
                </div>
                <img src="{{ asset('images/dropdown.png') }}" alt="image" id="dropdown">
            </button>
            <button class="dropdownContainer2" onclick="toggleDropdown2()">
                <div class="textDropdown2">
                    <span id="selectedOption2" class="day2">Status</span>
                </div>
                <div id="dropdownContent2" class="dropdownContent2">
                    <ul id="dropList2">
                        <li onclick="selectOption2('Dikemas')">Dikemas</li>
                        <li onclick="selectOption2('Dikirim')">Dikirim</li>
                        <li onclick="selectOption2('Selesai')">Selesai</li>
                        <li onclick="selectOption2('Batal')">Batal</li>
                    </ul>
                </div>
                <img src="{{ asset('images/dropdown.png') }}" alt="image" id="dropdown">
            </button>
            <button class="dropdownContainer3" onclick="toggleDropdown3()">
                <div class="textDropdown3">
                    <span id="selectedOption3" class="day3">Periode</span>
                </div>
                <div id="dropdownContent3" class="dropdownContent3">
                    <ul id="dropList3">
                        <li onclick="selectOption3('Kemarin')">Kemarin</li>
                        <li onclick="selectOption3('Dikirim')">7 Hari Terakhir</li>
                        <li onclick="selectOption3('Selesai')">30 Hari Terakhir</li>
                    </ul>
                </div>
                <img src="{{ asset('images/dropdown.png') }}" alt="image" id="dropdown">
            </button>
            <button class="download">Download</button>
        </div>
        <div class="tableContainer">
            <table class="table">
            <thead>
                    <tr>
                    <th style="text-transform: uppercase; font-size:12px">NO</th>
                    <th>
                    <a class="sort" style="text-transform: uppercase; font-size:12px">TANGGAL</a>
                    </th>
                        <th style="width: 25px;">
                            <a class="sort" style="text-transform: uppercase; font-size:12px">No PESANAN</a>
                        </th>
                        <th>
                            <a class="sort" style="text-transform: uppercase; font-size:12px">KATEGORI</a>
                        </th>
                        <th>
                            <a class="sort"  style="text-transform: uppercase; font-size:12px">NAMA PRODUK</a>
                        </th>
                        <th>
                            <a class="sort" style="text-transform: uppercase; font-size:12px">Total HARGA</a>
                        </th>
                        <th>
                            <a class="sort" style="text-transform: uppercase; font-size:12px">PENGIRIMAN</a>
                        </th>
                        <th>
                            <a class="sort" style="text-transform: uppercase; font-size:12px">STATUS</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="list" id="search">
                    @foreach($pesanan as $pesanan_main)
                        <tr style="text-transform: uppercase; font-size:14px">
                            <td>{{$loop->iteration }}</td>
                                <td>
                                    <a href="./datapesanan" style="color:black; align=center">
                                    <span >{{$pesanan_main->tanggal_pesanan}}</span>
                                </td>
                                <td style="width: 25px;">
                                    <span >{{$pesanan_main->no_pesanan}}</span>
                                </td>
                                <td>
                                    <span >{{$pesanan_main->kategori}}</span>
                                </td>
                                <td>
                                    <span >{{$pesanan_main->nama_produk}}</span>
                                </td>
                                <td>
                                    <span >{{$pesanan_main->total_harga}}</span>
                                </td>
                                <td>
                                    <span >{{$pesanan_main->pengiriman}}</span>
                                </td>
                                <td>
                                    <span >{{$pesanan_main->status}}</span>
                                </td>
                            </td>   
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("dropdownContent");
            dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        }

        function selectOption(option) {
            var dayElement = document.querySelector(".day");
            dayElement.textContent = option;
            var selectedOption = document.getElementById("selectedOption");
            selectedOption.textContent = option;
            toggleDropdown(); // Close the dropdown after selecting an option
        }
        var dropdownItems = document.querySelectorAll(".dropdownContent ul li");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                var option = item.textContent;
                selectOption(option);
            });
        });

        function toggleDropdown2() {
            var dropdownContent = document.getElementById("dropdownContent2");
            dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        }

        function selectOption2(option) {
            var dayElement = document.querySelector(".day2");
            dayElement.textContent = option;
            var selectedOption = document.getElementById("selectedOption2");
            selectedOption.textContent = option;
            toggleDropdown2(); // Close the dropdown after selecting an option
        }
        var dropdownItems = document.querySelectorAll(".dropdownContent2 ul li");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                var option = item.textContent;
                selectOption2(option);
            });
        });

        function toggleDropdown3() {
            var dropdownContent = document.getElementById("dropdownContent3");
            dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        }

        function selectOption3(option) {
            var dayElement = document.querySelector(".day3");
            dayElement.textContent = option;
            var selectedOption = document.getElementById("selectedOption3");
            selectedOption.textContent = option;
            toggleDropdown3(); // Close the dropdown after selecting an option
        }
        var dropdownItems = document.querySelectorAll(".dropdownContent3 ul li");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                var option = item.textContent;
                selectOption3(option);
            });
        });

        function toggleDropdown4() {
            var dropdownContent = document.getElementById("dropdownContent4");
            dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        }

        function selectOption4(option) {
            var dayElement = document.querySelector(".day4");
            dayElement.textContent = option;
            var selectedOption = document.getElementById("selectedOption4");
            selectedOption.textContent = option;
            toggleDropdown4(); // Close the dropdown after selecting an option
        }
        var dropdownItems = document.querySelectorAll(".dropdownContent4 ul li");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                var option = item.textContent;
                selectOption4(option);
            });
        });
    </script>
</body>

</html>
@endsection