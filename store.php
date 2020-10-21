<?php
    $conn = mysqli_connect("localhost", "dinostor_admin", "Sensor", "dinostor_item");

    $query = mysqli_query($conn, "SELECT * FROM items");
?>

<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Ke store.php -->
    <link rel="icon" href="assets/Logo.png">
    <title>Dinostore Store</title>
  </head>
  <body class="bg-dino">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-dino-flip">
    <a class="navbar-brand" href="#">
        <img src="assets/Logo.png" width="50" height="50" class="flip-img" alt="Logo">
    </a>
    </nav>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Todo: Pake mysql database -->
            <?php while($url = mysqli_fetch_assoc($query)) : ?>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                <img src="<?= $url["url_image"]; ?>" class="card-img-top" alt="Gambar">
                    <div class="card-body">
                        <h5 class="card-title"><?= $url["nama_item"]; ?></h5>
                        <p class="card-text"><?= $url["deskripsi"]; ?></p>
                        <a href="https://discord.gg/uKES3Qz" class="btn btn-success">Beli Produk</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>