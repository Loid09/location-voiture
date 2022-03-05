<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental-Car</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- site favicon -->
  @include(csslink)
    
</head>
<body>

  @include('header')
  <!--  header-section end  -->

  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Rent</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#0">Car</a></li>
            <li>Rent</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- reservation-section start -->
  <section class="reservation-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="reservation-details-area">
            <div class="thumb">
              <img src="assets/images/cars/b1.jpg" alt="images">
            </div>
            <div class="content">
              <div class="content-block">
                <h3 class="car-name">forester subar</h3>
                <span class="price">$20 per day</span>
                <p>Lorem ipsum dolor sit amet, urna sit sociis lacus sem turpis magna, montes euismod eros nu dignsim etiam elementum sed tellus sed. Sollicitudin occaecati ut
                </p>
              </div>
              <div class="reservation-form">
                <div class="content-block">
                  <h3 class="title">extra benifit and fee</h3>
                  <div class="row">
                    <div class="col-lg-6">
                      <p>Date de location</p>
                    </div>
                    <div class="col-lg-6">
                     <p>Date de location</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <p>Date de location</p>
                    </div>
                    <div class="col-lg-6">
                     <p>Date de location</p>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">Status</h3>
                  <p>Rendu</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-all-cars">
              <h4 class="widget-title">Car Features</h4>
              <ul class="cars-list">
                <li><a href="#0">Name</a></li>
                <li><a href="#0">Model</a></li>
                <li><a href="#0">Marque</a></li>
                <li><a href="#0">Vitesse</a></li>
                <li><a href="#0">Price</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- reservation-section end -->

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

  @include("jslink")

</body>

</html>