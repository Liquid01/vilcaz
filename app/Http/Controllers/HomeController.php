<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->getBonus();
    }


    public function getBonus()
    {
        $user = auth()->user()->username;
        $referrals = DB::table('referrals')
            ->where('referrer_id', $user)
            ->join('users', 'users.username', '=', 'referrals.referred')
            ->select('users.*', 'referrals.*')
            ->get();

        if (sizeof($referrals) > 0) {

//            dd($referrals);
            $secondLevel = $this->getSecondLevelReferrals($referrals);

//            thirdLevel
            if (sizeof($secondLevel) > 0) {

//                dd($secondLevel);
                $thirdLevel = $this->getThirdLevelReferrals($secondLevel);

//                    fourthLevel
                if (sizeof($thirdLevel) > 0) {
//                    dd($thirdLevel);

                    $fourthLevel = $this->getFourthLevelReferrals($thirdLevel);
                    if (sizeof($fourthLevel) > 0) {
//                        dd( $referrals, $secondLevel, $thirdLevel, $fourthLevel);


                        return view('home', compact('referrals', 'secondLevel', 'thirdLevel', 'fourthLevel'));
                    } else {
                        return view('home', compact('referrals', 'secondLevel', 'thirdLevel'));
                    }
                } else {
                    return view('home', compact('referrals', 'secondLevel'));
                }
            } else {
                return view('home', compact('referrals'));
            }


        }


//        dd($referrals);
        return view('home', compact('referrals'));

    }

    public function getSecondLevelReferrals($referrals)
    {
        $collect = collect([]);
        foreach ($referrals as $referral) {
            $secondLevelReferrals = DB::table('referrals')
                ->where('referrer_id', $referral->username)
                ->join('users', 'users.username', '=', 'referrals.referred')
                ->select('users.*', 'referrals.*')
                ->get();

            if (sizeof($secondLevelReferrals) > 0) {
                $collect = $collect->concat($secondLevelReferrals);
            }

        }

//        dd($collect);

        return $collect;
    }


    public function getThirdLevelReferrals($referrals)
    {
        $collect = collect([]);
        foreach ($referrals as $referral) {
            $thirdLevelReferrals = DB::table('referrals')
                ->where('referrer_id', $referral->username)
                ->join('users', 'users.username', '=', 'referrals.referred')
                ->select('users.*', 'referrals.*')
                ->get();

            if (sizeof($thirdLevelReferrals) > 0) {
                $collect = $collect->concat($thirdLevelReferrals);
            }

        }

        return $collect;
    }


    public function getFourthLevelReferrals($referrals)
    {
        $collect = collect([]);
        foreach ($referrals as $referral) {
            $fourthLevelReferrals = DB::table('referrals')
                ->where('referrer_id', $referral->username)
                ->join('users', 'users.username', '=', 'referrals.referred')
                ->select('users.*', 'referrals.*')
                ->get();

            if (sizeof($fourthLevelReferrals) > 0) {
                $collect = $collect->concat($fourthLevelReferrals);
            }

        }

        return $collect;
    }
}
