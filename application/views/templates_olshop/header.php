<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/olshop/') ?>images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/reset.css">
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('assets/olshop/') ?>css/responsive.css">



</head>

<body class="js">

    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url('assets/olshop/') ?>images/logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Ketik Produk yang di cari" name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">All Category</option>
                                    <option>watch</option>
                                    <option>mobile</option>
                                    <option>kid’s item</option>
                                </select>
                                <form action="<?= base_url('t/search/') ?>" method="POST" enctype="multipart/form-data">
                                    <input name="search" placeholder="Ketik barang di cari" type="text">
                                    <button class="btnn" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->

                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="#">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.html" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Kategori</h3>
                                <ul class="main-category">
                                    <li><a href="#">Sampo <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Lifeboy</a></li>
                                            <li><a href="#">Clear</a></li>
                                            <li><a href="#">Sunsilk</a></li>
                                            <li><a href="#">Pantene</a></li>
                                            <li><a href="#">Zinc</a></li>
                                            <li><a href="#">Dove</a></li>
                                            <li><a href="#">Emerone</a></li>
                                            <li><a href="#">Tressme</a></li>
                                            <li><a href="#">Sera Soft</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sabun Mandi <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">Lifeboy</a></li>
                                            <li><a href="#">Giv</a></li>
                                            <li><a href="#">Harmony</a></li>
                                            <li><a href="#">Lux</a></li>
                                            <li><a href="#">Nuvo</a></li>
                                            <li><a href="#">Dove</a></li>
                                            <li><a href="#">Shinzui</a></li>
                                            <li><a href="#">Cussun</a></li>
                                            <li><a href="#">Asepso</a></li>
                                            <li><a href="#">Citra</a></li>
                                            <li><a href="#">Asepso</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pembersih Baju<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">Rinso</a></li>
                                            <li><a href="#">Soklin</a></li>
                                            <li><a href="#">Daia</a></li>
                                            <li><a href="#">Attack</a></li>
                                            <li><a href="#">Boom</a></li>
                                            <li><a href="#">Total Bunga</a></li>
                                            <li><a href="#">Bukrim</a></li>
                                            <li><a href="#">Vanish</a></li>
                                            <li><a href="#">Citrit</a></li>
                                            <li><a href="#">bayclin</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Pembersih Perabotan & Lantai<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">Sunlig</a></li>
                                            <li><a href="#">Mama Lime</a></li>
                                            <li><a href="#">Vixal</a></li>
                                            <li><a href="#">Porstex</a></li>
                                            <li><a href="#">Harpic</a></li>
                                            <li><a href="#">Total Bunga</a></li>
                                            <li><a href="#">Soklin Lantai</a></li>
                                            <li><a href="#">Wipol</a></li>
                                            <li><a href="#">Clean</a></li>
                                            <li><a href="#">Supel pell</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Susu<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">Bendeha</a></li>
                                            <li><a href="#">Indomilk</a></li>
                                            <li><a href="#">Dancow</a></li>
                                            <li><a href="#">Dairy</a></li>
                                            <li><a href="#">SGM</a></li>
                                            <li><a href="#">Lactona / Lovetona</a></li>
                                            <li><a href="#">Lain-lain</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kopi<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">Kapal Api</a></li>
                                            <li><a href="#">Luwak</a></li>
                                            <li><a href="#">Tora Bika</a></li>
                                            <li><a href="#">Abc</a></li>
                                            <li><a href="#">Anget Sari</a></li>
                                            <li><a href="#">Top Kopi</a></li>
                                            <li><a href="#">Godday</a></li>
                                            <li><a href="#">lain-lain</a></li>
                                        </ul>
                                    </li>


                                    <li><a href="#">denim </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">Product</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a></li>
                                                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->