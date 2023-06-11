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
            color: white;
        }

        table td {
            padding: 10px;
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
        }

        .h1 {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: center;

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

        .kataKunci {
            padding: 14px 25px;
            background-color: white;
            border-radius: 9px;
            width: 95%;

        }

        .kataKunci input {
            width: 95%;
            border-radius: 9px;
            padding: 14px 25px;
            background: #F5F5FB;

            border: 1px solid #CECECE;
        }

    </style>
</head>

<body>
    <div>
        <h2>Pelanggan</h2>
    </div>
    <br><br>
    <div class="kataKunci">
        <input type="text" placeholder="Masukkan Kata Kunci Nomor Telpon">
    </div>
    <br>
    <div class="tableContainer">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="list" >
                    @foreach($detail_pelanggan as $detail)
                        <tr style="text-transform: uppercase; background-color:white; font-size:14px">
                                <td>
                                    <span class="">{{$detail->tanggal_daftar}}</span>
                                </td>
                                <td>
                                    <span class="">{{$detail->nama}}</span>
                                </td>
                                <td>
                                    <span class="">{{$detail->no_telepon}}</span>
                                </td>
                                <td >
                                    <span class="">{{$detail->alamat}}</span>
                                </td>
                                <td>
                                    <img src="{{ asset('images/delete.png') }}" alt="image" class="delete" onclick="openModal()">
                                </td> 
                            </td>   
                        </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
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


</body>

</html>
@endsection