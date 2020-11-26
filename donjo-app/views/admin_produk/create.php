<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Tambah Produk</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=site_url('produk')?>"> Daftar Produk</a></li>
			<li class="active">Tambah Produk</li>
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
					<div class="form-group">
						<label class="col-sm-3 control-label">Kategori Produk</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="kategori" id="cid">
								<option value="">Pilih Kategori <?= $cid; ?></option>
								<option>Kategori A</option>
								<option>Kategori B</option>
								<option>Kategori C</option>
								<option>Kategori D</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nama Produk</label>
						<div class="col-sm-8">
							<input name="nama" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nama Produk"  type="text"></input>
						</div>
					</div>
                    <div class="form-group">
						<label class="control-label col-sm-3" for="harga">Harga Produk</label>
						<div class="col-sm-8">
							<input name="harga" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Harga Produk"  type="number"></input>
						</div>
					</div>
                    <div class="form-group">
						<label class="control-label col-sm-3" for="harga">Jenis</label>
						<div class="col-sm-8">
							<input name="jenis" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Jenis Produk"  type="text"></input>
						</div>
					</div>

                    <div class="form-group">
						<label class="control-label col-sm-3" for="gambar">Gambar Tampil</label>
						<div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" id="file_path" >
                                    <input type="file" class="hidden" id="file" name="gambar">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
                                    </span>
                                </div>
						</div>
					</div>


                    <div class="form-group">
						<label class="col-sm-3 control-label">Rating</label>
						<div class="col-sm-3">
							<select class="form-control input-sm required" name="rating" id="cid">
								<option value="">Pilih Rating <?= $cid; ?></option>
								<option value="1" <?php selected($cid, 1); ?>>1</option>
								<option value="2" <?php selected($cid, 2); ?>>2</option>
								<option value="3" <?php selected($cid, 3); ?>>3</option>
								<option value="4" <?php selected($cid, 4); ?>>4</option>
								<option value="5" <?php selected($cid, 5); ?>>5</option>
							</select>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-sm-3 control-label" for="ndesc">Deskripsi Produk</label>
						<div class="col-sm-8">
							<textarea id="ndesc" name="dekripsi" class="form-control input-sm required" placeholder="Isi Deskripsi" rows="8"></textarea>
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
				</div>
				<div class='box-footer'>
					<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
					<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
				</div>
			</form>
		</div>
	</section>
</div>

