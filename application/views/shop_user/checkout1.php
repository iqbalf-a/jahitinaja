
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('shop_user'); ?>">Home</a></li>
						<li class="active">Checkout</li>
        </ul>

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">

            <div class="content-form-page">
              <form role="form" method="post" class="form-horizontal form-without-legend" action="<?= base_url('shop_user/addproduct'); ?>">
								<div class="form-group">
									<label class="col-lg-2 control-label">Id Produk</label>
									<div class="col-lg-8">
										<input type="text" placeholder="Id produk tertera pada gambar" class="form-control form-control-user" id="product_name" name="product_name" value="<?= set_value('product_name') ?>">
									</div>
								</div>

								<div class="form-group">
                  <label class="col-lg-2 control-label">Nama Pemesan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="product_name" name="product_name" value="<?= set_value('product_name') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="category" name="category" value="<?= $user['email']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Alamat</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="material" name="material" value="<?= set_value('material') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Phone</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="size" name="size" placeholder="Contoh: 081234567890"value="<?= set_value('size') ?>">
                  </div>
                </div>

								<div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Batas Pengiriman</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" placeholder="YYYY-MM-DD Contoh: 2019-05-01" id="price" name="price" value="<?= set_value('price') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="message">Deskripsi Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="description" name="description" value="<?= set_value('description') ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                    <button class="btn btn-primary" type="submit">OK	</button>
										<a href='<?= base_url('shop_user'); ?>'><button class="btn btn-primary" type="button">Batal</button></a>
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
