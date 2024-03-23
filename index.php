<?php
include 'config/koneksi.php';
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="punyaku.css">

    <!--ICON-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--ICON-->

    <title>HomePage</title>
</head>

<body>

    <nav class="navbar navigasi d-flex justify-content-center">
        <div class="container h-search-form">
            <form action="#">
                <input class="form-control me-2" type="search" placeholder="Pantai" aria-label="Search">
                <button><ion-icon class="bi bi-search" name="search-outline"></ion-icon></button>
            </form>
            <?php
            if (empty($_SESSION['id_user'])) { ?>
                <h1 class="logo mx-auto pe-5">Galleri'a</span></h1>
                <a href="login.php" class="btn my-auto me-2">Masuk</a>
                <a href="daftar.php" class="btn my-auto bg-black text-white me-3 rounded-pill">Daftar</a>
            <?php } else { ?>
                <div class="me-2">
                    <a href="#"><img class="profil1 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a>
                </div>
            <?php } ?>
        </div>
    </nav>

    <div class="container">
        <div class="container mt-2">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="gambar/citylight2 1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="gambar/gn3 1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="gambar/swis1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-12">
            <form action="" method="post">
                <div class="jdlku">Kategori</div>
                <div class="jdlme"><b>Siap Menjelajahi Seluruh Dunia</b></div>
                <div class="row">
                    <div class="col-3">
                        <a href="kategori.php"><img src="gambar/gunung.jpg" class="gbr4 img-fluid"></a>
                    </div>
                    <div class="col-3">
                        <a href="kategori.php"><img src="gambar/makanan.jpg" class="gbr4 img-fluid"></a>
                    </div>
                    <div class="col-3">
                        <a href="kategori.php"><img src="gambar/citylight.jpg" class="gbr4 img-fluid"></a>
                    </div>
                    <div class="col-3">
                        <a href="kategori.php"><img src="gambar/bunga.jpg" class="gbr4 img-fluid"></a>
                    </div>

                    <div class="jdlku"><b>Inspirasi Foto</b></div>
                    <div class="row g-4">

                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <img class="gbr3 object-fit-cover" src="gambar/gunung2.jpg">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="d-flex">
                                    <img class="gbr5 rounded-circle object-fit-cover" src="gambar/aku.jpg">
                                    <small class="ms-2 mt-2">Nevira</small>
                                </div>
                                <div class="d-flex mt-1 pe-2">
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-eye-fill"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-heart"></i><small>300k</small>
                                    </div>
                                    <div class="me-2 mt-1">
                                        <i class="bi bi-box-arrow-up"></i><small>300k</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Container -->
                        <div class="container-fluid py-3 text-center border ">
                            <h4>Gabung Untuk Menjadi Kontributor</h4>
                            <p>Jelajahi Dunia Sampai Batasanmu</p>
                            <div class="text-center">
                                <a href="#" class="btn bg-black text-white my-auto">Gabung Sekarang</a>
                            </div>
                        </div>
                        <!-- Footer -->
                        <footer class="footeeerr">
                            <div class="row g-3">
                                <div class="col my-5">
                                    <h1 class="logo">Galleri'a</span></h1>
                                </div>

                                <div class="col my-5">
                                    <p>Jangan ragu untuk terus mengunjungi situs kami.</p>
                                </div>

                                <div class="col my-5">
                                    <p class="p2">Phone : 0821-1076-3373<br>
                                        aulianevira00@gmail.com</p>
                                </div>
                            </div>

                            <p class="ppp">&copy; 2024 neviraaulia. Hak cipta dilindungi undang-undang.</p>
                        </footer>
                        <!-- /Footer -->
                    </div>
                </div>

</body>

</html>