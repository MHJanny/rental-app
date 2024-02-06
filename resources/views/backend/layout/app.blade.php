@include('backend.partials.header')
<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    @include('backend.partials.top-bar')
     <!--end top header-->

       <!--start sidebar -->
       @include('backend.partials.left-menu')
       <!--end sidebar -->

       <!--start content-->
         @yield('page-content')
       <!--end page main-->

  </div>
  <!--end wrapper-->

  @include('backend.partials.footer')
  