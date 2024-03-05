<div>


  <form class="woocommerce-checkout">
    <div class="row ">
      <div class="col-lg-6">
        <h2 class="h4">Billing Details</h2>
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" wire:model.blur='firstName' id="firstName" class="form-control" placeholder="First Name">
            @error('firstName')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 form-group">
            <input type="text" wire:model.blur='lastName' name="lastName" id="lastName" class="form-control" placeholder="Last Name">
            @error('lastName')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 form-group">
            <input type="text" wire:model.blur='company' name="company" id="company" class="form-control" placeholder="Your Company Name">
            @error('company')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 form-group">
            <input type="text" wire:model.blur='address1' name="address1" class="form-control" placeholder="Street Address">
            @error('address1')
            <span class='text-danger'>{{$message}}</span>
            @enderror
            <input type="text" wire:model.blur='address2' name="address2" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
            @error('address2')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 form-group">
            <input type="text" wire:model.blur='city' name="city" id="city" class="form-control" placeholder="Town / City">
            @error('city')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 form-group">
            <input type="text" wire:model.blur='country' name="country" id="country" class="form-control" placeholder="Country">
            @error('country')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 form-group">
            <input type="text" wire:model.blur='zip' name="zip" id="zip" class="form-control" placeholder="Postcode / Zip">
          </div>
          @error('zip')
          <span class='text-danger'>{{$message}}</span>
          @enderror
          <div class="col-12 form-group">
            <input type="text" wire:model.blur='email' name="email" id="email" class="form-control" placeholder="Email Address">
            @error('email')
            <span class='text-danger'>{{$message}}</span>
            @enderror
            <input type="text" wire:model.blur='phone' name="phone" id="phone" class="form-control" placeholder="Phone number">
            @error('phone')
            <span class='text-danger'>{{$message}}</span>
            @enderror
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-12 form-group">
          <textarea wire:model.blur='note' name="note" id="note" cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
          @error('note')
          <span class='text-danger'>{{$message}}</span>
          @enderror
        </div>
      </div>
    </div>
    <h4 class="mt-4 pt-lg-2">Your Order</h4>
    <div class="table-responsive">
      <table class="cart_table">
        <thead>
          <tr>
            <th class="cart-col-image">Image</th>
            <th class="cart-col-productname">Product Name</th>
            <th class="cart-col-price">Price</th>
            <th class="cart-col-quantity">Quantity</th>
            <th class="cart-col-total">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cart_item">
            <td data-title="Product">
              @if ($property->media->isNotEmpty())
              <a class="cart-productimage" href="shop-details.html"><img width="91" height="91" src="{{ $property->media[0]->getUrl() }}" alt="Image"></a>
              @endif
            </td>
            <td data-title="Name">
              <a class="cart-productname" href="shop-details.html">{{$property->title}}</a>
            </td>
            <td data-title="Price">
              <span class="amount"><bdi><span>৳ </span>{{$property->price}}</bdi></span>
            </td>
            <td data-title="Quantity">
              <strong wire:click="decrementQuantity" class="btn btn-primary product-quantity">-</strong>
              <strong wire:model="quantity" class="product-quantity">{{$quantity}}</strong>
              <strong wire:click="incrementQuantity" class="btn btn-secondary product-quantity">+</strong>
            </td>
            <td data-title="Total">
              <span class="amount"><bdi><span>৳ </span>{{$property->price * $quantity}}</bdi></span>
            </td>
          </tr>
        </tbody>
        <tfoot class="checkout-ordertable">
          <tr class="cart-subtotal">
            <th>Coupon</th>
            <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">@if($couponValue) ৳</span>{{$couponValue}}</bdi></span> @endif</td>
          </tr>
          <tr class="order-total">
            <th>Total</th>
            <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">৳</span>{{$property->price * $quantity - $couponValue}}</bdi></span></strong>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="mt-lg-3">
      <div class="row">
        @session('coupon-not-found')
        <span class="alert alert-danger">{{$value}}</span>
        @endsession
        <div class="col-lg-4">
          <div class="form-group">
            <input wire:model.live='coupon' type="text" class="form-control" placeholder="Write your coupon code">
          </div>
          <div class="form-group">
            <button wire:click='applyCoupon()' type="button" class="vs-btn style4">Apply coupon Code</button>
          </div>
        </div>
      </div>

    </div>
    <div class="mt-lg-3">
      <div class="woocommerce-checkout-payment">
        <div class="form-check">
          <input wire:model="paymentMethod" class="form-check-input" type="radio" name="paymentMethod" id="sslcommerz" value="{{App\Constants\PaymentMethod::SSLCOMMERZ}}">
          <label class="form-check-label" for="sslcommerz">
            SSL Commerz
          </label>
        </div>
        <div class="form-check">
          <input wire:model="paymentMethod" class="form-check-input" type="radio" name="paymentMethod" id="stripe" value="{{App\Constants\PaymentMethod::STRIPE}}">
          <label class="form-check-label" for="stripe">
            Stripe
          </label>
        </div>
        <div class="form-check">
          @error('paymentMethod')
          <span class='text-danger'>{{$message}}</span>
          @enderror
        </div>
        <div class="form-row place-order pt-lg-2">
          <button wire:click.prevent="save()" type="submit" class="vs-btn style4">Place order</button>
        </div>
      </div>
    </div>



</div>
</form>
</div>