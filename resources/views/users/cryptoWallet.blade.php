@extends('layouts/userdashboard') @section('title', 'Crypto Wallet - ') 
@section('styles')
<link rel="stylesheet" href="/dashboard/assets/vendor_components/datatable/datatables.min.css">
@endsection
@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Crypto wallet
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
            </ol>
</div>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 card mr-4 p-3">
        <h3>  <i class="fa fa-book "></i> My Wallet</h3>
        <p>All my Saved Crypto Wallet</p><hr>
         

                      <div class="box-body">
                          <div class="table-responsive">
                            <table id="example" class="table  table-hover display nowrap margin-top-10 w-p100">
                              <thead>
                                  <tr>
                                      <th>S/N</th>
                                      <th>INVESTMENT TYPE</th>
                                      <th>ADDRESS</th>
                                      <th>DATE</th>
                                      <th>ACTIONS</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($wallets as $key => $wallet)
                                  <tr>
                                      <td>{{$wallet->id}}</td>
                                      <td>{{$wallet->name}}</td>
                                      <td>{{$wallet->address}}</td>
                                      <td>{{$wallet->created_at}}</td>
                                      <td>
                                        <form action="{{ route('crypto_wallet.destroy', $wallet->id) }}" method="POST"
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
    <div class="col-md-3 card pb-4">
      <h3><i class="text-primary fa fa-plus"></i>  Add Wallet</h3>
      <p>Add a new wallet</p><hr>
      <form action="/users/crypto_wallet" method="POST">
        @csrf
            <div class="form-group">
                <label for="name" class="text-primary">Payment Type</label>
                <select name="name" id="name" class="form-control rounded-0" >
                    <option value="BITCOIN">BITCOIN</option>
                    <option value="LITECOIN">LITECOIN</option>
                    <option value="ETHERIUM">ETHERIUM</option>
                    <option value="SOLZCOIN">SOLZCOIN</option>
                </select>
            </div>
            <div class="form-group ">
                <label for="address" class="text-primary">Address</label>
                <input type="text" class="form-control rounded-0" id="address" name="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Sumbit</button>
        </form>
    </div>

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