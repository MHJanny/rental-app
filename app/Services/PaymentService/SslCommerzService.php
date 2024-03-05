<?php

namespace App\Services\PaymentService;

use Illuminate\Http\Request;

class SslCommerzService
{
    public function create(Request $request, array $billingAddress)
    {
        try {
            $post_data = [];
            $post_data['store_id'] = config('ssl-commerz.storeId');
            $post_data['store_passwd'] = config('ssl-commerz.storePassword');
            $post_data['total_amount'] = $request->session()->get('booking')->amount;
            $post_data['currency'] = config('ssl-commerz.currency');
            $post_data['tran_id'] = 'SSLCZ_TEST_'.uniqid();
            $post_data['ipn_url'] = '/ssl-success';
            $post_data['success_url'] = config('ssl-commerz.successUri');
            $post_data['fail_url'] = config('ssl-commerz.failUri');
            $post_data['cancel_url'] = config('ssl-commerz.cancelUri');
            $post_data['cus_name'] = $billingAddress['firstName'].' '.$billingAddress['lastName'];
            $post_data['cus_email'] = $billingAddress['email'];
            $post_data['cus_add1'] = $billingAddress['address1'];
            $post_data['cus_add2'] = $billingAddress['address1'];
            $post_data['cus_city'] = $billingAddress['city'];
            $post_data['cus_state'] = $billingAddress['city'];
            $post_data['cus_postcode'] = $billingAddress['zip'];
            $post_data['cus_country'] = $billingAddress['country'];
            $post_data['cus_phone'] = $billingAddress['phone'];
            $post_data['shipping_method'] = config('ssl-commerz.shippigMethod');
            $post_data['product_name'] = 'Product';
            $post_data['product_category'] = 'cayegory';
            $post_data['product_profile'] = 'general';
            $post_data['vat'] = '5';
            $post_data['discount_amount'] = '5';
            $post_data['convenience_fee'] = '3';
            $direct_api_url = 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php';
            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $direct_api_url);
            curl_setopt($handle, CURLOPT_TIMEOUT, 30);
            curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
            $content = curl_exec($handle);
            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
            curl_close($handle);

            return $array = json_decode($content, true);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
