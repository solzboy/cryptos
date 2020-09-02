@extends('layouts/userdashboard') @section('title', 'Transactions - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
            Transactions
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Transactions</li>
            </ol>
      </div>
      
      
      <!-- Main content -->

  <section>
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">						
                <h4 class="box-title">Lastest Transactions</h4>
                
            </div>
            <div class="box-body p-15">						
                <div class="table-responsive">
                    <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Payment Type</th>
                                <th>Transaction Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $key => $transaction)
                            <tr>
                                <td>{{$transaction->id}}</td>
                                <td>
                                    {{$transaction->user->name}}
                                </td>
                                <td>{{$transaction->payment->amount}}</td>
                                <td>{{$transaction->payment->payment_type}}</td>
                                <td><span class="badge badge-warning">{{$transaction->status}}</span> </td>
                                <td>{{$transaction->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </section>


      <!-- /.content -->
    
    </div>
</div>

@endsection