<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Rental App</h4>
    </div>
    <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <!-- Rentals -->
    @can('view-rentals')
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-house-fill"></i>
        </div>
        <div class="menu-title">Rentals</div>
      </a>
      <ul>
        <li> <a href="{{route('property.create')}}"><i class="bi bi-circle"></i>Add Rental</a>
        </li>
        <li> <a href="{{route('property.index')}}"><i class="bi bi-circle"></i>All Rentals</a>
        </li>


        @can('add-category')
        <li>
          <a href="{{route('category.create')}}"><i class="bi bi-circle"></i>Renatal Type</a>
        </li>
        @endcan
      </ul>
    </li>
    @endcan

    <!-- Bookings -->
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Bookings</div>
      </a>
      <ul>
        <li>
          <a href="{{ route('bookings.index') }}"><i class="bi bi-circle"></i>
            @if(auth()->user()->role == 'owner')
            My Rental Bookings
            @elseif (auth()->user()->role == 'user')
            My Bookings
            @else
            All Bookings
            @endif
          </a>
        </li>
      </ul>
    </li>

    <!-- Reviews -->
    @can('view-reviews')
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Reviews</div>
      </a>
      <ul>
        <li> <a href="reviews.html"><i class="bi bi-circle"></i>All Reviews</a>
        </li>
      </ul>
    </li>
    @endcan
    <!-- Users -->
    @can('view-users')
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Users</div>
      </a>
      <ul>
        <li> <a href="add-user.html"><i class="bi bi-circle"></i>Add User</a>
        </li>
        <li> <a href="users.html"><i class="bi bi-circle"></i>All Users</a>
        </li>
      </ul>
    </li>
    @endcan

    @can('view-users')
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Coupons</div>
      </a>
      <ul>
        <li> <a href="{{route('coupon.index')}}"><i class="bi bi-circle"></i>Coupons</a>
        </li>
      </ul>
    </li>
    @endcan

  </ul>
  <!--end navigation-->
</aside>