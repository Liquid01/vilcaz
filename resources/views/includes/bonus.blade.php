<?php
if (isset($referrals) && sizeof($referrals) > 0) {
    var_dump($referrals);

    $sum = 0;

    foreach ($referrals as $referral) {
        $accum = \App\VoucherSales::where('username', $referral->username)->sum('sales_amount') * 0.10;

        if (isset($secondLevel) && sizeof($secondLevel) > 0) {
            foreach ($secondLevel as $secondLevelRef) {
                $accum2 = \App\VoucherSales::where('username', $secondLevelRef->username)->sum('sales_amount') * 0.8;
                $sum += $accum2;
            }

        }

        if (isset($thirdLevel) && sizeof($thirdLevel) > 0) {
            foreach ($thirdLevel as $thirdLevelRef) {
                $accum3 = \App\VoucherSales::where('username', $thirdLevelRef->username)->sum('sales_amount') * 0.15;
                $sum += $accum3;
            }
        }


        if (isset($thirdLevel) && sizeof($thirdLevel) > 0) {
            foreach ($thirdLevel as $thirdLevelRef) {
                $accum3 = \App\VoucherSales::where('username', $thirdLevelRef->username)->sum('sales_amount') * 0.15;
                $sum += $accum3;
            }
        }

        if (isset($fourthLevel) && sizeof($fourthLevel) > 0) {
            foreach ($fourthLevel as $fourthLevelRef) {
                $accum4 = \App\VoucherSales::where('username', $fourthLevelRef->username)->sum('sales_amount') * 0.15;
                $sum += $accum4;
            }
        }

    }

}




?>
