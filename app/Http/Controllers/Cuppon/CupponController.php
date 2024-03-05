<?php

namespace App\Http\Controllers\Cuppon;

use App\Http\Controllers\Controller;
use App\Models\Cuppon;
use Illuminate\Http\Request;

class CupponController extends Controller
{
    public function index()
    {
        $this->authorize('view', Cuppon::class);
        return view("backend.cuppon.index");
    }
}
