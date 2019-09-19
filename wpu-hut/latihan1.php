<?php

    $data = file_get_contents('data/pizza.json');
    $menu = json_decode($data, true);
    // var_dump($menu["menu"][0]['nama']); //ini digunakan untuk mengeluarkan data di dalam objek menu

    $menu = $menu["menu"]; //untuk mendefinisikan jika $menu adalah isi dari objek menu tanpa mendeklarasikannya terlebih                           dahulu
    // echo "<pre>";
    // var_dump($menu);
    // echo "</pre>";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>WPU HUT</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div> 
        </div>

        <div class="row">
            <?php 
                foreach ($menu as $key) :
            ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="img/menu/<?= $key["gambar"] ?>" class="card-img-top" alt="iki gambar pizza">
                    <div class="card-body">
                        <h5 class="card-title"><?= $key["nama"] ?></h5>
                        <h5 class="card-title"><b>Rp. <?= number_format($key["harga"],0,",",".") ?>,-</b></h5>
                        <p class="card-text"><?= $key["deskripsi"] ?></p>
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>

    </div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script>
    $.getJSON('data/pizza.json', function(data) {
        console.log(data);

        console.log("===STRINGIFY===");
        var dataStringify = JSON.stringify(data);
        console.log(dataStringify);

        console.log("===PARSE===");
        var dataParse = JSON.parse(dataStringify);
        console.log(dataParse);
        // console.log(JSON.parse(data));
        
        
    });
</script>
</html> 