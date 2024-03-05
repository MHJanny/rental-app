<?php

namespace App\Livewire\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class CouponTable extends Component
{
    public function render()
    {
        $coupons = Coupon::latest()->paginate(3);

        return view('livewire.coupon.coupon-table', ['coupons' => $coupons]);
    }
}
