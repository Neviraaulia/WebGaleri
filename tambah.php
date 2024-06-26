<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="stylesheet" href="album.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- FLICKITY(carousel) -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>MEMORIE | Buka Album</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="gambar/icon.jpg" alt="logo memorize" height="50px" class="logo-img">
            </a>
            <div class="d-sm-flex align-items-center justify-content-center page-title-container">
                <h2 class="m-0 pe-5 page-title" data-bs-toggle="modal" data-bs-target="#addAlbumModal">Galleri'a<i
                        class="bi bi-pencil-square"></i></h2>
            </div>
            <div class="dropdown me-2">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <a href="profil.php"><img src="gambar/aku.jpg" alt="profil" class="profil-img"></a>
                </a>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Album</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="btn-flying" data-bs-toggle="modal" data-bs-target="#addFotoModal">
            <i class=" bi bi-plus"></i>
        </div>
        <div class="mx-2 mt-4">
            <h1 class="verdana">Galleri'a Album</h1>
            <h3 class="mt-3 ps-3">Deskripsi</h3>
            <p class="Poppins ps-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <!-- FOTO FOTO -->
        <div class="hilang row px-4 gy-4 mt-3">
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/satu.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <i class="bi bi-three-dots ms-auto"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/dua.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <i class="bi bi-three-dots ms-auto"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/tiga.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <div class="ms-auto">
                        <div class="dropup">
                            <i class="bi bi-three-dots ms-auto dropdown-toggle" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/pantai7.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <i class="bi bi-three-dots ms-auto"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/ta.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <i class="bi bi-three-dots ms-auto"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 foto-image">
                <div class="foto">
                    <img src="gambar/mba.jpg" alt="">
                </div>
                <div class="profile d-flex p-2 ps-1">
                    <p class="ms-1">Nama Foto</p>
                    <i class="bi bi-three-dots ms-auto"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xl-2 album-plus">
                <div class="btn-plus">
                    <i class="bi bi-plus"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal EDIT ALBUM-->
    <div class="modal fade" id="addAlbumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mx-auto" id="exampleModalLabel">Edit Album</h5>
                </div>
                <div class="modal-body">
                    <form id="addAlbumForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="albumName" placeholder="Nama Album" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="albumDescription" placeholder="Deskripsi Album"
                                rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Hapus Album</button>
                    <button type="submit" class="btn btn-primary" id="submitAlbum"> Edit </button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal TAMBAH FOTO-->
    <div class="modal fade" id="addFotoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mx-auto" id="exampleModalLabel">Tambah Gambar</h5>
                </div>
                <div class="modal-body">
                    <form id="addFotoForm">
                        <div class="mb-3 addfoto">
                            <label for="gambar"><img src="gambar/add.png" alt="add" id="gambar-preview"></label>
                            <input id="gambar" type="file" accept="image/*">
                            <h2>Tambah Gambar</h2>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="albumName" placeholder="Judul Foto" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="albumDescription" placeholder="Deskripsi Foto"
                                rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="submitAlbum"> Tambah </button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <div class="mt-5 .footer">
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
                            <h5 class="text-grey mb-3">Ayo Bergabung!</h5>
                        </a>
                        <h3 class="text-grey mb-4">Berbagi Foto / Memori Kepada Dunia</h3>
                    </div>
                </div>
                <!-- Social Media Buttons -->
                <div class="col-lg-3 text-center my-auto col-md-6 col-sm-6 order-md-last order-sm-last ">
                    <h3 class="text-grey my-2">Ikuti Kami!</h3>
                    <div class="d-flex justify-content-center align-items-center py-3">
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #E7EEF3;">
                            <i class="bi bi-facebook"></i>
                        </button>
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #E7EEF3;">
                            <i class="bi bi-instagram"></i>
                        </button>
                        <button type="button" class="btn sosmed btn-lg btn-floating mx-2"
                            style="background-color: #E7EEF3;">
                            <i class="bi bi-twitter"></i>
                        </button>
                    </div>
                </div>
            </div>
            
        </footer>
    </div>

    <!-- End of .container -->

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        document.getElementById("gambar").addEventListener("change", function () {
            const file = this.files[0]; // Mendapatkan file yang dipilih oleh pengguna
            if (file) {
                const reader = new FileReader(); // Membuat objek FileReader
                reader.onload = function (e) {
                    document.getElementById("gambar-preview").setAttribute("src", e.target.result); // Menyetel atribut src dari elemen img dengan gambar yang dipilih
                    document.querySelector(".addfoto h2").style.display = "none";
                }
                reader.readAsDataURL(file); // Membaca file sebagai URL data
            }
        });


        document.addEventListener('DOMContentLoaded', function () {
            var button = document.querySelector('.btn-flying');
            var footer = document.querySelector('.footer');
            var footerTop = footer.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            window.addEventListener('scroll', function () {
                var buttonBottom = button.getBoundingClientRect().bottom;
                var distanceToFooter = footerTop - buttonBottom;

                if (distanceToFooter > windowHeight) {
                    button.style.bottom = '100px'; // Adjust this value accordingly
                } else {
                    button.style.bottom = distanceToFooter + 'px';
                }
            });
        });
    </script>

</body>

</html>