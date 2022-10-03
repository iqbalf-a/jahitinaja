<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-one active">

            </div>

            <!-- Second slide -->
            <div class="item carousel-item-two">
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-three">
            </div>

            <!-- Fourth slide -->
            <div class="item carousel-item-four">
               <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">Klik Disini!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- END SLIDER -->
<div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Produk</h2>
            <div class="owl-carousel owl-carousel5">
              <?php $i = 1; ?>
              <?php foreach ($menu as $lp) : ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?= base_url('assets/img/products/') . $lp['product_img'] ?>" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="<?= base_url('assets/img/products/') . $lp['product_img'] ?>" class="btn btn-default fancybox-button">Zoom</a>
                    </div>
                  </div>
                  <h3><a href="#"> <?= $lp['product_name']; ?> </a></h3>

                  <div class=""> Penjahit: <?= $lp['name'] ?> </div>
                  <div class="pi-price"> Rp. <?= $lp['price']; ?> </div>
                  <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>

          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Wanita</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Pria</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Batik</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Kemeja</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Jeans</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Celana Training</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Jas</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Jersey</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>Produk</h2>
            <div class="owl-carousel owl-carousel3">
              <div>
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="assets/img/products/jual3.png" class="img-responsive" alt="Berry Lace Dress">
                      <div>
                        <a href="assets/img/products/jual3.png" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Lihat</a>
                      </div>
                    </div>
                    <h3><a href="shop-item.html">Kemeja Batik.1</a></h3>
                    <div class="pi-price">Rp. 300.000</div>
                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                  </div>

                </div>
              </div>
              <div>
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="assets/img/products/jual4.png" class="img-responsive" alt="Berry Lace Dress">
                      <div>
                        <a href="assets/img/products/jual4.png" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Lihat</a>
                      </div>
                    </div>
                    <h3><a href="shop-item.html">Kemeja Batik</a></h3>
                    <div class="pi-price">Rp. 250.000</div>
                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                  </div>

                </div>
              </div>
              <div>
                <div>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="assets/img/products/jual5.png" class="img-responsive" alt="Berry Lace Dress">
                      <div>
                        <a href="assets/img/products/jual5.png" class="btn btn-default fancybox-button">Zoom</a>
                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Lihat</a>
                      </div>
                    </div>
                    <h3><a href="shop-item.html">Kemeja Batik</a></h3>
                    <div class="pi-price">Rp. 200.000</div>
                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                  </div>

                </div>
              </div>





            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">

                  <!-- BEGIN TWO PRODUCTS & PROMO -->
                  <div class="row margin-bottom-35 ">
                    <!-- BEGIN TWO PRODUCTS -->
                    <div class="col-md-6 two-items-bottom-items">
                      <h2>Produk</h2>
                      <div class="owl-carousel owl-carousel2">
                        <div>
                          <div class="product-item">
                            <div class="pi-img-wrapper">
                              <img src="assets/img/products/jual6.png" class="img-responsive" alt="Berry Lace Dress">
                              <div>
                                <a href="assets/img/products/jual6.png" class="btn btn-default fancybox-button">Zoom</a>
                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Lihat</a>
                              </div>
                            </div>
                            <h3><a href="shop-item.html">Rok Batik</a></h3>
                            <div class="pi-price">Rp. 100.000</div>
                            <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                          </div>
                        </div>
                        <div>
                          <div class="product-item">
                            <div class="pi-img-wrapper">
                              <img src="assets/img/products/jual7.png" class="img-responsive" alt="Berry Lace Dress">
                              <div>
                                <a href="assets/img/products/jual7.png" class="btn btn-default fancybox-button">Zoom</a>
                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Lihat</a>
                              </div>
                            </div>
                            <h3><a href="shop-item.html">Rok Batik</a></h3>
                            <div class="pi-price">Rp. 150.000</div>
                            <a href="<?= base_url('auth/login'); ?>" class="btn btn-default add2cart">Tambah</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END TWO PRODUCTS -->
                      <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="assets/img/index-sliders/jahitinaja5.png" class="img-responsive" alt="slide1">
                  </div>
                  <div class="item">
                    <img src="assets/img/index-sliders/jahitinaja6.png" class="img-responsive" alt="slide2">
                  </div>
                  <div class="item">
                    <img src="assets/img/index-sliders/jahitinaja7.png" class="img-responsive" alt="slide3">
                  </div>
                  <div class="item">
                    <img src="assets/img/index-sliders/jahitinaja8.png" class="img-responsive" alt="slide4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->
        </div>
      </div>
        <!-- END TWO PRODUCTS & PROMO -->
      </div>
    </div>
