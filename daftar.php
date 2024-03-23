<?php
include 'config\koneksi.php';
if(isset($_POST['submit'])){
   $us=$_POST['us'];
   $p=$_POST['pass'];
   $em=$_POST['em'];
   $nml=$_POST['nml'];
   $sel="SELECT * FROM user WHERE Username='$us' AND Email='$em'";
   $cek=mysqli_query($conn,$sel);
   if(mysqli_num_rows($cek) > 0){
      echo '<script>alert("Data lo terdaftar!")</script)';
   }else{
      $ins="INSERT INTO user VALUES(null,'$us','$p','$em','$nml')";
      mysqli_query($conn,$ins);
      header('Location:login.php');
   }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="punyaku.css">
    <title>Masuk</title>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-lg-6">

               <img src="gambar/daftar.png" alt="" class="gam">

                  </div>
        <div class="col-lg-6 ">
           <h1 class="jdl">Daftar Ke Galleri'a</h1>
           <form action="" method="post">
            <div class="row row-cols-2">
               <div class="col">
            <label for="" class="id">Username</label> <br>
            <input type="text" id="masuk" name="us" class="dua" required> <br>
               </div>
            <div class="col">
            <label for="" class="id">Password</label> <br>
            <input type="password" id="masuk" name="pass" class="dua" required>
            </div>
            <div class="col">
            <label for="" class="id">Email</label> <br>
            <input type="email" id="masuk" name="em" class="dua" required>
            </div>
            <div class="col">
             <label for="" class="id">Nama Lengkap</label> <br>
            <input type="text" id="masuk" name="nml" class="dua" required>
           </form>
           </div>
           <input type="submit" name="submit" value="Daftar" class="btndaftar">
           
           <label class="akun">Sudah punya Akun ?<a href="login.php"> Masuk </b></label> <br>
            </div>
        </div>
     </div>

</body>
</html>