<?php

namespace App\Http\Controllers\Auth;

use App\Member;
use App\Referral;
use App\User;
use App\Http\Controllers\Controller;
use App\VilcazWallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //return User::create([

//        dd($data);

        $user = new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'token' => str_random(30),
            'password' => Hash::make($data['password']),
        ]);

        $user->save();



        if (isset($data['ref']) && $data['ref'] != "") {

            $member = new Member([

                'user_id' => $user->id,
                'referrer_id' => $data['ref'],
                'phone' => $data['phone'],
                'account_status' => 1,
            ]);

            $member->save();

            $referred =   $this->updateReferrer($member->referrer_id, $user);


           $wallet = $this->createWallet($referred->id);


        } else {

            $member = new Member([

                'user_id' => $user->id,
//            'voucher_address_id' => str_random(32),
                'referrer_id' => 'vilcaz2018',
                'phone' => $data['phone'],
                'account_status' => 1,
            ]);

            $member->save();

            $referred =   $this->updateReferrer($member->referrer_id, $user);


            $wallet = $this->createWallet($referred->id);
        }

        $user->sendVerificationEmail();
        return $user;

    }


    /*
     * registration with referral
     */
    public function registerReferrer($username)
    {
        $referrer = User::where('username', $username)->first();
        return view('auth.register', compact('referrer', $referrer));
    }



//    CREATE WALLET
    public function createWallet($id)
    {
        $userWallet = new VilcazWallet([
            'owner_id' => $id,
            'wallet_balance' => 0.00,
            'wallet_address' => str_random('35'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $userWallet->save();
        return $userWallet->wallet_address;
    }

//    update referrer

    protected function updateReferrer($ref, $user)
    {
        $referred = new Referral([
            'referrer_id' => $ref,
            'referred' => $user->username,
        ]);
        $referred->save();
        return $referred;
    }


//    public function verifyUser($token)
//    {
//        $verifyUser = VerifyUser::where('token', $token)->first();
//        if(isset($verifyUser) ){
//            $user = $verifyUser->user;
//            if(!$user->verified) {
//                $verifyUser->user->verified = 1;
//                $verifyUser->user->save();
//                $status = "Your e-mail is verified. You can now login.";
//            }else{
//                $status = "Your e-mail is already verified. You can now login.";
//            }
//        }else{
//            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
//        }
//
//        return redirect('/login')->with('status', $status);
//    }
//
//    protected function registered(Request $request, $user)
//    {
//        $this->guard()->logout();
////        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
//        return redirect('/home')->with('status', 'welcome.');
//    }
}
