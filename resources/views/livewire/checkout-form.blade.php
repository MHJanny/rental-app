<div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Left Column: Billing Details Form -->
                <h2 class="h4">Billing Details</h2>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" wire:model.blur="$firstName" class="form-control" name="first_name" placeholder="First Name">
                        @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
                    </div>
                    <div class="col-12 form-group">
                        <input type="text" class="form-control" name="adress1" placeholder="Street Address">
                        <br>
                        <input type="text" class="form-control" name="address2" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
                  <div class="col-12 form-group">
                      <input type="text" class="form-control" name="city" placeholder="Town / City">
                  </div>
                </div>
        </div>
          <div class="col-lg-6">
            <h4>Billing Address</h4>
            <div class="col-md-12 form-group">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
            <div class="col-md-12 form-group">
                <input type="text" class="form-control" 
               value="{{auth()->user()->name}}"
                placeholder="Postcode / Zip">
            </div>
            <div class="col-12 form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
                <br>
                <input type="tel" name="phone" class="form-control" placeholder="Phone number">
            </div>
            <div class="col-12 form-group">
                <textarea name="note" cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
            </div>
      
        </div>
    </div>
</div>
