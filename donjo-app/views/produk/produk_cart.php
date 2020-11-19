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

 <!-- cart detail items -->
 	<div class="s-container cart-page">
 		<table>
 			<tr>
 				<th>Produk</th>
 				<th>Jumlah</th>
 				<th>Subtotal</th>
 			</tr>
 			<tr>
 				<td>
 					<div class="cart-info">
 						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
 						<div>
 							<p>Lorem ipsum damed.lorem ipsum</p>
 							<small>Harga : Rp. 100.000</small>
 							<br>
 							<a href="">Remove</a>
 						</div>
 					</div>
 				</td>
 				<td><input type="number" name="" value="1"></td>
 				<td>Rp. 100.000</td>
 			</tr>

 			<tr>
 				<td>
 					<div class="cart-info">
 						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
 						<div>
 							<p>Lorem ipsum damed.lorem ipsum</p>
 							<small>Harga : Rp. 100.000</small>
 							<br>
 							<a href="">Remove</a>
 						</div>
 					</div>
 				</td>
 				<td><input type="number" name="" value="1"></td>
 				<td>Rp. 100.000</td>
 			</tr>

 			<tr>
 				<td>
 					<div class="cart-info">
 						<img src="https://images.unsplash.com/photo-1525904097878-94fb15835963?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
 						<div>
 							<p>Lorem ipsum damed.lorem ipsum</p>
 							<small>Harga : Rp. 100.000</small>
 							<br>
 							<a href="">Remove</a>
 						</div>
 					</div>
 				</td>
 				<td><input type="number" name="" value="1"></td>
 				<td>Rp. 100.000</td>
 			</tr>
 		</table>

 		<table>
 			<tr>
 				<td>
 					<p>Pilih Bank</p>
 				</td>
 				<td>
 					<input type="radio" name="">
 				</td>
 				<td>
 					<div class="bank-info">
 							<img src="https://image.psikolif.com/wp-content/uploads/2019/04/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png">
 						<div>
 							<p>Bank BRI</p>
 							<small>No. Rek : 091840918</small>
 						</div>
 					</div>

 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p></p>
 				</td>
 				<td>
 					<input type="radio" name="">
 				</td>
 				<td>
 					<div class="bank-info">
 							
 							<img src="https://image.psikolif.com/wp-content/uploads/2019/04/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png">
 						<div>
 							<p>Bank BRI</p>
 							<small>No. Rek : 091840918</small>
 						</div>
 					</div>

 				</td>
 			</tr>
 		</table>

 		<div class="total-price">
 			<table>
 				<tr>
 					<td>Subtotal</td>
 					<td>Rp. 100.000</td>
 				</tr>
 				<tr>
 					<td>Pajak</td>
 					<td>Rp. 100.000</td>
 				</tr>
 				<tr>
 					<td>Total</td>
 					<td>Rp. 100.000</td>
 				</tr>
 			</table>
 		</div>

 		<a href="" class="btn pesanan">Buat Pesanan</a>
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


</body>
</html>