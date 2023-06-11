@extends('admin.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <style>
        /* Add your CSS styles here */

        #addProductForm {
            background-color: white;
            padding: 38px;
        }
        
        #addProduct {
            transform: translate(-50PX, 38px);
            border: none;
            border-radius: 10px;
            color: white;
            padding: 12px 1px;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            background: #29A867;
            width: 100%;
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

        .subResult {
            padding: 48px 59px;
            background-color: #F3F3F3;
        }

        .inputan {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        .inputan input {
            background-color: #F3F3F3;
            border-radius: 9px;
            padding: 10px;
            border: none;
            width: 100%;
        }

        .inputan textarea {
            background-color: #F3F3F3;
            border-radius: 9px;
            padding: 10px;
            border: none;
            width: 100%;
            resize: none;
        }

        .inputFlex {
            display: flex;
            width: 100%;
            column-gap: 79px;
        }

        .inputFlex div {
            width: 100%;
        }

        .fileInput {
            opacity: 0;
            position: absolute;
            pointer-events: none;
        }

        .fileInputLabel {
            text-align: center;
            position: relative;
            display: inline-block;
            background-color: #f2f2f2;
            padding: 8px 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .tambah {
            color: #B9BBBD;
        }
        
        </style>
    </head>


    <body>
        <div class="headProduct">
            <h2>Tambah Produk Baru</h2>
            <p class="tambah">Tambahkan Produk terbaru</p>
        </div>
        <br><br>
        
        <div id="addProductForm">
            <form action="./PostAddProduk" method="post" enctype="multipart/form-data">
            @csrf
                <!-- Product addition form fields -->
                <div class="inputan">
                    <label>Nama Produk</label>
                    <div>
                        <input placeholder="Nama Produk" name="nama_produk" type="text" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="inputan inputFlex">
                    <div>
                        <label>Harga</label>
                        <div>
                            <input placeholder="Harga" name="harga" type="number" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div>
                        <label>Stok</label>
                        <div>
                            <input placeholder="Stok" name="stok" type="number" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                </div>
                <div class="inputan inputFlex">
                    <div>
                        <label>Berat</label>
                        <div>
                            <input placeholder="Berat" name="berat" type="number" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div>
                        <label>Masa Kadaluarsa</label>
                        <div>
                            <input placeholder="Masa Kadaluarsa" name="masa_kadaluarsa" type="text" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                </div>
                <div class="inputan inputFlex">
                    <div>
                        <label>Kategori</label>
                        <div>
                            <!-- ada yang kurang untuk penyimpanan fotonya -->
                            <select class="form-control" id="select_category" name="id_kategori" required>
                                <option selected disabled value="">Pilih Kategori</option>
                                @foreach($kategori as $all_category)
                                    <option value="{{$all_category->id}}">{{$all_category->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inputan inputFlex">
                    <div>
                        <label>Deskripsi</label>
                        <div>
                            <textarea placeholder="Deskripsi" name="deskripsi" cols="150" rows="10" required></textarea>
                        </div>
                    </div>    
                
                </div>
                    <div class="">
                        <label for="course_title" class="col-sm-3 col-form-label form-label">Foto Produk</label>
                        <div class="col-sm-9" id="product_image">
                            <div class="custom-file">
                                <input name="foto_produk[]" type="file" id="formFile1" class="fileInputLabel" accept="image/*" required>
                            </div>
                        </div>

                        <script>
                            document.getElementById("formFile1").onchange = function () {
                                let stre1;
                                stre1 = "<div class='custom-file'><input name='foto_produk[]' type='file' id='formFile2' class='fileInputLabel' accept='image/*'></div>";
                                $("#product_image").append(stre1);
                                
                                document.getElementById("formFile2").onchange = function () {
                                    let stre2;
                                    stre2 = "<div class='custom-file'><input name='foto_produk[]' type='file' id='formFile3' class='fileInputLabel' accept='image/*'></div>";
                                    $("#product_image").append(stre2);
                                };
                            };
                        </script>

                    </div>
                </div>
                <div class="">
                        <div class="">
                            <button type="submit" id="addProduct" class="btn btn-success">Simpan</button>
                        </div>
                </div>
            </form>
            <?php
            //  jika tombol simpan di tekan
            // if (isset($_POST["submit"]))
            // {                 
            //     // upload foto bukti
            //     $namaprofil = $_FILES["foto_produk"] ["name"];
            //     $lokasiprofil = $_FILES["foto_produk"] ["tmp_file"];
            //     $namafiks = date("YmdHis").$namaprofil;
            //     move_uploaded_file($lokasiprofil, "foto_profil/$namafiks");  

            // }
            ?>
            
    </body>

    <script>
</html>
@endsection