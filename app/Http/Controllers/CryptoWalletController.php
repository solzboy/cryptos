<?php

namespace App\Http\Controllers;
use App\User;
use App\CryptoWallet;
use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Auth;


class CryptoWalletController extends Controller
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
        
        return view('users.cryptoWallet', compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.cryptoWallet');
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
        $CryptoWallet = new CryptoWallet;
        $CryptoWallet->name = $request->name;
        $CryptoWallet->address = $request->address;
        $CryptoWallet->user_id = $id;
        $CryptoWallet->save();
        return redirect()->route('crypto_wallet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CryptoWallet  $cryptoWallet
     * @return \Illuminate\Http\Response
     */
    public function show(CryptoWallet $cryptoWallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CryptoWallet  $cryptoWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(CryptoWallet $cryptoWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CryptoWallet  $cryptoWallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CryptoWallet $cryptoWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CryptoWallet  $cryptoWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(CryptoWallet $cryptoWallet)
    {
        $cryptoWallet->delete();

        return back();
    }
    public function wallet(CryptoWallet $cryptoWallet)
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('users.accountWallet', compact('user'));
    }
}
