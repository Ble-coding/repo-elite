@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Compte Epargnes Entreprise</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Dépot</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Edit Dépot</a></li>
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

<div class="row">
<div class="col-md-2">

</div>
<div class="card col-md-8">
    <div class="card-header">
        <h3 class="card-title">Modification des informations du dépot du {{\Carbon\Carbon::parse($deposit->created_at)->format('d/m/Y')}} de {{ $deposit->entreprise->name}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                                                        <form class="form-horizontal" action="{{ route('deposit.deposits.update', ['deposit' => $deposit->id]) }}" method="POST" enctype="multipart/form-data">   
                                                            @method('PATCH')                                    
                                                                @include('includes.formdeposit')
                                                            <div class="text-wrap">
                                                            <div class="btn-list text-right">
                                                                <button type="submit" style="background:#262626; color:#fff" class="btn btn">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
         
            <div class="col-md-1">
         
            </div>

            
            
        </div>
    </div>
</div>


<div class="col-md-2">

</div>
</div>

						
					
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection