@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Bonus</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Données</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Bonus</a></li>
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
{{-- <form class="form-horizontal" action="{{ route('parrains.update') }}" method="POST" enctype="multipart/form-data">  --}}
    <form class="form-horizontal" action="{{ route('parrains.update', ['parrain' => $parrain->id]) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('PATCH')
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
                                    <input id="bonus" type="number" class="form-control @error('bonus') is-invalid @enderror" name="bonus" value="{{ old('bonus') ?? $parrain->bonus}}" autocomplete="bonus" autofocus placeholder="{{ __('% BONUS') }}">
                                    @error('bonus')
                                        <div class="invalid-feedback">
                                                        {{ $errors->first('bonus') }}
                                    </div>
                                    @enderror
                                </div>
                    </div>
                    <div class="col-md-1">
                
                    </div>                  
                </div>
                <div class="text-wrap">
                    <div class="btn-list text-right">
                        <button type="submit" style="background:#262626; color:#fff" class="btn btn">Modifier</button>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-md-1">
        </div>   
    </div>
		
    {{-- <div class="row">
        <div class="col-md-1">
        </div>   
        <div class="card col-md-10">
                <div class="card-header">
                    <h3 class="card-title">Activité professionnelles</h3>
                </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                        @include('includes.formparticulier1')                   
                    </div>
                    <div class="col-md-1">
                
                    </div>
                </div>
                <div class="text-wrap">
                    <div class="btn-list text-right">
                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                    </div>
                </div>  
            </div>
        </div>
        <div class="col-md-1">
        </div>  
    </div> --}}


</form>  
@endsection
@section('js')
<!--INTERNAL Select2 js -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>
    {{-- <script  src="{{asset('assets/js/js/jquery.repeater.min.js')}}"  ></script>
    <script  src="{{asset('assets/js/js/repeat-init.js')}}"  ></script>
    <script  src="{{asset('assets/js/js/dff.js')}}"  ></script> --}}

@endsection


