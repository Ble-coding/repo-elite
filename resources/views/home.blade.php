@extends('layouts.master')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

						@section('page-header')

						
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Hi!  {{ Auth::user()->name }}</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a> --}}
									{{-- <a href="{{url('#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a> --}}
									{{-- <a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
						<!--End Page header-->
						@endsection
	@section('content')	
	




	{{-- <div id="mon-chart" style="height: 500px; width: 800px;"></div> --}}
	@endsection
@section('js')


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
<script src="{{URL::asset('assets/js/widgets.js')}}"></script>

		<!-- INTERNAl Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/chart.extension.js')}}"></script>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
@endsection