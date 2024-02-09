@extends('layouts.frontend')
<!--==============================
      Hero Area Start 
    ==============================-->
@section('page-content')

<section class="hero-layout1">
  <div>
    <div class="vs-carousel hero-slider2" data-slide-show="1" data-fade="true">
      <div class="hero-slide hero-mask" data-bg-src="{{asset('assets/img/banner/hero2-bg.jpg')}}">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="hero-content">
                <span class="hero-subtitle">Let's Go Now</span>
                <h1 class="hero-title">Let’s Enjoy Your Trip With Travolo</h1>
                <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo,
                  lacinia eget
                  consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                  convallis at tellus.</p>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-form2" data-bg-src="{{asset('assets/img/banner/map-bg.png')}}">
                <div class="shape-mockup">
                  <img src="{{asset('assets/img/banner/hero-object.png')}}" alt="hero image">
                </div>
                <div>
                  <label class="h3">Where To?</label>
                  <div class="form-group ">
                    <i class="fas fa-compass"></i>
                    <input type="text" name="search" placeholder="Where To?" />
                  </div>
                </div>

                <div>
                  <label class="h3">Type</label>
                  <div class="form-group">
                    <i class="fas fa-thumbtack"></i>
                    <select class="form-select" name="name">
                      <option value="" selected="selected" disabled="disabled" hidden="">Select
                        Type</option>
                      <option value="">Adventure </option>
                      <option value="">Combining</option>
                      <option value="">Sporting</option>
                      <option value="">Domestic</option>
                    </select>
                  </div>
                </div>

                <div>
                  <label class="h3">Start Date</label>
                  <div class="form-group ">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="startdate" placeholder="Where To?" />
                  </div>
                </div>
                <div>
                  <label class="h3">End Date</label>
                  <div class="form-group ">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="enddate" placeholder="Where To?" />
                  </div>
                </div>
                <div>
                  <button class="vs-btn style4">Find Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ============================
        Hero Area End 
==============================-->
<!--==============================
    Tour Package Area Start 
  ==============================-->
<section class="space bg-light shape-mockup-wrap" data-bg-src="{{asset('assets/img/shape/Bg.png')}}">
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
    <img src="{{asset('assets/img/shape/Dot.png')}}" alt="Dots">
  </div>
  <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
    <img src="{{asset('assets/img/shape/circle1.png')}}" alt="Circle">
  </div>
  <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
    <img src="{{asset('assets/img/shape/Plane.png')}}" alt="plane">
  </div>
  <div class="container ">
    <div class="row justify-content-center text-center">
      <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
        <div class="title-area">
          <span class="sec-subtitle">Rentifies Your</span>
          <h2 class="sec-title h1">Best Rent for you</h2>
          <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
            consectetur sed, convgallis at tellus. Vestibulum ac diam sit.</p>
        </div>
      </div>
    </div>
    <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="package-style1">
          <div class="package-img">
            <a href="/rentals/1"><img class="w-100" src="{{asset('assets/img/tours/tour-1-1.jpg')}}" alt="Package Image"></a>
          </div>
          <div class="package-content">
            <h3 class="package-title"><a href="/rentals/1">Peek Mountain View</a></h3>
            <p class="package-text">Las Vegas, Nevada</p>
            <div class="package-footer">
              <span class="package-price">$399</span>
              <a href="/rentals/1" class="vs-btn style4">View Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="package-style1">
          <div class="package-img">
            <a href="/rentals/1"><img class="w-100" src="{{asset('assets/img/tours/tour-1-2.jpg')}}" alt="Package Image"></a>
          </div>
          <div class="package-content">
            <h3 class="package-title"><a href="/rentals/1">Explore Our World</a></h3>
            <p class="package-text">Las Vegas, Nevada</p>
            <div class="package-footer">
              <span class="package-price">$259</span>
              <a href="/rentals/1" class="vs-btn style4">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pt-lg-2">
      <a href="/rentals" class="vs-btn">View More</a>
    </div>
  </div>
</section>


<!-- ==============================
    Testimonail Area Start 
  ==============================-->
<section class="space testimonial-style2" data-bg-src="{{asset('assets/img/bg/testimonial-bg-2.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title-area white-title">
          <span class="sec-subtitle">Our Best Review’s</span>
          <h2 class="sec-title h1">50,000 Happy Clients Around The World</h2>
        </div>
      </div>
    </div>

    <div class="row vs-carousel testimonial-slider2" data-slide-show="2" data-arrows="false" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
      <div class="col-xl-4">
        <div class="testi-style2">
          <div class="testi-body">
            <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet,
              ogflor.”</p>
          </div>
          <h3 class="testi-name">Rodja Heartmann</h3>
          <span class="testi-degi">CEO, Vecuro</span>
          <div class="testi-avater">
            <img src="{{asset('assets/img/testimonial/testimonial-2-1.jpg')}}" alt="customer image">
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="testi-style2">
          <div class="testi-body">
            <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet,
              ogflor.”</p>
          </div>
          <h3 class="testi-name">Rodja Heartmann</h3>
          <span class="testi-degi">CEO, Vecuro</span>
          <div class="testi-avater">
            <img src="{{asset('assets/img/testimonial/testimonial-2-2.jpg')}}" alt="customer image">
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="testi-style2">
          <div class="testi-body">
            <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet,
              ogflor.”</p>
          </div>
          <h3 class="testi-name">Rodja Heartmann</h3>
          <span class="testi-degi">CEO, Vecuro</span>
          <div class="testi-avater">
            <img src="{{asset('assets/img/testimonial/testimonial-2-1.jpg')}}" alt="customer image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==============================
    Testimonail Area End 
  ==============================-->
<!--==============================
      Latest Properties Area Start 
    ==============================-->
<section class="space bg-light shape-mockup-wrap" data-bg-src="{{asset('assets/img/shape/Bg.png')}}">
  <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
    <img src="{{asset('assets/img/shape/Dot.png')}}" alt="Dots">
  </div>
  <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
    <img src="{{asset('assets/img/shape/circle1.png')}}" alt="Circle">
  </div>
  <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
    <img src="{{asset('assets/img/shape/Plane.png')}}" alt="plane">
  </div>
  <div class="container ">
    <div class="row justify-content-center text-center">
      <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
        <div class="title-area">
          <span class="sec-subtitle">Time to pick lates</span>
          <h2 class="sec-title h1">Lates properties for you form ours</h2>
          <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
            consectetur sed, convgallis at tellus. Vestibulum ac diam sit.</p>
        </div>
      </div>
    </div>
    <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="package-style1">
          <div class="package-img">
            <a href="/rentals/1"><img class="w-100" src="{{asset('assets/img/tours/tour-1-1.jpg')}}" alt="Package Image"></a>
          </div>
          <div class="package-content">
            <h3 class="package-title"><a href="/rentals/1">Peek Mountain View</a></h3>
            <p class="package-text">Las Vegas, Nevada</p>
            <div class="package-footer">
              <span class="package-price">$399</span>
              <a href="/rentals/1" class="vs-btn style4">View Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="package-style1">
          <div class="package-img">
            <a href="/rentals/1"><img class="w-100" src="{{asset('assets/img/tours/tour-1-2.jpg')}}" alt="Package Image"></a>
          </div>
          <div class="package-content">
            <h3 class="package-title"><a href="/rentals/1">Explore Our World</a></h3>
            <p class="package-text">Las Vegas, Nevada</p>
            <div class="package-footer">
              <span class="package-price">$259</span>
              <a href="/rentals/1" class="vs-btn style4">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pt-lg-2">
      <a href="/rentals" class="vs-btn">View More</a>
    </div>
  </div>
</section>
@endsection