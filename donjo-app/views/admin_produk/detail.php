<script>
	$(function() {
		var keyword = <?= $keyword != '' ? $keyword : '""' ?> ;
		$("#cari").autocomplete( {
			source: keyword,
			maxShowItems: 10,
		});
	});
</script>
<?php
    $detail = $produk[0];

?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Produk <?= $detail['nama']; ?></h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('produk')?>"> Daftar Produk</a></li>
			<li class="active">Produk <?= $detail['nama']; ?></li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="box box-info">
			<div class="box-header with-border">
				
				<a href="<?= site_url('produk')?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Produk
				</a>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-sm-12">
						<input type="hidden" id="program_id" name="program_id" value="<?= $detail['id']?>">
						<h5><b>Rincian Produk</b></h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover tabel-rincian">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Kategori Produk</td>
                                            <td width="1">:</td>
                                            <td><?= strtoupper($detail["kategori"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Nama Produk</td>
                                            <td width="1">:</td>
                                            <td><?= strtoupper($detail["nama"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Produk</td>
                                            <td> : </td>
                                            <td><?= $detail["jenis"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Produk</td>
                                            <td> : </td>
                                            <td><?php echo rupiah($detail["harga"]);?> / <?= $detail["satuan"] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td> : </td>
                                            <td><?= $detail["deskripsi"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td> : </td>
                                            <td><?= $detail["status"] == 0 ? "Tidak Aktif":"Aktif"?></td>
                                        </tr>
                                        <tr>
                                            <td>Gambar</td>
                                            <td> : </td>
                                            <td><img width="200px" height="200px" src="<?=base_url()?>assets/product/images/<?= $detail["gambar"]?>" alt="Produk"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h5><b>Penjual</b></h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover tabel-rincian">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Nama Penjual</td>
                                            <td width="1">:</td>
                                            <td><?= strtoupper($detail["namapenjual"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td width="20%">Nomor Telepon</td>
                                            <td width="1">:</td>
                                            <td><?= strtoupper($detail["nomortelpon"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor WhatsApp</td>
                                            <td> : </td>
                                            <td><?= $detail["nomorwa"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td> : </td>
                                            <td><?php echo $detail["email"];?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : </td>
                                            <td><?= $detail["alamat"]?></td>
                                        </tr>
                                        <tr>
                                            <td>Poto Profil </td>
                                            <td> : </td>
                                            <td><img width="200px" height="200px" src="<?=base_url()?>assets/product/images/penjual/<?= $detail["poto"]?>" alt="Penjual"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('global/confirm_delete');?>
