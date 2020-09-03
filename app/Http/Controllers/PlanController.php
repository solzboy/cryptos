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

    public function plans(Request $request, $plans)
    {
        
        //
        $id = Auth::id();
        $user = User::find($id);
        if ($plans == 'basic') {
            $plan_name = 'BASIC';
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plan_name)->get();
            return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'bronze') {
            $plan_name = 'BRONZE';
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'silver') {
            $plan_name = 'SILVER';
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }elseif($plans == 'gold') {
            $plan_name = 'GOLD';
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }else{
            $plan_name = 'PLATNUIM';
            $wallets = CryptoWallet::where('user_id', $id)->get();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'wallets'));
        }
    }
}
