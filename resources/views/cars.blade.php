<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental-Car</title>
  <!-- site favicon -->
  @include('csslink')
  
</head>
<body>
  <!--  header-section start  -->
  @include('header')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Cars</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#0">Cars</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- car-search-section start -->
  <section class="car-search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-filter-area">
            <div class="car-search-filter-form-area">
              <form class="car-search-filter-form">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="cart-sort-field">
                      <span class="caption">Sort by : </span>
                      <select>
                        <option>Name</option>
                        <option>Price</option>
                        <option>Models</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                    <input type="text" name="car_search" id="car_search" placeholder="Search by name........">
                    <button class="search-submit-btn">Search</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="view-style-toggle-area">
              <button class="view-btn list-btn"><i class="fa fa-bars"></i></button>
              <button class="view-btn grid-btn active"><i class="fa fa-th-large"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-8">
          <div class="car-search-result-area grid--view row mb-none-30">
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/4.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title">pajero rang</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/5.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title">mirage range</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/6.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title">Volkswagen</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/7.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title">Rools royce</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/8.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title"> Toyota</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="col-md-6 col-12">
              <div class="car-item">
                <div class="thumb bg_img" data-background="assets/images/cars/9.jpg"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title"> Porsche</h4>
                    <span class="price">start form $20 per day</span>
                    <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                    <a href="#0" class="cmn-btn">rent car</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i>model 2014ib</li>
                      <li><i class="fa fa-tachometer"></i>32000 KM</li>
                      <li><i class="fa fa-sliders"></i>auto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-price-filter">
              <h4 class="widget-title">price filter</h4>
              <div class="widget-body">
                <div id="slider-range"></div>
                <div class="filter-price-result">
                  <input type="text" id="amount" readonly><span>(Per Day)</span>
                </div>
              </div>
            </div><!-- widget end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- car-search-section end -->

  <!-- footer-section start -->
  <!-- footer-section start -->
  <footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-about">
              <div class="widget-about-content">
                <a href="index.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum </p>
                <ul class="social-links">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">our cars</h4>
              <ul>
                <li><a href="#0">mistubishi lancer</a></li>
                <li><a href="#0">forester subar</a></li>
                <li><a href="#0">mirage ange</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">useful link</h4>
              <ul>
                <li><a href="#0">search</a></li>
                <li><a href="#0">contact</a></li>
                <li><a href="#0">car list</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-address">
              <h4 class="widget-title">contact with us</h4>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>Benin, Abomey-Clavi / UAC </span>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <span>abc@email.com</span>
                </li>
                <li>
                  <i class="fa fa-phone-square"></i>
                  <span>+229 53695874</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @include("jslink")

</body>

</html>