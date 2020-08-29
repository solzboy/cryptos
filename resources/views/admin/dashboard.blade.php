@extends('layouts/admin') @section('title', 'Dashboard - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Dashboard
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
            </ol>
      </div>
      
      
      <!-- Main content -->
      

      <section class="content">
      <div class="row">	
          <div class="col-12">
              <div class="box">
                  <div class="box-body">
                      <div class="row justify-content-between">
                          <div class="col-xxxl-4 col-xl-5 col-12">
                              <div class="pl-md-30 pt-md-30 pr-md-80 pb-md-30 p-0">
                                  <h5 class="text-uppercase font-weight-700">Account Balance</h5>
                                  <h1 class="font-weight-900 text-dark mt-30">$2,128,022.00</h1>
                                  <p class="mb-50"></p>
                                  <div class="d-md-flex d-block justify-content-between align-items-center">
                                      <div>
                                          <div class="d-flex align-items-center gap-items-3">
                                              <div class="w-70 h-70 bg-success-light rounded20 l-h-80 text-center">
                                                  <i class="text-success ti-arrow-down font-size-24"></i>
                                              </div>
                                              <div>
                                                  <h3 class="my-0 text-dark font-weight-700">$0.00</h3>
                                                  <p class="mb-0">Income</p>
                                              </div>
                                          </div>
                                          <a href="#" class="btn btn-success mt-30 d-block mb-md-0 mb-30">Payout</a>
                                      </div>
                                      <div>
                                          <div class="d-flex align-items-center gap-items-3">
                                              <div class="w-70 h-70 bg-primary-light rounded20 l-h-80 text-center">
                                                  <i class="text-primary ti-arrow-up font-size-24"></i>
                                              </div>
                                              <div>
                                                  <h3 class="my-0 text-dark font-weight-700">$0.00</h3>
                                                  <p class="mb-0">Expense</p>
                                              </div>
                                          </div>
                                          <a href="/users/plans" class="btn btn-primary mt-30 d-block">Invest</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="col-xxxl-8 col-xl-7 col-12">
                              <div class="row">
                                  <div class="col-md-3 col-12">
                                      <div class="box bg-warning bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                          <div class="box-body">
                                              <div>
                                                  <i class="cc BTC text-white" title="BTC"></i>
                                                  <h4>Bitcoin</h4>
                                              </div>
                                              <div class="mt-150">
                                                  <h3 class="font-weight-700">$11,753.73</h3>
                                                  <p>1 BTC</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="box bg-primary bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                          <div class="box-body">
                                              <div>
                                                  <i class="cc XRP text-white" title="XRP"></i>
                                                  <h4>Ripple</h4>
                                              </div>
                                              <div class="mt-150">
                                                  <h3 class="font-weight-700">$0.298</h3>
                                                  <p>1 XRP</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="box bg-info bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                          <div class="box-body">
                                              <div>
                                                  <i class="cc USDT text-white" title="USDT"></i>
                                                  <h4>Tether</h4>
                                              </div>
                                              <div class="mt-150">
                                                  <h3 class="font-weight-700">$1.000</h3>
                                                  <p>1 USDT</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-12">
                                      <div class="box bg-danger bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                          <div class="box-body">
                                              <div>
                                                  <i class="cc ETH text-white" title="SDC"></i>
                                                  <h4>Ethereum</h4>
                                              </div>
                                              <div class="mt-150">
                                                  <h3 class="font-weight-700">$387.471</h3>
                                                  <p>1 ETH</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>						
  </section>

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
                                <th>Ope. by</th>
                                <th>Cust. Email</th>
                                <th>Sbuject</th>
                                <th>Status</th>
                                <th>Ass. to</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1011</td>
                                <td>
                                    <a href="javascript:void(0)">Sophia</a>
                                </td>
                                <td>sophia@gmail.com</td>
                                <td>How to customize the template?</td>
                                <td><span class="badge badge-warning">New</span> </td>
                                <td>Elijah</td>
                                <td>14-10-2018</td>
                            </tr>
                            <tr>
                                <td>1224</td>
                                <td>
                                    <a href="javascript:void(0)">William</a>
                                </td>
                                <td>william@gmail.com</td>
                                <td>How to change colors</td>
                                <td><span class="badge badge-success">Complete</span> </td>
                                <td>Benjamin</td>
                                <td>13-10-2018</td>
                            </tr>
                            <tr>
                                <td>1024</td>
                                <td>
                                    <a href="javascript:void(0)">Jayden</a>
                                </td>
                                <td>jayden@gmail.com</td>
                                <td>How to set Horizontal nav</td>
                                <td><span class="badge badge-success">Complete</span> </td>
                                <td>Andrew</td>
                                <td>13-10-2018</td>
                            </tr>
                            <tr>
                                <td>2124</td>
                                <td>
                                    <a href="javascript:void(0)">Ethan</a>
                                </td>
                                <td>ethan@gmail.com</td>
                                <td>How this will connect with ethan</td>
                                <td><span class="badge badge-danger">Pending</span> </td>
                                <td>Andrew</td>
                                <td>12-10-2018</td>
                            </tr>
                           
                            <tr>
                                <td>8024</td>
                                <td>
                                    <a href="javascript:void(0)">Chloe</a>
                                </td>
                                <td>jayden@gmail.com</td>
                                <td>How to set Horizontal nav</td>
                                <td><span class="badge badge-success">Complete</span> </td>
                                <td>Andrew</td>
                                <td>13-10-2018</td>
                            </tr>
                           
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