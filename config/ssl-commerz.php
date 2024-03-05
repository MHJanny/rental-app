<?php 
return [
    'storeId'    => env('SSL_COMMERZ_STORE_ID', 'oconn65d995ef646e7'),
    'storePassword' => env('SSL_COMMERZ_STORE_PASSWORD','oconn65d995ef646e7@ssl'),
    'currency' => env('SSL_COMMERZ_CURRENCY','BDT'),
    'successUri'    => env('APP_URL').'/ssl-success',
    'failUri'    => env('APP_URL').'/ssl-fail',
    'cancelUri'    => env('APP_URL').'/ssl-cancel',
    'shippigMethod' => 'NO' 
];