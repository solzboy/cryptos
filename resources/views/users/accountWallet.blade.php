@extends('layouts/userdashboard') @section('title', 'Account Wallet - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Account wallet
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
            </ol>
</div>

<!-- Main content -->
<section class="content card">
        <div class="col-12 container-fluid">
            <div class="clear-fix p-3">
                <p class="text-dark float-left font-weight-700">Financial Overview</p>
                <a type="button" class="mx-auto mb-0 pb-0 float-right pb-5 btn btn-success btn-md mb-2" ><i class="fa fa-money"></i> Request Payout</a>
                <br><hr>
            </div>
            <div class="row p-3">
                <div class="col-md text-center card mr-3 ">
                    <h1 class="text-primary">${{$user->account_wallet}}</h1>
                    <p class="text-secondary">CURRENT BALANCE</p>           
                </div>
                <div class="col-md card text-center ml-0 pl-0 ">
                    <h2 class="text-dark">$35,000</h2>
                    <p class="text-secondary">WITHDRAWAL LIMIT</p>
                </div>
                <div class="clear-fix col-12 p-4 ml-3">
                    <p class="text-dark float-left font-weight-700">My Wallet Transactions</p><br><hr>
                </div>
                 <div class="container-fluid card con ">
                    <h1 class="my-auto mx-auto text-center text-dark">No feature added <i class="fa fa-book"></i></h1>
                 </div>
            </div>
        </div>
        
</section>


<style>
    .con{
        height:300px;
       
      
    }
</style>


@endsection