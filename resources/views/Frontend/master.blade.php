@extends('Frontend.layouts.main')
@section('main-container')
 
 <main>
    <section class="swiper-container js-swiper-slider slideshow full-width_padding"
      data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true,
        "pagination": {
          "el": ".slideshow-pagination",
          "type": "bullets",
          "clickable": true
        }
      }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-bg" style="background-color: #f5e6e0;">
              <img loading="lazy" src="{{asset('Frontend/images/slideshow-pattern.png')}}" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover">
            </div>
            <!-- <p class="slideshow_markup font-special text-uppercase position-absolute end-0 bottom-0">Summer</p> -->
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="{{asset('Frontend/images/slideshow-character1.png')}}" width="400" height="733" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto">
              <div class="character_markup">
                <p class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">Summer</p>
              </div>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">New Trend</h6>
              <h2 class="text-uppercase h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Summer Sale Stylish</h2>
              <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-5">Womens</h2>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover More</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->

        <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-bg" style="background-color: #f5e6e0;">
              <img loading="lazy" src="{{asset('Frontend/images/slideshow-pattern.png')}}" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover">
            </div>
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="{{asset('Frontend/images/slideshow-character2.png')}}" width="400" height="690" alt="Woman Fashion 2" class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 h-auto w-auto">
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">Summer 2024</h6>
              <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-3">Hello New Season</h2>
              <h6 class="text-uppercase mb-5 animate animate_fade animate_btt animate_delay-3">Limited Time Offer - Up to 60% off & Free Shipping</h6>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-3">Discover More</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->
      </div><!-- /.slideshow-wrapper js-swiper-slider -->

      <div class="container">
        <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
        <!-- /.products-pagination -->
      </div><!-- /.container -->

      <div class="slideshow-social-follow d-none d-xxl-block position-absolute top-50 start-0 translate-middle-y text-center">
        <ul class="social-links list-unstyled mb-0 text-secondary">
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
            </a>
          </li>
          <li>
            <a href="https://www.pinterest.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
            </a>
          </li>
        </ul><!-- /.social-links list-unstyled mb-0 text-secondary -->
        <span class="slideshow-social-follow__title d-block mt-5 text-uppercase fw-medium text-secondary">Follow Us</span>
      </div><!-- /.slideshow-social-follow -->
      <a href="#section-collections-grid_masonry" class="slideshow-scroll d-none d-xxl-block position-absolute end-0 bottom-0 text_dash text-uppercase fw-medium">Scroll</a>
    </section><!-- /.slideshow -->

    <div class="mb-3 pb-3 mb-md-4 pb-md-4 mb-xl-5 pb-xl-5"></div>
    <div class="pb-1"></div>

    <!-- Shop by collection -->
    <section class="collections-grid collections-grid_masonry" id="section-collections-grid_masonry">
      <div class="container h-md-100">
        <div class="row h-md-100">
          <div class="col-lg-6 h-md-100">
            <div class="collection-grid__item position-relative h-md-100">
              <div class="background-img" style="background-image: url('public/images/collection_grid_1.jpg');"></div>
              <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                <p class="text-uppercase mb-1">Hot List</p>
                <h3 class="text-uppercase"><strong>Women</strong> Collection</h3>
                <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
              </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
            </div>
          </div><!-- /.col-md-6 -->

          <div class="col-lg-6 d-flex flex-column">
            <div class="collection-grid__item position-relative flex-grow-1 mb-lg-4">
              <div class="background-img" style="background-image: url('../images/collection_grid_2.jpg');"></div>
              <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                <p class="text-uppercase mb-1">Hot List</p>
                <h3 class="text-uppercase"><strong>Men</strong> Collection</h3>
                <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
              </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
            </div>
            <div class="position-relative flex-grow-1 mt-lg-1">
              <div class="row h-md-100">
                <div class="col-md-6 h-md-100">
                  <div class="collection-grid__item h-md-100 position-relative">
                    <div class="background-img" style="background-image: url('../images/collection_grid_3.jpg');"></div>
                    <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                      <p class="text-uppercase mb-1">Hot List</p>
                      <h3 class="text-uppercase"><strong>Kids</strong> Collection</h3>
                      <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
                  </div><!-- /.collection-grid__item -->
                </div>

                <div class="col-md-6 h-md-100">
                  <div class="collection-grid__item h-md-100 position-relative">
                    <div class="background-img" style="background-color: #f5e6e0"></div>
                    <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                      <h3 class="text-uppercase"><strong>E-Gift</strong> Cards</h3>
                      <p class="mb-1">Surprise someone with the gift they<br>really want.</p>
                      <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                    </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
                  </div><!-- /.collection-grid__item -->
                </div>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.collections-grid collections-grid_masonry -->

    <div class="mb-4 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="products-grid container">
      <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">Our Trendy <strong>Products</strong></h2>

      <ul class="nav nav-tabs mb-3 text-uppercase justify-content-center" id="collections-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab" href="#collections-tab-1" role="tab" aria-controls="collections-tab-1" aria-selected="true">All</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-2-trigger" data-bs-toggle="tab" href="#collections-tab-2" role="tab" aria-controls="collections-tab-2" aria-selected="true">New Arrivals</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-3-trigger" data-bs-toggle="tab" href="#collections-tab-3" role="tab" aria-controls="collections-tab-3" aria-selected="true">Best Seller</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-4-trigger" data-bs-toggle="tab" href="#collections-tab-4" role="tab" aria-controls="collections-tab-4" aria-selected="true">Top Rated</a>
        </li>
      </ul>

      <div class="tab-content pt-2" id="collections-tab-content">
        <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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
                </div>[]
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">Discover More</a>
          </div>
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-2" role="tabpanel" aria-labelledby="collections-tab-2-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_3.1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_4.1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline default-underline text-uppercase fw-medium" href="#">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-3" role="tabpanel" aria-labelledby="collections-tab-3-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">Discover More</a>
          </div>
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel" aria-labelledby="collections-tab-4-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_8.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_8-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_2.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}} width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->
      </div><!-- /.tab-content pt-2 -->
    </section><!-- /.products-grid -->


    <div class="mb-3 mb-xl-5 pb-1 pb-xl-5"></div>


    <section class="deal-timer position-relative d-flex align-items-end overflow-hidden" style="background-color: #ebebeb;">
      <div class="background-img" style="background-image: url('../images/deal_timer_bg.jpg');"></div>

      <div class="deal-timer-wrapper container position-relative">
        <div class="deal-timer__content pb-2 mb-3 pb-xl-5 mb-xl-3 mb-xxl-5">
          <p class="text_dash text-uppercase text-red fw-medium">Deal of the week</p>
          <h3 class="h1 text-uppercase"><strong>Spring</strong> Collection</h3>
          <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium mt-3">Shop Now</a>
        </div>

        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown" data-date="18-5-2024" data-time="06:50">
          <div class="day countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Days</span>
          </div>

          <div class="hour countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Hours</span>
          </div>

          <div class="min countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Mins</span>
          </div>

          <div class="sec countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Sec</span>
          </div>
        </div>
      </div><!-- /.deal-timer-wrapper -->
    </section><!-- /.deal-timer -->


    <div class="mb-3 mb-xl-5 pb-1 pb-xl-5"></div>


    <section class="grid-banner container mb-3">
      <div class="row">
        <div class="col-md-6">
          <div class="grid-banner__item grid-banner__item_rect position-relative mb-3">
            <div class="background-img" style="background-image: url('../images/banner_1.jpg');"></div>
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <h6 class="text-uppercase text-white fw-medium mb-3">Starting At $19</h6>
              <h3 class="text-white mb-3">Women's T-Shirts</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase text-white fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
          <div class="grid-banner__item grid-banner__item_rect position-relative mb-3">
            <div class="background-img" style="background-image: url('../images/banner_2.jpg');"></div>
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <h6 class="text-uppercase fw-medium mb-3">Starting At $39</h6>
              <h3 class="mb-3">Men's Sportswear</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </section><!-- /.grid-banner container -->


    <div class="mb-5 pb-1 pb-xl-4"></div>


    <section class="products-carousel container">
      <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4">Limited <strong>Edition</strong></h2>

      <div id="product_carousel" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#product_carousel .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#product_carousel .products-carousel__next",
              "prevEl": "#product_carousel .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('Frontend/images/home/demo1/product-0-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Dresses</p>
                <h6 class="pc__title"><a href="product1_simple.html">Hub Accent Mirror</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$17</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('Frontend/images/home/demo1/product-0-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Dresses</p>
                <h6 class="pc__title"><a href="product1_simple.html">Hosking Blue Area Rug</a></h6>
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

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Dresses</p>
                <h6 class="pc__title"><a href="product1_simple.html">Hanneman Pouf</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$62</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('Frontend/images/products/product_1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Dresses</p>
                <h6 class="pc__title"><a href="product1_simple.html">Cushion Futon Slipcover</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$62</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
        </div><!-- /.products-carousel__next -->

        <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
        <!-- /.products-pagination -->
      </div><!-- /.position-relative -->

    </section><!-- /.products-carousel container -->

    <section class="instagram container">
      <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4">@UOMO</h2>

      <div class="row row-cols-3 row-cols-md-4 row-cols-xl-6">
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}"width="230" height="230" alt="Insta image 1">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 2">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 3">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 4">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 5">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 6">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 7">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 8">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 9">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 10">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 11">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="{{asset('Frontend/images/instagram/insta1.jpg')}}" width="230" height="230" alt="Insta image 12">
          </a>
        </div>
      </div>
    </section><!-- /.instagram container -->


    <div class="mb-4 pb-4 pb-xl-5 mb-xl-5"></div>


    <section class="service-promotion container mb-md-4 pb-md-4 mb-xl-5">
      <div class="row">
        <div class="col-md-4 text-center mb-5 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shipping" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">Fast And Free Delivery</h3>
          <p class="service-promotion__content text-secondary">Free delivery for all orders over $140</p>
        </div><!-- /.col-md-4 text-center-->

        <div class="col-md-4 text-center mb-5 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_headphone" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">24/7 Customer Support</h3>
          <p class="service-promotion__content text-secondary">Friendly 24/7 customer support</p>
        </div><!-- /.col-md-4 text-center-->

        <div class="col-md-4 text-center mb-4 pb-1 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shield" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">Money Back Guarantee</h3>
          <p class="service-promotion__content text-secondary">We return money within 30 days</p>
        </div><!-- /.col-md-4 text-center-->
      </div><!-- /.row -->
    </section><!-- /.service-promotion container -->
  </main>

  
  <!-- Customer Login Form -->
  <div class="aside aside_right overflow-hidden customer-forms" id="customerForms">
    <div class="customer-forms__wrapper d-flex position-relative">
      <div class="customer__login">
        <div class="aside-header d-flex align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Login</h3>
          <button class="btn-close-lg js-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <form action="https://uomo-html.flexkitux.com/Demo1/login_register.html" method="POST" class="aside-content">
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control form-control_gray" id="customerNameEmailInput" placeholder="name@example.com">
            <label for="customerNameEmailInput">Username or email address *</label>
          </div>

          <div class="pb-3"></div>

          <div class="form-label-fixed mb-3">
            <label for="customerPasswordInput" class="form-label">Password *</label>
            <input name="password" id="customerPasswordInput" class="form-control form-control_gray" type="password" placeholder="********">
          </div>

          <div class="d-flex align-items-center mb-3 pb-2">
            <div class="form-check mb-0">
              <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label text-secondary" for="flexCheckDefault">Remember me</label>
            </div>
            <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
          </div>

          <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

          <div class="customer-option mt-4 text-center">
            <span class="text-secondary">No account yet?</span>
            <a href="login_register.html#register-tab" class="btn-text js-show-register">Create Account</a>
          </div>
        </form>
      </div><!-- /.customer__login -->

      <div class="customer__register">
        <div class="aside-header d-flex align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <form action="https://uomo-html.flexkitux.com/Demo1/login_register.html" method="POST" class="aside-content">
          <div class="form-floating mb-4">
            <input name="username" type="text" class="form-control form-control_gray" id="registerUserNameInput" placeholder="Username">
            <label for="registerUserNameInput">Username</label>
          </div>

          <div class="pb-1"></div>

          <div class="form-floating mb-4">
            <input name="email" type="email" class="form-control form-control_gray" id="registerUserEmailInput" placeholder="user@company.com">
            <label for="registerUserEmailInput">Email address *</label>
          </div>

          <div class="pb-1"></div>

          <div class="form-label-fixed mb-4">
            <label for="registerPasswordInput" class="form-label">Password *</label>
            <input name="password" id="registerPasswordInput" class="form-control form-control_gray" type="password" placeholder="*******">
          </div>

          <p class="text-secondary mb-4">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>

          <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>

          <div class="customer-option mt-4 text-center">
            <span class="text-secondary">Already have account?</span>
            <a href="#" class="btn-text js-show-login">Login</a>
          </div>
        </form>
      </div><!-- /.customer__register -->
    </div><!-- /.customer-forms__wrapper -->
  </div><!-- /.aside aside_right -->

  <!-- Cart Drawer -->
  <div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
      <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">1</span> ) </h3>
      <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    <div class="aside-content cart-drawer-items-list">
      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="{{asset('Frontend/images/cart-item-1.jpg')}}" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Zessi Dresses</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Yellow</p>
          <p class="cart-drawer-item__option text-secondary">Size: L</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="1" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$99</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

      <hr class="cart-drawer-divider">

      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="{{asset('Frontend/images/cart-item-2.jpg')}}" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Black</p>
          <p class="cart-drawer-item__option text-secondary">Size: XS</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="4" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$89</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

      <hr class="cart-drawer-divider">

      <div class="cart-drawer-item d-flex position-relative">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="{{asset('Frontend/images/cart-item-3.jpg')}}" alt="">
          </a>
        </div>
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">Cableknit Shawl</a></h6>
          <p class="cart-drawer-item__option text-secondary">Color: Green</p>
          <p class="cart-drawer-item__option text-secondary">Size: L</p>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="quantity" value="3" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span class="cart-drawer-item__price money price">$129</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
      </div><!-- /.cart-drawer-item d-flex -->

    </div><!-- /.aside-content -->

    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
      <hr class="cart-drawer-divider">
      <div class="d-flex justify-content-between">
        <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
        <span class="cart-subtotal fw-medium">$176.00</span>
      </div><!-- /.d-flex justify-content-between -->
      <a href="shop_cart.html" class="btn btn-light mt-3 d-block">View Cart</a>
      <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div><!-- /.aside-content -->
  </div><!-- /.aside -->

  <!-- Sitemap -->
  <div class="modal fade" id="siteMap" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
      <div class="sitemap d-flex">
        <div class="w-50 d-none d-lg-block">
          <img loading="lazy" src="{{asset('Frontend/images/nav-bg.jpg')}}" alt="Site map" class="sitemap__bg">
        </div><!-- /.sitemap__bg w-50 d-none d-lg-block -->
        <div class="sitemap__links w-50 flex-grow-1">
          <div class="modal-content">
            <div class="modal-header">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active rounded-1 text-uppercase" id="pills-item-1-tab" data-bs-toggle="pill" href="#pills-item-1" role="tab" aria-controls="pills-item-1" aria-selected="true">WOMEN</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link rounded-1 text-uppercase" id="pills-item-2-tab" data-bs-toggle="pill" href="#pills-item-2" role="tab" aria-controls="pills-item-2" aria-selected="false">MEN</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link rounded-1 text-uppercase" id="pills-item-3-tab" data-bs-toggle="pill" href="#pills-item-3" role="tab" aria-controls="pills-item-3" aria-selected="false">KIDS</a>
                </li>
              </ul>
              <button type="button" class="btn-close-lg" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="tab-content col-12" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-item-1" role="tabpanel" aria-labelledby="pills-item-1-tab">
                  <div class="row">
                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myTab" role="tablist">
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline active" id="tab-item-1-tab" data-bs-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true"><span class="rline-content">WOMEN</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" id="tab-item-2-tab" data-bs-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false"><span class="rline-content">MAN</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" id="tab-item-3-tab" data-bs-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false"><span class="rline-content">KIDS</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">HOME</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">COLLECTION</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline text-red" href="#">SALE UP TO 50% OFF</a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">NEW</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">SHOES</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">ACCESSORIES</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">JOIN LIFE</span></a>
                      </li>
                      <li class="nav-item position-relative" role="presentation">
                        <a class="nav-link nav-link_rline" href="#"><span class="rline-content">#UOMOSTYLE</span></a>
                      </li>
                    </ul>

                    <div class="tab-content col-7" id="myTabContent">
                      <div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                      <div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                      <div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3-tab">
                        <ul class="sub-menu list-unstyled">
                          <li class="sub-menu__item">
                            <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Sets</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Denim</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">New</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                          </li>
                          <li class="sub-menu__item">
                            <a href="#" class="menu-link menu-link_us-s">Bags</a>
                          </li>
                        </ul><!-- /.sub-menu -->
                      </div>
                    </div>
                  </div><!-- /.row -->
                </div>
                <div class="tab-pane fade" id="pills-item-2" role="tabpanel" aria-labelledby="pills-item-2-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.
                </div>
                <div class="tab-pane fade" id="pills-item-3" role="tabpanel" aria-labelledby="pills-item-3-tab">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                </div>
              </div>
            </div><!-- /.modal-body -->
          </div><!-- /.modal-content -->
        </div><!-- /.sitemap__links w-50 flex-grow-1 -->
      </div>
    </div><!-- /.modal-dialog modal-fullscreen -->
  </div><!-- /.sitemap position-fixed w-100 -->

  <!-- Quick View -->
  <div class="modal fade" id="quickView" tabindex="-1">
    <div class="modal-dialog quick-view modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="product-single">
          <div class="product-single__media m-0">
            <div class="product-single__image position-relative w-100">
              <div class="swiper-container js-swiper-slider"
                data-settings='{
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "effect": "none",
                  "loop": false,
                  "navigation": {
                    "nextEl": ".modal-dialog.quick-view .product-single__media .swiper-button-next",
                    "prevEl": ".modal-dialog.quick-view .product-single__media .swiper-button-prev"
                  }
                }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="{{asset('Frontend/images/products/quickview_1.jpg')}}" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="{{asset('Frontend/images/products/quickview_1.jpg')}}" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="{{asset('Frontend/images/products/quickview_1.jpg')}}" alt="">
                  </div>
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="{{asset('Frontend/images/products/quickview_1.jpg')}}" alt="">
                  </div>
                </div>
                <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></div>
                <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></div>
              </div>
            </div>
          </div>
          <div class="product-single__detail">
            <h1 class="product-single__name">Lightweight Puffer Jacket With a Hood</h1>
            <div class="product-single__price">
              <span class="current-price">$449</span>
            </div>
            <div class="product-single__short-desc">
              <p>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</p>
            </div>
            <form name="addtocart-form" method="post">
              <div class="product-single__swatches">
                <div class="product-swatch text-swatches">
                  <label>Sizes</label>
                  <div class="swatch-list">
                    <input type="radio" name="size" id="swatch-1">
                    <label class="swatch js-swatch" for="swatch-1" aria-label="Extra Small" data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Small">XS</label>
                    <input type="radio" name="size" id="swatch-2" checked>
                    <label class="swatch js-swatch" for="swatch-2" aria-label="Small" data-bs-toggle="tooltip" data-bs-placement="top" title="Small">S</label>
                    <input type="radio" name="size" id="swatch-3">
                    <label class="swatch js-swatch" for="swatch-3" aria-label="Middle" data-bs-toggle="tooltip" data-bs-placement="top" title="Middle">M</label>
                    <input type="radio" name="size" id="swatch-4">
                    <label class="swatch js-swatch" for="swatch-4" aria-label="Large" data-bs-toggle="tooltip" data-bs-placement="top" title="Large">L</label>
                    <input type="radio" name="size" id="swatch-5">
                    <label class="swatch js-swatch" for="swatch-5" aria-label="Extra Large" data-bs-toggle="tooltip" data-bs-placement="top" title="Extra Large">XL</label>
                  </div>
                  <a href="#" class="sizeguide-link" data-bs-toggle="modal" data-bs-target="#sizeGuide">Size Guide</a>
                </div>
                <div class="product-swatch color-swatches">
                  <label>Color</label>
                  <div class="swatch-list">
                    <input type="radio" name="color" id="swatch-11">
                    <label class="swatch swatch-color js-swatch" for="swatch-11" aria-label="Black" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="color: #222"></label>
                    <input type="radio" name="color" id="swatch-12" checked>
                    <label class="swatch swatch-color js-swatch" for="swatch-12" aria-label="Red" data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="color: #C93A3E"></label>
                    <input type="radio" name="color" id="swatch-13">
                    <label class="swatch swatch-color js-swatch" for="swatch-13" aria-label="Grey" data-bs-toggle="tooltip" data-bs-placement="top" title="Grey" style="color: #E4E4E4"></label>
                  </div>
                </div>
              </div>
              <div class="product-single__addtocart">
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div><!-- .qty-control -->
                <button type="submit" class="btn btn-primary btn-addtocart js-open-aside" data-aside="cartDrawer">Add to Cart</button>
              </div>
            </form>
            <div class="product-single__addtolinks">
              <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg><span>Add to Wishlist</span></a>
              <share-button class="share-button">
                <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                  <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_sharing" /></svg>
                </button>
                <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                  <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                  <div id="Article-share-template__main" class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                    <div class="field grow mr-4">
                      <label class="field__label sr-only" for="url">Link</label>
                      <input type="text" class="field__input w-full" id="url" value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health" placeholder="Link" onclick="this.select();" readonly="">
                    </div>
                    <button class="share-button__copy no-js-hidden">
                      <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                      </svg>
                      <span class="sr-only">Copy link</span>
                    </button>
                  </div>
                </details>
              </share-button>
              <script src="{{asset('Frontend/js/details-disclosure.js')}}" defer="defer"></script>
              <script src="{{asset('Frontend/js/share.js')}}" defer="defer"></script>
            </div>
            <div class="product-single__meta-info mb-0">
              <div class="meta-item">
                <label>SKU:</label>
                <span>N/A</span>
              </div>
              <div class="meta-item">
                <label>Categories:</label>
                <span>Casual & Urban Wear, Jackets, Men</span>
              </div>
              <div class="meta-item">
                <label>Tags:</label>
                <span>biker, black, bomber, leather</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- /.quickview position-fixed -->
  
  <!-- Newsletter Popup -->
  <div class="modal fade" id="newsletterPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog newsletter-popup modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="row p-0 m-0">
          <div class="col-md-6 p-0 d-none d-md-block">
            <div class="newsletter-popup__bg h-100 w-100">
              <img loading="lazy" src="{{asset('Frontend/images/newsletter-popup.jpg')}}" class="h-100 w-100 object-fit-cover d-block" alt="">
            </div>
          </div>
          <div class="col-md-6 p-0 d-flex align-items-center">
            <div class="block-newsletter w-100">
              <h3 class="block__title">Sign Up to Our Newsletter</h3>
              <p>Be the first to get the latest news about trends, promotions, and much more!</p>
              <form action="https://uomo-html.flexkitux.com/Demo1/index.html" class="footer-newsletter__form position-relative bg-body">
                <input class="form-control border-2" type="email" name="email" placeholder="Your email address">
                <input class="btn-link fw-medium bg-transparent position-absolute top-0 end-0 h-100" type="submit" value="JOIN">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.newsletter-popup position-fixed -->

  <!-- Go To Top -->
  <div id="scrollTop" class="visually-hidden end-0"></div>

  <!-- Page Overlay -->
  <div class="page-overlay"></div><!-- /.page-overlay -->

  <!-- External JavaScripts -->
  <script src="{{asset('Frontend/js/plugins/jquery.min.js')}}"></script>
  <script src="{{asset('Frontend/js/plugins/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Frontend/js/plugins/bootstrap-slider.min.js')}}"></script>
  <!-- <script src="js/plugins/jquery.waypoints.min.js"></script> -->
  <!-- <script src="js/plugins/sticky.min.js"></script> -->
  <script src="{{asset('Frontend/js/plugins/swiper.min.js')}}"></script>
  <script src="{{asset('Frontend/js/plugins/countdown.js')}}"></script>

  <!-- Footer Scripts -->
  <script src="{{asset('Frontend/js/theme.js"></script>

</body>
</html>
@endsection