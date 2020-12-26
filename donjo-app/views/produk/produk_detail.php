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

		<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
  <span class="close">&times;</span>
 

<div class="card">
<h2 style="text-align:center">Penjual</h2>
<?php if($produk[0]['poto'] != null || $produk[0]['poto'] != ""){?>
  <img src="<?=base_url()?>assets/product/images/penjual/<?=$produk[0]['poto']?>" alt="Poto penjual" style="width:100%">
<?php }else{?>
  <img src="<?=base_url()?>assets/product/images/penjual/profile.png" alt="Poto penjual" style="width:100%">
<?php }?>
  <h1>
  <?php 
		if($produk[0]['namapenjual'] != null || $produk[0]['namapenjual']  != ""){
			echo $produk[0]['namapenjual']; 
		}else{
			echo "Pengguna";
		}
	?> 
</h1>
  <p class="title"> <i class="fa fa-phone" aria-hidden="true"></i>  <?php 
		if($produk[0]['nomortelpon'] != null || $produk[0]['nomortelpon']  != ""){
			echo $produk[0]['nomortelpon']; 
		}else{
			echo "Nomor telepon belum ada";
		}
	?> 
	</p> 
  
  <p><i class="fa fa-envelope" aria-hidden="true"></i> 
  <?php 
		if($produk[0]['email'] != null || $produk[0]['email']  != ""){
			echo $produk[0]['email']; 
		}else{
			echo "Email belum ada";
		}
	?> 
	</p>
  <p><i class="fa fa-map-marker" aria-hidden="true"></i>
  
  <?php 
		if($produk[0]['alamat'] != null || $produk[0]['alamat']  != ""){
			echo $produk[0]['alamat']; 
		}else{
			echo "Alamat belum ada";
		}
	?> </p>
  <!-- <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div> -->
  <br>
  <p>
		<?php if($produk[0]['nomorwa'] != null || $produk[0]['nomorwa']  != ""){?>	  
			<a href="https://api.whatsapp.com/send?phone=<?=$produk[0]['nomorwa']?>&text=Hallo%20Pak/Buk%20<?= $produk[0]	['namapenjual']?>%20Saya%20ingin%20membeli%20produk%20<?= $produk[0]['nama']?>.%20Bolehkah%20saya%20bertanya?" class="button"> <i class="fa fa-whatsapp" aria-hidden="true"></i> Chat WhatsApp</a></p>
		<?php }else{?>
			<a href="" class="button" > <i class="fa fa-whatsapp" aria-hidden="true" style="pointer-events: none"></i> Chat WhatsApp</a></p>
		<?php }?>
</div>

</div>


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
				<!-- <img src="https://image.flaticon.com/icons/png/512/126/126083.png" width="30px" height="30px"> -->
				<img src="https://icons-for-free.com/iconfiles/png/512/menu+move+handle+order+icon-1320184295106417831.png" class="menu-icon" onclick="menuToggle()">
			</div>
		</div>

	<!-- Detail Produk -->

	<div class="s-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="<?=base_url()?>assets/product/images/<?=$produk[0]['gambar']?>" height="500px" width="100%" id="productImg">

				<div class="s-img-row">
					<!-- <div class="s-img-col">
						<img src="<?=base_url()?>assets/product/images/<?=$produk[0]['gambar']?>" width="100%"   class="s-img" onclick="imagePrev(this)">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%"  onclick="imagePrev(this)"  class="s-img">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%"  onclick="imagePrev(this)"  class="s-img">
					</div>
					<div class="s-img-col">
						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%"  onclick="imagePrev(this)"  class="s-img">
					</div> -->

				</div>
			</div>
			<div class="col-2">
				<p><?= $produk[0]['kategori']?></p>
				<h1><?= $produk[0]['nama']?></h1>
				<h4><?= rupiah($produk[0]['harga'])?> / <?= $produk[0]['satuan']?></h4>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Medan, Sumatera Utara</p>
				<!-- <input type="number" name="" value="1"> -->
				<h3>Detail Produk <i class="fa fa-info-circle"></i></h3>
				<br>
				<p>
					<?=$produk[0]['deskripsi']?>
				</p>
				<hr>
						<br>
						<div class="p-row">
							<p><b>Penjual</b></p>
						</div>
						<div class="p-row">
							
						<?php if($produk[0]['poto'] != null || $produk[0]['poto'] != ""){?>
						<img src="<?=base_url()?>assets/product/images/penjual/<?=$produk[0]['poto']?>" alt="Poto penjual">
						<?php }else{?>
						<img src="<?=base_url()?>assets/product/images/penjual/profile.png" alt="Poto penjual">
						<?php }?>
							<p> <?php 
								if($produk[0]['namapenjual'] != null || $produk[0]['namapenjual']  != ""){
									echo $produk[0]['namapenjual']; 
								}else{
									echo "Pengguna";
								}
							?> </p>
						</div>
						<div class="p-row">
							<a href="#" id="myBtn" class="btn">Kontak Penjual</a>
						</div>
			</div>
		</div>
	</div>

	<!-- Title -->

	<div class="s-container">
		<div class="row row-2">
			<h2>Produk Serupa</h2>
			<!-- <p>Lihat Semua</p> -->
		</div>
	</div>

	<!-- Produk  -->

	<div class="s-container">
		
		<div class="row-p">

		<?php foreach($produk_serupa as $item){?>
			<div class="col-4">
				<a href="<?=base_url()?>index.php/First/product_detail/<?=$item['id']?>">
					<img src="<?=base_url()?>assets/product/images/<?=$item['gambar']?>">
					<h4><?= $item['nama']?></h4>
					<div class="rating">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<i class="fa fa-star-o" ></i>
					</div>
					<p><?= rupiah($item['harga'])?></p>
				</a>
			</div>
		<?php }?>
			

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
		// var productImg = document.getElementById("productImg")
		// var sImg = document.getElementsByClassName("s-img")

		
		// for(var i=0; i< sImg.length; i++){	
		// 	sImg[i].onclick = function(d){
		// 		console.log(d)
		// 		productImg.src = sImg[0].src
		// 	}
		// }

		function imagePrev(d){
			var productImg = document.getElementById("productImg")
			var sImg = document.getElementsByClassName("s-img")

			productImg.src = d.src
		}
	</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>