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
        <h3 class="text-dark mb-3"><i class="fa fa-money"> Complete Patout Request</i></h3><hr>
        <p class="text-left">Earn the amount you would like to withdraw to your crypto wallet. your account wallet balance is 0</p>
        <form>
            <div class="form-group">
                <label for=""> Amount</label>
                <input type="text" class="form-control rounded-0 mb-3">

                <label for="">Select a Crypto wallet</label>
                <select name="" id="" class="form-control rounded-0 mb-4" >
                    <option value="">-- Select a crypto wallet --</option>
                    <option value="">Account Wallet</option>
                    <option value="">Crypto Wallet</option>
                </select>
             
                <button type="submit" class="btn btn-block btn-success"><i class="fa fa-check"></i>Comfirm Payout</button>
            </div>
        </form>
    </div>
</section>
    


<style>
    
</style>


@endsection