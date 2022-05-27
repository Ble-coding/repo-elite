@extends('layouts.master')
@section('css')
		<!-- INTERNAL Morris Charts css -->
		<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" /> 
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Morris Charts</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-bar-chart-2 mr-2 fs-14"></i>Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Morris Charts</a></li>
								</ol>
							</div>
							{{-- <div class="page-rightheader">
								<div class="btn btn-list">
									<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div> --}}
						</div>
						<!--End Page header-->
@endsection
@section('content')

<!-- Row-1 -->
<div class="row">
	<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden dash1-card border-0">
			<div class="card-body">
				<p class=" mb-1 ">Total Sales</p>
				<h2 class="mb-1 number-font">$3,257</h2>
				<small class="fs-12 text-muted">Compared to Last Month</small>
				<span class="ratio bg-warning">76%</span>
				<span class="ratio-text text-muted">Goals Reached</span>
			</div>
			<div id="spark1"></div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden dash1-card border-0">
			<div class="card-body">
				<p class=" mb-1 ">Total User</p>
				<h2 class="mb-1 number-font">1,678</h2>
				<small class="fs-12 text-muted">Compared to Last Month</small>
				<span class="ratio bg-info">85%</span>
				<span class="ratio-text text-muted">Goals Reached</span>
			</div>
			<div id="spark2"></div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden dash1-card border-0">
			<div class="card-body">
				<p class=" mb-1 ">Total Income</p>
				<h2 class="mb-1 number-font">$2,590</h2>
				<small class="fs-12 text-muted">Compared to Last Month</small>
				<span class="ratio bg-danger">62%</span>
				<span class="ratio-text text-muted">Goals Reached</span>
			</div>
			<div id="spark3"></div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden dash1-card border-0">
			<div class="card-body">
				<p class=" mb-1">Total Tax</p>
				<h2 class="mb-1 number-font">$1,954</h2>
				<small class="fs-12 text-muted">Compared to Last Month</small>
				<span class="ratio bg-success">53%</span>
				<span class="ratio-text text-muted">Goals Reached</span>
			</div>
			<div id="spark4"></div>
		</div>
	</div>
</div>
<!-- End Row-1 -->
						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Depot et retrait Compte epargne client</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Depot et retrait Compte courant client</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisBar3"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Depot et retrait Compte epargne entreprise</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Depot et retrait Compte courant entreprise</div>
									</div>
									<div class="card-body">
										<div class="morris-wrapper-demo" id="morrisArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Elite Deal Auto
											'liste des ventes & liste des transactions terminées'
										</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar6"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Invest
											'liste des Invest & liste des retraits terminées'</div>
									</div>
									<div class="card-body">
										<div class="morris-donut-wrapper-demo" id="morrisBar7"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						
						</div>
						<!-- /Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--INTERNAL Morris Charts js -->
		<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
		<script src="{{URL::asset('assets/js/morris.js')}}"></script>

		<!--INTERNAL Peitychart js-->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!--INTERNAL Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>

<!--INTERNAL ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>

<!--INTERNAL Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

<!--INTERNAL Moment js-->
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

<!--INTERNAL Index js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>
@endsection