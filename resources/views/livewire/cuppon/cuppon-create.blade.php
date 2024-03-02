<div>
    <div>
        @session('cuppon-added')
            {{$value}}
        @endsession
    </div>
    <form wire:submit.prevent='save' class="row g-3">
          <div class="col-12">
              <label class="form-label">Title</label>
              <input wire:model.live='title' type="text" name="title" class="form-control" value="{{old('title')}}">
          </div>
          @error('title')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

          <div class="col-12">
              <label class="form-label">Cuppon Code</label>
              <input wire:model.live='code' type="text" name="code" class="form-control" value="{{old('code')}}">
          </div>
          @error('code')
            <span class="alert alert-danger">{{$message}}</span>
          @enderror
          
          <div class="col-12">
            <label class="form-label">Cuppon Value</label>
            <input wire:model.live='value' type="text" name="value" class="form-control" value="{{old('value')}}">
        </div>
        @error('value')
          <span class="alert alert-danger">{{$message}}</span>
        @enderror

        <div class="col-12">
            <label class="form-label">Coupon Type</label>
            <div class="dropdown">
               <select wire:model.live='type' name="type" id="type" class="form-control">
                <option value="{{App\Constants\CupponType::PERCENTAGE}}">PERCENTAGE</option>
                <option value="{{App\Constants\CupponType::FIXED}}">FIXED</option>
               </select>
            </div>
        </div>
        
        @error('type')
          <span class="alert alert-danger">{{$message}}</span>
        @enderror
          <div class="col-12">
              <div class="d-grid">
              <button type="submit" class="btn btn-primary">Add</button>
              </div>
          </div>
          <div class="col-12 my-5">
            <div class="d-gird">
              @session('category-added')
                <span class="alert alert-success">{{$value}}</span>
              @endsession
            </div>
          </div>
          </form>
</div>
