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
        .contChart {
            background-color: white;
            padding: 15px 47px;

            display: flex;
            flex-direction: column;
        }

        .yAxis {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            row-gap: 20px;
            background-color: white;
            height: 270px;
            width: 24px;
            transform: translateY(10px);
        }

        .dropdownContainer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 182px;
            border-radius: 9px;
            border: 1px solid #33A0FF;
            padding: 7px;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            background-color: white;
            outline: none;
        }

        .dropdownContainer .day {
            font-size: 10px;
            font-weight: 400;
            text-align: center;

        }

        #chartContainer {
            height: 300px;
            display: flex;

        }

        .headContChart {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 80px;
        }

        .dropdownContent {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            transform: translate(10px, 87px);
        }

        .dropdownContent ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
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
            font-size: 16px;
            font-weight: 500;
            line-height: 18px;
            text-align: center;
        }

        button.dropdownContainer {
            cursor: pointer;
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
            margin-top: 70px;
        }

        .jumlah {
            color: #B9BBBD;
        }
    </style>
</head>

<body>
    <h2>Analisis</h2>
    <br><br>
    <div class="contChart">
        <div class="headContChart">
            <div>
                <h2>Informasi Penjualan</h2>
                <p class="jumlah">Jumlah Pesanan</p>
            </div>
            <button class="dropdownContainer" onclick="toggleDropdown()">
                <img src="{{ asset('images/time.png') }}" alt="image" id="time">
                <div class="textDropdown">
                    <p>Filter Periode</p>
                    <span id="selectedOption" class="day">30 Hari Trakhir</span>
                </div>
                <div id="dropdownContent" class="dropdownContent">
                    <ul id="dropList">
                        <li onclick="selectOption('kemaren')">kemaren</li>
                        <li onclick="selectOption('7 hari terakhir')">7 hari terakhir</li>
                        <li onclick="selectOption('30 hari terakhir')">30 hari terakhir</li>
                    </ul>
                </div>
                <img src="{{ asset('images/dropdownWhite.png') }}" alt="image" id="dropdownWhite">
            </button>
        </div>
        <div id="chartContainer">
            <div class="yAxis">
                <span>9</span>
                <span>6</span>
                <span>3</span>
                <span>0</span>
            </div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div class="tableContainer">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Produk Yang Keluar</th>
                    <th scope="col">Jumlah Tersedia</th>
                </tr>
            </thead>
            <tbody>
                <tr id="row2">
                    <td scope="row">01</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td scope="row">02</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                <tr>
                <tr id="row2">
                    <td scope="row">01</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td scope="row">02</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                <tr>
                <tr id="row2">
                    <td scope="row">01</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td scope="row">02</td>
                    <td>Basreng pedas</td>
                    <td>210</td>
                    <td>100</td>
                <tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {

            type: 'line',
            data: {
                labels: ['26/3', '27/3', '28/3', '29/3', '30/3', '31/3', '01/4', '02/4', '03/4', '04/4', '05/4', '06/4', '07/4', '08/4', '09/4', '10/4', '11/4', '12/4', '13/4', '14/4', '15/4', '16/4', '17/4', '18/4', '19/4', '20/4', '21/4', '22/4', '23/4', '24/3'],
                datasets: [{
                    label: '',
                    data: [0, 3, 4, 3, 4, 5, 3, 4, 5, 2, 3, 6, 3, 4, 5, 2, 3, 4, 3, 2, 2, 3, 2, 2, 3, 3, 3, 8, 8, 8, 8],
                    borderWidth: 3,
                    borderColor: '#2D9CDB',
                    fill: true,
                    backgroundColor: '#6EC8EF50',
                    pointRadius: 11, // Customize the size of the dots
                    pointHoverRadius: 11, // Customize the size of the dots on hover
                    pointBackgroundColor: ['transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', '#2D9CDB', 'transparent', 'transparent', 'transparent', 'transparent'], // Set the background color of the dots
                    pointBorderColor: ['transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'white', 'transparent', 'transparent', 'transparent', 'transparent'], // Set the border color of the dots
                    pointBorderWidth: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    display: false,
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 3,
                        }
                    },
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                        }
                    }]
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            title: function() {
                                return '6 Pesanan'; // Remove the default title
                            },
                            label: function(context) {
                                const index = context.dataIndex;
                                const label = context.dataset.label;
                                if (index === 17) {
                                    return '19 April 2023'; // Custom tooltip label for '19 April 2023'
                                } else {
                                    return ''; // Empty string for other data points
                                }
                            }
                        },
                        displayColors: false, // Disable the display of color boxes
                        mode: 'index', // Use the 'index' mode for tooltip positioning
                        intersect: false, // Prevent tooltip from intersecting with other data points
                        caretSize: 0 // Set the caret size to 0 to remove the square
                    }
                },
                elements: {
                    line: {
                        tension: 0.2 // Adjust the tension for a smoother curve
                    }
                },
                spanGaps: true
            }
        });
    </script>
</body>

</html>
@endsection