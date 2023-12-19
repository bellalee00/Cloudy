<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Blouse Woman</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #D5E3F0;
            margin: 0;
            padding: 0;
            transition: padding-top 0.2s ease-out;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .header {
            text-align: center;
            margin-bottom: 2px;
            width: 100%;
            padding-top: 80px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
            background-color: #fbfdaa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .menu:hover {
            background-color:#EBD4E6;
        }

        .menu-icon {
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-icon span {
            height: 4px;
            width: 25px;
            background: #333;
            margin: 6px 0;
            display: block;
            border-radius: 5px;
        }

        .menu-links {
            display: flex;
            justify-content: center;
            width: 100%;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .menu-links a {
            margin: 0 15px;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            background-color: #faf6ed;
            border-radius: 5px;
            display: block;
        }

        .menu-links.active {
            max-height: 200px;
        }

        .product-item {
            width: 48%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 80px;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-bottom: 2px solid #001F3F;
            max-height: 300px;
        }

        .product-item h2 {
            color: #333;
            margin: 15px 0;
        }

        .product-item p {
            color: #666;
            margin: 0 15px 15px;
            text-align: center;
        }

        .product-item span {
            font-weight: bold;
            color: #000;
            display: block;
            margin: 10px 15px;
        }

        .product-item span.discount {
            color: red;
        }

        .back-button {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button a:hover {
            background-color: #45a049;
        }

        body.fixed-header .container {
            padding-top: 80px;
        }

        body.fixed-header .product-item {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="logoblouse.gif" alt="Logo">
        </div>

        <div class="menu">
            <div class="menu-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <a href="tokobaju.php" class="active">Home</a>
                <a href="contactus.php">Contact Us</a>
                <a href="katalog.php">Catalog</a>
            </div>
        </div>

        <?php
        $all_produk = array(
            array(
                'id' => 1,
                'jenis' => 'Blue Flower',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'foto' => 'blue_flower.jpg',
                'harga' => 150000,
                'diskon' => true,
                'deskripsi' => 'Blouse Blue Flower menghadirkan keindahan bunga biru dalam desain yang elegan. Cocok untuk tampilan santai atau kencan romantis, blouse ini membawa kesegaran alam ke dalam gaya Anda.'
            ),
            array(
                'id' => 2,
                'jenis' => 'Pastel Green With Purple Ribbon',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'foto' => 'pastel_green_with_purple_ribbon.jpg',
                'harga' => 200000,
                'diskon' => true,
                'deskripsi' => 'Top Pastel Green with Purple Ribbon adalah kombinasi sempurna antara gaya lembut dan feminin. Dengan warna pastel yang menawan dan sentuhan pita unik, produk ini memberikan nuansa manis pada penampilan Anda.'
            ),
            array(
                'id' => 3,
                'jenis' => 'Top With Collar',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'foto' => 'top_with_collar.jpg',
                'harga' => 250000,
                'diskon' => false,
                'deskripsi' => 'Top with Collar memberikan kesan rapi dan profesional. Cocok untuk berbagai kesempatan formal atau semi-formal, kemeja ini menampilkan desain klasik dengan kerah yang elegan.'
            ),
            array(
                'id' => 4,
                'jenis' => 'White Shirt With Black Ribbon',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'foto' => 'white_shirt_with_black_ribbon.jpg',
                'harga' => 300000,
                'diskon' => false,
                'deskripsi' => 'White Shirt with Black Ribbon adalah pilihan elegan yang tak pernah ketinggalan zaman. Kemeja putih dengan sentuhan pita hitam memberikan kesan anggun, sempurna untuk berbagai acara.'
            ),
            array(
                'id' => 5,
                'jenis' => 'Zigzag Pattern Top',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'foto' => 'zigzag_pattern_top.jpg',
                'harga' => 350000,
                'diskon' => false,
                'deskripsi' => 'Zigzag Pattern Top adalah pilihan berani untuk gaya eksentrik. Dengan pola zigzag yang menarik, produk ini menambahkan semangat dan warna pada setiap penampilan Anda.'
            ),
        );
        ?>

        <?php foreach ($all_produk as $produk) : ?>
            <div class="product-item">
                <img src="<?php echo strtolower(str_replace(' ', '_', $produk['foto'])); ?>" alt="<?php echo $produk['jenis']; ?>">
                <h2><?php echo $produk['jenis']; ?></h2>
                <h2><small><?php echo $produk['ukuran']; ?></small></h2>
                <p><?php echo $produk['deskripsi']; ?></p>
                <?php if ($produk['diskon']) : ?>
                    <span>Harga: Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></span>
                    <span class="discount">Diskon 25% - Harga Diskon: Rp <?php echo number_format($produk['harga'] * 0.75, 0, ',', '.'); ?></span>
                <?php else : ?>
                    <span>Harga: Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>

    <script>
        function toggleMenu() {
            document.querySelector('.menu-links').classList.toggle('active');
        }

        window.addEventListener('scroll', function () {
            var header = document.querySelector('.header');
            var menu = document.querySelector('.menu');

            if (window.scrollY > header.clientHeight) {
                document.body.classList.add('fixed-header');
            } else {
                document.body.classList.remove('fixed-header');
            }
        });
    </script>
</body>

</html>
