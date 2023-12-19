<?php
// Informasi login statis
$users = [
    'kelompok3' => '12345',
    'user2' => 'password2',
    // Tambahkan lebih banyak jika diperlukan
];

// Cek apakah formulir login disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password cocok
    if (isset($users[$username]) && $users[$username] === $password) {
        // Login berhasil, arahkan ke halaman beranda atau halaman selanjutnya
        header('Location: tokobaju.php');
        exit;
    } else {
        // Login gagal, tampilkan pesan error
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #D8E9F7;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
        }

        .image-container {
            max-width: 280px;
            flex: 1;
            margin-right: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto; /* Center the image */
        }

        .form-container {
            background-color: #FFECF5;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .form-container h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="Cloudy.gif" alt="Image Description">
        </div>
        <div class="form-container">
            <h2>Login</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>

                <?php if (isset($error)) : ?>
                    <p class="error"><?= $error; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>

</html>
