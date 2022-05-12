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
								<h4 class="page-title mb-0">Compte Epargnes Entreprise</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Dépots</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Show dépot</a></li>
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
											<h3 class="pro-user-username text-dark mb-1 fs-22">{{$depot->entreprise->name}}</h3>
											<h6 class="pro-user-desc text-muted">{{$depot->entreprise->name_gerant}}</h6>
											<h6 class="pro-user-desc text-muted">{{$depot->entreprise->tel}}</h6>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Epargne entreprise numéro {{$depot->id}} du {{\Carbon\Carbon::parse($depot->created_at)->format('d/m/Y')}}</div>
									</div>
									<div class="card-body">
										{{-- <div class="card-title font-weight-bold">Basci info:</div> --}}
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Montant</label>
													<input type="" disabled class="form-control" placeholder="{{$depot->montant}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Solde Total</label>
													<input type="" disabled class="form-control" placeholder="{{$depot->sold->montant}}">
												</div>
											</div>																	
									</div>
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