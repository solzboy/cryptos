<?php

namespace App\Http\Controllers;

use App\Hash;
use App\Payment;
use App\Plan;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
    public function userPayment(Request $request)
    {
        //
        $amount = $request->amount;
        $crypto_name = $request->name;
        $crypto_plan = $request->plan;
        $address = Hash::where('name', $crypto_name)->get('address')->first();
        
        return view('users.confirmPayment', compact('amount', 'crypto_name', 'crypto_plan', 'address'));
    }
    public function userPaymentconfirmed(Request $request)
    {
        $id = Auth::id();
        $amount = $request->amount;
        $crypto_name = $request->name;
        $crypto_plan = $request->plan;
        $hash = $request->transaction_hash;
        $address = Plan::where('name', $crypto_plan)->get()->first();
        $plan = $address->id;
        $payment = Payment::create([
            'amount' => $amount,
            'payment_type' => $crypto_name
        ]);

        $transaction = Transaction::create([
            'user_id' => $id,
            'plan_id' => $plan,
            'payment_id' => $payment->id,
            'hash'      => $hash
        ]);
        
        return  redirect()->route('transaction.users');
    }
  
}
