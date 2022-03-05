<div id="preloader"></div>
  <!-- preloader end -->   

  <!--  header-section start  -->
<header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Benin, Abomey-Calavi / UAC</p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Mon - Fri Day 08:00 am - 5.00 pm</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">
              <div class="login-reg">
                @if(auth()->check())
                  <a href="#">{{ auth()->user()->name }}</a>
                  @if(auth()->user()->role_id == 1)
                    <a href="/admin">Admin</a>
                  @endif
                  <a href="/logout">Logout</a>
                @else
                  <a href="/register">Sign Up</a>
                  <a href="/login">Sign in</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li><a href="/">Home</a></li>
              <li><a href="/cars">cars</a>
              @if(auth()->check())
                <li><a href="/myrentals">My rentals</a>
              @endif
              <li><a href="/contact">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
</header>
  <!--  header-section end  -->