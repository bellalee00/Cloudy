<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #DCD0EA;
            font-family: 'Calibri', sans-serif;
        }

        .container {
            position: relative;
            max-width: 1500px;
            width: 90%;
        }

        img {
            max-width: 1500px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .about-us {
            display: none;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 1500px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            z-index: 1;
            font-size:19px;
        }

        .container:hover .about-us {
            display: block;
        }

        .navigation-buttons {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            justify-content: center;
        }

        button {
            padding: 10px 20px;
            background-color: #FCF4DD;
            color: navy;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: rgba(169, 169, 169, 0.9);
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="contactus.gif" alt="Full Header">
        <div class="about-us">
            <p>
                Toko kami berdiri pada tahun 2023. Awan juga bisa melambangkan perubahan. Dalam dunia fashion yang selalu berkembang,
                nama "Cloudy" dapat menggambarkan kesesuaian kami terhadap perubahan tren dan gaya. Toko Baju Cloudy adalah tempat di
                mana gaya bertemu kenyamanan! Kami dengan bangga mempersembahkan koleksi pakaian yang trendy, elegan, dan nyaman
                untuk setiap kesempatan. Dengan komitmen kami untuk memberikan pengalaman berbelanja yang menyenangkan dan produk-produk
                terbaik, Toko Baju Cloudy siap menjadi destinasi fashion favorit Anda.
            </p>
        </div>

        <div class="navigation-buttons">
            <button onclick="window.location.href='tokobaju.php'">Back to Home</button>
            <button onclick="window.location.href='katalog.php'">Back to Catalog</button>
        </div>
    </div>
</body>

</html>