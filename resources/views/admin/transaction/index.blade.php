@extends('layouts/admin') @section('title', 'Transactions- ') 
@section('styles')
<link rel="stylesheet" href="/dashboard/assets/vendor_components/datatable/datatables.min.css">
@endsection
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
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 card mr-4 p-3">
        <h3>  <i class="fa fa-book "></i> Transactions</h3>
        <p>All Transactions</p><hr>
         

                      <div class="box-body">
                          <div class="table-responsive">
                            <table id="example" class="table  table-hover display nowrap margin-top-10 w-p100">
                              <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Payment Type</th>
                                    <th>Transaction Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
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
                                      <td>
                                        <a
                                        href=""
                                        class="btn btn-xs btn-primary"
                                        >View</a
                                    >
                                    <a
                                        href=""
                                        class="btn btn-xs btn-warning"
                                        >Edit</a
                                    >
                                        <form action="{{ route('transcations.destroy', $transaction->id) }}" method="POST"
                                            onsubmit="return confirm('Are You Sure');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                        </form>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>				  
                              
                          </table>
                          </div>              
                      </div>
                     
        <!-- Table END-->
    </div>
    <!-- Add wallet -->

  </div>
  <!-- Add wallet ENDS-->
</div>
</section>
    


@endsection


@section('scripts')
<script src="/dashboard/assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Crypto Admin for Data Table -->
<script src="/dashboard/js/pages/data-table.js"></script>
@endsection