<!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="index.html"><img src="assets/img/logo.svg" alt="Travolo"></a>
      </div>
      <div class="vs-mobile-menu">
        <ul>
          <li class="menu-item">
            <a href="index.html">Home</a>
          </li>
          <li class="menu-item">
            <a href="tours.html">Properties</a>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>




  <!--==============================
    Cart Side bar
  ============================== -->
  <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
      <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget widget_shopping_cart">
        <h3 class="widget_title">Shopping cart</h3>
        <div class="widget_shopping_cart_content">
          <ul class="cart_list">
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-1.png" alt="Cart Image" />Modern Cow Boy Hat</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>100.00</span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html"><img
                  src="assets/img/products/p-1-2.png" alt="Cart Image" />Cat Eye Sunglasses</a>
              <span class="quantity">
                1 × <span class="amount"><span>$</span>10.00</span>
              </span>
            </li>
          </ul>
          <div class="total">
            <strong>Subtotal:</strong> <span class="amount"><span>$</span>110.00</span>
          </div>
          <div class="buttons">
            <a href="cart.html" class="vs-btn style4">View cart</a>
            <a href="checkout.html" class="vs-btn style4">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--==============================
    Popup Search Box
  ============================== -->
  <div class="popup-search-box d-none d-lg-block  ">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
      <input type="text" class="border-theme" placeholder="What are you looking for">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div>

  <!--==============================
    Header Area
  ==============================-->
  <header class="vs-header header-layout2">
    <div class="header-top">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col d-none d-lg-block">
            <ul class="header-contact">
              <li><i class="fas fa-envelope"></i> <a href="mailto:info@travolo.com">info@travolo.com</a>
              </li>
              <li><i class="fas fa-phone-alt"></i> <a href="tel:02073885619">020 7388 5619</a></li>
            </ul>
          </div>
          <div class="col-auto">
            <div class="header-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-pinterest-p"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="col-auto">
            <a class="vs-btn style2 " href="sign-up.html">Register</a>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-wrapper">
      <div class="sticky-active">
        <div class="container position-relative z-index-common">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto">
              <div class="vs-logo">
                <a href="index.html"><img src="{{asset('frontend/assets/img/logo.svg')}}" alt="logo"></a>
              </div>
            </div>
            <div class="col text-end text-xl-center">
              <nav class="main-menu  menu-style1 d-none d-lg-block">
                <ul>
                  <li class="menu-item">
                      <a href="index.html">Home</a>
                  </li>
                  <li class="menu-item">
                      <a href="tours.html">Properties</a>
                  </li>
                  <li>
                      <a href="contact.html">Contact</a>
                  </li>
                </ul>
              </nav>
              <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
            </div>
            <div class="col-auto d-none d-xl-block">
              <div class="header-btns">
                <button class="sideCartToggler"><i class="fal fa-shopping-bag"></i><span
                    class="button-badge">2</span></button>
                <button class="sideMenuToggler"><i class="fal fa-bars"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>