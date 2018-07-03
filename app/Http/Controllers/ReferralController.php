<?php

namespace App\Http\Controllers;

use App\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{

    public function __construct()
    {
        $this->middleware('members');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
                    $fourthLevel = $this->getFourthLevelReferrals($thirdLevel);
                    if (sizeof($fourthLevel) > 0) {
//                        dd($referrals, $secondLevel, $thirdLevel, $fourthLevel);
                        return view('members.referrals', compact('referrals', 'secondLevel', 'thirdLevel', 'fourthLevel'));
                    } else {
                        return view('members.referrals', compact('referrals', 'secondLevel', 'thirdLevel'));
                    }
                } else {
                    return view('members.referrals', compact('referrals', 'secondLevel'));
                }
            } else {
                return view('members.referrals', compact('referrals'));
            }


        }


//        dd($referrals);
        return view('members.referrals', compact('referrals'));

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




    public function referralBonus()
    {


        return view('members.bonus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Referral $referral
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user()->username;
        $referrals = DB::table('referrals')
            ->where('referrer_id', $user)
//            ->join('users', 'referrals.referrer_id', '=', 'users.username' )
//            ->select('users.*', 'referrals.*')
            ->get();


        dd($referrals);
        return view('members.referrals', compact('referrals'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Referral $referral
     * @return \Illuminate\Http\Response
     */
    public function edit(Referral $referral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Referral $referral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referral $referral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Referral $referral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referral $referral)
    {
        //
    }
}
