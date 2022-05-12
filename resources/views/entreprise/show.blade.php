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
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Show entreprise</a></li>
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
											$image = DB::table('entreprises')->where('id', $entreprise)->first();
																		$images = explode('|', $entreprise->image);
										 @endphp  
									<div class="mx-auto mt-5">		
										<img alt="User Avatar" class="rounded-circle" style="height:100px;width:100px" src="{{URL::to($images[0])}}"> 
								   </div>
									<div class="card-body text-center pt-2">
										<div class="pro-user">
											<h3 class="pro-user-username text-dark mb-1 fs-22">{{$entreprise->name}}</h3>
											<h6 class="pro-user-desc text-muted">{{$entreprise->siege}}</h6>
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
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Compte {{$entreprise->code}}</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Forme juridique</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->forme->name}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Capital</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->capital}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro RCCM</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->nr}}">
												</div>
											</div>
											{{-- <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Regime fiscal</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->ri}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro contribuable</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->nc}}">
												</div>
											</div> --}}
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Nom du gérant</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->name_gerant}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Prénom du gérant</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->prename_gerant}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro du gérant</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->tel}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Date de naissance du gérant</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->datenaiss}} à {{$entreprise->lieu}}">
												</div>
											</div>		
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Email</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->email}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Nationnalité</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->nationnalite}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Sexe</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->sexe}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Type et numéro pièce </label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->piece->nom}}-{{$entreprise->numpiece}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Validité pièce</label>
													<input type="" disabled class="form-control" placeholder="{{\Carbon\Carbon::parse($entreprise->dateexp)->format('d/m/Y')}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Lieu d'habitation</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->lieu_habitation}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Situation matrimoniale</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->situation}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Nom du conjoint</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->successeur_name}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Prénom du conjoint</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->successeur_prename}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro de téléphone</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->successeur_tel}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Nom Personne à contacter</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->personne_name}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Prénom Personne à contacter</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->personne_prename}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Numéro de téléphone</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->personne_tel}}">
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
											<h3 class="pro-user-username text-dark mb-1 fs-22">{{$particulier->name}} {{$particulier->prename}}</h3>
											<h6 class="pro-user-desc text-muted">{{$particulier->email}}</h6>
											<h6 class="pro-user-desc text-muted">{{$particulier->tel}}</h6>
										</div>
									</div> --}}

								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">{{$entreprise->secteur}}</div>
									</div>
									<div class="card-body">
										{{-- <div class="card-title font-weight-bold">Basci info:</div> --}}
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Chiffre d'affaire mensuel</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->cam}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Chiffre d'affaire mensuel</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->caa}}">
												</div>
											</div>
											{{-- <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Partenaires à l'étranger</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->partner}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Partenaires </label>
													<textarea  disabled class="form-control" rows="3">{{ $entreprise->name_partner }}</textarea>
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Paiements depuis l'etranger?</label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->payment}}">
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Crédit avec son compte ? </label>
													<input type="" disabled class="form-control" placeholder="{{$entreprise->credit}}">
												</div>
											</div>																										 --}}
									</div>
									{{-- <div class="card-footer text-right">
										<a href="#" class="btn  btn-primary">Updated</a>
										<a href="#" class="btn btn-danger">Cancle</a>
									</div> --}}
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>


@endsection
@section('js')
		<!-- INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection