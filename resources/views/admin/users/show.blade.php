@extends('layouts.master')
@section('css')
		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
		<style>
            @media print{
                #hidden{
                    display : none;
                }
            }
        </style>
@endsection
@section('page-header')
						<!--Page header-->
						<div  id="hidden" class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Administration</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Sous utilisateurs</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Show sous utilisateur</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a> --}}
									<a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> 
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-4">
								<div class="card box-widget widget-user">
									<div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
									<div class="card-body text-center pt-2">
										<div class="pro-user">
											<h3 class="pro-user-username text-dark mb-1 fs-22">{{$user->name}}</h3>
											<h6 class="pro-user-desc text-muted">{{$user->email}}</h6>
											{{-- <div class="text-center mb-4">
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star text-warning"></i></span>
												<span><i class="fa fa-star-half-o text-warning"></i></span>
												<span><i class="fa fa-star-o text-warning"></i></span>
											</div> --}}
											{{-- <a href="{{url('/' . $page='profile')}}" class="btn btn-primary mt-3">View Profile</a> --}}
										</div>
									</div>
									{{-- <div class="card-footer p-0">
										<div class="row">
											<div class="col-sm-6 border-right text-center">
												<div class="description-block p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">689k</h5>
													<span class="text-muted">Followers</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="description-block text-center p-4">
													<h5 class="description-header mb-1 font-weight-bold text-dark number-font">3,765</h5>
													<span class="text-muted">Following</span>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
								{{-- <div class="card">
									<div class="card-header">
										<div class="card-title">Edit Password</div>
									</div>
									<div class="card-body">
										<div class="text-center mb-5">
											<div class="widget-user-image">
												<img alt="User Avatar" class="rounded-circle  mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Change Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" value="password">
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="#" class="btn btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancle</a>
									</div>
								</div> --}}
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">{{$user->name}} {{$user->prename}}</div>
									</div>
									<div class="card-body">
										{{-- <div class="card-title font-weight-bold">Basci info:</div> --}}
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Date naissance</label>
													<input type="" disabled class="form-control" placeholder="{{\Carbon\Carbon::parse($user->datenaiss)->format('d/m/Y')}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Numéro de téléphone</label>
													<input type="" disabled class="form-control" placeholder="{{$user->tel}}">
												</div>
											</div>
											{{-- <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Type pièce</label>
													<input type="" disabled class="form-control" placeholder="{{$user->piece->nom}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro de pièce</label>
													<input type="" disabled class="form-control" placeholder="{{$user->numpiece}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Date d'expiration</label>
													<input type="" disabled class="form-control" placeholder="{{\Carbon\Carbon::parse($user->dateexp)->format('d/m/Y')}}">
												</div>
											</div>																	 --}}
									</div>
									{{-- <div class="card-footer text-right">
										<a href="#" class="btn  btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancle</a>
									</div> --}}
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection