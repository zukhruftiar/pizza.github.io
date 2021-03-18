<?php 
$data = file_get_contents('../pizzahut.co.id/pizza.json');

$menu = json_decode($data, true);

$menu = $menu["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>pizZa Hut</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="#"><img src="../pizzahut.co.id/img/logo.png" width="150"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
	        <a class="nav-link" href="#">Pricing</a>
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
			<?php foreach ($menu as $mn):?>
			<div class="col-md-4">
				<div class="card-group">
				  <div class="card mb-3">
				    <img src="../pizzahut.co.id/img/menu/<?= $mn['gambar'] ?>" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title"><?= $mn['nama'] ?></h5>
				      <p class="card-text"><?= $mn['deskripsi'] ?></p>
				      <h5 class="card-title">Rp. <?= $mn['harga'] ?>,-</h5>
				    </div>
				    <div class="card-footer">
				      <a href="#" class="btn btn-primary">Order Now..</a>
				    </div>
				  </div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>


    <!-- Optional JQuery; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>