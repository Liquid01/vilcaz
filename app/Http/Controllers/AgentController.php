<?php

namespace App\Http\Controllers;

use App\VoucherSales;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;
class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('agents');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent.index');
    }

    protected function creditVoucher(Request $request)
    {
        return view('agent.voucherCredit');
    }


    protected function postVoucher(Request $request)
    {
//        $this->validate($request, [
//
//        ]);

        $email = $request->email;
        $userDetails = $this->getUserDetails($email);
        $username = $userDetails->username;

//        dd($username);
        $quantity = $request->quantity;
        $price = $request->price;
        $amount = $price * $quantity;
        $by = auth()->user()->username;

        $voucher = new VoucherSales([

            'username' => $username,
            'voucher_quantity' => $quantity,
            'voucher_unit_price' => $price,
            'sales_amount' => $amount,
            'created_by' => $by,

        ]);

        $voucher->save();

        return redirect()->back()->with('success', $username.' credited with '. $quantity.' Vouchers Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('agent.create');
    }

    public function agentVoucherPayment()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function members(Request $request)
    {

        $members = DB::table('voucher_sales')
        ->where('created_by', auth()->user()->username)
        ->join('users', 'users.username', '=', 'voucher_sales.username')
            ->select('voucher_sales.*', 'users.*')
            ->get();

        return view('agent.members', compact('members'));

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function sales(Request $request)
    {
        $sales = VoucherSales::where('created_by', auth()->user()->username)
            ->where('paid', 0)
            ->groupBy(function ($item)
            {
                dd( Carbon::createFromFormat('Y-m-d', $item->date)->format('Y-W'));
            })
            ->get();
        return view('agent.sales', compact('sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getUserDetails($email)
    {
        $userDetails = User::where('email', $email)->first();

        return $userDetails;
    }
}
