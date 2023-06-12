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
            width: 100%;
            border-collapse: collapse;
            }

            th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }

            th {
            background-color: #f2f2f2;
            }

            tbody tr:hover {
            background-color: #f5f5f5;
            }
        </style>


    </head>

    <!DOCTYPE html>
<html>
    <table>
        <tr>
            <td>
                <div id="produkList">
                        <ul class="listProduk">
                            <li>
                                <div class="singleImage">
                                    <img src="" alt="image" class="menuLogo toko" width="200px ">
                                    <div>
                                        <p class="subSingle1">A</p>
                                        <p class="subSingle2">A</p>
                                        <div class="subSingle3">
                                            <p>Stok </p>
                                            <p class="price">Rp </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more list items for products as needed -->
                        </ul>
                </div>
            </td>  
        </tr>
                
        </tbody>
    </table>
</body>
</html>

        
    </body>
</html>
@endsection
