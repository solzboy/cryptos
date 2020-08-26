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

<section class="content">		
			<div class="row no-gutters">

				  <div class="col-lg-4">
					<div class="box">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Starter package</h5>
						<br>
						<h3 class="price">
						  <sup>$</sup>0
						  <span>&nbsp;</span>
						</h3>

						<hr>
						<p><strong>500 MB</strong> Storage</p>
						<p><strong>24x7</strong> Support</p>
						<p><strong>5</strong> Project</p>
						<p><strong>1</strong> User</p>

						<br><br>
						<a class="btn btn-rounded btn-success" href="#">Select plan</a>
					  </div>
					</div>
				  </div>

				  <div class="col-lg-4">
					<div class="box box-inverse box-info">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Professional package</h5>
						<br>
						<h3 class="price">
						  <sup>$</sup>5<sup>.99</sup>
						  <span class="text-white">per month</span>
						</h3>

						<hr>
						<p><strong>1 GB</strong> Storage</p>
						<p><strong>24x7</strong> Support</p>
						<p><strong>15</strong> Project</p>
						<p><strong>3</strong> User</p>

						<br><br>
						<a class="btn btn-rounded btn-outline btn-white" href="#">Select plan</a>
					  </div>
					</div>
				  </div>

				  <div class="col-lg-4">
					<div class="box">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Enterprise package</h5>
						<br>
						<h3 class="price">
						  <sup>$</sup>15<sup>.99</sup>
						  <span>per month</span>
						</h3>

						<hr>
						<p><strong>5 GB</strong> Storage</p>
						<p><strong>24x7</strong> Support</p>
						<p><strong>50</strong> Project</p>
						<p><strong>10</strong> User</p>

						<br><br>
						<a class="btn btn-rounded btn-warning" href="#">Select plan</a>
					  </div>
					</div>
				  </div>

				</div>

                <br><br><br>
                
                
                <div class="row no-gutters" style="justify-content: center">

				  <div class="col-lg-4">
					<div class="box">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Starter package</h5>
						<br>
						<h3 class="price">
						  <sup>$</sup>0
						  <span>&nbsp;</span>
						</h3>

						<hr>
						<p><strong>500 MB</strong> Storage</p>
						<p><strong>24x7</strong> Support</p>
						<p><strong>5</strong> Project</p>
						<p><strong>1</strong> User</p>

						<br><br>
						<a class="btn btn-rounded btn-success" href="#">Select plan</a>
					  </div>
					</div>
				  </div>

				  <div class="col-lg-4">
					<div class="box">
					  <div class="box-body text-center">
						<h5 class="text-uppercase text-muted">Enterprise package</h5>
						<br>
						<h3 class="price">
						  <sup>$</sup>15<sup>.99</sup>
						  <span>per month</span>
						</h3>

						<hr>
						<p><strong>5 GB</strong> Storage</p>
						<p><strong>24x7</strong> Support</p>
						<p><strong>50</strong> Project</p>
						<p><strong>10</strong> User</p>

						<br><br>
						<a class="btn btn-rounded btn-warning" href="#">Select plan</a>
					  </div>
					</div>
				  </div>

				</div>
            </section>
@endsection