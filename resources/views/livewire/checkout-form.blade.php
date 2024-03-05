<div>
    <div class="row ">
        <div class="col-lg-6">
          <h2 class="h4">Billing Details</h2>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" wire:model.blur='firstName'  id="firstName" class="form-control" placeholder="First Name">
              @error('firstName')
                  <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-md-6 form-group">
              <input type="text" wire:model.blur='lastName'
              name="lastName" id="lastName" class="form-control" placeholder="Last Name">
              @error('lastName')
                  <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-12 form-group">
              <input type="text" wire:model.blur='company'
              name="company" id="company" class="form-control" placeholder="Your Company Name">
              @error('company')
                <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-12 form-group">
              <input type="text" wire:model.blur='address1'
              name="address1" class="form-control" placeholder="Street Address">
              <br>
              @error('address1')
                <span class='text-danger'>{{$message}}</span>
              @enderror
              <input type="text" wire:model.blur='address2'
              name="address2" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
              @error('address2')
                <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-12 form-group">
              <input type="text" wire:model.blur='city'
              name="city" id="city" class="form-control" placeholder="Town / City">
              @error('city')
                <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-md-6 form-group">
              <input type="text" wire:model.blur='country'
              name="country" id="country" class="form-control" placeholder="Country">
              @error('country')
                <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
            <div class="col-md-6 form-group">
              <input type="text" wire:model.blur='zip'
              name="zip" id="zip" class="form-control" placeholder="Postcode / Zip">
            </div>
            @error('zip')
              <span class='text-danger'>{{$message}}</span>
            @enderror
            <div class="col-12 form-group">
              <input type="text" wire:model.blur='email'
              name="email" id="email" class="form-control" placeholder="Email Address">
              <br>
              @error('email')
                <span class='text-danger'>{{$message}}</span>
              @enderror
              <input type="text" wire:model.blur='phone'
              name="phone" id="phone" class="form-control" placeholder="Phone number">
              @error('phone')
                <span class='text-danger'>{{$message}}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="col-12 form-group">
            <textarea wire:model.blur='note'
            name="note" id="note" cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
              @error('note')
                <span class='text-danger'>{{$message}}</span>
              @enderror
          </div>
        </div>
      </div>
</div>
