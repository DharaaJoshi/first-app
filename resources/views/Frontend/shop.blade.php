@extends('Frontend.layouts.main')
@section('main-container')  




  <main>
    <section class="full-width_padding">
      <div class="full-width_border border-2" style="border-color: #eeeeee;">
        <div class="shop-banner position-relative ">
          <div class="background-img" style="background-color: #eeeeee;">
            <img loading="lazy" src="../images/shop/shop_banner_character1.png" width="1759" height="420" alt="Pattern" class="slideshow-bg__img object-fit-cover">
          </div>

          <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
            <h2 class="stroke-text h1 smooth-16 text-uppercase fw-bold mb-3 mb-xl-4 mb-xl-5">Jackets & Coats</h2>
            <ul class="d-flex flex-wrap list-unstyled text-uppercase h6">
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s menu-link_active">StayHome</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">New In</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Jackets</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Hoodies</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="shop4.html" class="menu-link menu-link_us-s">Men</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="shop5.html" class="menu-link menu-link_us-s">Women</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Trousers</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Shoes</a></li>
            </ul>
          </div><!-- /.shop-banner__content -->
        </div><!-- /.shop-banner position-relative -->
      </div><!-- /.full-width_border -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>

    <section class="shop-main container">
      <div class="d-flex justify-content-between mb-4 pb-md-2">
        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >Home</a>
          <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >The Shop</a>
        </div><!-- /.breadcrumb -->

        <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
          <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="total-number">
            <option selected>Default Sorting</option>
            <option value="1">Featured</option>
            <option value="2">Best selling</option>
            <option value="3">Alphabetically, A-Z</option>
            <option value="3">Alphabetically, Z-A</option>
            <option value="3">Price, low to high</option>
            <option value="3">Price, high to low</option>
            <option value="3">Date, old to new</option>
            <option value="3">Date, new to old</option>
          </select>

          <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

          <div class="col-size align-items-center order-1 d-none d-lg-flex">
            <span class="text-uppercase fw-medium me-2">View</span>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
            <button class="btn-link fw-medium js-cols-size" data-target="products-grid"  data-cols="4">4</button>
          </div><!-- /.col-size -->

          <div class="shop-asc__seprator mx-3 bg-light d-none d-lg-block order-md-1"></div>

          <div class="shop-filter d-flex align-items-center order-0 order-md-3">
            <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
              <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_filter" /></svg>
              <span class="text-uppercase fw-medium d-inline-block align-middle">Filter</span>
            </button>
          </div><!-- /.col-size d-flex align-items-center ms-auto ms-md-3 -->
        </div><!-- /.shop-acs -->
      </div><!-- /.d-flex justify-content-between -->

      <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid" >
        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_2-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <div class="d-flex align-items-center mt-1">
                <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                <a href="#" class="swatch-color swatch_active pc__swatch-color" style="color: #b9a16b"></a>
                <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>

            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__right ms-auto">
                <span class="pc-label pc-label_sale d-block text-white">-67%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_3-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_4-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__left">
                <span class="pc-label pc-label_new d-block bg-white">NEW</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_5-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_6-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_7.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_7-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_8.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_8-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_9.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_9-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_10.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_10-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_11.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_11-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_12.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_12-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_13.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_13-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_14.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_14-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_15.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_15-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_16.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <div class="swiper-slide">
                    <a href="product1_simple.html"><img loading="lazy" src="../images/products/product_16-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Dresses</p>
              <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>
      </div><!-- /.products-grid row -->

      <p class="mb-1 text-center fw-medium">SHOWING 36 of 497 items</p>
      <div class="progress progress_uomo mb-3 ms-auto me-auto" style="width: 300px;">
        <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="text-center">
        <a class="btn-link btn-link_lg text-uppercase fw-medium" href="#">Show More</a>
      </div>
    </section><!-- /.shop-main container -->
  </main>

  <div class="mb-5 pb-xl-5"></div>

  <!-- Footer Type 1 -->
  <footer class="footer footer_type_1">
    <div class="footer-middle container">
      <div class="row row-cols-lg-5 row-cols-2">
        <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
          <div class="logo">
            <a href="index.html">
              <img src="../images/logo.png" alt="Uomo" class="logo__image d-block">
            </a>
          </div><!-- /.logo -->
          <p class="footer-address">1418 River Drive, Suite 35 Cottonhall, CA 9622 United States</p>

          <p class="m-0">
            <strong class="fw-medium">sale@uomo.com</strong>
          </p>
          <p>
            <strong class="fw-medium">+1 246-345-0695</strong>
          </p>

          <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
            <li>
              <a href="https://www.facebook.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg"><path d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z"/></svg>
              </a>
            </li>
            <li>
              <a href="https://www.pinterest.com/" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
              </a>
            </li>
          </ul>
        </div><!-- /.footer-column -->

        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h5 class="sub-menu__title text-uppercase">Company</h5>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">About Us</a></li>
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Careers</a></li>
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Affiliates</a></li>
            <li class="sub-menu__item"><a href="blog_list1.html" class="menu-link menu-link_us-s">Blog</a></li>
            <li class="sub-menu__item"><a href="contact.html" class="menu-link menu-link_us-s">Contact Us</a></li>
          </ul>
        </div><!-- /.footer-column -->
        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h5 class="sub-menu__title text-uppercase">Shop</h5>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a></li>
            <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
            <li class="sub-menu__item"><a href="shop4.html" class="menu-link menu-link_us-s">Men</a></li>
            <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Women</a></li>
            <li class="sub-menu__item"><a href="shop1.html" class="menu-link menu-link_us-s">Shop All</a></li>
          </ul>
        </div><!-- /.footer-column -->
        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h5 class="sub-menu__title text-uppercase">Help</h5>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Customer Service</a></li>
            <li class="sub-menu__item"><a href="account_dashboard.html" class="menu-link menu-link_us-s">My Account</a></li>
            <li class="sub-menu__item"><a href="store_location.html" class="menu-link menu-link_us-s">Find a Store</a></li>
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Legal & Privacy</a></li>
            <li class="sub-menu__item"><a href="contact.html" class="menu-link menu-link_us-s">Contact</a></li>
            <li class="sub-menu__item"><a href="about.html" class="menu-link menu-link_us-s">Gift Card</a></li>
          </ul>
        </div><!-- /.footer-column -->
        <div class="footer-column footer-newsletter col-12 mb-4 mb-lg-0">
          <h5 class="sub-menu__title text-uppercase">Subscribe</h5>
          <p>Be the first to get the latest news about trends, promotions, and much more!</p>
          <form action="https://uomo-html.flexkitux.com/Demo1/index.html" class="footer-newsletter__form position-relative bg-body">
            <input class="form-control border-white" type="email" name="email" placeholder="Your email address">
            <input class="btn-link fw-medium bg-white position-absolute top-0 end-0 h-100" type="submit" value="JOIN">
          </form>

          <div class="mt-4 pt-3">
            <strong class="fw-medium">Secure payments</strong>
            <p class="mt-2">
              <img loading="lazy" src="../images/payment-options.png" alt="Acceptable payment gateways" class="mw-100">
            </p>
          </div>
        </div><!-- /.footer-column -->
      </div><!-- /.row-cols-5 -->
    </div><!-- /.footer-middle container -->

    <div class="footer-bottom container">
      <div class="d-block d-md-flex align-items-center">
        <span class="footer-copyright me-auto">©2024 Uomo</span>
        <div class="footer-settings d-block d-md-flex align-items-center">
          <div class="d-flex align-items-center">
            <label for="footerSettingsLanguage" class="me-2 text-secondary">Language</label>
            <select id="footerSettingsLanguage" class="form-select form-select-sm bg-transparent" aria-label="Default select example" name="store-language">
              <option class="footer-select__option" selected>United Kingdom | English</option>
              <option class="footer-select__option" value="1">United States | English</option>
              <option class="footer-select__option" value="2">German</option>
              <option class="footer-select__option" value="3">French</option>
              <option class="footer-select__option" value="4">Swedish</option>
            </select>
          </div>

          <div class="d-flex align-items-center">
            <label for="footerSettingsCurrency" class="ms-md-3 me-2 text-secondary">Currency</label>
            <select id="footerSettingsCurrency" class="form-select form-select-sm bg-transparent" aria-label="Default select example" name="store-language">
              <option selected>$ USD</option>
              <option value="1">£ GBP</option>
              <option value="2">€ EURO</option>
            </select>
          </div>
        </div><!-- /.footer-settings -->
      </div><!-- /.d-flex -->
    </div><!-- /.footer-bottom container -->
  </footer><!-- /.footer footer_type_1 -->
  <!-- End Footer Type 1 -->

  <!-- Mobile Fixed Footer -->
  <footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
    <div class="row text-center">
      <div class="col-4">
        <a href="https://uomo-html.flexkitux.com/" class="footer-mobile__link d-flex flex-column align-items-center">
          <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_home" /></svg>
          <span>Home</span>
        </a>
      </div><!-- /.col-3 -->

      <div class="col-4">
        <a href="https://uomo-html.flexkitux.com/" class="footer-mobile__link d-flex flex-column align-items-center">
          <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_hanger" /></svg>
          <span>Shop</span>
        </a>
      </div><!-- /.col-3 -->

      <div class="col-4">
        <a href="https://uomo-html.flexkitux.com/" class="footer-mobile__link d-flex flex-column align-items-center">
          <div class="position-relative">
            <svg class="d-block" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
            <span class="wishlist-amount d-block position-absolute js-wishlist-count">3</span>
          </div>
          <span>Wishlist</span>
        </a>
      </div><!-- /.col-3 -->
    </div><!-- /.row -->
  </footer><!-- /.footer-mobile container position-fixed d-md-none bottom-0 -->

  <!-- Filters Drawer -->
  <div class="aside-filters aside aside_right" id="shopFilter">
    <div class="aside-header d-flex align-items-center">
      <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
      <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    <div class="aside-content">
      <div class="accordion" id="categories-list">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header" id="accordion-heading-1">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
              Product Categories
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-1" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
            <div class="accordion-body px-0 pb-0">
              <ul class="list list-inline row row-cols-2 mb-0">
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Dresses</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Shorts</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Sweatshirts</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Swimwear</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jackets</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">T-Shirts & Tops</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jeans</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Trousers</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Men</a>
                </li>
                <li class="list-item">
                  <a href="#" class="menu-link py-1">Jumpers & Cardigans</a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion-item -->

      <div class="accordion" id="color-filters">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header" id="accordion-heading-11">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-2" aria-expanded="true" aria-controls="accordion-filter-2">
              Color
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-2" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-11" data-bs-parent="#color-filters">
            <div class="accordion-body px-0 pb-0">
              <div class="d-flex flex-wrap">
                <a href="#" class="swatch-color js-filter" style="color: #0a2472"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d7bb4f"></a>
                <a href="#" class="swatch-color js-filter" style="color: #282828"></a>
                <a href="#" class="swatch-color js-filter" style="color: #b1d6e8"></a>
                <a href="#" class="swatch-color js-filter" style="color: #9c7539"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d29b48"></a>
                <a href="#" class="swatch-color js-filter" style="color: #e6ae95"></a>
                <a href="#" class="swatch-color js-filter" style="color: #d76b67"></a>
                <a href="#" class="swatch-color swatch_active js-filter" style="color: #bababa"></a>
                <a href="#" class="swatch-color js-filter" style="color: #bfdcc4"></a>
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="size-filters">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header" id="accordion-heading-size">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-size" aria-expanded="true" aria-controls="accordion-filter-size">
              Sizes
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-size" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-size" data-bs-parent="#size-filters">
            <div class="accordion-body px-0 pb-0">
              <div class="d-flex flex-wrap">
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XS</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">S</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">M</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">L</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XL</a>
                <a href="#" class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter">XXL</a>
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="brand-filters">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header" id="accordion-heading-brand">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
              Brands
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
            <div class="search-field multi-select accordion-body px-0 pb-0">
              <select class="d-none" multiple name="total-numbers-list">
                <option value="1">Adidas</option>
                <option value="2">Balmain</option>
                <option value="3">Balenciaga</option>
                <option value="4">Burberry</option>
                <option value="5">Kenzo</option>
                <option value="5">Givenchy</option>
                <option value="5">Zara</option>
              </select>
              <div class="search-field__input-wrapper mb-3">
                <input type="text" name="search_text" class="search-field__input form-control form-control-sm border-light border-2" placeholder="SEARCH">
              </div>
              <ul class="multi-select__list list-unstyled">
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Adidas</span>
                  <span class="text-secondary">2</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Balmain</span>
                  <span class="text-secondary">7</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Balenciaga</span>
                  <span class="text-secondary">10</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Burberry</span>
                  <span class="text-secondary">39</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Kenzo</span>
                  <span class="text-secondary">95</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Givenchy</span>
                  <span class="text-secondary">1092</span>
                </li>
                <li class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select">
                  <span class="me-auto">Zara</span>
                  <span class="text-secondary">48</span>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->


      <div class="accordion" id="price-filters">
        <div class="accordion-item mb-4">
          <h5 class="accordion-header mb-2" id="accordion-heading-price">
            <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-price" aria-expanded="true" aria-controls="accordion-filter-price">
              Price
              <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                  <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"/>
                </g>
              </svg>
            </button>
          </h5>
          <div id="accordion-filter-price" class="accordion-collapse collapse show border-0" aria-labelledby="accordion-heading-price" data-bs-parent="#price-filters">
            <input class="price-range-slider" type="text" name="price_range" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" data-currency="$">
            <div class="price-range__info d-flex align-items-center mt-2">
              <div class="me-auto">
                <span class="text-secondary">Min Price: </span>
                <span class="price-range__min">$250</span>
              </div>
              <div>
                <span class="text-secondary">Max Price: </span>
                <span class="price-range__max">$450</span>
              </div>
            </div>
          </div>
        </div><!-- /.accordion-item -->
      </div><!-- /.accordion -->

      <div class="filter-active-tags pt-2">
        <button class="filter-tag d-inline-flex align-items-center mb-3 me-3 text-uppercase js-filter">
          <i class="btn-close-xs d-inline-block"></i>
          <span class="ms-2">Blues</span>
        </button>
        <button class="filter-tag d-inline-flex align-items-center mb-3 me-3 text-uppercase js-filter">
          <i class="btn-close-xs d-inline-block"></i>
          <span class="ms-2">Max Price: $493</span>
        </button>
        <button class="filter-tag d-inline-flex align-items-center mb-3 text-uppercase js-filter">
          <i class="btn-close-xs d-inline-block"></i>
          <span class="ms-2">Zara</span>
        </button>

        <div>
          <button class="filter-tag d-flex align-items-center text-uppercase js-filter">
            <i class="btn-close-xs d-inline-block"></i>
            <span class="ms-2">RESET FILTER</span>
          </button>
        </div>
      </div>
    </div><!-- /.aside-content -->
  </div><!-- /.aside-filters aside aside_right overflow-auto -->


</body>
</html>
@endsection