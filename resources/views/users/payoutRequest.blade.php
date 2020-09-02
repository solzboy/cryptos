@extends('layouts/userdashboard') @section('title', 'Payout Request - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Complete Payout Request
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Complete Payout Request</li>
            </ol>
</div>

<!-- Main content -->
<section class="p-5">
    <div class="card col-md-6 mx-auto p-4">
        <h3 class="text-dark mb-3"><i class="fa fa-money"> Complete Payout Request</i></h3><hr>
        <p class="text-left">Earn the amount you would like to withdraw to your crypto wallet. your account wallet balance is ${{$user->account_wallet}}</p>
        <form action=" {{route('payout_request.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount"> Amount</label>
                <input type="text" name="amount" id="amount" class="form-control rounded-0 mb-3">

                <label for="wallet">Select a Crypto wallet</label>
                <select name="wallet" id="wallet" class="form-control rounded-0 mb-4" >
                    <option value="">-- Select a crypto wallet --</option>
                    @foreach($wallets as $key => $wallet)
                    <option value="{{$wallet->name}}">{{$wallet->name}}</option>
                    @endforeach
                </select>
             
                <button type="submit" class="btn btn-block btn-success"><i class="fa fa-check"></i>Comfirm Payout</button>
            </div>
        </form>
    </div>
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">						
                <h4 class="box-title">My Payout Requests</h4>
                
            </div>
            <div class="box-body p-15">						
                <div class="table-responsive">
                    <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Wallet</th>
                                <th>Amount</th>
                                <th>Payout Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payouts as $key => $payout)
                            <tr>
                                <td>{{$payout->id}}</td>
                                <td>
                                    {{$payout->wallet}}
                                </td>
                                <td>{{$payout->amount}}</td>
                                <td><span class="badge badge-warning">{{$payout->status}}</span> </td>
                                <td>{{$payout->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    


<style>
    
</style>


@endsection