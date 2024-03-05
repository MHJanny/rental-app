<div>
    <div class="woocommerce-checkout-payment">
        <ul class="wc_payment_methods payment_methods methods">
          <li class="wc_payment_method payment_method_bacs">
            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
            <label for="payment_method_bacs">Direct bank transfer</label>
            <div class="payment_box payment_method_bacs" style="display: block;">
              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                Your order will not be shipped until the funds have cleared in our account.</p>
            </div>
          </li>
          <li class="wc_payment_method payment_method_cheque">
            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
            <label for="payment_method_cheque">Cheque Payment</label>
            <div class="payment_box payment_method_cheque">
              <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
              </p>
            </div>
          </li>
          <li class="wc_payment_method payment_method_cod">
            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method">
            <label for="payment_method_cod">Cash On Delivery</label>
            <div class="payment_box payment_method_cod">
              <p>Pay with cash upon delivery.</p>
            </div>
          </li>
        </ul>
        <div class="form-row place-order pt-lg-2">
          <button type="submit" class="vs-btn style4">Place order</button>
        </div>
      </div>
</div>
