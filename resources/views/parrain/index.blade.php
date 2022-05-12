@extends('layouts.master')
@section('css')
		<!-- INTERNAl Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
				<!--INTERNAL Select2 css -->
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
						<div id="hidden" class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Bonus</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Bonus</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									 {{-- <a href="{{route('parrains.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Bonus </a> --}}
									{{-- <button data-target="#modaldemo2" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-plus mr-1"></i>Investir</button> 
									<button data-target="#modaldemo3" data-toggle="modal" style="background:#ff0017; color:#fff" href="" class="btn btn"><i class="fe fe-minus mr-1"></i>Retrait</button>  --}}
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
@if(session()->has('message'))
	<div class="alert alert-success" role="alert">
		{{ session()->get('message') }}
	</div>
@endif
<div class="row">
	<div class="col-md-1">
	</div>   
	<div class="card col-md-10">
			<div class="card-header">
				<h3 class="card-title">MAJ BONUS</h3>
			</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-10">
							{{-- @include('includes.formparticulier') --}}

							<div class="input-group mb-4">
								<div class="input-group-prepend">
									<div class="input-group-text">
										Pourcentage de bonus
									</div>
								</div>
								@foreach($parrains as $parrain)
								<input id="bonus" type="number" class="form-control @error('bonus') is-invalid @enderror" name="bonus" value="{{ old('bonus') ?? $parrain->bonus}}" autocomplete="bonus" disabled placeholder="{{$parrain->bonus}}">
								
								{{-- @error('bonus')
									<div class="invalid-feedback">
													{{ $errors->first('bonus') }}
								</div>
								@enderror --}}
							</div>
				</div>
				<div class="col-md-1">
			
				</div>                  
			</div>
			<div class="text-wrap">
				<div class="btn-list text-right">

					@can('edit-users')
                           <a href="{{ route('parrains.edit' , ['parrain' => $parrain->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
                      @endcan
				</div>
			</div> 
			@endforeach
		</div>
	</div>
	<div class="col-md-1">
	</div>   
</div>

@endsection
@section('js')
		<!-- INTERNAl Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		{{-- <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script> --}}
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		{{-- <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/datatables.js')}}"></script> --}}
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection