<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental-Car</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.jpg') }}"/>
  <!-- site favicon -->
  @include("csslink")

</head>
<body>

  <!-- preloader start -->
  @include('header')

  <!-- inner-apge-banner start -->
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

  <div class="container pt-120">
    <div style="width:50%;">
      @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
      @endif
    </div>
  </div>

  <!-- reservation-section start -->
  <section class="reservation-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="reservation-details-area">
            <div class="thumb">
              <img src="{{ asset('storage/'.$car->image) }}" alt="images">
            </div>
            <div class="content">
              <div class="content-block">
                <h3 class="car-name"> {{ $car->name }}</h3>
                <span class="price"> {{ $car->prix }} per day</span>
                <p>{{ $car->description }}
                </p>
              </div>
              <form class="reservation-form" method="post" action="/emprunt">
                {{ csrf_field() }}

                <div class="content-block">
                  <h3 class="title">extra benifit and fee</h3>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="date1">Date debut emprunt</label>
                      <input type='datetime-local' id="date1" class='form-control' data-language='en' placeholder="Pickup Date/Time" name="date_debut_emprunt">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="date2">Date fin emprunt</label>
                      <input type='datetime-local' id="date2" class='form-control' data-language='en' placeholder="Drop Off Date/Time" name="date_fin_emprunt">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="hidden" name="car_id" value="{{ $car->id }}">
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">payment method</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <select name='payement'>
                        <option>Select Payment Methos</option>
                        <option value='Paypal'>Paypal</option>
                        <option value='Payoneer'>Payoneer</option>
                        <option value='Visa Card'>Visa Card</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">addisonal information</h3>
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <textarea placeholder="Write addisonal information in here" name='info'></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button type="reset" class="cmn-btn bg-black">Cancel</button>
                      <button type="submit" class="cmn-btn">reservation</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-all-cars">
              <h4 class="widget-title">Car Features</h4>
              <ul class="cars-list">
                <li><a href="#0">Name : {{$car->name}}</a></li>
                <li><a href="#0">Model : {{$car->modele['name']}}</a></li>
                <li><a href="#0">Marque : {{$car->marque['name']}}</a></li>
                <li><a href="#0">Vitesse : {{$car->vitesse}}</a></li>
                <li><a href="#0">Price : {{$car->prix}}</a></li>
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