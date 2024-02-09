@extends('layouts.frontend')

@section('page-content')

<!--********************************
  Code Start From Here 
	******************************** -->

<!--==============================
	  Hero area Start
	==============================-->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Property</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Tours</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
	  Hero Area End
	==============================-->

<!--==============================
	  Tours Area Start
	==============================-->
<section class="space-bottom">
    <div class="outer-wrap">
        <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
            <button class="tab-button active" data-filter="*"><i class="fas fa-sort-alpha-up"></i> Name (A - Z)</button>
            <button class="tab-button" data-filter=".date"><i class="fas fa-calendar-alt"></i> Date</button>
            <button class="tab-button" data-filter=".hightTolow"><i class="fas fa-upload"></i> Price Low to
                High</button>
            <button class="tab-button" data-filter=".lowToHigh"><i class="fas fa-download"></i> Price Hight to
                Low</button>
        </div>
        <div class="container">
            <div class="shadow-content1">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row filter-active tours-active">
                            <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                                <div class="package-style1">
                                    <div class="package-img">
                                        <a href="/rentals/1"><img src="assets/img/tours/tour-1-7.jpg"
                                                alt="Package Image"></a>
                                    </div>
                                    <div class="package-content">
                                        <h3 class="package-title"><a href="/rentals/1">Discover Destinations</a>
                                        </h3>
                                        <p class="package-text">Las Vegas, Nevada</p>
                                        <div class="package-footer">
                                            <span class="package-price">$279</span>
                                            <a href="/rentals/1" class="vs-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                                <div class="package-style1">
                                    <div class="package-img">
                                        <a href="/rentals/1"><img src="assets/img/tours/tour-1-2.jpg"
                                                alt="Package Image"></a>
                                    </div>
                                    <div class="package-content">
                                        <h3 class="package-title"><a href="/rentals/1">Explore Our World</a></h3>
                                        <p class="package-text">Las Vegas, Nevada</p>
                                        <div class="package-footer">
                                            <span class="package-price">$199</span>
                                            <a href="/rentals/1" class="vs-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                                <div class="package-style1">
                                    <div class="package-img">
                                        <a href="/rentals/1"><img src="assets/img/tours/tour-1-3.jpg"
                                                alt="Package Image"></a>
                                    </div>
                                    <div class="package-content">
                                        <h3 class="package-title"><a href="/rentals/1">Guided Adventures</a></h3>
                                        <p class="package-text">Las Vegas, Nevada</p>
                                        <div class="package-footer">
                                            <span class="package-price">$399</span>
                                            <a href="/rentals/1" class="vs-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 filter-item date">
                                <div class="package-style1">
                                    <div class="package-img">
                                        <a href="/rentals/1"><img src="assets/img/tours/tour-1-1.jpg"
                                                alt="Package Image"></a>
                                    </div>
                                    <div class="package-content">
                                        <h3 class="package-title"><a href="/rentals/1">Peek Mountain View</a>
                                        </h3>
                                        <p class="package-text">Las Vegas, Nevada</p>

                                        <div class="package-footer">
                                            <span class="package-price">$299</span>
                                            <a href="/rentals/1" class="vs-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="vs-pagination pt-lg-2">
                            <ul>
                                <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-area tours-sidebar">
                            <div class="widget">
                                <h3 class="widget_title">Plan Your Trip</h3>
                                <p class="widget_text">Donec rutrum congue leo elit In a eget malesuadga blandit.</p>
                                <form class="booking-form">
                                    <span class="text-danger">*</span>
                                    <div class="form-group ">
                                        <i class="fas fa-compass"></i>
                                        <input type="text" name="search" placeholder="Where To?" />
                                    </div>
                                    <span class="text-danger">*</span>
                                    <div class="form-group">
                                        <i class="fas fa-calendar-alt"></i>
                                        <select class="form-select" name="type">
                                            <option value="" selected="selected" disabled="disabled" hidden="">Select
                                                Type</option>
                                            <option value="">Type 1</option>
                                            <option value="">Type 2</option>
                                            <option value="">Type 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-calendar-alt"></i>
                                        <input type="date" name="startdate" id="">
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-calendar-alt"></i>
                                        <input type="date" name="startdate" id="">
                                    </div>
                                    <button class="vs-btn style4 w-100">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
	  Tours Area End
	==============================-->
@endsection