<?php

namespace App\Http\Controllers;

use App\Transactions;
use App\VoucherSales;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function verifyPayment(Request $requests)
    {
        $reference = $requests->reference;
        $result = array();

//The parameter after verify/ is the transaction reference to be verified
        $url = 'https://api.paystack.co/transaction/verify/'.$reference;

        $response = Curl::to($url)
            ->withHeader('Authorization: Bearer sk_live_7732db566b13105cbaefea5c700031a7fffd7254')
            ->asJson( true )
            ->get();

//        dd($response);

//

        if ($response) {
            $result = $response;
            // print_r($result);
            if($result){
                if($result['data']){
                    //something came in
                    if($result['data']['status'] == 'success'){
                        // the transaction was successful, you can deliver value

                        $trans = $this->deliverValue($result['data']);
                        /*
                        @ also remember that if this was a card transaction, you can store the
                        @ card authorization to enable you charge the customer subsequently.
                        @ The card authorization is in:
                        @ $result['data']['authorization']['authorization_code'];
                        @ PS: Store the authorization with this email address used for this transaction.
                        @ The authorization will only work with this particular email.
                        @ If the user changes his email on your system, it will be unusable
                        */

//                        dd($result['data']);
                        return json_encode(['status'=>'Transaction successful', 'created' => $trans]);
                    }else{
                        // the transaction was not successful, do not deliver value'
                        // print_r($result);  //uncomment this line to inspect the result, to check why it failed.
                        return json_encode(['status' => "Transaction was not successful: Last gateway response was: ".$result['data']['gateway_response']]);
                    }
                }else{
                    echo $result['message'];
                }

            }else{
                //print_r($result);
                die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
            }
        }else{
//            var_dump($request);
            die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");
        }
    }

    public function deliverValue($data)
    {
        $unitPrice = 50;
        $amount = $data['amount'] * 0.01;
        $quantity = $amount/$unitPrice;

        $sale = new VoucherSales([

            'username' => auth()->user()->username,
            'voucher_quantity' => $quantity,
            'voucher_unit_price' =>$unitPrice,
            'sales_amount' => $amount,
        ]);

        $sale->save();

        return 'created';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(Transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
