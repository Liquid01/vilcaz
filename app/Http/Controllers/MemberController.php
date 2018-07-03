<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Members;
use App\Member;
use App\Referral;
use App\User;
use App\VoucherSales;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use DB;

class MemberController extends Controller
{

    public function _construct()
    {
        $this->middleware('admin');
    }
    //


    public function index(Request $request)
    {

        $users =User::where('isAdmin', 0)->latest()
        ->get();

        return view('admin.members', compact('users'));

    }

    public function show($member)
    {

        $user = User::where('username', $member)->first();
        $vouchers = VoucherSales::where('username', $member)
        ->get();

        $referrals = Referral::where('referrer_id', $member)
            ->get();

//        dd($user, $vouchers, $referrals);

        return view('admin.show', compact('vouchers', 'referrals', 'user'));

    }
}
