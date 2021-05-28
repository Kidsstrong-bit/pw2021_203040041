<?php
require 'php/functions.php';
//query database
$barang = query("SELECT * FROM barang")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIOT.</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
</head>
<body>
    <div class="header-background">
        <div id="nav" class="sticky-nav">

        <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Riot.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <a class="btn btn-dark" href="php/login.php" type="button">Sign in</a>
      </form>
    </div>
  </div>
</nav>
        </div>
        <h1 class="heading">Born as riot, Let's rise together.<br>Thrill of youth culture</h1>
</div>
<div class="container">
    <h1 class="cat">Catalogue</h1>
    <div class="row text-center py-5">
                <?php $i = 1; ?>
                <?php foreach($barang as $brg) : ?>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow" style="width: 16rem;">
                    <img src="assets/images/<?= $brg["gambar"]; ?>" alt="" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h6 class="card-title"><?= $brg["nama"]; ?></h6>
                    <h5>
                        <small><s>30% OFF</s></small>
                        <span class="price"><?= $brg["harga"]; ?></span>
                    </h5>
                    <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart</button>
                    <a class="btn btn-dark my-3" href="php/detail.php" button type="button" name="detail">Detail</a>
                </div>
            </form>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </div>
</div>
<div class="container-fluid">
<h1 class="section-title">ABOUT</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-lg-5 column-left">

        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 column-right">
            <p class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum magni eius suscipit quaerat architecto sapiente, officiis obcaecati ipsam, magnam provident ea recusandae nisi illo inventore repellendus nam eaque sequi porro.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br><br> Ex quidem, sit unde eum temporibus vel quod velit laboriosam quisquam itaque iste omnis rem in porro aliquid distinctio cupiditate nobis molestias.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque provident neque hic. Numquam adipisci rerum rem fuga, corrupti earum autem nostrum, iure alias cum vero enim magni atque neque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil velit quidem doloremque. Rem placeat enim deserunt voluptas, quia sapiente sunt, sit explicabo obcaecati numquam odit nulla delectus eum cumque.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid">
<h1 class="section-title">CONTACT</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-lg-5 column-leftx">
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Send</button>
  </div>
</form>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 column-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6388447258587!2d107.59549481431722!3d-6.933696869797304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8a1f740c043%3A0xbffeed547dd0525f!2sJl.%20Nyengseret%20Utara%2C%20Situsaeur%2C%20Kec.%20Bojongloa%20Kidul%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040234!5e0!3m2!1sid!2sid!4v1622174055833!5m2!1sid!2sid" width="580" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
</div>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>RIOT <span>MARKET</span></h3>

				<p class="footer-links">
					<a href="#" cl ass="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Riot Market © 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Jl. Nyengseret Utara</span> Bandung, Indonesia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+62812219393</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:gilangyouth666@riot.com">gilangyouth666@riot.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About Us</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>
</html>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>