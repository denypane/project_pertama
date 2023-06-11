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

        #layer2 {
            display: none;
        }

        #link {
            cursor: pointer;
        }

        #layer2 span {
            font-size: 16px;
            font-weight: 400;
            color: #CECECE;
        }

        h3 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 17px;
        }

        #layer2 p {
            font-size: 18px;
            font-weight: 400;
        }

        .contentLayer2 {
            display: flex;
            background-color: white;
            padding: 50px 40px 100px;
            border-radius: 12px;
        }

        .detail1 {
            display: flex;
        }

        .detail2 {
            display: flex;
            flex-direction: column;
            row-gap: 26px;
        }

        .horizontal {
            display: flex;
            column-gap: 122px;
        }

        .imageProduk {
            border-radius: 12px;
            overflow: hidden;
            margin-right: 59px;
        }

        .right {
            margin-left: 129px;
            display: flex;
            flex-direction: column;
            row-gap: 26px;
        }

        .rigtImage {
            display: flex;
            flex-direction: column;
            row-gap: 26px;
        }

        .payStatus {
            color: #FFA900;
        }

        .simpanContainer {
            display: flex;
            justify-content: flex-end;
            transform: translate(-40px, -80px);
        }

        span#selectedOption4 {
            color: black;
        }

        button.dropdownContainer4 {
            margin-top: 10px;
        }

        .slash {
            display: flex;
            column-gap: 6px;
        }

        span#details {
            color: black;
        }


    
    </style>

<body>
        @foreach($data_pesanan as $data)
        <div class="headPesanan">
            <h2>{{$data->no_pesanan}}</h2>
            <div class="slash">
                <span>Pesanan</span>
                <div>/</div>
                <span id="details">Details</span>
            </div>
        </div>
        <br><br>
        <div class="contentLayer2">
                <div class="left">
                    <div class="detail1">
                        <div class="imageProduk">
                            <img src="{{ asset('images/produkImage2.png') }}" alt="image">
                        </div>
                        <div class="rigtImage">
                            <div>
                                <span >Nama Pembeli</span>
                                <p>{{$data->nama_pembeli}}</p>
                            </div>
                            <div>
                                <span>Tanggal</span>
                                <p>{{$data->tanggal_pesanan}}</p>
                            </div>
                            <div>
                                <span>Total Harga</span>
                                <p>{{$data->total_harga}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail2">
                        <h3>Informasi Pembeli</h3>
                        <div>
                            <span>Alamat Lengkap</span>
                            <p>{{$data->alamat_lengkap}}</p>
                        </div>
                        <div class="horizontal">
                            <div>
                                <span>Kecamatan</span>
                                <p>{{$data->kecamatan}}</p>
                            </div>
                            <div>
                                <span>Kota</span>
                                <p>{{$data->kota}}</p>
                            </div>
                        </div>
                        <div class="horizontal">
                            <div>
                                <span>Provinsi</span>
                                <p>{{$data->provinsi}}</p>
                            </div>
                        </div>
                      <div class="col-sm-9">
                      <button class="dropbtn">Dropdown</button>
                            <span>Status Pesanan</span><br>
                            <select name="status" class="custom-select form-control" required>
                                <option value="Kirim">Kirim</option>
                                <option value="batal">Batal</option>
                            </select>
                        </div>
                        <!-- <div>
                            <span>Shipping Status</span>
                            <button class="dropdownContainer4" onclick="toggleDropdown4()">
                                <div class="textDropdown4">
                                    <span id="selectedOption4" class="day4">Pending</span>
                                </div>
                                <div id="dropdownContent4" class="dropdownContent4">
                                    <ul id="dropList4">
                                        <li onclick="selectOption4('Dikemas')">Dikemas</li>
                                        <li onclick="selectOption4('Dikirim')">Dikirim</li>
                                        <li onclick="selectOption4('Dibatalkan')">Dikirim</li>
                                    </ul>
                                </div>
                                <img src="{{ asset('images/dropdown.png') }}" alt="image" id="dropdown">
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="right">
                    <div>
                        <span>Nama Produk</span>
                        <p>{{$data->nama_produk}}</p>
                    </div>
                    <div>
                        <span>Status</span>
                        <p class="payStatus" >{{$data->status}}</p>
                    </div>
                    <div>
                        <span>Nomor Telepon</span>
                        <p>{{$data->no_telepon}}</p>
                    </div>
                    <div>
                        <span>Pengiriman</span>
                        <p>{{$data->pengiriman}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="simpanContainer">
            <div>
                <button type="button" class="simpan" id="simpan">Simpan</button>
            </div>
        </div>
    </div>

    </body>
    </html>

    @endsection