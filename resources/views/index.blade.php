<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="NNFashion - Online butik, Maska, Zenska, Detska i Bebeska garderoba"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce, butik"/>
    <meta name="author" content="codecarnival"/>

    <title>NNFashion - Modern boutique</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  <header class="main-header-wrapper position-relative">
    <div class="header-top">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="header-top-align">
              <div class="header-top-align-start">
                <div class="desc">
                  <p><b>Бесплатна достава низ цела Македонија 🇲🇰<b></p>
                </div>
              </div>
              <div class="header-top-align-end">
                <div class="header-info-items">
                  <div class="info-items">
                    <ul>
                      <li class="number"><i class="fa fa-phone"></i><a href="tel:078209101">078/209-101</a></li>
                      <li class="email"><i class="fa fa-envelope"></i><a href="mailto:info@nnfashion.mk">info@nnfashion.mk</a></li>
                      <li class="account"><i class="fa fa-user"></i><a href="/login">Account</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container pt--0 pb--0">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="header-middle-align">
              <div class="header-middle-align-start">
                <div class="header-logo-area">
                  <a href="index.html">
                    <img class="logo-main" src="assets/img/logo.webp" width="131" height="34" alt="Logo" />
                    <img class="logo-light" src="assets/img/logo-light.webp" width="131" height="34" alt="Logo" />
                  </a>
                </div>
              </div>
              <div class="header-middle-align-center">
                <div class="header-search-area">
                  <form class="header-searchbox">
                    <input type="search" class="form-control" placeholder="Search">
                    <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header-middle-align-end">
                <div class="header-action-area">
                  <div class="shopping-search">
                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                  </div>
                  <div class="shopping-wishlist">
                    <a class="shopping-wishlist-btn" target="_blank" href="https://www.facebook.com/search/top?q=n%26n%20fashion">
                      <i class="pe-7s-like icon"></i>
                    </a>
                  </div>
                  <div class="shopping-cart">
                    <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                      <i class="pe-7s-shopbag icon"></i>
                      <sup class="shop-count">02</sup>
                    </button>
                  </div>
                  <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                    <i class="pe-7s-menu"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area header-default">
      <div class="container">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li><a href="/"><span>Главна страна</span></a></li>
                  <li class="has-submenu position-static"><a href="/shop"><span>Продавница</span></a>
                    <ul class="submenu-nav submenu-nav-mega column-3">
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                        <ul>
                          <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                          <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                          <li><a href="shop.html"><span>Shop Left Sidebar</span></a></li>
                          <li><a href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Single Product</span></a>
                        <ul>
                          <li><a href="single-normal-product.html"><span>Single Product Normal</span></a></li>
                          <li><a href="single-product.html"><span>Single Product Variable</span></a></li>
                          <li><a href="single-group-product.html"><span>Single Product Group</span></a></li>
                          <li><a href="single-affiliate-product.html"><span>Single Product Affiliate</span></a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                        <ul>
                          <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                          <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                          <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                          <li><a href="shop-compare.html"><span>Compare</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="/contact"><span>Контакт</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area slider-content-area-two" data-bg-img="assets/img/slider/slider-02.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off</p>
                          </div>
                          <div class="title-box">
                            <h2 class="title"><span class="font-weight-400">Exclusive<br> </span>New Shoes</h2>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.html">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area slider-content-area-two" data-bg-img="assets/img/slider/slider-04.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off</p>
                          </div>
                          <div class="title-box">
                            <h2 class="title"><span class="font-weight-400">Exclusive<br> </span>New Shoes</h2>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.html">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-btn-wrap">
          <div class="swiper-btn-prev">
            <i class="pe-7s-angle-left"></i>
          </div>
          <div class="swiper-btn-next">
            <i class="pe-7s-angle-right"></i>
          </div>
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area product-featured-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Нови артикли</h3>
              <div class="desc">
                <p>Секоја недела, во нашиот бутик се додаваат нови артикли.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                  <div class="prices">
                    <span class="price-old">$100</span>
                    <span class="sep">-</span>
                    <span class="price">$240.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/2.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Quickiin Mens shoes</a></h4>
                  <div class="prices">
                    <span class="price">$140.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Rexpo Womens shoes</a></h4>
                  <div class="prices">
                    <span class="price-old">$60</span>
                    <span class="sep">-</span>
                    <span class="price">$260.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Hollister V-Neck Knit</a></h4>
                  <div class="prices">
                    <span class="price">$880.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Primitive Mens shoes</a></h4>
                  <div class="prices">
                    <span class="price">$500.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">New Womens High Hills</a></h4>
                  <div class="prices">
                    <span class="price-old">$300</span>
                    <span class="sep">-</span>
                    <span class="price">$333.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Simple Fabric Shoe</a></h4>
                  <div class="prices">
                    <span class="price">$133.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/8.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">exclusive mens shoe</a></h4>
                  <div class="prices">
                    <span class="price-old">$300</span>
                    <span class="sep">-</span>
                    <span class="price">$420.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Category Area Wrapper ==-->
    <section class="product-area product-category-area mb-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="product-category">
              <div class="inner-content">
                <div class="product-category-content">
                  <div class="content">
                    <h4 class="sub-title">Нови модели</h4>
                    <h3 class="title"><a href="shop.html">Mашки</a></h3>
                  </div>
                </div>
                <div class="product-category-thumb" data-bg-img="assets/img/shop/category/1.webp"></div>
                <a class="banner-link-overlay" href="shop.html"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="product-category mt-xs-30">
              <div class="inner-content">
                <div class="product-category-content">
                  <div class="content">
                    <h4 class="sub-title">Нови модели</h4>
                    <h3 class="title"><a href="shop.html">Женски</a></h3>
                  </div>
                </div>
                <div class="product-category-thumb" data-bg-img="assets/img/shop/category/2.webp"></div>
                <a class="banner-link-overlay" href="shop.html"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="product-category">
              <div class="inner-content">
                <div class="product-category-content">
                  <div class="content">
                    <h4 class="sub-title">Нови модели</h4>
                    <h3 class="title"><a href="shop.html">Детски</a></h3>
                  </div>
                </div>
                <div class="product-category-thumb" data-bg-img="assets/img/shop/category/1.webp"></div>
                <a class="banner-link-overlay" href="shop.html"></a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="product-category mt-xs-30">
              <div class="inner-content">
                <div class="product-category-content">
                  <div class="content">
                    <h4 class="sub-title">Нови модели</h4>
                    <h3 class="title"><a href="shop.html">Бебешки</a></h3>
                  </div>
                </div>
                <div class="product-category-thumb" data-bg-img="assets/img/shop/category/2.webp"></div>
                <a class="banner-link-overlay" href="shop.html"></a>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </section>
    <!--== End Product Category Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-md-7 col-lg-6">
            <p class="copyright">© {{date('M, Y');}} NNfashion. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://webmak.mk/">WebMak.</a></p>
          </div>
          <div class="col-md-5 col-lg-6">
            <div class="payment">
              <a href="/shop"><img src="assets/img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/product-single/1.webp" width="570" height="541" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Space X Bag For Office</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity20" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Aside Cart Menu ==-->
  <div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasRightLabel"></h1>
      <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Продукти <i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="offcanvas-body">
      <ul class="aside-cart-product-list">
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Leather Mens Slipper</span>
          </a>
          <span class="product-price">1 × £69.99</span>
        </li>
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Quickiin Mens shoes</span>
          </a>
          <span class="product-price">1 × £20.00</span>
        </li>
      </ul>
      <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
      <a class="btn-theme" data-margin-bottom="10" href="shop-cart.html">Кошничка</a>
      <a class="btn-theme" href="/checkout">Нарачај</a>
    </div>
  </div>
  <!--== End Aside Cart Menu ==-->

  <!--== Start Side Menu ==-->
  <div class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasExampleLabel"></h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">Мени <i class="fa fa-chevron-left"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="info-items">
        <ul>
          <li class="number"><a href="tel:078209101"><i class="fa fa-phone"></i>078/209-101</a></li>
          <li class="email"><a href="mailto:info@nnfashion.mk"><i class="fa fa-envelope"></i>info@nnfashion.mk</a></li>
          <li class="account"><a href="/login"><i class="fa fa-user"></i>Account</a></li>
        </ul>
      </div>
      <!-- Mobile Menu Start -->
      <div class="mobile-menu-items">
        <ul class="nav-menu">
          <li><a href="/">Главна страна</a></li>
          <li><a href="/shop">Продавница</a>
            <ul class="sub-menu">
              <li><a href="#">Shop Layout</a>
                <ul class="sub-menu">
                  <li><a href="shop-three-columns.html">Shop 3 Column</a></li>
                  <li><a href="shop-four-columns.html">Shop 4 Column</a></li>
                  <li><a href="shop.html">Shop Left Sidebar</a></li>
                  <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                </ul>
              </li>
              <li><a href="#">Single Product</a>
                <ul class="sub-menu">
                  <li><a href="single-normal-product.html">Single Product Normal</a></li>
                  <li><a href="single-product.html">Single Product Variable</a></li>
                  <li><a href="single-group-product.html">Single Product Group</a></li>
                  <li><a href="single-affiliate-product.html">Single Product Affiliate</a></li>
                </ul>
              </li>
              <li><a href="#">Others Pages</a>
                <ul class="sub-menu">
                  <li><a href="shop-cart.html">Shopping Cart</a></li>
                  <li><a href="shop-checkout.html">Checkout</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="shop-compare.html">Compare</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/contact">Контакт</a></li>
        </ul>
      </div>
      <!-- Mobile Menu End -->
    </div>
  </div>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Ui Min Js ===-->
<script src="assets/js/jquery-ui.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="assets/js/waypoint.js"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="assets/js/parallax.min.js"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>