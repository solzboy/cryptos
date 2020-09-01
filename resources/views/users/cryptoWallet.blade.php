@extends('layouts/userdashboard') @section('title', 'Crypto Wallet - ') 

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
<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 card mr-4 p-3">
        <h3>  <i class="fa fa-book "></i> My Wallet</h3>
        <p>All my Saved Crypto Wallet</p><hr>
        <form class="mb-4 pb-4">
            <div class="row mt-4">
                <div class="col ">
                <label for="">show</label>
                <select name="" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                </div>
                <div class="col">
                <label for="">Search</label>
                <input type="text" placeholder="Search">
                </div>
            </div>
        </form>  
        <!-- table Started -->
        <div class="table-responsive">
                    <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless border-top-0" data-page-size="10">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>INVESTMENT TYPE</th>
                                <th>ADDRESS</th>
                                <th>DATE</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    BITCOIN
                                </td>
                                <td>1000</td>
                                <td>1st September, 2020</td>
                                <td><button type="submit" class="btn btn-md btn-danger">delete</button> </td>
                            </tr>
                        </tbody>
                    </table>
         </div>
        <!-- Table END-->
    </div>
    <!-- Add wallet -->
    <div class="col-md-3 card pb-4">
      <h3><i class="text-primary fa fa-plus"></i>  Add Wallet</h3>
      <p>Add a new wallet</p><hr>
      <form>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary">Payment Type</label>
                <select name="" id="" class="form-control rounded-0" >
                    <option value="BITCOIN">BITCOIN</option>
                    <option value="BITCOIN">LITECOIN</option>
                    <option value="BITCOIN">ETHERIUM</option>
                    <option value="BITCOIN">SOLZCOIN</option>
                </select>
            </div>
            <div class="form-group ">
                <label for="formGroupExampleInput2" class="text-primary">Address</label>
                <input type="text" class="form-control rounded-0" id="formGroupExampleInput2" placeholder="Address">
            </div>

            <button type="submit" class="btn btn-block btn-primary">Sumbit</button>
        </form>
    </div>
  </div>
  <!-- Add wallet ENDS-->
</div>
</section>
    


<style>
    
</style>


@endsection