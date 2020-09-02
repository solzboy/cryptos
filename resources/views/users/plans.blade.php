@extends('layouts/userdashboard') @section('title', 'Plans - ') 

@section('content')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h3>
              Plans
            </h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i>Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Plans</li>
            </ol>
      </div>

<section class="content" >		
			<div class="row no-gutters" style="justify-content: center">
				@foreach($plans as $key => $plan)
				  <div class="col-lg-4">
					<div class="box">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">{{$plan->name}}</h5>
						<br>
						<h3 class="price">
							<sup>$</sup>{{number_format($plan->price)}}<sup>.00</sup>
						  <span>&nbsp;</span>
						</h3>

						<hr>
						<p><strong> Instant Withdrawal</strong></p>
						<p><strong> Contract Duration - 1 year</strong></p>
						<p><strong> 24/7 Support</strong></p>
						<p><strong> 5% Referral Bonus</strong></p>

						<br><br>
						<a class="btn btn-rounded btn-success" href="/users/{{strtolower($plan->name)}}">Select plan</a>
					  </div>
					</div>
				  </div>
				  @endforeach

				</div>
            </section>
@endsection