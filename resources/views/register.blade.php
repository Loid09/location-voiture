<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental-Car</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- site favicon -->
  @include('csslink')

</head>
<body>

  @include('header')
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Create New account</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>Registration</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- registration-section start -->
  <section class="registration-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="registration-block text-center">
            <div class="registration-block-inner">
              <h3 class="title">create  your account</h3>
              <form class="registration-form" method="POST" action="/register">
                {{ csrf_field() }}
                
                <div class="frm-group">
                  <input type="text" name="name" id="name" placeholder="Your Username">
                </div>
                <div class="frm-group">
                  <input type="email" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="frm-group">
                  <input type="password" name="password" id="password" placeholder="Your Password">
                </div>
                <div class="frm-group">
                  <input type="submit" value="create new account">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- registration-section end -->
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