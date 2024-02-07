@include('frontend.partials.header')

<body>

  <!--********************************
  Code Start From Here 
	******************************** -->

  @include('frontend.partials.nav')
  @yield('page-content')

  @include('frontend.partials.footer')