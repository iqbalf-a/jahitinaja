
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('shop_user'); ?>">Home</a></li>
            <li><a href="<?= base_url('shop_user/sell'); ?>">Jual</a></li>
						<li class="active">Ubah Produk</li>
        </ul>

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>Deskripsi produk</h1>
            <div class="content-form-page">
              <form role="form" method="post" class="form-horizontal form-without-legend" action="<?= base_url('shop_user/updateproduct'); ?>">

								<div class="form-group">
									<label class="col-lg-2 control-label">Nama Penjahit</label>
									<div class="col-lg-8">
										<input type="text" class="form-control form-control-user" id="name" name="name" value="<?= $product['name'] ?>">
									</div>
								</div>

								<div class="form-group">
                  <label class="col-lg-2 control-label">Nama Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="product_name" name="product_name" value="<?= $data2->product_name ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kategori</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="category" name="category" value="<?= $data2->category ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bahan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="material" name="material" value="<?= $data2->material ?>">
                  </div>
                </div>
                <?= form_open_multipart('shop_user/addproduct'); ?>
                <div class="form-group">
                  <label class="col-lg-2 control-label" >Masukkan Gambar</label>
                  <div class="col-lg-8">
                    <input type="file"  id="product_img" name="product_img" value="<?= $data2->product_img ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Ukuran</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="size" name="size" value="<?= $data2->size ?>">
                  </div>
                </div>

								<div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Harga</label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control form-control-user" placeholder="Contoh: 100.000 " id="price" name="price" value="<?= $data2->price ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="message">Deskripsi Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="description" name="description" value="<?= $data2->description ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">

                    <input class="btn btn-primary" type="submit" name="submit" value="ubah">
										<a href='<?= base_url('shop_user/sell'); ?>'><button class="btn btn-primary" type="button">Batal</button></a>
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
