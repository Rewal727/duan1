<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/tuime/tuime/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:35 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Tuime - Animal Food Website Template" />
  <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive" />
  <meta name="author" content="hastech" />

  <title>Products</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&amp;display=swap" rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== 7 Stroke Icon CSS ==-->
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="../assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="../assets/css/fancybox.min.css" rel="stylesheet" />
  <!--== Range Slider Min CSS ==-->
  <link href="../assets/css/ion.rangeSlider.min.css" rel="stylesheet" />

  <!--== Main Style CSS ==-->
  <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>

  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <div class="dog-head"></div>
        <div class="dog-body"></div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default" data-bg-img="assets/img/photos/header-bg.webp">
      <div class="container">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-align-start">
                <div class="header-logo-area">
                  <a href="index.html">
                    <img class="logo-main" src="../../img/logo.png" alt="Logo" style="height: 70px;" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
      <?php
      extract($onesp);

      ?>
      <?php
      $hinh = $img_path . $img
      ?>
      <!--== Start Page Header Area Wrapper ==-->
      <div class="page-header-area" data-bg-img="assets/img/photos/bg1.webp">
        <div class="container pt--0 pb--0">
          <div class="row">
            <div class="col-12">
              <div class="page-header-content">
                <h2 class="title">Sản phẩm</h2>
                <nav class="breadcrumb-area">
                  <ul class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-sep">//</li>
                    <li>Sản phẩm</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Page Header Area Wrapper ==-->

      <!--== Start Product Single Area Wrapper ==-->
      <section class="product-area product-single-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="product-single-item">
                <div class="row">
                  <div class="col-lg-6">
                    <!--== Start Product Thumbnail Area ==-->
                    <div class="product-single-thumb">
                      <div class="swiper single-product-thumb single-product-thumb-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="<?= $hinh ?>">
                              <img src="<?= $hinh ?>" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/2.jpg">
                              <img src="assets/img/shop/product-single/2.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg">
                              <img src="assets/img/shop/product-single/3.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.jpg">
                              <img src="assets/img/shop/product-single/4.jpg" width="570" height="675" alt="Image-HasTech">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-single-swiper-wrap position-relative">
                        <div class="swiper single-product-nav single-product-nav-slider">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img src="<?= $hinh ?>" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav2.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav3.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                            <div class="swiper-slide">
                              <img src="assets/img/shop/product-single/nav4.jpg" width="127" height="127" alt="Image-HasTech">
                            </div>
                          </div>
                        </div>
                        <!--== Add Swiper Arrows ==-->
                        <div class="single-swiper-btn-wrap">
                          <div class="swiper-btn-prev">
                            <i class="fa fa-angle-left"></i>
                          </div>
                          <div class="swiper-btn-next">
                            <i class="fa fa-angle-right"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Product Thumbnail Area ==-->
                  </div>
                  <div class="col-lg-6">
                    <!--== Start Product Info Area ==-->
                    <div class="product-single-info">
                      <h3 class="main-title"><?= $name ?></h3>
                      <div class="prices">
                        <span class="price"><?= $price ?> VNĐ</span>
                      </div>
                      <div class="rating-box-wrap">
                        <div class="rating-box">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="review-status">
                          <a href="javascript:void(0)">(5 Customer Review)</a>
                        </div>
                      </div>
                      <p><?= $mota ?></p>
                      <!-- <div class="product-single-meta">
                      <ul>
                        <li><span>SKU:</span> Ch-256xl</li>
                        <li><span>Categories:</span> 
                          <a href="shop.html">Pet Food. eCommerce</a>
                        </li>
                        <li><span>Tags:</span> 
                          <a href="shop.html">Petfood. Pet</a>,
                          <a href="shop.html">Animal.</a>
                        </li>
                      </ul>
                    </div> -->
                      <div class="product-quick-action">
                        <div class="qty-wrap">
                          <div class="pro-qty">
                            <input type="text" title="Quantity" value="01">
                          </div>
                        </div>

                        <?php
                        echo '<form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                        </form>';
                        ?>



                        <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                          <i class="pe-7s-like"></i>
                        </button>
                        <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                          <i class="pe-7s-look"></i>
                        </button>
                      </div>


                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                      <script>
                        $(document).ready(function() {
                          $("#binhluan").load("view/binhluan/binhluanform.php", {
                            idpro: <?= $id ?>
                          });
                        });
                      </script>



                      <div class="product-review-tabs-content">
                        <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                          <li role="presentation">
                            <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">Information</a>
                          </li>
                          <li role="presentation">
                            <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                          </li>
                          <li role="presentation">
                            <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (05)</a>
                          </li>
                        </ul>
                        <div class="tab-content product-tab-content" id="ReviewTabContent">
                          <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="product-information">
                              <p><?= $mota ?></p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description">
                              <p><?= $mota ?></p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-content">
                              <!-- <div class="comment-author">
                                <div class="comment-thumb">
                                  <img src="assets/img/shop/avatar.jpg" width="60" height="60" alt="Image-HasTech">
                                </div>
                                <div class="comment-content">
                                  <div class="rating-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                  </div>
                                  <h4 class="title"><span>Admin</span> - April 8, 2022</h4>
                                  <p class="desc">Uống như ***</p>
                                </div>
                              </div>
                              <div class="comment-form-content">
                                <h4 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#comment-widgetId-1">Thêm bình luận</h4>
                                <div id="comment-widgetId-1" class="collapse collapse-body">
                                  <div class="review-comment-form">
                                    <form action="#">
                                          
                                    </form>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row review-comment-form" id="binhluan">

                                          </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!--== End Product Info Area ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Product Single Area Wrapper ==-->

      <!--== Start Product Area Wrapper ==-->
      <section class="product-area product-default-area">
        <div class="container pt--0">
          <div class="row">
            <div class="col-12">
              <div class="section-title shape-center text-center">
                <h5 class="sub-title">Sản phẩm tốt nhất</h5>
                <h2 class="title">Sản phẩm cùng loại</h2>
              </div>
            </div>
          </div>
          <div class="row">

            <!--== Start Product Item ==-->
            <?php
            foreach ($spcungloai as $spcungloai) {
              extract($spcungloai);
              $linksp = "index.php?act=sanphamct&idsp=" . $id;
              $hinh = $img_path . $img;
              echo '<div class="col-sm-6 col-lg-3">
                                <div class="product-item"> 
                                  <div class="product-thumb">
                                    <a href="' . $linksp . '">
                                      <img src="' . $hinh . '" width="250" height="300" alt="Image-HasTech">
                                    </a>
                                  </div>
                                  <div class="product-info">
                                    <h4 class="title"><a href="single-product.html">' . $name . '</a></h4>
                                    <div class="prices">
                                      <span class="price">' . $price . ' VNĐ</span>
                                    </div>
                                  </div>
                                  <div class="product-action">
                                    <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                      <i class="pe-7s-like"></i>
                                    </button>
                                    <div class="product-action-links">
                                      <button type="button" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <i class="pe-7s-shopbag"></i>
                                      </button>
                                      <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="pe-7s-look"></i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>';
            }
            ?>
            <!--== End prPduct Item ==-->
          </div>
        </div>
  </div>
  </section>
  <!--== End Product Area Wrapper ==-->
  </main>


  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Product Quick Wishlist Modal ==-->
  <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i> Added to wishlist successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.jpg" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Wishlist Modal ==-->

  <!--== Start Product Quick Add Cart Modal ==-->
  <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i> Added to cart successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.jpg" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Add Cart Modal ==-->

  <!--== Start Product Quick View Modal ==-->
  <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-quick-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <span class="pe-7s-close"></span>
            </button>
            <div class="container pt--0 pb--0">
              <div class="row">
                <div class="col-lg-6">
                  <!--== Start Product Thumbnail Area ==-->
                  <div class="product-single-thumb">
                    <img src="assets/img/shop/quick-view1.jpg" width="544" height="560" alt="Image-HasTech">
                  </div>
                  <!--== End Product Thumbnail Area ==-->
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h3 class="main-title">Joust Duffle Bag</h3>
                    <div class="prices">
                      <span class="price">$20.19</span>
                    </div>
                    <div class="rating-box-wrap">
                      <div class="rating-box">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="review-status">
                        <a href="javascript:void(0)">(5 Customer Review)</a>
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="product-single-meta">
                      <ul>
                        <li><span>SKU:</span> Ch-256xl</li>
                        <li><span>Categories:</span>
                          <a href="shop.html">Pet Food. eCommerce</a>
                        </li>
                        <li><span>Tags:</span>
                          <a href="shop.html">Petfood. Pet</a>,
                          <a href="shop.html">Animal.</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-quick-action">
                      <div class="qty-wrap">
                        <div class="pro-qty">
                          <input type="text" title="Quantity" value="01">
                        </div>
                      </div>
                      <button type="button" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                        Add To Cart
                      </button>
                      <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                        <i class="pe-7s-like"></i>
                      </button>
                      <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                        <i class="pe-7s-look"></i>
                      </button>
                    </div>
                  </div>
                  <!--== End Product Info Area ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick View Modal ==-->

  </div>

  <!--=======================Javascript============================-->

  <!--=== jQuery Modernizr Min Js ===-->
  <script src="../assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="../assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="../assets/js/jquery-migrate.js"></script>
  <!--=== jQuery Popper Min Js ===-->
  <script src="../assets/js/popper.min.js"></script>
  <!--=== jQuery Bootstrap Min Js ===-->
  <script src="../assets/js/bootstrap.min.js"></script>
  <!--=== jQuery Swiper Min Js ===-->
  <script src="../assets/js/swiper.min.js"></script>
  <!--=== jQuery Fancybox Min Js ===-->
  <script src="../assets/js/fancybox.min.js"></script>
  <!--=== jQuery Countdown Min Js ===-->
  <script src="../assets/js/countdown.js"></script>
  <!--=== jQuery Isotope Min Js ===-->
  <script src="../assets/js/isotope.pkgd.min.js"></script>
  <!--=== jQuery Range Slider Min Js ===-->
  <script src="../assets/js/ion.rangeSlider.min.js"></script>

  <!--=== jQuery Custom Js ===-->
  <script src="../assets/js/custom.js"></script>

</body>


<!-- Mirrored from htmldemo.net/tuime/tuime/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 14:25:35 GMT -->

</html>