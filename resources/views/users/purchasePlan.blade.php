@extends('layouts/userdashboard') @section('title', 'Purchase Plan - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Purchase Plan
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Purchase Plan</li>
            </ol>
</div>
@foreach($plannes as $plan)
<!-- Main content -->
<section class="p-5">
    <div class="container ">
        <div class="row mt-3">
        <!-- Plans -->
            <div class="col-md-3 card mr-4 pt-3 rounded-0 mx-auto">
                <h2 class="text-primary text-center mb-5 ">{{$plan->name}}</h2><hr>
                <h1 class="text-dark text-center">${{$plan->price}}</h1>
                <p class="text-center mb-5">STARTING FROM</p>
                <button type="submit" class="rounded btn btn-primary active mx-auto mt-3">Purchase Plan</button>
            <hr>
            <br><br>
            <!-- <h5 class="text-dark ml-4 text-center">FEATURES</h5>
                <ul class="text-center">
                    <li><i class="fa fa-check"> instant Redrawal</i></li>
                    <li><i class="fa fa-check"> instant Redrawal</i></li>
                    <li><i class="fa fa-check"> instant Redrawal</i></li>
                    <li><i class="fa fa-check"> instant Redrawal</i></li>
                    <li><i class="fa fa-check"> instant Redrawal</i></li>
                </ul> -->
            </div>
        <!-- Plans END-->

        <!-- Purchase -->
            <div class="col-md-8 card rounded-0 mx-autos">
                <h3><i class="fa fa-money mr-2"></i> Purchase</h3><hr>
                <div class="card bg-dark mb-3 pt-3 pb-3 rounded-0">
                    <p class="text-secondary text-center m-0 p-0">WEEKLY PAYOUT</p>
                    <h3 class="text-white text-center m-0 p-0">${{$plan->weekly_payout}}</h3>
            </div>

            <form>
                @csrf
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" class="form-control rounded-0 mb-3" value="{{$plan->price}}">

                    <label for="">How Would You Like To Pay?</label>
                    <select name="" id="" class="form-control rounded-0 mb-4" >
                        <option value="">- Select Payment Method -</option>
                        @foreach($wallets as $key => $wallet)
                        <option value="{{$wallet->name}}">{{$wallet->name}}</option>
                        @endforeach
                    </select>
             
                    <button type="submit" class="active btn btn-block btn-success"><i class="fa fa-check"></i>Pay</button>
                </div>
            </form>
            </div>
          <!-- Purchase ENDS -->
        </div>
    </div>
</section>
@endforeach  


<style>
    ul{
        list-style: none;
        
    }
</style>


@endsection