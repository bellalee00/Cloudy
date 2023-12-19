<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Katalog Baju</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylekatalog.css">
    <style>
        /* Style yang sudah ada sebelumnya */

        .middle p {
            text-align: center;
        }

        .middle img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            cursor: pointer; /* Menambahkan pointer cursor saat dihover */
        }

        .middle .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .middle .product-item {
            flex-basis: calc(33.33% - 10px);
            margin-bottom: 20px;
        }

        .left ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .left li {
            margin-bottom: 10px;
        }

        .left a {
            display: block;
            padding: 10px;
            background-color: #f1f1f1;
            text-align: center;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
        }

        .left a:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- Header Content (if any) -->
        </div>
        <div class="main">
            <div class="left">
                <h3 align="center">Menu</h3>
                <ul>
                    <li><a href="katalog.php?jenis=woman">Woman</a></li>
                    <li><a href="katalog.php?jenis=man">Man</a></li>
                    <li><a href="katalog.php?jenis=all">All Product</a></li>
                </ul>
                <p><a href="tokobaju.php">Home</a></p> <!-- Tombol kembali ke beranda -->
            </div>
            <div class="middle">
                <h3 align="center">Product List</h3>
                <div class="product-container">
                    <?php
    $katalogWoman = array(
    array('id' => 1, 'jenis' => 'Blouse', 'foto' => 'blouse.gif', 'link' => 'blousewoman.php'),
    array('id' => 2, 'jenis' => 'Dress and Skirt', 'foto' => 'dress_and_skirt.gif', 'link' => 'dressandskirtwoman.php'),
    array('id' => 3, 'jenis' => 'Outer', 'foto' => 'outer.gif', 'link' => 'outerwoman.php'),
);

	$katalogMan = array(
    array('id' => 1, 'jenis' => 'Crewneck', 'foto' => 'crewneck.gif', 'link' => 'crewneckman.php'),
    array('id' => 2, 'jenis' => 'Jacket', 'foto' => 'jacket.gif', 'link' => 'jacketman.php'),
    array('id' => 3, 'jenis' => 'T-Shirt', 'foto' => 't-shirt.gif', 'link' => 'tshirtman.php'),
);

		// Combine both catalogs into a single array
			$allKatalog = array_merge($katalogWoman, $katalogMan);
			$jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'all'; // Default to 'all' if not set
			$katalogToShow = ($jenis == 'woman') ? $katalogWoman : (($jenis == 'man') ? $katalogMan : $allKatalog);

		foreach ($katalogToShow as $item) {
			echo '<div class="product-item">';
			echo '<a href="' . (isset($item['link']) ? $item['link'] : '#') . '">';
			echo '<img src="' . $item['foto'] . '" alt="' . $item['jenis'] . '">';
			echo '</a>';
			echo '<p align="center">' . $item['jenis'] . '</p>';
			echo '</div>';
}

                    ?>
                </div>
            </div>
            <div class="right">
                <h3><marquee align="center">Diskon Spesial</marquee></h3>
                <p>
                    <ul>
                        <li><a href="promo.php">Outer Wanita - Diskon 25%</a></li>
                        <li><a href="promo.php">Crewneck Pria - Diskon 25%</a></li>
                        <li><a href="promo.php">Blouse Wanita - Diskon 25%</a></li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="footer">
            <p align="center">Copyright &copy; 2023 Toko Baju Cloudy</p>
        </div>
    </div>
</body>

</html>
