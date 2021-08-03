<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'api/fedex',
        'xendit-FVACallBack',
        'xendit-disbursementCallBack',
        'xendit-simulation-payment',
        'xendit-ceksimulation-payment',
        'simulator_payment',
        'customer/store',
        'customer/ordersend'
        
    ];
}
