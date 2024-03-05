@extends('frontend.layout.app')

@section('page-content')

<!--********************************
  Code Start From Here 
	******************************** -->

<!--==============================
	  Hero area Start
	==============================-->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Tour Booking</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Tours</li>
                    <li>Peek Mountain View</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--==============================
	  Hero Area End
	==============================-->

<!--==============================
	  Tours Booking Area Start
	==============================-->
<section class="space-bottom">
    <div class="outer-wrap mx-auto">
        <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
            <button class="tab-button active" data-filter=".tab-content1"><i class="fas fa-info-circle"></i>
                Information</button>

            <button class="tab-button" data-filter=".tab-content3"><i class="fas fa-map-marker-alt"></i>
                Location</button>
            <button class="tab-button" data-filter=".tab-content4"><i class="fas fa-camera-retro"></i> Gallery</button>
            <button class="tab-button" data-filter=".tab-content5"><i class="fas fa-comments"></i> Reviews</button>
        </div>
        <div class="container">
            <div class="shadow-content1">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="filter-active tour-booking-active">
                            <div class="filter-item tab-content1">
                                <div class="info-image">
                                    @if ($property->media->isNotEmpty())
                                        <img src="{{ $property->media[0]->getUrl() }}" alt="tours-img">
                                    @else 
                                    <img src="{{ asset('assets/images/property.jpg') }}">                                        
                                    @endif

                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="tab-title">{{$property->title}}</h2>
                                    </div>
                                    <div class="col-auto">
                                        <p class="tour-price">৳ <strong>{{$property->price}}</strong></p>
                                    </div>
                                </div>
                               
                                {!! $property->description !!}
                                <div class="filter-item tab-content1">
                                    <a href="{{route('booking.create', ['uuid' => $property->uuid])}}" class="vs-btn style4">Book Now</a>
                                </div>
                            </div>
                            <div class="filter-item tab-content3">
                                <h2 class="tab-title">Location</h2>
                                <p class="tab-text">{{$property->address}}</p>
                                <div class="google-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327444.36007492756!2d8.306929323325667!3d50.12074543827437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1695590486221!5m2!1sen!2sbd"
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="filter-item tab-content4">
                                <h2 class="tab-title">Top Gallery</h2>
                                <p class="tab-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula
                                    eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis
                                    parturient montes,
                                    nascetur ridiculus mus</p>
                                <div class="gx-gy gallery-mesonary">
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-1.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-1.jpg') }}"
                                                    class="popup-image"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-2.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-2.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-3.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-3.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-4.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-4.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-5.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-5.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-6.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-6.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-7.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-7.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-8.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-8.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="gallery-img5">
                                            <img src="{{ asset('assets/img/gallery/gallery-3-9.jpg') }}" alt="images">
                                            <div class="gallery-content">
                                                <a href="{{ asset('assets/img/gallery/gallery-3-9.jpg') }}"
                                                    class="gallery-img"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-item tab-content5">
                                <h2 class="tab-title">Reviews</h2>
                                <p class="tab-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula
                                    eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis
                                    parturient montes,
                                    nascetur ridiculus mus</p>



                                <div class="rating-wrap">
                                    <div class="rating-author">
                                        <div class="author-image">
                                            <img src="{{ asset('assets/img/author/rating-author.jpg') }}"
                                                alt="Rating Author">
                                        </div>
                                        <div class="author-info">
                                            <h3 class="author-text h5">Malisha Beco</h3>
                                            <span class="author-digi">CEO, Vecuro</span>
                                        </div>
                                    </div>
                                    <p class="rating-text">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis in the Theme natoque penatibus et
                                        magnis dis
                                        parturient montes, nascetur ridiculus mus.”</p>



                                    <!-- Comment Form -->
                                    <div class="vs-comment-form">
                                        <div id="respond" class="comment-respond">
                                            <h3 class="blog-inner-title">Post a Comment</h3>

                                            <div class="row rating-post">
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Rating</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Comfort</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Food</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Hospitality</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Hygiene</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-auto">
                                                    <div class="form-group rating-select">
                                                        <label>Reception</label>
                                                        <p class="stars">
                                                            <span>
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Your Name">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="col-12 form-group">
                                                    <textarea class="form-control"
                                                        placeholder="Write Your Comment"></textarea>
                                                </div>
                                                <div class="col-12 ">
                                                    <div class="custom-checkbox notice">
                                                        <input id="wp-comment-cookies-consent"
                                                            name="wp-comment-cookies-consent" type="checkbox"
                                                            value="yes">
                                                        <label for="wp-comment-cookies-consent"> Save my name, email,
                                                            and website in this browser for the next time I
                                                            comment.</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <button class="vs-btn style4 w-100">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
	  Tours Booking Area End
	==============================-->

<!--********************************
    Code Ends Here 
	******************************** -->

@endsection