<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $this->authorize('view', Coupon::class);

        return view('backend.coupon.index');
    }
}
