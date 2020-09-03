<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use App\User;
use App\CryptoWallet;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plans = Plan::all();
        return view('users.plans', compact('plans'));
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
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }

    public function plans(Plan $plan, Request $request, $plans)
    {
        //
        $id = Auth::id();
        $user = User::find($id);
        if ($plans == 'basic') {
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plans)->get();
            return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'bronze') {
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plans)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'silver') {
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plans)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'gold') {
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plans)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }else{
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plans)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }
    }
}
