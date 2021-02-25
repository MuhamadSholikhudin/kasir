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
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Clear</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Sunsilk</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Pantene</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Zinc</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Dove</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Emerone</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Tressme</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Sera Soft</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sabun Mandi <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Lifeboy</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Giv</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Harmony</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Lux</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Nuvo</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Dove</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Shinzui</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Cussun</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Asepso</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Citra</a></li>
                                            <li><a href="<?= base_url('t/kategori/Sabun Mandi/lifebouy') ?>">Asepso</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pembersih Baju<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Rinso</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Soklin</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Daia</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Attack</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Boom</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Total Bunga</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Bukrim</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Vanish</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Citrit</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">bayclin</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Pembersih Perabotan & Lantai<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Sunlig</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Mama Lime</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Vixal</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Porstex</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Harpic</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Total Bunga</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Soklin Lantai</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Wipol</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Clean</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Supel pell</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Susu<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Bendeha</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Indomilk</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Dancow</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Dairy</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">SGM</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Lactona / Lovetona</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Lain-lain</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kopi<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Kapal Api</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Luwak</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Tora Bika</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Abc</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Anget Sari</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Top Kopi</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">Godday</a></li>
                                            <li><a href="<?= base_url('t/kategori/sampo/lifebouy') ?>">lain-lain</a></li>
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