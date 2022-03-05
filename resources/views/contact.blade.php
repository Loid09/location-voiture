<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rent-Car</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  @include('csslink')

</head>
<body>

  @include('header')

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">get in touch with us</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>contact</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- contact-section start -->
  <section class="contact-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-home"></i></div>
            <div class="content">
              <h4 class="title">office address</h4>
              <p>Benin, Togo<br/> Abomey-Calavi, Lome</p>
            </div>
          </div>
        </div><!-- contact-item end -->
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <div class="content">
              <h4 class="title">Phone Number</h4>
              <p>+ 228 56 98 74 52 <br/> + 229 25 63 1452</p>
            </div>
          </div>
        </div><!-- contact-item end -->
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-envelope-o"></i></div>
            <div class="content">
              <h4 class="title">Email Address</h4>
              <p>abc@email.com <br/> infosupport@email.com</p>
            </div>
          </div>
        </div><!-- contact-item end -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-form-area">
            <h3 class="title">send your messages</h3>
            <form class="contact-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="frm-group">
                    <input type="text" name="contact_name" id="contact_name" placeholder="Name*">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="frm-group">
                    <input type="email" name="contact_email" id="contact_email" placeholder="Email*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="frm-group">
                    <textarea placeholder="Write your comment"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="frm-group">
                    <input type="submit" name="contact_submit" id="contact_submit" value="send your messages">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

  <!-- footer-section start -->
  @include('footer')
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- jquery js link -->
  @include('jslink')
  
</body>

</html>