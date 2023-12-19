<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dress and Skirt Woman</title>
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
            <img src="logodressandskirt.gif" alt="Logo">
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
        'jenis' => 'Black Dress Sofia',
        'foto' => 'black_dress_sofia.jpg',
        'harga' => 500000,
        'diskon' => true,
        'deskripsi' => 'Elegan dan berkelas, Black Dress Sofia adalah pakaian yang abadi yang menambah sentuhan kemewahan pada setiap kesempatan. Dengan desain yang simpel namun anggun, dress ini cocok untuk membuat pernyataan gaya yang kuat.'
    ),
	array(
        'id' => 2,
        'jenis' => 'Floral Skirt',
        'foto' => 'floral_skirt.jpg',
        'harga' => 200000,
        'diskon' => true,
        'deskripsi' => 'Rayakan keindahan alam dengan Floral Skirt kami. Dengan pola bunga yang cerah, rok ini menyenangkan dan modis. Ideal untuk kegiatan sehari-hari atau pertemuan santai bersama teman.'
    ),
    array(
        'id' => 3,
        'jenis' => 'Orchid Patterned Blue Dress',
        'foto' => 'orchid_patterned_blue_dress.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 250000,
        'diskon' => false,
        'deskripsi' => 'Tampilkan pernyataan berani dengan Orchid Patterned Blue Dress. Pola anggrek yang unik dan warna biru yang mencolok menciptakan tampilan yang memukau. Cocok untuk acara khusus atau malam bersama.'
    ),
    array(
        'id' => 4,
        'jenis' => 'Pastel Purple Dress',
        'foto' => 'pastel_purple_dress.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 300000,
        'diskon' => false,
        'deskripsi' => 'Sinarlah dalam Pastel Purple Dress. Warna pastel yang lembut memancarkan feminitas, sementara desain klasik memastikan keanggunan yang abadi. Pilihan serbaguna untuk berbagai kesempatan.'
    ),
    array(
        'id' => 5,
        'jenis' => 'Puppy Print Dress',
        'foto' => 'puppy_print_dress.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 350000,
        'diskon' => false,
        'deskripsi' => 'Tambahkan sentuhan lucu pada lemari pakaian Anda dengan Puppy Print Dress. Dengan cetakan anjing yang menggemaskan, dress ini imut dan unik. Sempurna untuk mereka yang menyukai gaya yang menyenangkan dan ceria.'
    ),
    array(
        'id' => 6,
        'jenis' => 'Rose Long Dress',
        'foto' => 'rose_long_dress.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 400000,
        'diskon' => false,
        'deskripsi' => 'Masuki suasana elegan dengan Rose Long Dress. Pola mawar yang rumit dan siluet mengalir menciptakan tampilan romantis dan anggun. Ideal untuk acara formal atau malam istimewa.'
    ),
    array(
        'id' => 7,
        'jenis' => 'Small Rose Patterned Skirt',
        'foto' => 'small_rose_patterned_skirt.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 350000,
        'diskon' => false,
        'deskripsi' => 'Ekspresikan pesona feminin Anda dengan Small Rose Patterned Skirt. Pola mawar yang halus menambahkan sentuhan romantis, menjadikan rok ini pilihan yang indah untuk penampilan manis dan modis.'
    ),
    array(
        'id' => 8,
        'jenis' => 'Strawberry Patterned Skirt',
        'foto' => 'strawberry_patterned_skirt.jpg',
        'ukuran' => 'SIZE : (S)  (M)  (L)  (XL)',
        'harga' => 120000,
        'diskon' => false,
        'deskripsi' => 'Hadirkan sentuhan bermain dan ceria pada gaya Anda dengan Strawberry Patterned Skirt. Pola stroberi yang menggemaskan membuat rok ini pilihan yang menyenangkan untuk gaya kasual dan ceria.'
    ),
);
?>


        <?php foreach ($all_produk as $produk) : ?>
    <div class="product-item">
        <img src="<?php echo strtolower(str_replace(' ', '_', $produk['foto'])); ?>" alt="<?php echo $produk['jenis']; ?>">
        <h2><?php echo $produk['jenis']; ?></h2>
        <p><?php echo $produk['deskripsi']; ?></p>
        <span>Harga: Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></span>
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
