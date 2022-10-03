<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
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
                        <li><a href="<?= base_url('auth/login'); ?>">Masuk</a></li>
												<li><a href="<?= base_url('auth/registration'); ?>">Daftar</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?= base_url('auth') ?>"><img src="assets/img/logo.png" alt="Jahitin aja" height="50px"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>


        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li>
              <a href="#">
                Wanita
              </a>
            </li>
            <li>
              <a href="#">
                Pria
              </a>
            </li>
            <li>
              <a href="#">
                Batik
              </a>
            </li>
            </li>
            <li>
              <a href="#">
                Kemeja
              </a>
            </li>
            <li>
              <a href="#">
                Jersey
              </a>
            <li>
              <a href="#">
                Celana training
              </a>
            </li>
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="<?= base_url('shop_user/result') ?>">
                  <div class="input-group">
                    <input type="text" placeholder="Search" id="keyword" name="keyword" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
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
