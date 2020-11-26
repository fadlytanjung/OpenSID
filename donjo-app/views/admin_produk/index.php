
<div class="content-wrapper">
	<section class="content-header">
		<h1>Daftar Produk</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Daftar Produk</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url('produk/create')?>" class="btn btn-social btn-flat bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Program Bantuan Baru"><i class="fa fa-plus"></i> Tambah Produk</a>
						<a href="<?=site_url('program_bantuan/panduan')?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Program Bantuan Baru"><i class="fa fa-question-circle"></i> Panduan</a>
						<?php if ($tampil != 0): ?>
							<a href="<?=site_url('program_bantuan')?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Produk</a>
						<?php endif; ?>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<div class="row">
										<div class="col-sm-9">
											<form id="mainform" name="mainform" action="" method="post">
												<select class="form-control input-sm" name="sasaran" onchange="formAction('mainform', '<?=site_url('program_bantuan/filter/sasaran')?>')">
													<option value="">Pilih Kategori</option>
													<?php foreach ($list_sasaran AS $key => $value): ?>
														<option value="<?= $key; ?>" <?= selected($set_sasaran, $key); ?>><?= $value?></option>
													<?php endforeach; ?>
												</select>
											</form>
										</div>
										<div class="col-sm-12">
											<div class="table-responsive">
												<table class="table table-bordered table-striped dataTable table-hover" id="table-produk">
													<thead class="bg-gray disabled color-palette">
														<tr>
															<th width="1%">No</th>
															<th width="5%">Aksi</th>
															<th>Kategori</th>
															<th>Nama Produk</th>
															<th>Harga</th>
															<th>Jenis</th>
															<th>Rating</th>
															<th>Gambar</th>
															<th>Galeri</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<?php $nomer = $paging->offset; ?>
														<?php foreach ($main as $item): ?>
															<?php $nomer++; ?>
															<tr>
																<td class="text-center"><?= $nomer?></td>
																<td nowrap>
																	<a href="<?= site_url("produk/detail/$item[id]")?>" class="btn bg-purple btn-flat btn-sm"  title="Rincian"><i class="fa fa-list"></i></a>
																	<a href="<?= site_url("produk/edit/$item[id]")?>" class="btn bg-orange btn-flat btn-sm"  title="Ubah"><i class="fa fa-edit"></i></a>
																	<?php if ($item['jml_peserta'] != 0): ?>
																		<a href="#" class="btn bg-maroon btn-flat btn-sm disabled"  title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	<?php endif ?>
																	<?php if ($item['jml_peserta'] == 0): ?>
																		<a href="#" data-href="<?= site_url("produk/hapus/$item[id]")?>" class="btn bg-maroon btn-flat btn-sm"  title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	<?php endif ?>
																</td>
																<td nowrap><a href="<?= site_url("produk/detail/$item[id]")?>"><?= $item["kategori"] ?></a></td>
																<td><?= $item['nama']?></td>
																<td><?= $item['harga']?></td>
																<td><?= $item['jenis']?></td>
																<td><?= $item['rating']?></td>
																<td>
																<div class="user-panel">
																			<div class="image2">
																				<?php if ($item['gambar']): ?>
																					<img src="<?= base_url()?>assets/product/images/<?= $item['gambar']?>" class="img-circle" alt="Product Image"/>
																				<?php else: ?>
																					<p>Gambar belum diupload</p>
																				<?php endif ?>
																			</div>
																		</div>
																
																</td>
																<td><?= $item['galeri']?></td>
																<td><?= $item['status'] ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<?php $this->load->view('global/paging');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('global/confirm_delete');?>
