@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Ventes</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Données</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Nouveau Vente</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
                                    <a href="{{route('elite.elites.index').''.'#tab1'}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Créer un client </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
@can('manage-particuliers')
{{-- <div class="tab-pane" id="tab3">				 --}}
    <div class="card col-md-10">
        <div class="card-header">
            <h3 class="card-title">Création</h3>
        </div>
    </div>
    <form class="form-horizontal" action="{{ route('elite.elites.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row">
            <div class="col-md-1">
            </div>   
            <div class="card col-md-10">
                    <div class="card-header">
                        <h3 class="card-title">Identité</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
    
                        </div>
                        <div class="col-md-10">
                                    @include('includes.formvisiteur')
                        </div>
                        <div class="col-md-1">
                    
                        </div>
                    </div>
                </div>
                <div class="text-wrap">
                    <div class="btn-list text-right">
                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                    </div>
                </div>   
            </div>
        
        </div>
            
        <div class="row">
            <div class="col-md-1">
            </div>   
            <div class="card col-md-10">
                    <div class="card-header">
                        <h3 class="card-title">Infos véhicule</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">  
    
                        </div>
                        <div class="col-md-10">
                            @include('includes.formvente')                   
                        </div>
                        <div class="col-md-1">
                    
                        </div>
                    </div>
                    {{-- <div class="text-wrap">
                        <div class="btn-list text-right">
                            <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                        </div>
                    </div>   --}}
                </div>
            </div>
            <div class="col-md-1">
            </div>  
        </div>

        <div class="row">
            <div class="col-md-1">
            </div>   
            <div class="card col-md-10">  
                    <div class="card-header">
                        <h3 class="card-title">Infos vente</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">  
    
                        </div>
                        <div class="col-md-10">
                            @include('includes.formvente1')                   
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
        </div>
    </form> 
{{-- </div>  --}}
@endcan
@endsection
@section('js')


<!--INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection