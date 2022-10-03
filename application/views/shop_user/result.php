<div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Hasil pencarian</h2>
            <div class="owl-carousel owl-carousel5">
              <?php $i = 1; ?>
              <?php foreach ($all_products as $ap) : ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?= base_url('assets/img/products/').$ap->product_img  ?>" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="<?= base_url('assets/img/products/').$ap->product_img ?>" class="btn btn-default fancybox-button">Zoom</a>
                    </div>
                  </div>
                  <h3><a href="#"> <?= $ap->product_name ?> </a></h3>
                  <div class=""> Penjahit: <?= $ap->name ?> </div>
                  <div class="pi-price"> Rp. <?= $ap->price ?> </div>
                  <a href="<?= base_url('shop_user/detailproduct/').$ap->id ?>" class="btn btn-default add2cart">Detail</a>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>

          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

      </div>
    </div>
	</div>
