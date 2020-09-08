<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use App\User;
use App\CryptoWallet;
use App\Hash;
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
            $hashes = Hash::all();
            $plannes = Plan::where('name', $plan_name)->get();
            return view('users.purchasePlan', compact('plannes', 'hashes'));
        }elseif($plans == 'bronze') {
            $plan_name = 'BRONZE';
            $hashes = Hash::all();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'hashes'));
        }elseif($plans == 'silver') {
            $plan_name = 'SILVER';
            $hashes = Hash::all();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'hashes'));
        }elseif($plans == 'gold') {
            $plan_name = 'GOLD';
            $hashes = Hash::all();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'hashes'));
        }else{
            $plan_name = 'PLATNUIM';
            $hashes = Hash::all();
            $plannes = Plan::where('name', $plan_name)->get();
             return view('users.purchasePlan', compact('plannes', 'hashes'));
        }
    }
}
