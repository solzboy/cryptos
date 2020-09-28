<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if auth is admin
        if (auth()->user()->hasRole('Admin')) {
            $transactions = Transaction::orderBy('id', 'desc')->take(10)->get();
            $users = User::role('User')->orderBy('id', 'desc')->take(10)->get();
            
            return view('admin.dashboard', compact('transactions','users'));
        }
        // if auth is user
        else {
            $id = Auth::id();
            $user = User::find($id);
            $transactions = $user->Transactions()->limit(10)->get();
            $totalpayment = Payment::where('user_id', $id)->get()->sum('amount');
            return view('users.dashboard', compact('transactions','user','totalpayment'));
        }
    }
}
