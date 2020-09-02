<?php

namespace App\Http\Controllers;

use App\payout;
use Illuminate\Http\Request;
use App\User;
use App\CryptoWallet;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class PayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::id();
        $wallets = CryptoWallet::where('user_id', $id)->get();
        $payouts = payout::where('user_id', $id)->get();
        $user = User::find($id);
        return view('users.payoutRequest', compact('wallets', 'payouts', 'user'));
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
        $id = Auth::id();
        $payout = new payout;
        $payout->wallet = $request->wallet;
        $payout->amount = $request->amount;
        $payout->user_id = $id;
        $payout->save();
        return redirect()->route('payout_request.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function show(payout $payout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function edit(payout $payout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payout $payout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function destroy(payout $payout)
    {
        //
    }
}
