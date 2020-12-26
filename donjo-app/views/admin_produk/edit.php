<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
<script>
$(document).ready(function() {
	$('#file_browser5').click(function(e)
	{
		e.preventDefault();
		$('#file5').click();
	});

	$('#file5').change(function()
	{
		$('#file_path5').val($(this).val());
	});

	$('#file_path5').click(function()
	{
		$('#file_browser5').click();
	});


	$('#file_browser6').click(function(e)
	{
		e.preventDefault();
		$('#file6').click();
	});

	$('#file6').change(function()
	{
		$('#file_path6').val($(this).val());
	});

	$('#file_path6').click(function()
	{
		$('#file_browser6').click();
	});
});

</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit Produk</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=site_url('produk')?>"> Daftar Produk</a></li>
			<li class="active">Edit Produk</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="box box-info">
			<div class="box-header with-border">
				<a href="<?=site_url('produk')?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Produk</a>
			</div>
			<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
				<div class="box-body">
					<?php $cid = @$_REQUEST["cid"]; ?>
					<label class="col-sm-3 control-label">Produk</label>
					<hr>
					<div class="form-group">
						<label class="col-sm-3 control-label">Kategori Produk</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="kategori" id="cid">
								<option value="">Pilih Kategori <?= $cid; ?></option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Kebun"){echo "selected";}?>>Kategori Kebun</option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Laut"){echo "selected";}?>>Kategori Laut</option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Bercocok Tanam"){echo "selected";}?>>Kategori Bercocok Tanam</option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Kerajinan Tangan"){echo "selected";}?>>Kategori Kerajinan Tangan</option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Kerajinan Ternak"){echo "selected";}?>>Kategori Ternak</option>
								<option <?php if ($produk[0]['kategori'] == "Kategori Kerajinan Unggas"){echo "selected";}?>>Kategori Unggas</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nama Produk</label>
						<div class="col-sm-8">
							<input name="nama" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nama Produk"  value="<?= $produk[0]['nama'] ?>" type="text"></input>
						</div>
					</div>
                    <div class="form-group">
						<label class="control-label col-sm-3" for="harga">Harga Produk Per Satuan</label>
						<div class="col-sm-8">
							<input name="harga" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Harga Produk" value="<?= $produk[0]['harga'] ?>"  type="number"></input>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Satuan Produk</label>
						<div class="col-sm-8">
							<input name="satuan" class="form-control input-sm required" maxlength="100" placeholder="satuan Produk" value="<?= $produk[0]['satuan'] ?>"  type="text"></input>
						</div>
					</div>

                    <div class="form-group">
						<label class="control-label col-sm-3" for="harga">Jenis</label>
						<div class="col-sm-8">
							<input name="jenis" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Jenis Produk" value="<?= $produk[0]['jenis'] ?>"  type="text"></input>
						</div>
					</div>

                    <div class="form-group">
						<label class="control-label col-sm-3" for="gambar">Gambar Tampil</label>
						<div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" id="file_path5" >
                                    <input type="file" class="hidden" id="file5" name="gambar">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" id="file_browser5"><i class="fa fa-search"></i> Browse</button>
                                    </span>
                                </div>
						</div>
					</div>


                    <div class="form-group">
						<label class="col-sm-3 control-label">Rating</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="rating" id="cid">
								<option value="">Pilih Rating <?= $cid; ?></option>
								<option <?php if ($produk[0]['rating'] == "1"){echo "selected";}?>>1</option>
								<option <?php if ($produk[0]['rating'] == "2"){echo "selected";}?>>2</option>
								<option <?php if ($produk[0]['rating'] == "3"){echo "selected";}?>>3</option>
								<option <?php if ($produk[0]['rating'] == "4"){echo "selected";}?>>4</option>
								<option <?php if ($produk[0]['rating'] == "5"){echo "selected";}?>>5</option>
							</select>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-sm-3 control-label" for="ndesc">Deskripsi Produk</label>
						<div class="col-sm-8">
							<textarea id="ndesc" name="dekripsi" class="form-control input-sm required" placeholder="Isi Deskripsi" rows="8"><?= $produk[0]['deskripsi'] ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="status">Status</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="status" id="status">
								<option value="1">Aktif</option>
								<option value="0">Tidak Aktif</option>
								<!-- Default Value Aktif -->
							</select>
						</div>
					</div>


					<label class="col-sm-3 control-label">Penjual</label>
					<hr>
					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nama Penjual</label>
						<div class="col-sm-8">
							<input name="namapenjual" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nama Penjual" value="<?= $produk[0]['namapenjual'] ?>" type="text"></input>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nomor Telepon</label>
						<div class="col-sm-8">
							<input name="nomortelpon" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nomor Telephone" value="<?= $produk[0]['nomortelpon'] ?>" type="number"></input>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nomor WhatsApp</label>
						<div class="col-sm-8">
							<input name="nomorwa" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="contoh format inputan : 62852xxxxxxxx" value="<?= $produk[0]['nomorwa'] ?>" type="number"></input>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="email">Email</label>
						<div class="col-sm-8">
							<input name="email" class="form-control input-sm " maxlength="100" value="<?= $produk[0]['email'] ?>" placeholder="Email"  type="email"></input>
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-3 control-label" for="ndesc">Alamat Penjual</label>
						<div class="col-sm-8">
							<textarea id="ndesc" name="alamat" class="form-control input-sm required" placeholder="Alamat Penjual" rows="8"><?= $produk[0]['alamat'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="poto">Poto Penjual</label>
						<div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" id="file_path6" >
                                    <input type="file" class="hidden" id="file6" name="poto">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" id="file_browser6"><i class="fa fa-search"></i> Browse</button>
                                    </span>
                                </div>
						</div>
					</div>
				</div>
				<div class='box-footer'>
					<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
					<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
				</div>
			</form>
		</div>
	</section>
</div>

