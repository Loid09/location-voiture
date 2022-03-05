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

  <!-- preloader start -->
  @include('header')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">login</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- login-section start -->
  <section class="login-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-block text-center">
            <div class="login-block-inner">
              <h3 class="title">login your account </h3>
              <form class="login-form" method="POST" action="/login">
                {{ csrf_field() }}

                <div class="frm-group text-center">
                  <a href="#0" class="facebook">facebook</a>
                  <a href="#0" class="google">google plus</a>
                  <a href="#0" class="twitter">twitter</a>
                </div>
                <div class="frm-group text-center">
                  <span class="or">or</span>
                </div>
                <div class="frm-group">
                  <input type="email" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="frm-group">
                  <input type="password" name="password" id="password" placeholder="Your Password">
                </div>
                <div class="frm-group">
                  <input type="submit" value="login account">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login-section end -->

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