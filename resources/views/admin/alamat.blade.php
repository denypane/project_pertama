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
        .contentAlamat {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        .alamat1 {
            display: flex;
            column-gap: 37px;
            align-items: baseline;
        }

        .containerAlamat {
            background-color: white;
            display: flex;
            justify-content: space-between;
            padding: 10px 28px 18px;
            margin-bottom: 45px;
        }

        .alamat2 {
            display: flex;
            align-items: baseline;
            column-gap: 20px;
        }

        .utama {
            display: flex;
            align-items: center;
            column-gap: 20px;

        }

        .alamatUtama {
            font-size: 10px;
            font-weight: 700;

            padding: 1px 7px;
            background-color: #FFA900;
            color: white;
            border-radius: 9px;
        }

        .text2 {
            text-align: right;
            display: flex;
            flex-direction: column;
            row-gap: 15px;
        }

        .text3 {
            display: flex;
            flex-direction: column;
            row-gap: 15px;
        }

        .desc {
            width: 175px;
        }

        .button {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            margin-top: 20px;
        }

        .button button {
            background-color: #FFA900;
            color: white;
            padding: 5px 12px;
            border: none;
            border-radius: 10px;
        }

        .containerHead {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .containerHead button {
            font-size: 16px;
            font-weight: 500;
            color: white;
            background-color: #29A867;
            padding: 5px 10px;
            border: none;
            border-radius: 9px;
        }

        .alamatHead {
            color: #A3A3A3;
        }
    </style>
</head>

<body>
    <div class="containerHead">
        <div class="headAlamat">
            <h2>Alamat toko</h2>
            <p class="alamatHead">Alamat toko</p>
        </div>
    </div>
    <div class="contentAlamat">
        <div class="containerAlamat">
            <div class="alamat1">
                <div class="text1">
                    <div>
                        <img src="{{ asset('images/alamat.png') }}" alt="image">
                    </div>
                </div>
                <div class="text2">
                    <p>Nama Admin</p>
                    <p>No. Telepon</p>
                    <p>Alamat</p>
                </div>
                <div class="text3">
                    <div class="utama">
                        <p>uuukkk</p>
                        <div class="alamatUtama">Alamat Utama</div>
                    </div>
                    <p>08123949332</p>
                    <p class="desc">Jalan lancalcna
                        Medan Sunggal
                        Kota Medan, Sumatra Utara
                        Kode poss</p>
                </div>
            </div>
            <div class="button">
                <button>Ubah</button>
            </div>
        </div>
    </div>
</body>

</html>
@endsection