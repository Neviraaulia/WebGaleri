<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap -->

    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- /Icon -->


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Urbanist&display=swap" rel="stylesheet">
    <!-- /Font -->

    <link rel=" stylesheet" href="komen.css">
    <title>Galleri'a</title>
</head>

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="logo_foto navbar-brand col-4" href="homepage.php">Galleri'a</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-8" id="navbarSupportedContent">
                    <form action="#" class="d-flex my-3 me-auto">
                        <input class="search_foto form-control " type="search" placeholder="Cari" aria-label="Search">
                        <button class="icon_search_foto btn btn-outline-success" type="submit">
                            <ion-icon class="bi bi-search" name="search-outline"></ion-icon>
                        </button>
                    </form>
                    <div class="me-2">
                        <a href="#"><img class="profil1 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /header -->

    <!-- Main -->
    <main>

        <div class="container">
            <div class="row">
                <div class="offset-2 col-8">
                    <div class="card" style="width: 100%;">
                        <img src="gambar/bunga.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex  justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2 d-flex align-items-center">
                                        <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                    </div>
                                    <div class="me-2 d-flex align-items-center">
                                        <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-4 ps-2">
                                <h5 class="card-title">Judul Foto</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="offset-1 col-10">
                                <h6>Komentar</h6>
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                                <p class="card-text ps-4 mx-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="row d-flex my-4">
                                <div class="d-flex justify-content-center">
                                    <a href="#"><img class="gambaaar rounded-circle object-fit-cover my-1" src="gambar/aku.jpg"></a>
                                    <input class="komentar form-control ms-2" type="" placeholder="Tambahkan Komentar" aria-label="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="txt_h mt-5 text-center">Jelajahi lainnya</h3>

            <div class="row_gbr row g-4 ">
                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="komen.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="komen.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/flower.jpg"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/aku.jpg"></a> <small class="txt_small ms-2">Nevira</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
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