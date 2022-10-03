<div class="main">
	<div class="container">
		<ul class="breadcrumb">
				<li><a href="<?= base_url('shop_user') ?>">Home</a></li>
				<li class="active">Jual</li>
		</ul>
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40">
			<!-- BEGIN CONTENT -->
			<div class="col-md-12 col-sm-12">
        <a href="<?= base_url('shop_user/addproduct'); ?>">
          <h1><button class="btn btn-primary" type="button" name="button">TAMBAH PRODUK</button> </h1>
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
											<th class="checkout-image">Id Produk</th>
											<th class="checkout-description">NAMA</th>
											<th class="checkout-model">GAMBAR</th>
											<th class="checkout-quantity">KATEGORI</th>
											<th class="checkout-price">BAHAN</th>
											<th class="checkout-total">UKURAN</th>
                      <th class="checkout-total">harga</th>
											<th class="checkout-Pilih">DESKRIPSI PRODUK</th>
                      <th class="checkout-Pilih">PILIH</th>
										</tr>

                    <?php $i = 1; ?>
                    <?php foreach ($list_sell as $ls) : ?>
										<tr>
                      <td class="checkout-description"> <?= $ls->id ?> </td>
                    	<td class="checkout-model"> <?= $ls->product_name ?> </td>
											<td class="checkout-image">
												<a href="#"><img src="<?= base_url('assets/img/products/'.$ls->product_img); ?>" alt="Berry Lace Dress"></a>
											</td>
											<td class="checkout"> <?= $ls->category ?> </td>
											<td class="checkout"> <?= $ls->material ?> </td>
											<td class="checkout"> <?= $ls->size ?> </td>
                      <td class="checkout"> RP. <?= $ls->price ?> </td>
    									<td class="checkout"> <?= $ls->description ?> </td>
											<td class="checkout-pilih">
                        <a href="#"><button class="btn-primary" type="submit">Edit</button></a>
                        <a href="<?= base_url('shop_user/deleteproduct/'.$ls->id); ?>" onclick="return checkdelete()">
                        <button class="btn-primary" type="button">Hapus</button></a>
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
