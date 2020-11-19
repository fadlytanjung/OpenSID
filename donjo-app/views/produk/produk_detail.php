<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>Produk | Desa</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/product/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="<?=base_url()?>assets/product/images/logo.png" width="125px">
				</div>
				<nav>
					<ul id="Menu">
						<li><a href="<?=base_url()?>index.php/First/">Selamat Datang</a></li>
						<li><a href="<?=base_url()?>index.php/First/product">Produk</a></li>
						<li><a href="#">Tentang</a></li>
					</ul>
				</nav>
				<img src="https://image.flaticon.com/icons/png/512/126/126083.png" width="30px" height="30px">
				<img src="https://icons-for-free.com/iconfiles/png/512/menu+move+handle+order+icon-1320184295106417831.png" class="menu-icon" onclick="menuToggle()">
			</div>
		</div>

	<!-- Detail Produk -->

	<div class="s-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%" id="productImg">

				<div class="s-img-row">
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%" class="s-img">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%" class="s-img">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%" class="s-img">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%" class="s-img">
					</div>

				</div>
			</div>
			<div class="col-2">
				<p>Kategori Produk</p>
				<h1>Produk</h1>
				<h4>Rp. 100.000</h4>
				<select>
					<option>Jenis A</option>
					<option>Jenis B</option>
					<option>Jenis C</option>
				</select>
				<input type="number" name="" value="1">
				<a href="<?=base_url()?>index.php/First/product_cart" class="btn">Beli Produk</a>

				<h3>Detail Produk <i class="fa fa-info-circle"></i></h3>
				<br>
				<p>
					Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. 
				</p>
			</div>
		</div>
	</div>

	<!-- Title -->

	<div class="s-container">
		<div class="row row-2">
			<h2>Produk Serupa</h2>
			<p>Lihat Semua</p>
		</div>
	</div>

	<!-- Produk  -->

	<div class="s-container">
		
		<div class="row-p">
			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
				<h4>Produk 1</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p>Rp. 100.000</p>
			</div>

			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
				<h4>Produk 1</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p>Rp. 100.000</p>
			</div>

			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
				<h4>Produk 1</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p>Rp. 100.000</p>
			</div>

			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
				<h4>Produk 1</h4>
				<div class="rating">
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star" ></i>
					<i class="fa fa-star-half-o" ></i>
					<i class="fa fa-star-o" ></i>
				</div>
				<p>Rp. 100.000</p>
			</div>

		</div>
	</div>


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<hr>
			<p class="copyright">Copyright 2020</p>
		</div>
	</div>
<!-- Toggle Menu -->
	<script type="text/javascript">
		var Menu = document.getElementById("Menu");
		Menu.style.maxHeight = "0px";

		function menuToggle(){
			if(Menu.style.maxHeight == "0px"){
				Menu.style.maxHeight = "200px";
			}else{
				Menu.style.maxHeight = "0px";
			}
		}
	</script>

	<!-- Image Preview Detail Product -->

	<script type="text/javascript">
		var productImg = document.getElementById("productImg")
		var sImg = document.getElementsByClassName("s-img")

		sImg[0].onclick = function(){
			productImg.src = sImg[0].src
		}

		sImg[1].onclick = function(){
			productImg.src = sImg[1].src
		}

		sImg[2].onclick = function(){
			productImg.src = sImg[2].src
		}

		sImg[3].onclick = function(){
			productImg.src = sImg[3].src
		}
	</script>
</body>
</html>