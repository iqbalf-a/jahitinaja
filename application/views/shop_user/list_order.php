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
				<h1>KONFIRMASI PEMESANAN</h1>
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
											<th class="checkout-description">ID PRODUK</th>
											<th class="checkout-description">NAMA PEMESAN</th>
											<th class="checkout-description">PRODUK</th>
											<th class="checkout-image">GAMBAR</th>
											<th class="checkout-total">UKURAN</th>
                      <th class="checkout-total">HARGA</th>
                      <th class="checkout-total">STATUS</th>
                      <th class="checkout-Pilih">PILIH</th>
										</tr>

                    <?php $i = 1; ?>
                    <?php foreach ($user_buy as $ub) : ?>
										<tr>
                      <td class="checkout-model"> <?= $i ?> </td>
											<td class="checkout-model"> <?= $ub->id_product; ?> </td>
											<td class="checkout-model"> <?= $user_name['name']; ?> </td>
                    	<td class="checkout-model"> <?= $ub->product_name ?> </td>
											<td class="checkout-image">
												<a href="#"><img src="<?= base_url('assets/img/products/'.$ub->product_img); ?>" alt="gambar produk"></a>
											</td>
											<td class="checkout"> <?= $ub->size ?> </td>
											<td class="checkout"> Rp. <?= $ub->price ?> </td>
	   									<td class="checkout">
												<?php if ($ub->status == 1){
													echo "Belum dikonfirmasi";?>
													<td class="checkout-pilih">
		                        <a href="<?= base_url('shop_user/confirmbuy2/'.$ub->id); ?>"><button class="btn-primary" type="submit">Konfirmasi</button></a>
														<a href="#" onclick="return checkdelete()">
														<button class="btn-primary" type="button">Batalkan Konfirmasi</button></a>
													</td>
												<?php }elseif ($ub->status == 2) {
													echo "Sudah dikonfirmasi";?>
													<td class="checkout-pilih">
		                        <a href="#"><button class="btn-primary" type="submit">Menunggu pembeli</button></a>
													</td>
												<?php };
											 ?></td>

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
