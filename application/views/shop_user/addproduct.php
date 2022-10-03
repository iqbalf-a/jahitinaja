
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('shop_user'); ?>">Home</a></li>
            <li><a href="<?= base_url('shop_user/sell'); ?>">Jual</a></li>
						<li class="active">Tambah Produk</li>
        </ul>

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>Deskripsi produk</h1>
            <div class="content-form-page">
              <?= form_open_multipart('shop_user/addproduct', 'class="form-horizontal form-without-legend"'); ?>
								<div class="form-group">
									<label class="col-lg-2 control-label">Nama Penjahit</label>
									<div class="col-lg-8">
										<input type="text" class="form-control form-control-user" id="name" name="name" value="<?= set_value('name') ?>">
									</div>
								</div>

                <div class="form-group">
									<label class="col-lg-2 control-label">No. Telepon</label>
									<div class="col-lg-8">
										<input type="text" class="form-control form-control-user" id="number" name="number" value="<?= set_value('number') ?>" placeholder="6281234567890">
									</div>
								</div>

								<div class="form-group">
                  <label class="col-lg-2 control-label">Nama Produk</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="product_name" name="product_name" value="<?= set_value('product_name') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Kategori</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="category" name="category" value="<?= set_value('category') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Bahan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="material" name="material" value="<?= set_value('material') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" >Masukkan Gambar</label>
                  <div class="col-lg-8">
                    <input type="file"  id="product_img" name="product_img" value="<?= set_value('product_img') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Ukuran</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" id="size" name="size" value="<?= set_value('size') ?>">
                  </div>
                </div>

								<div class="form-group">
                  <label class="col-lg-2 control-label" for="last-name">Harga</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control form-control-user" placeholder="100.000 " id="price" name="price" value="<?= set_value('price') ?>">
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
                    <input class="btn btn-primary" type="submit" name="submit" value="OK">
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
