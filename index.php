<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
		.card{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
    <!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top" style="background-color: #908471;">
        <div class="container-fluid">
            <a style="color: white;" class="navbar-brand" href="#">
                <img src="assets\img\favedia removed bg.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                <center><b>Favedia</b></center> 
            </a>

            <ul class="navbar-nav ml-auto">
                <li style="border: 1px;" class="nav-item">&nbsp;
                    <button style="border-radius: 5px;"><a class="nav-link" style="color: black;" href="index.php"><b>Menu</b></a></button>
                </li>
                <li style="border: 1px;" class="nav-item">&nbsp;
                    <button style="border-radius: 5px;"><a class="nav-link" style="color: black;" href="statusOrder.php"><b>Check Status Order</b></a></button>
                </li>
                <li style="border: 1px;" class="nav-item">&nbsp;
                    <button style="border-radius: 5px;"><a class="nav-link" style="color: black;" href="cart.php"><b>Cart<i class="uil uil-shopping-cart-alt"></i></b></a></button>
                </li>
                <li style="border: 1px;" class="nav-item">&nbsp;
                    <button style="border-radius: 5px;"><a class="nav-link" style="color: black;" href="login_form/login.php"><b>Login<i class="uil uil-user"></i></b></a></button>
                </li>
            </ul>
        </div>
    </nav>
<br><br><br><br><br>
<div style="padding-top: 80px; padding-bottom: 80px;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><b>Welcome to Favedia Restaurant</b></h1>
    <p class="lead">Indonesian cultural foods & drinks that are made by some real Indonesian professional chef and made by using fresh spices from Indonesia.</p>
  </div>
</div>
    <div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/mie_ayam.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mie Ayam</h5>
                    <p class="card-text">Rp. 13.000</p>
                    <a class="btn btn-info">Makanan</a>&nbsp;<a style="color: white;" class="btn btn-primary">Ready</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=MieAyam&Price=13000">add to cart</a>
                    </button>
                </div>
            </div>
        </div>
		<!-- Card 2 -->
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/nasi_goreng.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nasi Goreng</h5>
                    <p class="card-text">Rp. 16.000</p>
                    <a class="btn btn-info">Makanan</a>&nbsp;<a style="color: white;" class="btn btn-secondary">Out Of Stock</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=NasiGoreng&Price=16000">add to cart</a>
                    </button>
                </div>
            </div>
        </div>
		<!-- Card 3 -->
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/bubur_ayam.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Bubur Ayam</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a class="btn btn-info">Makanan</a>&nbsp;<a style="color: white;" class="btn btn-secondary">Out Of Stock</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=BuburAyam&Price=15000">add to cart</a>
                    </button> 
                </div>
            </div>
        </div>
		<!-- Card 4 -->
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/rawon.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nasi Rawon</h5>
                    <p class="card-text">Rp. 18.000</p>
                    <a class="btn btn-info">Makanan</a>&nbsp;<a style="color: white;" class="btn btn-primary">Ready</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=NasiRawon&Price=18000">add to cart</a>
                    </button> 
                </div>
            </div>
    	</div>
		<!-- Baris Ke Dua -->
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/air_putih.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Air Putih</h5>
                    <p class="card-text">Rp. 3.000</p>
                    <a class="btn btn-info">Minuman</a>&nbsp;<a style="color: white;" class="btn btn-primary">Ready</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=AirPutih&Price=3000">add to cart</a>
                    </button> 
                </div>
            </div>
    	</div>
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/es_teh_manis.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Es Teh Manis</h5>
                    <p class="card-text">Rp. 6.000</p>
                    <a class="btn btn-info">Minuman</a>&nbsp;<a style="color: white;" class="btn btn-primary">Ready</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=EsTehManis&Price=6000">add to cart</a>
                    </button> 
                </div>
            </div>
    	</div>
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/es_teler.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Es Teler</h5>
                    <p class="card-text">Rp. 14.000</p>
                    <a class="btn btn-info">Minuman</a>&nbsp;<a style="color: white;" class="btn btn-secondary">Out Of Stock</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=EsTeler&Price=14000">add to cart</a>
                    </button> 
                </div>
            </div>
    	</div>
		<div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="assets/img/sop_buah.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Es Campur</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a class="btn btn-info">Minuman</a>&nbsp;<a style="color: white;" class="btn btn-primary">Ready</a>
                    <br><br>
                    <button type="button" class="btn btn-success">
                    <a style="color: white;" href="cart/cart.php?menu=EsCampur&Price=15000">add to cart</a>
                    </button> 
                </div>
            </div>
    	</div>
    </div>
</div>
</body>
</html>