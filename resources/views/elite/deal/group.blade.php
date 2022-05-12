@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">ELITE DEAL </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>GROUP</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Elite Deal</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
<!--Row-->

						<div class="card">
							<div class="card-header">
								{{-- <h3 class="card-title ">Nos offres</h3> --}}
							</div>
							<div class="card-group p-5">   
								<div class="card  overflow-hidden shadow-none border border-right-0">
									{{-- <img  src="{{URL::asset('assets/images/photos/img_16.jpg')}}" width="250" height="250" alt="image"  class="card-image1 "> --}}
									<div class="card-body">
                                          <a style="color:#ff0017!important; text-decoration:underline" href="{{route('elite.elites.index')}}" class="card-title">ELITE DEAL AUTO</a>             
										{{-- <p class="card-text">Possibilité d'avoir du cash,par un processus de mise en gage de votre voiture.</p> --}}
									</div>
									
								</div>
								<div class="card overflow-hidden shadow-none border">
									{{-- <img  src="{{URL::asset('assets/images/photos/img_17.jpg')}}" width="250" height="250"  alt="image"  class="card-image1 "> --}}
									<div class="card-body">
										<a style="color:#ff0017!important; text-decoration:underline" href="" class="card-title">ELITE DEAL IMMO</a>
										{{-- <p class="card-text">Avoir du cash, c 'est possible , par un processus de mise en gage de votre bien immobilier.</p> --}}
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div><!-- end app-content-->
            </div>
					
@endsection
@section('js')
@endsection