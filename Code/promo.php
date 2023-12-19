<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Promo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color:#F4B9B5;
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
            <img src="sale.gif" alt="Logo">
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
                'foto' => 'blue_flower.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 150000,
                'diskon' => true,
                'deskripsi' => 'Blouse Blue Flower menghadirkan keindahan bunga biru dalam desain yang elegan. Cocok untuk tampilan santai atau kencan romantis, blouse ini membawa kesegaran alam ke dalam gaya Anda.'
            ),
            array(
                'id' => 2,
                'jenis' => 'Pastel Green With Purple Ribbon',
                'foto' => 'pastel_green_with_purple_ribbon.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 200000,
                'diskon' => true,
                'deskripsi' => 'Top Pastel Green with Purple Ribbon adalah kombinasi sempurna antara gaya lembut dan feminin. Dengan warna pastel yang menawan dan sentuhan pita unik, produk ini memberikan nuansa manis pada penampilan Anda.'
            ),
            array(
                'id' => 3,
                'jenis' => 'Cropped Top With Pretty Roses',
                'foto' => 'cropped_top_with_pretty_roses.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 250000,
                'diskon' => true,
                'deskripsi' => 'Tampil anggun dengan Cropped Top berhiaskan bunga mawar yang cantik. Padukan dengan rok atau celana favoritmu untuk tampilan yang stylish dan feminin.'
            ),
            array(
                'id' => 4,
                'jenis' => 'Elegant Suit With Jasmine Flowers',
                'foto' => 'elegant_suit_with_jasmine_flowers.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 300000,
                'diskon' => true,
                'deskripsi' => 'Kenakan Elegant Suit ini yang dihiasi dengan bunga melati yang memikat. Cocok untuk acara formal atau semi-formal, memberikan sentuhan elegan dan anggun.'
            ),
            
            array(
                'id' => 5,
                'jenis' => 'Crewneck Nirvana',
                'foto' => 'crewneck_nirvana.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 500000,
                'diskon' => true,
                'deskripsi' => 'Crewneck Nirvana membawa nuansa grunge dan kebebasan ala era 90-an. Dengan desain yang klasik namun tetap stylish, crewneck ini memberikan kenyamanan dan gaya dalam satu paket. Cocok untuk penggemar musik dan gaya kasual yang berkelas.'
            ),
            array(
                'id' => 6,
                'jenis' => 'Navy Green Crewneck',
                'foto' => 'navy_green_crewneck.jpg',
                'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
                'harga' => 200000,
                'diskon' => true,
                'deskripsi' => 'Navy Green Crewneck hadir dengan kombinasi warna navy dan hijau yang segar. Desain simpel namun menarik, memberikan sentuhan modern pada gaya kasual Anda. Cocok untuk tampilan yang santai namun tetap fashionable.'
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