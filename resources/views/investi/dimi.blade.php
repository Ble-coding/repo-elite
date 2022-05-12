@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Retrait </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Retrait</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Nouveau retrait</a></li>
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
<div class="col-md-1">

</div>
<div class="card col-md-10">
    <div class="card-header">
        <h3 class="card-title">Retrait du compte {{substr($investi->investiman, 0, 8)}} de {{substr($investi->investiman, 12)}} </h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                <form class="form-horizontal" action="{{ route('investir.diminishes.storeded') }}" method="POST" enctype="multipart/form-data">                                    
                    
                    {{-- @csrf --}}
                    <div class="jumbotron">
                        <h1 class="display-3">Salut!</h1>
                        @if ($investi->jalon == 'Oui')
                            <div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
                     
                                   
                                @if($investi->compteur = 1)
                                <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v + $investi->montant, 0, ',', ' ') }} Fcfa du compte {{substr($investi->investiman, 0, 8)}} de {{substr($investi->investiman, 11)}}. 
                                @else
                                Impossible 
                                @endif

                        @else
                            <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM) /100 ) * $investi->forfait->duree) }}</div> 
                            <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 
               
                            @if ($investi->compteur > 1)
                            <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v1, 0, ',', ' ') }} Fcfa du compte {{substr($investi->investiman, 0, 8)}} de {{substr($investi->investiman, 12)}}.   
                            @elseif($investi->compteur = 1)
                            <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v1 + $investi->montant, 0, ',', ' ') }} Fcfa du compte {{substr($investi->investiman, 0, 8)}} de {{substr($investi->investiman, 12)}}. 
                            @else
                            Impossible 
                            @endif
                           
                        @endif
                            Veuillez vous assurer de l'accord du client et d'avoir également la somme en caisse à lui remettre.
                             Cette action est irreversible.</p>
                        <hr class="my-4">
                        <p>Etes vous sur?.</p>
          
                    </div>
                        @include('includes.formdiminish')  
                <div class="text-wrap">
                <div class="btn-list text-right">
                    <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                </div>
            </form> 
                                                    </div>
         
            <div class="col-md-1">
         
            </div>

            
            
        </div>
    </div>
</div>


<div class="col-md-1">

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