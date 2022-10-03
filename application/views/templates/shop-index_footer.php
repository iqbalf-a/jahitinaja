<!-- BEGIN fast view of a product -->
<div id="product-pop-up" style="display: none; width: 700px;">
        <div class="product-page product-pop-up">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-3">
              <div class="product-main-image">
                <img src="assets/img/products/contoh1.jpg" alt="Cool green dress with red bell" class="img-responsive">
              </div>
              <div class="product-other-images">
                <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/img/products/contoh1.jpg"></a>
                <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/img/products/contoh1.jpg"></a>
                <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/img/products/contoh1.jpg"></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-9">
              <h2>Kemeja Batik</h2>
              <div class="price-availability-block clearfix">
                <div class="price">
                  <strong><span>Rp.</span>75.000</strong>
                  <em>Rp.<span>300.000</span></em>
                </div>
                <div class="availability">
                  Tersedia: <strong>50</strong>
                </div>
              </div>
              <div class="description">
                <p>Kemeja Batik kece murah</p>
              </div>
              <div class="product-page-options">
                <div class="pull-left">
                  <label class="control-label">Ukuran:</label>
                  <select class="form-control input-sm">
                    <option>S</option>
                    <option>L</option>
                    <option>M</option>
                    <option>XL</option>
                  </select>
                </div>
              <!--  <div class="pull-left">
                  <label class="control-label">Warna:</label>
                  <select class="form-control input-sm">
                    <option>Red</option>
                    <option>Blue</option>
                    <option>Black</option>
                  </select>
                </div> -->
              </div>
              <div class="product-page-cart">
                <div class="product-quantity">
                    <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                </div>
                <button class="btn btn-primary" type="submit">Tambah</button>
                <a href="#" class="btn btn-default">Detail</a>
              </div>
            </div>

            <div class="sticker sticker-sale"></div>
          </div>
        </div>
</div>
<!-- END fast view of a product -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- <script src="<?= base_url('assets/shop/'); ?>assets/corporate/scripts/back-to-top.js" type="text/javascript"></script> -->
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
<script src='<?= base_url('assets/shop/'); ?>assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="<?= base_url('assets/shop/'); ?>assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

<script src="<?= base_url('assets/shop/'); ?>assets/corporate/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url('assets/shop/'); ?>assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initTwitter();

        Layout.initFixHeaderWithPreHeader();
        Layout.initNavScrolling();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
