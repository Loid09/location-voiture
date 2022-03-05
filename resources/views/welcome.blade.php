<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental-Car</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  @include('csslink')

</head>
<body>
  <!-- preloader and header start -->
  @include('header')
  <!-- banner-section start  -->
  <section class="banner-section bg_img" data-background="assets/images/banner.jpg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="banner-content">
            <h1 class="title">find your own car</h1>
            <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla.</p>
            <a href="car-list-one.html" class="cmn-btn">see all vehicles</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="banner-img">
            <img src="assets/images/elements/banner-man.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- banner-section end  -->
  <!-- search-section start -->
  <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">Search a Car</h3>
            <form class="car-search-form">
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select>
                    <option value="1" selected>By Category</option>
                    <option value="2">Car type one</option>
                    <option value="3">Car type Two</option>
                    <option value="4">Car type Three</option>
                    <option value="5">Car type Four</option>
                    <option value="6">Car type Five</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select>
                    <option value="1" selected>By Model</option>
                    <option value="2">Car type one</option>
                    <option value="3">Car type Two</option>
                    <option value="4">Car type Three</option>
                    <option value="5">Car type Four</option>
                    <option value="6">Car type Five</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select>
                    <option value="1" selected>By brand</option>
                    <option value="2">Car type one</option>
                    <option value="3">Car type Two</option>
                    <option value="4">Car type Three</option>
                    <option value="5">Car type Four</option>
                    <option value="6">Car type Five</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <select>
                    <option value="1" selected>By price</option>
                    <option value="2">Car type one</option>
                    <option value="3">Car type Two</option>
                    <option value="4">Car type Three</option>
                    <option value="5">Car type Four</option>
                    <option value="6">Car type Five</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="cmn-btn btn-radius">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- search-section end -->

  <!-- features-section start -->
  <section class="features-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">our awseome features</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="content">
              <h4 class="title">expert drivers</h4>
              <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
            </div>
          </div>
        </div><!-- icon-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-rocket"></i></div>
            <div class="content">
              <h4 class="title">fast services</h4>
              <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
            </div>
          </div>
        </div><!-- icon-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
            <div class="content">
              <h4 class="title">customer support</h4>
              <p>Tristique ac felis ultr egestelend sed metus eloo dui, et vestulum rutrum nisl tempus </p>
            </div>
          </div>
        </div><!-- icon-item end -->
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- rent-step-section start -->
  <section class="rent-step-section pb-120">
    <div class="element-one"><img src="assets/images/elements/car.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="block-area">
            <div class="block-header">
              <h2 class="title">Welcome to Rental-Car</h2>
              <p>Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat rutrum purus, augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique tempor scelerisque dictum dui donec urna, consequat scelerisque eu ut, ornare ut. Rutrum eget</p>
            </div>
            <div class="block-body">
              <ul class="num-list">
                <li><span class="num">01</span>Download Car rent app</li>
                <li><span class="num">02</span>choose the car you like</li>
                <li><span class="num">03</span>car reservation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- rent-step-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Choose a Rental Car</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider owl-carousel">
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/1.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">Categorie</h4>
                  <span class="price">$20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="reservation.html" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>Marque</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/2.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">forester subar</h4>
                  <span class="price">$50 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="reservation.html" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>Marque</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/3.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">subaru liberty</h4>
                  <span class="price">$20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="reservation.html" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>Marque</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/1.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">mistubisshi</h4>
                  <span class="price">$120 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="reservation.html" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>Marque</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/2.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">forester subar</h4>
                  <span class="price">$60 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="reservation.html" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>Marque</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
        <div class="col-lg-4">
          
        </div>
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- overview-section start -->
  <section class="overview-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="block-area">
            <div class="block-header">
              <h2 class="title">We provided all Kind of Rental Services</h2>
              <p>Feugiat tortor mauris, vitae magna parturient nec, velit bibensectetuer eros urna nunc suspendisse. Elit odio lobortis adipiscing tristiqucursus eu, hendrerit nulla voluptatem wisi Lorem ipsum dolor sit amet, velum magna, fusce ut dolor sit sed et habitant. Sociis tincidunt velit. Collis dictum fames mauris magna, nulla nunc amet, in magna. Amet nmmy eget et, orci nunc nam, condimentum donec tortor et magna </p>
            </div>
            <div class="block-body">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">total car</span>
                    <span>3497</span>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">car rent</span>
                    <span>4574</span>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">experience</span>
                    <span>25</span><span class="counter-text">Y</span>
                  </div>
                </div><!-- counter-item end -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="overview-img">
            <div class="img-container"><img src="assets/images/overview/2.jpg" alt="image"></div>
            <div class="img-container"><img src="assets/images/overview/1.jpg" alt="image"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- overview-section end -->

  <!-- testimonial-section start -->
  <section class="testimonial-section overlay-black pt-120 pb-120 bg_img" data-background="assets/images/testimonial-bg.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="testimonial-slider owl-carousel">
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-section end -->

  <!-- subscribe-section start -->
  <section class="subscribe-section overlay-main bg_img pt-120 pb-120" data-background="assets/images/bg1.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="subscribe-content-area text-center">
            <h2 class="title text-white">Subscribe Our News Latters for Get Update </h2>
            <form class="subscribe-form">
              <input type="email" name="subs_email" id="subs_email" placeholder="Enter your email address">
              <button type="submit" class="form-icon"><i class="fa fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-section end -->

  <!-- consulting-section start -->
  <section class="consulting-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row mb-none-30">
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="assets/images/brand-logo/1.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="assets/images/brand-logo/2.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="assets/images/brand-logo/3.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="assets/images/brand-logo/4.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="consulting-from-area">
            <h2 class="title">Free Consultation</h2>
            <form class="consulting-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="cons_f_name" id="cons_f_name" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="cons_l_name" id="cons_l_name" placeholder="Last Name">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="email" name="cons_email" id="cons_email" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" name="cons_phone" id="cons_phone" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message"></textarea>
              </div>
              <button type="submit" class="cmn-btn">submit now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- consulting-section end -->

  <!-- footer-section start -->
  @include('footer')
  <!-- footer-section end -->


  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->
  @include('jslink')
  <!-- jquery js link -->
  
</body>

</html>