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
</head>
<body>
    <?php include 'top-navbar.php'; ?>
    <div class="board">
        <div class="greeting">
            <p id="greeting"></p>
            <h1>Trixie Soriano</h1>
        </div>
        <div class="live-resume">
            <div class="resume-headers">
                <h5> LIVE RESUME </h5>
                <button>UPDATE</button>
            </div>
            <table>
                <tr>
                    <th>FILE NAME</th>
                    <th>FILE UPDATED DATE <th>
                    <th>VERSION NO. </th>
                </tr>
            </table>
        </div>
    </div>



   
   <script src="js/greetings.js"></script>
</body>
</html>
