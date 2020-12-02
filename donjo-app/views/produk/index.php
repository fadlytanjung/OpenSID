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
						<li><a href="<?=base_url()?>">Selamat Datang</a></li>
						<li><a href="<?=base_url()?>index.php/First/product">Produk</a></li>
						<li><a href="<?=base_url()?>">Tentang</a></li>
					</ul>
				</nav>
				<!-- <img src="https://image.flaticon.com/icons/png/512/126/126083.png" width="30px" height="30px"> -->
				<img src="https://icons-for-free.com/iconfiles/png/512/menu+move+handle+order+icon-1320184295106417831.png" class="menu-icon" onclick="menuToggle()">
			</div>
		</div>

	<!-- Produk  -->

	<div class="s-container">
		<div class="row row-2">
			<h2>Semua Produk</h2>
			<select>
				<option>Semua Produk</option>
				<option>Kategori 1</option>
				<option>Kategori 2</option>
			</select>
		</div>
		<div class="row-p">
		<?php foreach($main as $item){?>
				
					<div class="col-4">
						<a href="<?=base_url()?>index.php/First/product_detail/<?=$item['id']?>">
							<img src="<?=base_url()?>assets/product/images/<?=$item['gambar']?>">
							<h4><?=$item['nama']?></h4>
							<div class="rating">
								<?php for($i = 0; $i<$item['rating']; $i++){?>
									<i class="fa fa-star" ></i>
								<?php $i++;}?>
							</div>
							<p><b><?=rupiah($item['harga'])?> / <?=@$item['satuan'] ?> </b></p>
							<br>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> Medan, Sumatera Utara</p>
						</a>
					</div>
        <?php }?>
		</div>

		<div class="page-btn">
			<!-- <span class="active">1</span>
			<span>2</span>
			<span>3</span>
            <span>&#8594;</span> -->
			<?php if ($paging->prev): ?>
				<a href="<?= site_url("$this->controller/$func/$paging->prev"); ?>" aria-label="Previous"><span aria-hidden="true">&#8592;</span></a>
            <?php endif; ?>
			<?php for ($i=$paging->start_link; $i<=$paging->end_link; $i++): ?>
				<a href="<?= ($i == 1) ? site_url("$this->controller/product/") : site_url("$this->controller/$func/$i"); ?>"><span <?= jecho($paging->page, $i, "class='active'"); ?>><?= $i; ?></span></a>
			<?php endfor; ?>
			<?php if ($paging->next): ?>
				<a href="<?= site_url("$this->controller/$func/$paging->next"); ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
			<?php endif; ?>
			<?php if ($paging->end_link): ?>
				<a href="<?=site_url("$this->controller/$func/$paging->end_link"); jecho($paging->page, $paging->end_link, "#"); ?>" aria-label="Last"><span aria-hidden="true">&#8594;</span></a>
			<?php endif; ?>
        </div>

	</div>


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<hr>
			<p class="copyright">Copyright 2020</p>
		</div>
	</div>

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