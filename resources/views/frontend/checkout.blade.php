@extends('frontend.layout.app')
@section('page-content')
  <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Checkout</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Shop</li>
            <li>Checkout</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="vs-checkout-wrapper space">
    <div class="container">
      <livewire:checkout-table :uuid="$property->uuid">
    </div>
  </section>
  @endsection
  