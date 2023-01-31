<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental Service HTML Template</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- site favicon -->
  @include('csslink')

</head>
<body>

  @include('header')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">History of my rentals</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>Rentals</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- features-section start -->
  <section class="blog-section pb-120 pt-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">History of my rentals</h2>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        @foreach($emprunts as $emprunt)
          <div class="col-lg-4 col-sm-6">
            <div class="post-item shadow-none">
              <div class="thumb">
                <img src="assets/images/cars/1.jpg" alt="image">
                <a href="#0" class="post-date">16<br>Dec</a>
              </div>
              <div class="content">
                <div style="display: flex; flex-direction: row; justify-content:space-between;">
                  <h3 class="post-title pb-2"> {{$emprunt->car["name"]}} </h3>
                  @if($emprunt->car["etat"] == "Render")
                    <h4 style="color: green;">{{$emprunt->car["etat"]}}</h4>
                  @elseif($emprunt->car["etat"] == "Waiting")
                    <h4 style="color: yellow;">{{$emprunt->car["etat"]}}</h4>
                  @else
                    <h4 style="color: blu;">{{$emprunt->car["etat"]}}</h4>
                  @endif
                </div>
                <a href="history-details.html" class="border-btn">read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section section-bg pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">The Best Rent Cars</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider-two owl-carousel">
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s3.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s4.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- footer-section start -->
  @include('footer')
  
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