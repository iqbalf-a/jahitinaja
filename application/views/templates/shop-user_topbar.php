<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header d-print-none">
        <div class="container d-print-none">
            <div class="row">
              <!-- BEGIN TOP BAR LEFT PART -->
              <div class="col-md-6 col-sm-6 additional-shop-info">
                  <ul class="list-unstyled list-inline">
                      <!-- BEGIN CURRENCIES -->
                      <li class="shop-currencies">
                          <a href="#	">IDR</a>
                      </li>
                      <!-- END CURRENCIES -->
                      <!-- BEGIN LANGS -->
                      <li class="langs-block">
                          <a href="#" class="current">Indonesia </a>
                          <div class="langs-block-others-wrapper">
                            <div class="langs-bslock-others">

                          </div></div>
                      </li>
                      <!-- END LANGS -->
                  </ul>
              </div>
              <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                      <li><a href="<?= base_url('shop_user/list_order') ?>"><b>Konfirmasi Pemesanan</b></a></li>
                      <li><a href="<?= base_url('shop_user/sell') ?>"><b>Jual</b></a></li>
                      <li><a href="<?= base_url('shop_user/checkout') ?>">Checkout</a></li>
                      <li><a href="<?= base_url('user'); ?>">Akun Saya</a></li>
                      <li><a href="<?= base_url('auth/logout'); ?>">Keluar</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">

      <div class="container d-print-none">

        <a class="site-logo" href="<?= base_url('shop_user'); ?>"><img height="50px" src="<?= base_url(); ?>assets/img/logo.png" alt="Jahitin aja"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->

        <div class="top-cart-block">

          <div class="top-cart-info">
            <p href="javascript:void(0);" class="top-cart-info-count">Hai, <?= $user['name'] ?> ! </p>
          </div>
            <a href="<?= base_url('shop_user/checkout') ?>"><i class="fa fa-shopping-cart"></i></a>
        <!--  <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
                <li>
                  <a href="shop-item.html"><img src="<?= base_url(); ?>assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>
              </ul>
              <div class="text-right">
                <a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
              </div>
            </div>
          </div> -->
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='wanita') ?>">
                Wanita
              </a>
            </li>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='pria') ?>">
                Pria
              </a>
            </li>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='batik') ?>">
                Batik
              </a>
            </li>
            </li>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='kemeja') ?>">
                Kemeja
              </a>
            </li>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='jersey') ?>">
                Jersey
              </a>
            <li>
              <a href="<?= base_url('shop_user/category/'.$category='wanita') ?>">
                Celana training
              </a>
            </li>
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">

                <form action="<?= base_url('shop_user/result'); ?>" method="post">
                  <div class="input-group">
                    <input type="text" placeholder="Search" id="keyword" name="keyword" class="form-control">
                    <span class="input-group-btn">
                      <input class="btn btn-primary" type="submit">Search</input>
                    </span>
                  </div>
                </form>

              </div>
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
