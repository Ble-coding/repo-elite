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

			.resposnsiveImg{width: 100%; height:345px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;}

			/* #boa, #boc, #bob {
      visibility: hidden;
      background-color: salmon;
      color: white;
      width: 100px;
      height: 100px;
    }

	

	#boab, #bocb, #bobb {
      visibility: visible;
      background-color: salmon;
      color: white;
      width: 100px;
      height: 100px;
    } */
	/* #help-wrapper div {
  visibility: hidden;
}

/* It's better to use a class to highlight the selection,
   in case you feel like adding more styles later (like a border or something).
 */
/* .current-help {
  visibility: visible;
} */ 

	

        </style> 


@endsection
@section('page-header')
						<!--Page header-->
						<div id="hidden" class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Transfert</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Transfert</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Transactions</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <button data-target="#modaldemo2" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-plus mr-1"></i>Investir</button>  --}}
								
											{{-- <button data-target="#modaldemo3" data-toggle="modal" style="background:#ff0017; color:#fff" href="" class="btn btn"><i class="fe fe-minus mr-1"></i>Retrait</button> --}}
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
  


<div class="panel panel-primary">
	<div class="tab-menu-heading">
		<div class="tabs-menu ">
			<!-- Tabs -->
			<ul class="nav panel-tabs">
                @can('manage-deposes')
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Transferts</a></li>
                @endcan
				@can('manage-users')
				<li><a href="#tab2" data-toggle="tab">En attente</a></li>
				@endcan
				<li><a href="#tab3" data-toggle="tab">Validé</a></li>

			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">

            @can('manage-deposes')
                <div class="tab-pane active" id="tab1">				
                    <div class="card col-md-10">
                        <div class="card-header">
                            <h3 class="card-title">Création</h3>
                        </div>
                    </div>
                    <form id="form_horizontal" class="form-horizontal" action="{{ route('transfert.transferts.store') }}" method="POST" enctype="multipart/form-data"> 
						@csrf
						<div class="row">
							<div class="col-md-1">
							</div>   
							<div class="card col-md-10">
									<div class="card-header">
										<h3 class="card-title">Transfert</h3>
									</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-1">
					
										</div>
										<div class="col-md-10">
													@include('includes.formtransfert')
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
							
				
				
			
					</form> 
                </div> 
            @endcan

			@can('manage-users')
			<div class="tab-pane " id="tab2">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des transferts clients</h3>
					</div>
				</div>
					<!-- Row -->
					<div class="row flex-lg-nowrap">
						<div class="col-12">
							<div class="row flex-lg-nowrap">
								<div class="col-12 mb-3">  
									<div class="e-panel card">
										<div class="card-body">
											<div class="e-table">
												<div class="table-responsive table-lg mt-3">
													<table class="table table-bordered border-top text-nowrap" id="example4">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Date T.</th>
																<th class="border-bottom-0 w-20">Envoie</th>
																		<th class="border-bottom-0 w-20">Expediteur</th>
																		<th class="border-bottom-0 w-20">Reception</th>	
																		<th class="border-bottom-0 w-20">Destinataire</th>	
																		<th class="border-bottom-0 w-15">Montant</th>	
																		<th class="border-bottom-0 w-15">Motif</th>																
																		<th class="border-bottom-0 w-10">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!empty($transferts) && $transferts->count())
															@foreach($transferts as $transfert) 
																<tr>
																	<th scope="row">{{$transfert->id}}</th>
																	<td>{{\Carbon\Carbon::parse($transfert->created_at)->format('d/m/Y')}}</td> 
																	<td>{{$transfert->send->name}} </td>

																	@if ($transfert->solde_id !== Null)
																	   <td>{{$transfert->solde->particulier->code}} <br>{{$transfert->solde->particulier->name}} {{$transfert->solde->particulier->prename}}</td>
																	@elseif($transfert->sode_id !== Null)
																		<td>{{$transfert->sode->client->code}} <br>{{$transfert->sode->client->name}} {{$transfert->sode->client->prename}}</td>
																	@elseif($transfert->sold_id !== Null)
																		<td>{{$transfert->sold->entreprise->code}} <br>{{$transfert->sold->entreprise->name}}</td>
																	@elseif($transfert->sod_id !== Null)
																		<td>{{$transfert->sod->society->code}} <br>{{$transfert->sod->society->name}} </td>
																	@elseif($transfert->credit_id !== Null)
																	<td> {{ $transfert->credit->name }}</td>
																	@else
																			
																			
																	@endif 
																		{{-- @dd($transfert->somme->customer) --}}
																	{{-- @elseif($transfert->somme_id !== Null)
																		
																		<td>{{$transfert->somme->customer->code}} <br>{{$transfert->somme->customer->name}} {{$transfert->somme->customer->prename}}</td> --}}
																	{{-- @else	
																	
																	
																	@endif  --}}

																	<td>{{$transfert->receive->name}} </td> 
																		@if ($transfert->olde_id !== Null)
																		<td>{{$transfert->olde->particulier->code}} <br>{{$transfert->olde->particulier->name}} {{$transfert->olde->particulier->prename}}</td>
																		@elseif($transfert->ode_id !== Null)
																			<td>{{$transfert->ode->client->code}} <br>{{$transfert->ode->client->name}} {{$transfert->ode->client->prename}}</td>
																	@elseif($transfert->old_id !== Null)
																		<td>{{$transfert->old->entreprise->code}} <br>{{$transfert->old->entreprise->name}}</td>
																		@elseif($transfert->od_id !== Null)
																			<td>{{$transfert->od->society->code}} <br>{{$transfert->od->society->name}} </td>
																		@elseif($transfert->redit_id !== Null)
																			<td> {{ $transfert->redit->name }}</td>
																		@else
																				
																				
																		@endif 
																			{{-- @dd($transfert->somme->customer) --}}
																			{{-- <td>{{$transfert->omme->customer->code}} <br>{{$transfert->omme->customer->name}} {{$transfert->omme->customer->prename}}</td> --}}
																		{{-- @else 
																	@endif --}}


																	<td>{{ number_format($transfert->montant, 0, ',', ' ') }}</td> 
																		<td>{{$transfert->motif}}</td> 
																	<td>  
																		<a href="{{ route('transfert.validates.stored' , ['transfert' => $transfert->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
																			{{-- @can('manage-particuliers')
																			  <a href="{{ route('elite.elites.show' , ['vente' => $vente->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																			  @endcan 
																			  @can('manage-visiteurs')
																			   <a href="{{ route('elite.decaisses.stord' , ['vente' => $vente->id]) }}" style="background-color:#eee;" class="btn btn-">🎟️</a> 
                                                                            @endcan --}}
																		</td>
																				 
																</tr>
																@endforeach
																@else
																					<tr>
																							<td colspan="10" class="text-center"><i style="color: white"><strong>Aucun enregistrements correspondants trouvés</strong></i></td>
																						</tr>
																@endif													
														</tbody>
													</table>	
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->
			</div>
			@endcan 
		

			<div class="tab-pane " id="tab3">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des transferts validé</h3>
					</div>
				</div>
					<!-- Row -->
					<div class="row flex-lg-nowrap">
						<div class="col-12">
							<div class="row flex-lg-nowrap">
								<div class="col-12 mb-3">  
									<div class="e-panel card">
										<div class="card-body">
											<div class="e-table">
												<div class="table-responsive table-lg mt-3">
													<table class="table table-bordered border-top text-nowrap" id="example3">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Date T.</th>
																<th class="border-bottom-0 w-20">Envoie</th>
																		<th class="border-bottom-0 w-20">Expediteur</th>
																		<th class="border-bottom-0 w-20">Reception</th>	
																		<th class="border-bottom-0 w-20">Destinataire</th>	
																		<th class="border-bottom-0 w-15">Montant</th>																
																		{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
															</tr>
														</thead>
														<tbody>
															@if(!empty($valides) && $valides->count())
															@foreach($valides as $valide) 
																<tr>
																	<th scope="row">{{$valide->id}}</th>
																	<td>{{\Carbon\Carbon::parse($valide->created_at)->format('d/m/Y')}}</td> 
																	<td>{{$valide->send->name}} </td>

																	@if ($valide->solde_id !== Null)
																	   <td>{{$valide->solde->particulier->code}} <br>{{$valide->solde->particulier->name}} {{$valide->solde->particulier->prename}}</td>
																	@elseif($valide->sode_id !== Null)
																		<td>{{$valide->sode->client->code}} <br>{{$valide->sode->client->name}} {{$valide->sode->client->prename}}</td>
																	@elseif($valide->sold_id !== Null)
																		<td>{{$valide->sold->entreprise->code}} <br>{{$valide->sold->entreprise->name}}</td>
																	@elseif($valide->sod_id !== Null)
																		<td>{{$valide->sod->society->code}} <br>{{$valide->sod->society->name}} </td>
																	@elseif($valide->credit_id !== Null)
																		<td> {{ $valide->credit->name }}</td>
																	@else
																			
																	@endif 
																		{{-- @dd($valide->somme->customer) --}}
																	{{-- @elseif($valide->somme_id !== Null)
																		
																		<td>{{$valide->somme->customer->code}} <br>{{$valide->somme->customer->name}} {{$valide->somme->customer->prename}}</td> --}}
																	{{-- @else	
																	
																	
																	@endif  --}}

																	<td>{{$valide->receive->name}} </td> 
																		@if ($valide->olde_id !== Null)
																		<td>{{$valide->olde->particulier->code}} <br>{{$valide->olde->particulier->name}} {{$valide->olde->particulier->prename}}</td>
																		@elseif($valide->ode_id !== Null)
																			<td>{{$valide->ode->client->code}} <br>{{$valide->ode->client->name}} {{$valide->ode->client->prename}}</td>
																	@elseif($valide->old_id !== Null)
																		<td>{{$valide->old->entreprise->code}} <br>{{$valide->old->entreprise->name}}</td>
																		@elseif($valide->od_id !== Null)
																			<td>{{$valide->od->society->code}} <br>{{$valide->od->society->name}} </td>
																			@elseif($valide->redit_id !== Null)
																			<td> {{ $valide->redit->name }}</td>
																		@else
																				
																				
																		@endif 
																			{{-- @dd($valide->somme->customer) --}}
																			{{-- <td>{{$valide->omme->customer->code}} <br>{{$valide->omme->customer->name}} {{$valide->omme->customer->prename}}</td> --}}
																		{{-- @else 
																	@endif --}}


																	<td>{{ number_format($valide->montant, 0, ',', ' ') }}</td> 
																	
																	{{-- <td>   --}}
																		{{-- <a href="{{ route('transfert.validates.stored' , ['transfert' => $transfert->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a> --}}
																			{{-- @can('manage-particuliers')
																			  <a href="{{ route('elite.elites.show' , ['vente' => $vente->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																			  @endcan 
																			  @can('manage-visiteurs')
																			   <a href="{{ route('elite.decaisses.stord' , ['vente' => $vente->id]) }}" style="background-color:#eee;" class="btn btn-">🎟️</a> 
                                                                            @endcan --}}
																		{{-- </td> --}}
																				 
																</tr>
																@endforeach
																@else
																					<tr>
																							<td colspan="10" class="text-center"><i style="color: white"><strong>Aucun enregistrements correspondants trouvés</strong></i></td>
																						</tr>
																@endif													
														</tbody>
													</table>	
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->
			</div>
					
		</div>
	</div>
</div>
 





				
@endsection
@section('js')
<script>

	// function valueGet(){
	// 	// var name_element = document.getElementsByName('solde_id');
  	// 	var x = name_element.mySecondfunction();
	// 	  console.log(x);
	// }


	function mySelectfunction(){
		getValue = document.getElementById("send_id").value;
		if(getValue == 1){
			document.getElementById("img1").style.display = "block";
			document.getElementById("img2").style.display = "none";
			document.getElementById("img3").style.display = "none";
			document.getElementById("img4").style.display = "none";
			document.getElementById("img5").style.display = "none";
		}
		if(getValue == 2){
			document.getElementById("img1").style.display = "none";
			document.getElementById("img2").style.display = "block";
			document.getElementById("img3").style.display = "none";
			document.getElementById("img4").style.display = "none";
			document.getElementById("img5").style.display = "none";
		}
		if(getValue == 3){
			document.getElementById("img1").style.display = "none";
			document.getElementById("img2").style.display = "none";
			document.getElementById("img3").style.display = "block";
			document.getElementById("img4").style.display = "none";
			document.getElementById("img5").style.display = "none";
		}
		if(getValue == 4){
			document.getElementById("img1").style.display = "none";
			document.getElementById("img2").style.display = "none";
			document.getElementById("img3").style.display = "none";
			document.getElementById("img4").style.display = "block";
			document.getElementById("img5").style.display = "none";
		}
		if(getValue == 5){
			document.getElementById("img1").style.display = "none";
			document.getElementById("img2").style.display = "none";
			document.getElementById("img3").style.display = "none";
			document.getElementById("img4").style.display = "none";
			document.getElementById("img5").style.display = "block";
		}
	
	}

	function mySecondfunction(){
		getValue = document.getElementById("receive_id").value;
		if(getValue == 1){
			document.getElementById("help1").style.display = "block";
			document.getElementById("help2").style.display = "none";
			document.getElementById("help3").style.display = "none";
			document.getElementById("help4").style.display = "none";
			document.getElementById("help5").style.display = "none";
		}
		if(getValue == 2){
			document.getElementById("help1").style.display = "none";
			document.getElementById("help2").style.display = "block";
			document.getElementById("help3").style.display = "none";
			document.getElementById("help4").style.display = "none";
			document.getElementById("help5").style.display = "none";
		}
		if(getValue == 3){
			document.getElementById("help1").style.display = "none";
			document.getElementById("help2").style.display = "none";
			document.getElementById("help3").style.display = "block";
			document.getElementById("help4").style.display = "none";
			document.getElementById("help5").style.display = "none";
		}

		if(getValue == 4){
			document.getElementById("help1").style.display = "none";
			document.getElementById("help2").style.display = "none";
			document.getElementById("help3").style.display = "none";
			document.getElementById("help4").style.display = "block";
			document.getElementById("help5").style.display = "none";
		}
		if(getValue == 5){
			document.getElementById("help1").style.display = "none";
			document.getElementById("help2").style.display = "none";
			document.getElementById("help3").style.display = "none";
			document.getElementById("help4").style.display = "none";
			document.getElementById("help5").style.display = "block";
		}
	
	}

</script>


<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

	<!-- INTERNAl Data tables -->
	<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/datatables.js')}}"></script>

@endsection 
