<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="stylesheet" href="kat.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- FLICKITY(carousel) -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Memorize | Bunga</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navigasi navbar-expand-lg">
        <div class="container-fluid d-flex flex-nowrap">
            <a class="navbar-brand" href="index.html"><img src="gambar/icon.jpg" alt="logo memorize"></a>
            <div class="d-flex justify-content-center align-items-center flex-grow-1 atas">
                <form class="d-flex ukur" role="search" method="_POST">
                    <input class="form-control mr-2 cari" type="search" placeholder="Cari Gambar" aria-label="Search"
                        id="search">
                    <button class="btn submit" type="submit"><i class="bi bi-search fw-bold ikon "></i></button>
                </form>
            </div>
            <div class="atas pas">
                <a href="login.php" class="btn linkan masuk">Masuk</a>
                <a href="daftar.php" class="btn linkan daftar">Daftar</a>
            </div>
        </div>
    </nav>

    <section>
        <h2 class="text-center mt-4 mb-2" id="kategori-text">Kategori</h2>
        <div class="hilang row justify-content-center p-4 g-3 template ">
            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                <div class="link-kategori active">
                    <a href="#">
                        <img src="gambar/cantik.jpg" alt="kategori bunga" class="kategori">
                        <p>Bunga</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                <div class="link-kategori">
                    <a href="#">
                        <img src="gambar/ta.jpg" alt="kategori pantai" class="kategori">
                        <p>Pantai</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                <div class="link-kategori">
                    <a href="#">
                        <img src="gambar/makanan.jpg" alt="kategori kuliner" class="kategori">
                        <p>Kuliner</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                <div class="link-kategori">
                    <a href="#">
                        <img src="gambar/gunung.jpg" alt="kategori gunung" class="kategori">
                        <p>Gunung</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- FOTO FOTO -->
        <h2 class="text-center mb-4">Gambar "<b>Bunga</b>"</h2>
        <div class="hilang row px-4 gy-4">
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                   <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <i class="bi bi-balloon-heart heart-icon ms-auto">12k</i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <i class="bi bi-balloon-heart heart-icon ms-auto">12k</i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <i class="bi bi-balloon-heart heart-icon ms-auto">12k</i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <span class="ms-auto">
                        <i style="color: red;" class="bi bi-balloon-heart-fill "></i><span>12k</span>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <span class="ms-auto">
                        <i style="color: red;" class="bi bi-balloon-heart-fill heart-icon "></i><span>12k</span>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <a href="komen.php"><img src="gambar/bunga.jpg" alt=""></a>
                </div>
                <div class="profile mt-2 d-flex align-items-center">
                    <img src="gambar/aku.jpg" alt="">
                    <span class="ms-1">Nevira</span>
                    <i class="bi bi-balloon-heart ms-auto">12k</i>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5">
        <footer class="text-center text-lg-start" style="background-color: #CAE8EF;">
            <div class="hilang row px-1">
                <!-- Logo -->
                <div class="col-lg-2 col-md-6 col-sm-6 order-md-last order-sm-last order-lg-first ">
                    <img src="gambar/icon.jpg" alt="logo memorize" class="img-fluid image-resize">
                </div>
                <!-- Main Content -->
                <div class="col-lg-7 col-md-12 text-center my-auto bp border-start  border-end border-dark ">
                    <div class="d-flex flex-column align-items-center test">
                        <a href="" class="link-underline-light">
                            <h5 class="text-gray mb-3">Ayo Bergabung!</h5>
                        </a>
                        <h3 class="text-gray mb-4">Berbagi Gambar / Memori Kepada Dunia</h3>
                    </div>
                </div>
                <!-- Social Media Buttons -->
                <div class="col-lg-3 text-center my-auto col-md-6 col-sm-6 order-md-last order-sm-last ">
                    <h3 class="text-gray my-2">Ikuti Kami!</h3>
                    <div class="d-flex justify-content-center align-items-center py-3">
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #81B7DE;">
                            <i class="bi bi-facebook"></i>
                        </button>
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #81B7DE;">
                            <i class="bi bi-instagram"></i>
                        </button>
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #81B7DE;">
                            <i class="bi bi-twitter"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Copyright©:
                <a class="text-white" href="">NeviraAulia Corp. 2024</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <!-- End of .container -->

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var heartIcons = document.querySelectorAll('.heart-icon');


            heartIcons.forEach(function (icon) {
                icon.addEventListener('click', function () {

                    this.classList.toggle('bi-balloon-heart');
                    this.classList.toggle('bi-balloon-heart-fill');

                    if (this.classList.contains('bi-heart-fill')) {
                        this.style.color = 'red';
                    } else {
                        this.style.color = '';
                    }
                });
            });
        });
    </script>
</body>

</html>