<div class="main">
	<div class="container">
		<ul class="breadcrumb">
				<li><a href="<?= base_url('shop_user') ?>">Home</a></li>
				<li><a href="<?= base_url('shop_user/list_order') ?>">Daftar Pemesanan</a></li>
				<li class="active">Konfirmasi</li>
		</ul>
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40">
			<!-- BEGIN CONTENT -->
			<div class="col-md-12 col-sm-12">
				<h1>Konfirmasi Pemesanan</h1>
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
											<th class="checkout-image">Gambar</th>
											<th class="checkout-description">Deskripsi</th>
											<th class="checkout-model">Model</th>
											<th class="checkout-quantity">Jumlah</th>
											<th class="checkout-price">Harga</th>
											<th class="checkout-total">Total</th>
										</tr>
										<tr>
											<td class="checkout-image">
												<a href="javascript:;"><img src="<?= base_url(); ?>assets/img/products/contoh1.jpg" alt="Berry Lace Dress"></a>
											</td>
											<td class="checkout-description">
												<h3><a href="javascript:;">Kemeja Batik</a></h3>
												<p><strong>1 Item</strong> - 	Warna: Biru; Ukuran: M</p>

											</td>
											<td class="checkout-model">B.322</td>
											<td class="checkout-quantity">1</td>
											<td class="checkout-price"><strong><span>Rp.</span>300.000</strong></td>
											<td class="checkout-total"><strong><span>Rp.</span>300.000</strong></td>
										</tr>
									</table>
									<div class="checkout-total-block">
                        <ul>
                          <li>
                            <em>Sub total</em>
                            <strong class="price"><span>Rp.</span>300.000</strong>
                          </li>
                          <li>
                            <em>Biaya Pengiriman</em>
                            <strong class="price"><span>Rp.</span>30.000</strong>
                          </li>
                          <li class="checkout-total-price">
                            <em>Total</em>
                            <strong class="price"><span>Rp.</span>330.000</strong>
                          </li>
                        </ul>
                      </div>
											<div class="clearfix"></div>
											<a href="#"><button class="btn btn-primary pull-right" type="submit" id="button-confirm">Konfirmasi Pemesanan</button></a>
											<a href="<?= base_url('shop_user/list_order'); ?>">  <button type="button" class="btn btn-default pull-right margin-right-20">Batal</button>
	                    </a>
                    </div>
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
