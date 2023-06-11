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
        /* #layer3 {
            display: none;
        } */

        .contentLayer3 {
            padding: 30px;
            background-color: white;
            border-radius: 9px;
        }

        #layer3 input {
            padding: 10px;
            background-color: #CECECE;
            border: none;
            width: 30%;
            border-radius: 9px;
            margin-top: 15px;
        }

        .section {
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .section button {
            padding: 19px 40px;
            background-color: #29A867;
            color: white;
            border: none;
            border-radius: 9px;
            margin-top: 15px;
        }
        
    </style>
</head>

<body>
    <div id="layer3">
        <div class="headLayer3">
            <h3>Tambah Kategori</h3>
        </div>

            <div class="contentLayer3">
                <form action="./PostAddKategori" method="post" enctype="multipart/form-data">
                @csrf
                    <h4>Nama Kategori</h4>
                    <input placeholder="Nama kategori" name="nama_kategori" type="text" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    <div class= "section">
                        <button type="submit" id="addProduct" class="btn btn-success">Simpan</button>
                    </div >
                </form>
            </div>
    </div>

</body>

</html>
@endsection