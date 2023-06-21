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
        /* Add your CSS styles here */
        #addProductForm {
            display: none;
            background-color: white;
            padding: 38px;
        }

        .headProduct p {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        #addButton {
            padding: 15px;
            background-color: #29A867;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        #addProduct {
            transform: translate(-50PX, 40px);
            border: none;
            border-radius: 10px;
            color: white;
            padding: 12px 1px;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            background: #29A86780;
            width: 110%;
        }

        .singleImage {
            width: 220px;
            height: 300px;
            background-color: white;
            border-radius: 9px;
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            align-items: center;
            row-gap: 10px;
            display: grid;
        }

        .listProduk {
            list-style: none;
            /* display: grid; */
            grid-template-columns: repeat(auto-fit, minman(320px, 1fr) );
        }

        .listProduk td {
            display: flex;
            flex-direction: row;
        }

        .subSingle1 {
            font-size: 18px;
            font-weight: 400;
            line-height: 27px;
            color: #000000;
            
        }

        .subSingle2 {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            color: #C5C5C5;

        }

        .subSingle3 {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 400;
            line-height: 27px;
            color: #000000;
        }

        .price {
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
            color: #FF0000;

        }

        form {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }

        .resultPreview {
            position: relative;
            display: inline-block;
            width: fit-content;
        }

        .cancelButton {
            position: absolute;
            top: -13px;
            right: -8px;
            font-size: 20px;
            color: white;
            cursor: pointer;
            padding: 3px 4px;
            background-color: red;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    
    <div class="headProduct">
        <h2>Produk Saya</h2>
        <p class="jumlah">Kelola Produk Dengan Baik</p>
    </div>
    <br>
    <div id="produkContainer">
        <div>
            <a href="./add_produk" >
            <button  href="./add_produk" id="addButton">Tambah Produk Baru</button></a>
        </div>
        <br>
        <div><br>
            @foreach($produk as $produk_main)
                <table>
                    <tr class="listProduk">
                        <td>
                            <a href="/tampilkan_produk/{{$produk_main->nama_produk}}" class="singleImage">
                                <img src="./product_images/{{$produk_main->foto_produk}}" alt="image" class="menuLogo toko" width="200px ">
                                <div>
                                    <p class="subSingle1">{{$produk_main->nama_produk}}</p>
                                    <p class="subSingle2">{{$produk_main->kategori}}</p>
                                    <div class="subSingle3">
                                        <p>Stok {{$produk_main->stok}}pcs</p>
                                        <p class="price">Rp {{$produk_main->harga}}</p>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>    
    </div>



</body>

</html>
@endsection