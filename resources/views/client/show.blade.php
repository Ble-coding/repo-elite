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
								<h4 class="page-title mb-0">Archives</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Données</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Show particulier</a></li>
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
										<div class="card-header">
											<h3 class="card-title">Identité</h3>
										</div>
										@php
												$image = DB::table('clients')->where('id', $client)->first();
																			$images = explode('|', $client->image);
											 @endphp  
								{{-- 		<span class="avatar brround avatar-md d-block">																				
														<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" class="rounded-circle"  alt="img" class="Client">
										</span> --}}
										<div class="mx-auto mt-5">		
											 <img alt="User Avatar" class="rounded-circle" style="height:100px;width:100px" src="{{URL::to($images[0])}}"> 
										</div>
										<div class="card-body text-center pt-2">
											<div class="pro-user">
												<h3 class="pro-user-username text-dark mb-1 fs-22">{{$client->name}} {{$client->prename}}</h3>
												<h6 class="pro-user-desc text-muted">{{$client->email}}</h6>
												<h6 class="pro-user-desc text-muted">{{$client->tel}}</h6>
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
											<div class="card-title">Compte {{$client->code}}</div>
										</div>
										<div class="card-body">
											{{-- <div class="card-title font-weight-bold">Basci info:</div> --}}
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Date naissance</label>
														<input type="" disabled class="form-control" placeholder="{{\Carbon\Carbon::parse($client->datenaiss)->format('d/m/Y')}} à {{$client->lieu}}">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Numéro de téléphone</label>
														<input type="" disabled class="form-control" placeholder="{{$client->tel}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Nationnalité</label>
														<input type="" disabled class="form-control" placeholder="{{$client->nationnalite}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Sexe</label>
														<input type="" disabled class="form-control" placeholder="{{$client->sexe}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Situation matrimoniale</label>
														<input type="" disabled class="form-control" placeholder="{{$client->situation}}">
													</div>
												</div>	
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Nom du conjoint</label>
														<input type="" disabled class="form-control" placeholder="{{$client->successeur_name}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Prénom du conjoint</label>
														<input type="" disabled class="form-control" placeholder="{{$client->successeur_prename}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Numéro de téléphone</label>
														<input type="" disabled class="form-control" placeholder="{{$client->successeur_tel}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Nom Personne à contacter</label>
														<input type="" disabled class="form-control" placeholder="{{$client->personne_name}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Prénom Personne à contacter</label>
														<input type="" disabled class="form-control" placeholder="{{$client->personne_prename}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Numéro de téléphone</label>
														<input type="" disabled class="form-control" placeholder="{{$client->personne_tel}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Type pièce</label>
														<input type="" disabled class="form-control" placeholder="{{$client->piece->nom}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Numéro de pièce</label>
														<input type="" disabled class="form-control" placeholder="{{$client->numpiece}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Date d'expiration</label>
														<input type="" disabled class="form-control" placeholder="{{\Carbon\Carbon::parse($client->dateexp)->format('d/m/Y')}}">
													</div>
												</div>																	
										</div>
										{{-- <div class="card-footer text-right">
											<a href="#" class="btn  btn-primary">Updated</a>
											<a href="#" class="btn btn-danger">Cancle</a>
										</div> --}}
									</div>
								</div>
							</div>
							<!-- End Row-->
	
	
							<div class="row">
								<div class="col-xl-3 col-lg-4">
									<div class="card box-widget widget-user">
										<div class="card-header">
											<h3 class="card-title">Activité professionnelles</h3>
										</div>
										{{-- <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{URL::asset('assets/images/users/2.jpg')}}"></div>
										<div class="card-body text-center pt-2">
											<div class="pro-user">
												<h3 class="pro-user-username text-dark mb-1 fs-22">{{$client->name}} {{$client->prename}}</h3>
												<h6 class="pro-user-desc text-muted">{{$client->email}}</h6>
												<h6 class="pro-user-desc text-muted">{{$client->tel}}</h6>
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
											<div class="card-title">{{$client->prof}}</div>
										</div>
										<div class="card-body">
											{{-- <div class="card-title font-weight-bold">Basci info:</div> --}}
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Nom Entreprise</label>
														<input type="" disabled class="form-control" placeholder="{{$client->nom_ent}}">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Adresse</label>
														<input type="" disabled class="form-control" placeholder="{{$client->address}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Tel Entreprise</label>
														<input type="" disabled class="form-control" placeholder="{{$client->tel_ent}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Date début de fonction</label>
														<input type="" disabled class="form-control" placeholder="{{$client->date_deb}}">
													</div>
												</div>
												<div class="col-sm-4 col-md-4">
													<div class="form-group">
														<label class="form-label">Type de contrat</label>
														<input type="" disabled class="form-control" placeholder="{{$client->type->name}}">
													</div>
												</div>																										
										</div>
										{{-- <div class="card-footer text-right">
											<a href="#" class="btn  btn-primary">Updated</a>
											<a href="#" class="btn btn-danger">Cancle</a>
										</div> --}}
									</div>
								</div>
							</div>
	
	
						</div>
					</div><!-- end app-content-->
				</div>
@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection