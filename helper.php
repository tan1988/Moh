<?php

namespace App;

use App\Models\Coupon;

/**
 * @method static generateCobonCode()
 */
class helper
{
    static function generateCouponCode()
    {
        $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

        $record = Coupon::where('code', $code)->first();

        if ($record) {
            self::generateCobonCode();
        } else {
            return $code;
        }
    }
}
