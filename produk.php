<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> d'Que tradisional Website Responsive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 align="center"> Selamat Datang d'Que tradisional</h1>
        </div>
        <div class="main">
            <div class="left">
                <h3 align="center">Menu</h3>
                <ul>
                    <li><a target="_self" href="index.html">Home</a></li>
                    <li><a href="#">produk</a></li>
                    <li><a target="_blank" href="https://wa.me/6285695373645">Hubungi kami</a></li>
                </ul>
            </div>
            <div class="middle">
                <h3 align="center">Produk</h3>
                <p align="center"><strong><a href="#">Membuat-Design Web Responsive</a></strong></p>
                <p align="center">
                <ul>
                    <?php
                    $gambar = array('images/k1.jpg', 'images/k2.jpg', 'images/k3.jpg', 'images/k4.jpg', 'images/k5.jpg');
                    // shuffle($gambar);
                    // for ($i = 0; $i <= 5; $i++) {
                    //     echo "<li style=\"display: inline;\"><img src=\"$gambar[$i]\"  width=\"130\" height=\"250\"></li>";
                    // }
                    foreach ($gambar as $gb) {
                        // echo "<li style=\"display: inline;\"><img src=\"$gb\"  width=\"130\" height=\"250\"></li>";
                        echo "<li style='display: inline;'><img src='$gb'  width='130' height='350'></li>";
                    }

                    ?>
                </ul>
                </p>

            </div>

            <div class="footer">
                <p align="center">Coppright &copy; 2018 Belajar CSS Responsive </a></p>
            </div>
        </div>
</body>

</html>