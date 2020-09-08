@extends('layouts/userdashboard') @section('title', 'Confirm Payment - ') 

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
              <li class="breadcrumb-item" aria-current="page">Confirm Payment</li>
            </ol>
</div>

<!-- Main content -->
<section class="p-5">
    <div class="container ">
                <div class="row mt-3" style="width:100% !important">
                    <div class="col-md-8 card mr-4 pt-3 rounded-0 mx-auto">
                        <div class="element-box">
                            <div class="element-info">
                                <div class="row align-items-center">
                                    <div class="col-sm-12">
                                        <div class="element-info-with-icon w-100">
                                            <div class="element-info-icon">
                                                <div class="fa fa-check"></div>
                                            </div>
                                    <div class="element-info-text">
                                                <h5 class="element-inner-header">
                                                    Complete Transaction
                                                </h5>
                                    <div class="element-inner-desc">
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
<form method="POST" action="{{route('payment.confirmed')}}">


                                <table class="table table-clean">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Plan
                                            </div>

                                        </td>
                                        <td class="text-right">
                                            <div class="name">
                                                {{$crypto_plan}}
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="value">
                                                Payment Type
                                            </div>

                                        </td>
                                        <td class="text-right">
                                            <div class="value">
                                                {{$crypto_name}}
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="value">
                                               Amount
                                            </div>

                                        </td>
                                        <td class="text-right">
                                            <div class="value">
                                                ${{$amount}}
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="value">
                                                Payout
                                            </div>

                                        </td>
                                        <td class="text-right">
                                            <div class="value">
                                                12 Months
                                            </div>

                                        </td>
                                    </tr>

                                    </tbody>
                                </table>


                                <div class="bg-gray p-3 border_radius border mb-4">
                                    <div class="form-group">
                                        <label style="color: black">Please Make A Payment Of The Above Amount To The <b> {{$crypto_name}} Cash Wallet</b> Address Below</label>
                                        <input name="address" type="text" class="form-control font-sm-2" value="{{$address->address}}">
                                        <input type="hidden" name="amount" value="{{$amount}}">
                                        <input type="hidden" name="plan" value="{{$crypto_plan}}">
                                        <input type="hidden" name="name" value="{{$crypto_name}}">
                                        @csrf
                                    </div>

                                    <div class="form-group">
                                    <label style="color: black">Once Payment Has Been Completed Please Copy And Paste The Hash Below</label>

                                    <input type="text" class="form-control" id="transactionhash" required name="transaction_hash" placeholder="{{$address->address}}">

                                    </div>
                                </div>

                                <button class="btn btn-lg btn-block btn-success"><i class="fa fa-check"></i> Confirm Purchase</button>
                            </form>


                        </div>
</section>



<style>
    ul{
        list-style: none;
        
    }
</style>


@endsection