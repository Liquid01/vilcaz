<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Agents;
use App\User;
use App\VoucherSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    protected function creditVoucher(Request $request)
    {
        return view('admin.voucherCredit');
    }


    protected function postVoucher(Request $request)
    {
//        $this->validate($request, [
//
//        ]);

        $email = $request->email;
        $details = $this->getUserDetails($email);
        $username = $details->username;

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

        return redirect()->back()->with('success', $username . ' credited with ' . $quantity . ' Vouchers Successfully');
    }


//    SENDING MAILS

    protected function sendMail(Request $request)
    {
//
        return view('admin.sendMail');
    }


    protected function mailBox(Request $request)
    {
//
        return view('admin.mailbox');
    }

    protected function sendOneMail($email)
    {
        $userDetails = $this->getUserDetails($email);
//        dd($userDetails);
        return view('admin.mailbox', compact('userDetails'));
    }


    protected function postOneMail(Request $request)
    {
        Mail::send('emails.userMessage', ['request'=> $request], function($message) use ($request){
            $message->to($request->to, 'LIQUID')
                ->subject('User Notification');
        } );

        return redirect()->route('mailBox')->with('success', 'Mail Sent Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAgent()
    {
        return view('agent.create');
    }

    public function allAgent()
    {
        $agents = User::where('is_agent', 1)->get();
        return view('agent.allAgent', compact('agents'));
    }

 public function creditAgent($agent)
    {
//        dd($agent);
        $user = User::where('email', $agent)->first();
        return view('admin.credit', compact('user'));
    }


    public function credited(Request $request)
    {
        return view('admin.credited');
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
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
