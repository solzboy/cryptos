@extends('layouts/admin') @section('title', 'Users - ') 

@section('styles')
<link rel="stylesheet" href="/dashboard/assets/vendor_components/datatable/datatables.min.css">
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Users
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Users</li>
            </ol>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 card mr-4 p-3">
                 <h3><i class="fa fa-book "></i>All Users</h3><hr>
                      <div class="box-body">
                          <div class="table-responsive">
                            <table id="example" class="table  table-hover display nowrap margin-top-10 w-p100">
                              <thead>
                                  <tr>
                                      <th>S/N</th>
                                      <th>NAME</th>
                                      <th>ACCOUNT BALANCE</th>
                                      <th>User Type</th>
                                      <th>DATE REGISTERED</th>
                                      <th>ACTIONS</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $key => $wallet)
                                  <tr>
                                      <td>{{$wallet->id}}</td>
                                      <td>{{$wallet->name}}</td>
                                      <td>{{$wallet->account_wallet}}</td>
                                      <td>{{$wallet->roles[0]->name}}</td>
                                      <td>{{$wallet->created_at}}</td>
                                      <td>
                                          <a href="" class="btn btn-xs btn-primary">View</a>
                                          <a href="" class="btn btn-xs btn-warning">Edit</a>
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
          </div>
        </div>
    </section>

    
@endsection


@section('scripts')
<script src="/dashboard/assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Crypto Admin for Data Table -->
<script src="/dashboard/js/pages/data-table.js"></script>
@endsection