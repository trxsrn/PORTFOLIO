<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include 'top-navbar.php'; ?>
    <div class="board">
        <div class="greeting">
            <p id="greeting"></p>
            <h1>TRIXIE</h1>
        </div>
        <div class="summary">
            <div class="graph">
            <canvas id="myLineChart"></canvas>
            </div>
            <div class="count">
                <h1>SUMMARY COUNT </h1>
            </div>
        </div>
        <div class="live-resume">
            <div class="live-resume-header">
                <p>LIVE RESUME </p>
                <button>UPDATE</button>
            </div>
                <table>
                    <tr>
                        <th>FILE NAME</th>
                        <th>UPDATE DATE</th>
                        <th>VERSION NO.</th>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr> 
                        <th colspan="3" style="text-align: center;"> SEE VERSION HISTORY </th>
                    </tr>

                </table>
        </div>
        <div class="live-resume">
            <div class="live-resume-header">
                <p>LIVE MOBILE APPLICATION PROJECTS</p>
                <button>UPDATE</button>
            </div>
                <table>
                    <tr>
                        <th>FILE NAME</th>
                        <th>UPDATE DATE</th>
                        <th>VERSION NO.</th>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr> 
                        <th colspan="3" style="text-align: center;"> SEE VERSION HISTORY </th>
                    </tr>

                </table>
        </div>
        <div class="live-resume">
            <div class="live-resume-header">
                <p>LIVE WEB APPLICATION PROJECTS </p>
                <button>UPDATE</button>
            </div>
                <table>
                    <tr>
                        <th>FILE NAME</th>
                        <th>UPDATE DATE</th>
                        <th>VERSION NO.</th>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr>
                        <td>RESUME #1</td>
                        <td>January 1, 2023 </td>
                        <td>VS.00001</td>
                    </tr>
                    <tr> 
                        <th colspan="3" style="text-align: center;"> SEE VERSION HISTORY </th>
                    </tr>

                </table>
        </div>
    </div>


    <script>
        var ctx = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sample Data',
                    data: [12, 19, 3, 5, 2],
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
   
   <script src="js/greetings.js"></script>
</body>
</html>
