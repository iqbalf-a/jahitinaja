<div class="main">
	<div class="container">
		<ul class="breadcrumb">
				<li><a href="<?= base_url('shop_user') ?>">Home</a></li>
				<li class="active">Daftar Pesan</li>
		</ul>
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40">
			<!-- BEGIN CONTENT -->
			<div class="col-md-12 col-sm-12">
        <a href="<?= base_url('shop_user'); ?>">
          <h1><button class="btn btn-primary" type="button" name="button">TAMBAH </button> </h1>
        </a>

				<!-- BEGIN CHECKOUT PAGE -->
				<div class="panel-group checkout-page accordion scrollable" id="checkout-page">
					<!-- BEGIN CONFIRM -->
					<div id="confirm" class="panel panel-default">
						<div class="panel-heading">
						</div>
						<div id="confirm-content" class="panel-collapse ">
							<div class="panel-body row">
								<div class="col-md-12 clearfix">
									<div class="table-wrapper-responsive">
									<table>
										<tr>
											<th class="checkout-model">#</th>
											<th class="checkout-description">NAMA PENJAHIT</th>
											<th class="checkout-description">PRODUK</th>
											<th class="checkout-image">GAMBAR</th>
											<th class="checkout-quantity">KATEGORI</th>
											<th class="checkout-price">BAHAN</th>
											<th class="checkout-total">UKURAN</th>
                      <th class="checkout-total">harga</th>
											<th class="checkout-Pilih">DESKRIPSI PRODUK</th>
											<th class="checkout-Pilih">STATUS</th>
                      <th class="checkout-Pilih">PILIH</th>
										</tr>

                    <?php $i = 1; ?>
                    <?php foreach ($list_buy as $lb) : ?>
										<tr>
                      <td class="checkout-model"> <?= $i ?> </td>
											<td class="checkout-model"> <?= $lb->tailor_name ?> </td>
                    	<td class="checkout-model"> <?= $lb->product_name ?> </td>
											<td class="checkout-image">
												<a href="#"><img src="<?= base_url('assets/img/products/'.$lb->product_img); ?>" alt="gambar produk"></a>
											</td>
											<td class="checkout"> <?= $lb->category ?> </td>
											<td class="checkout"> <?= $lb->material ?> </td>
											<td class="checkout"> <?= $lb->size ?> </td>
                      <td class="checkout"> RP. <?= $lb->price ?> </td>
    									<td class="checkout"> <?= $lb->description ?> </td>

	   									<td class="checkout">
												<?php if ($lb->status == 0){
													echo "Belum dipesan";?>
													<td class="checkout-pilih">
		                        <a href="<?= base_url('shop_user/confirmbuy/'.$lb->id); ?>"><button class="btn-primary" type="submit">Pesan</button></a>
														<a href="<?= base_url('shop_user/deletebuy/'.$lb->id); ?>" onclick="return checkdelete()">
														<button class="btn-primary" type="button">Hapus</button></a>
													</td>
												<?php }

												elseif ($lb->status == 1) {
													echo "Menunggu Konfirmasi";?>
													<td class="checkout-pilih">
		                        <a href="<?= base_url('shop_user/confirmbuy/'.$lb->id); ?>"><button class="btn-primary" type="submit">Batal</button></a>
													</td>
												<?php }

												elseif ($lb->status == 2){
													echo "Sudah dikonfirmasi";?>
													<td class="checkout-pilih">
		                        <a href="#" data-toggle="modal" data-target="#callModal"><button class="btn-primary" type="submit">Hubungi Penjahit</button></a>
														<a href="<?= base_url('shop_user/proof/'.$lb->id); ?>"><button class="btn-primary" type="submit">Selesai</button></a>
													</td>
												<?php };   ?>
											</td>
										</tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
									</table>
									<script language="javascript" type="text/javascript">
							    function checkdelete(){
							        return confirm('Apakah anda yakin menghapus produk ini?');
							    }
							    </script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END CONFIRM -->
				</div>
				<!-- END CHECKOUT PAGE -->
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END SIDEBAR & CONTENT -->
	</div>
</div>

<!-- call modal -->
<div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Hubungi Penjahit</h5>
		<button class="close" type="button" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
	<div class="modal-body">
		<h5>Nomor Handphone</h5>
	</div>
	<div class="modal-body checkout-price"> <strong> +<?= $user_seller['number'] ?> </strong> </div>
	<div class="modal-footer">
		<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
		<a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=<?= $user_seller['number'] ?>&text=Saya melihat produk <?=$lb->product_name ?> di situs Jahitin aja. Saya ingin memesannya.	"  target="_blank">Pesan melalui Whatsapp</a>
	</div>
</div>
</div>
</div>
