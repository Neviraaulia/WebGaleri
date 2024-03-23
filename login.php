<?php
session_start();

// Koneksi ke database (ganti dengan detail koneksi sesuai dengan database Anda)
$host = 'localhost';
$username = 'username_database';
$password = 'password_database';
$database = 'nama_database';

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form login telah dikirimkan
if (isset($_POST['submit'])) {
    // Ambil data yang dikirimkan dari form
    $username = $_POST['us'];
    $password = $_POST['pass'];

    // Query untuk mencari pengguna dengan nama atau email yang sesuai
    $sql = "SELECT * FROM users WHERE (nama = '$username' OR email = '$username') AND password = '$password'";
    $result = $conn->query($sql);

    // Periksa apakah ada hasil query
    if ($result->num_rows == 1) {
        // Informasi login cocok, berikan akses
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect ke halaman dashboard atau halaman setelah login berhasil
        exit();
    } else {
        // Informasi login tidak cocok, berikan pesan kesalahan
        $error = "Nama pengguna/email atau kata sandi salah. Silakan coba lagi.";
    }
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Masuk</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="gambar/masuk.png" alt="" class="gbr">
        </div>
        <div class="col-lg-6">
            <h1 class="judul"> Masuk Ke Galleri'a </h1>
            <form action="" method="post">
                <label for="" class="nmku">Nama atau Email</label> <br>
                <input type="text" id="masuk" name="us" class="userku"> <br>
                <label for="" class="nmku">Kata Sandi</label> <br>
                <input type="password" id="masuk" name="pass" class="userku">
                <input type="submit" name="submit" value="Masuk" class="btnmasuk">
            </form> 
            <p class="akun">Belum punya akun?<a href="Daftar.php">Daftar</a></p>
            <?php
            // Tampilkan pesan kesalahan jika ada
            if (isset($error)) {
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
<html lang="en">
<head>
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="punyaku.css">
  <title>Masuk</title>
</head>
<body>


<div class ="container">
<div class="row">
    <div class="col-lg-6">

    <img src="gambar/masuk.png" alt="" class="gbr">
    </div>
    <div class = " col-lg-6">
        <h1 class="judul"> Masuk Ke Galleri'a </h1>
        <form action = ""method="post">
            <label for="" class="nmku">Nama atau Email</label> <br>
            <input type="text" id="masuk" name="us" class="userku"> <br>
            <label for="" class="nmku">Kata Sandi</label> <br>
            <input type="password" id="masuk" name="pass" class="userku">
          <input type="submit" name="submit" value="Masuk" class="btnmasuk">
          </form> 
          <p class="akun">Belum punya akun?<a href="Daftar.php">Daftar</a></p>
         
    </div>
</div>
</body>
</html>