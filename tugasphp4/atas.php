<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Website Cars</title>
    <style>
        .container {
            background-color: #f2f2f2; /* Warna abu-abu */
            padding: 10px;
        }

        .container a {
            text-decoration: none; /* Menghapus garis bawah pada link */
            margin-right: 10px; /* Memberikan jarak antara link */
            color: #333; /* Warna teks menjadi abu-abu gelap */
        }

        .container a:hover {
            color: #666; /* Warna teks pada hover link */
        }
    </style>
</head>
<body>
    
    <div class="container">
        <?php
            // Looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $velue <br>";

                echo "<a href='index.php?hal=$key'>$value</a> ";
            }
        ?>
    </div>
</body>
</html>