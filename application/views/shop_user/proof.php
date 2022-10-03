
    <div class="main">
      <div class="container ">


        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>Bukti Transaksi</h1>
            <div class="content-form-page">
              <form role="form" method="post" class="form-horizontal form-without-legend" action="#">
								<div class="form-group">
									<label class="col-lg-2 control-label">Nama Pembeli</label>
									<div class="col-lg-8">
										<input type="text" class="form-control form-control-user" id="name" name="name" value="<?= $buyername['name'] ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Nama Penjahit</label>
									<div class="col-lg-8">
										<input type="text" class="form-control form-control-user" id="name" name="name" value="<?= $product['name'] ?>" readonly>
									</div>
								</div>

								<div class="form-group">
                  <label class="col-lg-2 control-label">Nama Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="product_name" name="product_name" value="<?= $product['product_name'] ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kategori</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="category" name="category" value="<?= $product['category'] ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bahan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="material" name="material" value="<?= $product['material'] ?>" readonly>
                  </div>
                </div>
                <?= form_open_multipart('shop_user/addproduct'); ?>
                <div class="form-group">
                  <label class="col-lg-2 control-label" >Gambar</label>
                  <div class="col-lg-8">
										<img height="200px"src="<?= base_url('assets/img/products/'.$product['product_img']); ?>" alt="Berry Lace Dress">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Ukuran</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="size" name="size" value="<?= $product['size'] ?>" readonly>
                  </div>
                </div>

								<div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Harga</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" placeholder="Contoh: 100.000 " id="price" name="price" value="Rp. <?= $product['price'] ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="message">Deskripsi Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="description" name="description" value="<?= $product['description'] ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20 d-print-none">
										<button type="submit" class="btn btn-primary d-print-none" onclick="window.print()" name="button"> Cetak Bukti Transaksi </button>
										<a href='<?= base_url('shop_user/deletebuy/'.$buyer['id']); ?>'><button class="btn btn-primary" type="button">Selesai</button></a>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
