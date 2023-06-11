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
            padding: 20px;
            color: black;
        }

        table td {
            padding: 20px;
            border-bottom: 1px solid black;
        }

        thead tr {
            background: #CECECE;

        }

        tbody tr {
            background-color: #F5F9F5;
        }

        tbody tr#row2 {
            background-color: white;
        }

        .tableContainer {
            border-radius: 10px;
            overflow: hidden;
            /* padding: 12px 2px; */
        }

        .link {
            color: #00ACEE;
        }

        .addKategori {
            background-color: #29A867;
            padding: 12px 10px;
            border: none;
            border-radius: 9px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            margin-bottom: 20px;

        }

        .headKategori {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .headLayer2 {
            display: flex;
        }

        .headLayer2 h1 {
            display: flex;
            font-size: 24px;
            font-weight: 600;
            line-height: 36px;
            margin-right: 18px;
        }

        #layer2 {
            display: none;
        }

        .botHeadLayer2 {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            display: flex;
        }

        .headLayer3 {
            font-size: 24px;
            font-weight: 600;
            line-height: 36px;
            margin-right: 18px;
        }

        .botHeadLayer2 p {
            color: #A3A3A3;
            margin-right: 5px;
        }

        .table2 {
            background-color: white;
            padding: 35px;
        }

        .table2 p {
            font-size: 20px;
            font-weight: 500;
            line-height: 30px;
            margin-bottom: 22px;
        }

        .alamatHead {
            color: #A3A3A3;
        }
    </style>
</head>

<body>
    <div id="layer1">
        <div class="headKategori">
            <div>
                <h2>Kategori Toko</h2>
                <p class="alamatHead">Alamat Toko</p>
            </div>
        </div>
        <div>
            <a href="./add_kategori" style="color:black; align=center">
                <button class="addKategori">Tambah Kategori Baru</button>
            </a>
        </div>
        <div class="tableContainer">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th style="width: 400px" scope="col">Nama kategori</th>
                            <th style="width: 200px"scope="col">Produk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $all_category)
                        <tr id="row2">
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$all_category->nama}}</td>
                            <td></td>
                            <td id="link" class="link">Lihat rincian</td>
                        </tr>
                        @endforeach
                        <!-- <tr id="row2">
                            <td scope="row">01</td>
                            <td>Putri </td>
                            <td>081293999291</td>
                            <td id="link" class="link">Lihat rincian</td>
                        </tr>
                        <tr>
                            <td scope="row">02</td>
                            <td>Putri </td>
                            <td>081293999291</td>
                            <td id="link" class="link">Lihat rincian</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="layer2">
        <div class="headLayer2">
            <h1>Kategori Basreng</h1>
            <img src="{{ asset('images/pencil.png') }}" alt="image">
        </div>
        <div class="botHeadLayer2">
            <p>Produk :</p>
            <span>2</span>
        </div>
        <br><br><br>
        <div class="tableContainer table2">
            <p>Daftar Produk</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="row2">
                        <td scope="row">01</td>
                        <td>Basreng Pedas</td>
                        <td>Rp 8.500</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td scope="row">02</td>
                        <td>Basreng Pedas</td>
                        <td>Rp 8.500</td>
                        <td>30</td>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <div id="layer3">
        <div class="headLayer3">
            <p>Tambah Kategori</p>
        </div>
        <div class="contentLayer3">
            <p>Nama Kategori</p>
            <input type="text" placeholder="Nama Kategori">
            <section>
                <button>Simpan</button>
            </section>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Add button click event handler
            $('#link').click(function() {
                // Hide the produkList and show the addProductForm
                $('#layer1').hide();
                $('#layer2').show();
            });
        });
        $(document).ready(function() {
            // Add button click event handler
            $('#addKategori').click(function() {
                // Hide the produkList and show the addProductForm
                $('#layer1').hide();
                $('#layer3').show();
            });
        });
    </script> -->
</body>

</html>
@endsection