<?php

namespace App\Http\Controllers;

use App\VoucherSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditedMembers = DB::table('voucher_sales')
        ->where('created_by', auth()->user()->username)
            ->join('users', 'users.username', 'voucher_sales.username')
            ->select('voucher_sales.*', 'users.*')
            ->get();

//        dd($creditedMembers);

        return view('admin.credited', compact('creditedMembers'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\VoucherSales  $voucherSales
     * @return \Illuminate\Http\Response
     */
    public function show(VoucherSales $voucherSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VoucherSales  $voucherSales
     * @return \Illuminate\Http\Response
     */
    public function edit(VoucherSales $voucherSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VoucherSales  $voucherSales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoucherSales $voucherSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VoucherSales  $voucherSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoucherSales $voucherSales)
    {
        //
    }
}
