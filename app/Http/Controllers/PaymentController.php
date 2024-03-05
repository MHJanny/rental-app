<?php

namespace App\Http\Controllers;

use App\Constants\PaymentMethod;
use App\Services\PaymentService\SslCommerzService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(Request $request, SslCommerzService $sslCommerzService)
    {
        $billingAddress = json_decode($request->session()->get('booking')->billing_address, true);
        switch ($billingAddress['payment_method']) {
            case PaymentMethod::SSLCOMMERZ:
                $array = $sslCommerzService->create($request, $billingAddress);

                return redirect()->to($array['GatewayPageURL']);
                break;
            case PaymentMethod::STRIPE:

                break;

        }

    }

    public function success(Request $request)
    {
        return view('backend.ssl-com.payment');
    }

    public function fail(Request $request)
    {

    }

    public function cancel(Request $request)
    {

    }
}
