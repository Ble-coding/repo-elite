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
								<h4 class="page-title mb-0">Liste transactions des clients</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Solde Compte investissement</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<button data-target="#modaldemo2" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-plus mr-1"></i>Investir</button> 
								
											{{-- <button data-target="#modaldemo3" data-toggle="modal" style="background:#ff0017; color:#fff" href="" class="btn btn"><i class="fe fe-minus mr-1"></i>Retrait</button> --}}
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')

@if(session()->has('error'))
	<div class="alert alert-danger" role="alert">
		{{ session()->get('error') }}
	</div>
@elseif(session()->has('message'))
	<div class="alert alert-success" role="alert">
		{{ session()->get('message') }}
	</div>
@endif

<div class="modal" id="modaldemo2">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
											<div class="modal-header">
												<h6 class="modal-title">Faite un investissement</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
										<div class="modal-body">
				<form class="form-horizontal" action="{{ route('investir.investis.store') }}" method="POST" enctype="multipart/form-data">    
										   @csrf
										@include('includes.forminvesti')
										<div class="modal-footer">
											<button style="background:#262626; color:#fff" class="btn btn">Investir</button>
											<button  style="background:#ff0017; color:#fff" class="btn btn" data-dismiss="modal" type="button">Fermer</button>
										</div>
				</form>
			</div>
		</div>
	</div> 
</div>



<div class="panel panel-primary">
	<div class="tab-menu-heading">
		<div class="tabs-menu ">
			<!-- Tabs -->
			<ul class="nav panel-tabs">
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Investissements</a></li>
				<li><a href="#tab2" data-toggle="tab">Retraits effectués</a></li>
				<li><a href="#tab3" data-toggle="tab">Transactions terminées</a></li>
				<li><a href="#tab4" data-toggle="tab">Solde</a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste Investissements</h3>
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
													<table class="table table-bordered border-top text-nowrap" id="example1">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Client</th>
																<th class="border-bottom-0 w-20">Date Inves.</th>
																	<th class="border-bottom-0 w-20">Prochain retrait</th>
																	{{-- <th class="border-bottom-0 w-20">Numéro de compte</th> --}}
										 							{{-- <th class="border-bottom-0 w-20">Client</th> --}}
																	{{-- <th class="border-bottom-0 w-20">Parrain</th> --}}
																	<th class="border-bottom-0 w-10">montant Min & forfait</th>
																	@can('manage-users')
																	<th class="border-bottom-0 w-15">Montant investi</th>
																	@endcan
																	{{-- <th class="border-bottom-0 w-10">Durée forfait</th>																								 --}}
																	<th class="border-bottom-0 w-15">Jalonnement</th>
																	<th class="border-bottom-0 w-15">Montant à retiré</th>
																	@can('manage-users') 	
																	<th class="border-bottom-0 w-15">Montant total</th>
																	<th class="border-bottom-0 w-15">Admin</th>
																	@endcan
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}												
																	<th class="border-bottom-0 w-10">Actions</th>
																	
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($investis) && $investis->count())
																@foreach($investis as $investi)
																<tr>
															 		<th scope="row">{{$investi->id}}</th>
																	{{-- <div style="display:none">{{$v = $investi->investiman}}</div>  --}}
															 	 <div style="display:none">{{$v = $investi->investiman}}</div> 
															 	{{--	<td>{{substr($v, 12, 35)}}</td> --}}
																	 <td>{{substr($v, 10)}}</td>
																	<td>{{\Carbon\Carbon::parse($investi->created_at)->format('d/m/Y')}}</td> 
															 			@if ($investi->jalon == 'Oui')
																		 <div style="display:none">{{$dateviw = \Carbon\Carbon::parse($investi->created_at)->addMonth($investi->forfait->duree)->subDay(1)->format('d/m/Y')}}</div>
																		<td>{{$dateviw}}  </td> 
																		@else 
															 		<div style="display:none">{{$datei = \Carbon\Carbon::now()->format('m')}}</div>
																	<div style="display:none">{{$datev = \Carbon\Carbon::now()->addMonth(1)->format('m')}}</div>								
																	<div style="display:none">{{$date = (int) $datei  }}</div> {{-- 4 --}}
																	<div style="display:none">{{$datek = (int) $datev }}</div> 
																	<div style="display:none">{{$datek = $datev - $date }}</div> 
															 		<div style="display:none">{{$datep = $datek + $datei }}</div>
															 		<div style="display:none">{{$dates = "$datep" }}</div>
																	<div style="display:none">{{$aLongTimeAgo = \Carbon\Carbon::parse('12-'.$dates.'-2022')->format('m')}}</div>
																	<div style="display:none">{{$dateu = \Carbon\Carbon::parse($investi->created_at)->format('d')}}</div>
																	<div style="display:none">{{$datel = \Carbon\Carbon::parse($investi->created_at)->format('Y')}}</div>
																	<div style="display:none">{{$dat = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->format('d/m/Y')}}</div>
																	<div style="display:none">{{$datevi = \Carbon\Carbon::parse($investi->created_at)->addMonth($investi->forfait->duree)->format('d/m/Y')}}</div>
																	<div style="display:none">{{$dateRemoveDay = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->subDay(1)->format('d/m/Y')}}</div>
															 				@if ($dat <= $datevi)
															 		<td>{{$dateRemoveDay}}  </td> 
																			@else
															 		<td>Paiement en attente du {{$dateRemoveDay}}</td>	
																			@endif
																		@endif																									
															 		{{-- <div style="display:none">{{$v = $investi->investiman}}</div> 
															 		<td>{{substr($v, 12, 35)}}</td> --}}
																	 {{-- <td>{{substr($v, 43)}}</td> --}}
															 		{{-- <div style="display:none">{{$vo = $investi->suppleant}}</div> 
																	<td>{{substr($vo, 12)}}</td> --}}
															 		{{-- <td> {{$investi->name  }} {{$investi->prename  }}--{{$investi->email }}---{{$investi->tel }}</td>  --}}
																	{{-- <td><strong style="color:#262626;">{{$investi->suppleant->code_parrain  }}</strong> - {{$investi->suppleant->name  }}  {{$investi->suppleant->prename  }}--{{$investi->suppleant->email  }}---{{$investi->suppleant->tel  }}</td> --}}
																	<td> {{ number_format($investi->forfait->montantMin  , 0, ',', ' ' ) }} - {{$investi->forfait->libelle_Forfait  }}</td> 
																	@can('manage-users') 	
																	<td>{{ number_format($investi->montant, 0, ',', ' ') }}</td> 
																	@endcan	
																	{{-- <td> {{$investi->forfait->duree}}</td> 				 	 --}}
															  		<td>{{ $investi->jalon }}</td> 																	 
																	@if ($investi->jalon == 'Oui')
																		<div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
																			@if($investi->compteur = 1)
																				{{-- <td>{{$v + $investi->montant }}</td>   --}}
																				<div style="display:none" >{{$viol = $v + $investi->montant}} </div>  
																		<td>{{ number_format($viol, 0, ',', ' ') }}</td> 
																			@else
																				Impossible 
																			@endif																															
																		@can('manage-users') 	
											
																		<div style="display:none" >{{$vio = $v + $investi->montant}} </div>  
																		<td>{{ number_format($vio, 0, ',', ' ') }}</td> 
																

																		<td>{{$investi->user->name}} </td>  
																		@endcan	
															 		 @else 
																		 <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM  * $investi->forfait->duree) /100))}}</div> 
																		 <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 

																		 @if ($investi->compteur > 1)
																		 	 {{-- <td> {{$v1}}</td>  --}}
																			  <td>{{ number_format($v1, 0, ',', ' ') }}</td>  
																		 @elseif($investi->compteur = 1)
																		 	{{-- <td> </td>   --}}
																			 <div style="display:none" >{{$vtrack = $v1 + $investi->montant }} </div>  
																			 <td>{{ number_format($vtrack, 0, ',', ' ') }}</td> 
																		 @else		
																		 Impossible
																		 @endif
															  	
																		@can('manage-users') 		   																						  
																		<div style="display:none" >{{$vi = $v0 + $investi->montant}} </div>  
																		<td>{{ number_format($vi, 0, ',', ' ') }}</td> 
																
																		<td>{{$investi->user->name}} </td>  
																		@endcan	
															  	    @endif 
																										   									
																	<td>
																		
																			{{-- @can('show-investis') --}}
																				{{-- @if ( $now >= \Carbon\Carbon::parse($investi->created_at)->addMonth($investi->duree)->format('d/m/Y')) --}}
																				{{-- <div class="modal" id="modaldemo3">
																					<div class="modal-dialog" role="document">
																						<div class="modal-content modal-content-demo">
																															<div class="modal-header">
																																
																																<h6 class="modal-title">
																																	Faite un retrait
																																</h6>
																												
																																	<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																															</div>
																														<div class="modal-body">
																								<form class="form-horizontal" action="{{ route('investir.diminishes.stored' )}}" method="POST" enctype="multipart/form-data">    
																															@csrf
																														@include('includes.formdiminish')
																														<div class="modal-footer">
																															<button style="background:#262626; color:#fff"  class="btn btn">Retirer</button>
																															<button  style="background:#ff0017; color:#fff" class="btn btn" data-dismiss="modal" type="button">Fermer</button>
																														</div>
																								</form>
																							</div>
																						</div>
																					</div> 
																				</div> --}}
																				{{-- @endif  --}}
																		{{--  --}}
															 				{{-- @if ($dat <= $datevi) --}}
																			 {{-- <button data-target="#modaldemo3" data-toggle="modal" style="background:#eee; color:#ff0017" href="" class="btn btn"><i class="fe fe-minus mr-1"></i></button>			 --}}

																			{{-- @else --}}
																				{{-- None --}}
																			{{-- @endif	 --}}

																			{{-- @can('show-investis') --}}
																			<a href="{{ route('investir.investis.show' , ['investi' => $investi->id]) }}" style="background-color:#fff" class="btn btn-">👀</a> 
																			{{-- @endcan --}}
																			@if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at)->addDay(30)) )
																		 <a href="{{ route('investir.diminishes.stored' , ['investi' => $investi->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a> 
																			@else
																		
																			
																			@endif
																			{{-- <a href="{{ route('investir.diminishes.stored' , ['investi' => $investi->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a> --}}

																			
																		
																			{{-- @endcan --}}
																			{{-- <div style="display:none">{{$dateip = }}</div> --}}
																			{{-- <div style="display:none">{{$das = \Carbon\Carbon::now()->format('d')}}</div> --}}
																			@can('manage-users')

																				@if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at)->addDay(3))    )
																				
															  
																					@else
																		 
																					@can('edit-investis')
																					<a href="{{ route('investir.investis.edit' , ['investi' => $investi->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a> 			
																					@endcan
																					@can('delete-investis')
																						<form class="d-inline" method="POST" action="{{ route('investir.investis.destroy' , ['investi' => $investi->id]) }}">
																								@csrf
																								@method('DELETE')
																									<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet investissemnt ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																							</form>   
																					@endcan		
																				@endif
																			{{-- @can('edit-investis')
																			<a href="{{ route('investir.investis.edit' , ['investi' => $investi->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a> 			
																			@endcan
																	

																			@can('delete-investis')
																			<form class="d-inline" method="POST" action="{{ route('investir.investis.destroy' , ['investi' => $investi->id]) }}">
																					@csrf
																					@method('DELETE')
																						<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet investissemnt ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																				</form>   
																			@endcan	 --}}
															  
																	</td> 
																	@endcan			 
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
			<div class="tab-pane" id="tab2">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des Retraits effectués</h3>
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
													<table class="table table-bordered border-top text-nowrap" id="example2">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Date</th>
																<th class="border-bottom-0 w-20">Id Inv.</th>
																<th class="border-bottom-0 w-20">Forfait</th>
																<th class="border-bottom-0 w-20">Numéro de compte</th>
										 							<th class="border-bottom-0 w-20">Client</th>
																	<th class="border-bottom-0 w-10">montant retiré</th>
																	@can('manage-users')																						
																	<th class="border-bottom-0 w-15">Jalonnement</th>
																	<th class="border-bottom-0 w-15">Admin</th>
																	{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																	@endcan
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($diminishes) && $diminishes->count())
																@foreach($diminishes as $diminish)
																<tr>
															 		<th scope="row">{{$diminish->id}}</th>
																	 <td>{{\Carbon\Carbon::parse($diminish->created_at)->format('d/m/Y')}}</td>
																	 <td>{{$diminish->code_inv}}</td>
																	 <td>{{$diminish->forfait->libelle_Forfait}}</td>
																	 <div style="display:none">{{$v = $diminish->investiman}}</div> 
															 		<td>{{substr($v, 0, 8)}}</td>
																	 <div style="display:none">{{$v = $diminish->investiman}}</div> 
															 		<td>{{substr($v, 11)}}</td>
																	<td>{{ number_format($diminish->montant, 0, ',', ' ') }}</td>
																	
																	@can('manage-users') 	
																	<td>{{$diminish->jalon}}</td> 					 	
																	  <td>{{ $diminish->user->name }}</td>	 									   									
																	{{-- <td> --}}
																			{{-- @can('show-diminishes') --}}
																				{{-- @if ( $now >= \Carbon\Carbon::parse($investi->created_at)->addMonth($investi->duree)->format('d/m/Y')) --}}
																				{{-- <div class="modal" id="modaldemo3">
																					<div class="modal-dialog" role="document">
																						<div class="modal-content modal-content-demo">
																															<div class="modal-header">
																																
																																<h6 class="modal-title">
																																	Faite un retrait
																																</h6>
																												
																																	<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																															</div>
																														<div class="modal-body">
																								<form class="form-horizontal" action="{{ route('investir.diminishes.stored' )}}" method="POST" enctype="multipart/form-data">    
																															@csrf
																														@include('includes.formdiminish')
																														<div class="modal-footer">
																															<button style="background:#262626; color:#fff"  class="btn btn">Retirer</button>
																															<button  style="background:#ff0017; color:#fff" class="btn btn" data-dismiss="modal" type="button">Fermer</button>
																														</div>
																								</form>
																							</div>
																						</div>
																					</div> 
																				</div> --}}
																				{{-- @endif  --}}
																		{{-- <a href="{{ route('diminish.diminishes.show' , ['diminish' => $diminish->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>  --}}											
																			{{-- @endcan --}}
																			{{-- @if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($investi->created_at)->addDay(3))    )
																			
																			@else
																			@can('edit-diminishes')
																				<a href="{{ route('diminish.diminishes.edit' , ['diminish' => $diminish->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a> 			
																				@endcan	
																				@can('delete-investis')
																				<form class="d-inline" method="POST" action="{{ route('diminish.diminishes.destroy' , ['diminish' => $diminish->id]) }}">
																						@csrf
																						@method('DELETE')
																							<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce retrait ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																					</form>   
																				@endcan	
																			
																			@endif 					
																			 											  
																	</td>  --}}
																	@endcan			 
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
			<div class="tab-pane" id="tab3">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des transactions terminées</h3>
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
													<table class="table table-bordered border-top text-nowrap" id="example-1">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Numéro de compte</th>
																<th class="border-bottom-0 w-20">Date</th>
																	{{-- <th class="border-bottom-0 w-20">Numéro de compte</th> --}}
										 							<th class="border-bottom-0 w-20">Client</th>
																	<th class="border-bottom-0 w-20">Parrain</th>
																	<th class="border-bottom-0 w-10">montant Min & forfait</th>
																	<th class="border-bottom-0 w-15">Montant investi</th>
																	<th class="border-bottom-0 w-15">Montant retiré</th>
																	@can('manage-users')
																	<th class="border-bottom-0 w-10">Durée forfait</th>																								
																	<th class="border-bottom-0 w-15">Jalonnement</th>		
																	{{-- <th class="border-bottom-0 w-15">Montant total</th> --}}
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}												
																	{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																	@endcan
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($transactions) && $transactions->count())
																@foreach($transactions as $transaction)
																<tr>
															 		<th scope="row">{{$transaction->id}}</th>
																	<div style="display:none">{{$v = $transaction->investiman}}</div> 
															 		<td>{{substr($v, 0, 8)}}</td>
																	<td>{{\Carbon\Carbon::parse($transaction->date_termine)->format('d/m/Y')}}</td> 
															 																												
															 		<div style="display:none">{{$v = $transaction->investiman}}</div> 
															 		<td>{{substr($v, 11)}}</td>
															 		
																	<td>{{$transaction->customer->name}} {{$transaction->customer->prename}}</td>
															 		{{-- <td> {{$transaction->name  }} {{$transaction->prename  }}--{{$transaction->email }}---{{$transaction->tel }}</td>  --}}
																	{{-- <td><strong style="color:#262626;">{{$transaction->suppleant->code_parrain  }}</strong> - {{$transaction->suppleant->name  }}  {{$transaction->suppleant->prename  }}--{{$transaction->suppleant->email  }}---{{$transaction->suppleant->tel  }}</td> --}}
																	<td> {{ number_format($transaction->forfait->montantMin  , 0, ',', ' ' ) }} - {{$transaction->forfait->libelle_Forfait  }}</td> 
																	<td>{{ number_format($transaction->montant, 0, ',', ' ') }}</td>
																	@if ($transaction->jalon == 'Oui')
																	<div style="display:none" >{{$v = ($transaction->montant * $transaction->forfait->pourcentageJ ) / 100  }}</div> 
																	 {{-- <td>{{}} </td>   --}}
																	 <td>{{ number_format($v + $transaction->montant, 0, ',', ' ') }}</td> 
																
																	{{-- <td>{{$v + $transaction->montant}} </td>   --}}
																		@else 
																   <div style="display:none" >{{$v0 = ($transaction->montant * (($transaction->forfait->pourcentageM) /100 ) * $transaction->forfait->duree) }}</div> 
																   <div style="display:none" >{{$v1 = $v0/$transaction->forfait->duree}}</div> 
																	 {{-- <td> {{$v1}} </td> 	   																						   --}}
																	<div style="display: none">{{$vi = $v0 + $transaction->montant}} </div> 
																	<td>{{ number_format($vi, 0, ',', ' ') }}</td>  
																		@endif 
																	@can('manage-users') 		
																	<td> {{$transaction->forfait->duree}}</td> 				 	
															  		<td>{{ $transaction->jalon }}</td>  									   									
																	{{-- <td> --}}
																			{{-- @can('show-transactions') --}}
																				{{-- @if ( $now >= \Carbon\Carbon::parse($transaction->created_at)->addMonth($transaction->duree)->format('d/m/Y')) --}}
																				{{-- <div class="modal" id="modaldemo3">
																					<div class="modal-dialog" role="document">
																						<div class="modal-content modal-content-demo">
																															<div class="modal-header">
																																
																																<h6 class="modal-title">
																																	Faite un retrait
																																</h6>
																												
																																	<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
																															</div>
																														<div class="modal-body">
																								<form class="form-horizontal" action="{{ route('transactionr.diminishes.stored' )}}" method="POST" enctype="multipart/form-data">    
																															@csrf
																														@include('includes.formdiminish')
																														<div class="modal-footer">
																															<button style="background:#262626; color:#fff"  class="btn btn">Retirer</button>
																															<button  style="background:#ff0017; color:#fff" class="btn btn" data-dismiss="modal" type="button">Fermer</button>
																														</div>
																								</form>
																							</div>
																						</div>
																					</div> 
																				</div> --}}
																				{{-- @endif  --}}
																		{{-- <a href="{{ route('transactionr.transactions.show' , ['transaction' => $transaction->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>  --}}
															 				{{-- @if ($dat <= $datevi) --}}
																			 {{-- <button data-target="#modaldemo3" data-toggle="modal" style="background:#eee; color:#ff0017" href="" class="btn btn"><i class="fe fe-minus mr-1"></i></button>			 --}}

																			{{-- @else --}}
																				{{-- None --}}
																			{{-- @endif	 --}}
																				
																			{{-- @endcan --}}
																			{{-- <div style="display:none">{{$dateip = }}</div> --}}
																			{{-- <div style="display:none">{{$das = \Carbon\Carbon::now()->format('d')}}</div> --}}
																	{{-- <div style="display:none">{{$dateis = \Carbon\Carbon::now()->format('d/m/Y')}}</div> 
																	<div style="display:none">{{$datevis = \Carbon\Carbon::parse($transaction->created_at)->addDay(3)->format('d/m/Y')}}</div>
																	<div style="display:none">{{$sd = \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y')}}</div>
																	<div style="display:none">{{$now = (int) $dateis  }}</div> 
																	<div style="display:none">{{$add = (int) $datevis }}</div> 
																	<div style="display:none">{{$jj = (int) $sd }}</div>  --}}
															 				{{-- @if ($dateis <= $datevis  &&  $dateis > $sd )																														
																			@else
																			@can('edit-investis')
																			<a href="{{ route('investir.investis.edit' , ['investi' => $investi->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a> 			
																			@endcan	
																			@endif

													
																			@can('delete-investis')
																			<form class="d-inline" method="POST" action="{{ route('investir.investis.destroy' , ['investi' => $investi->id]) }}">
																					@csrf
																					@method('DELETE')
																						<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet investissemnt ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																				</form>   
																			@endcan													  
																	</td>  --}}
																	@endcan			 
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
			<div class="tab-pane " id="tab4">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des Soldes clients</h3>
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
													<table class="table table-bordered border-top text-nowrap" id="example-delete">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Numéro de compte</th>
										 							<th class="border-bottom-0 w-20">Client</th>
																	<th class="border-bottom-0 w-20">Parrain</th>
																	<th class="border-bottom-0 w-10">montant & forfait</th>
																	<th class="border-bottom-0 w-15">Jalonnement</th>
																	<th class="border-bottom-0 w-15">Solde</th>
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}
																	{{-- @can('manage-users') --}}
																	{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																	{{-- @endcan --}}
															
															</tr> 
														</thead>
										 				<tbody>
															@if(!empty($sommes) && $sommes->count())
																@foreach($sommes as $somme)
																<tr>
															 		<th scope="row">{{$somme->id}}</th>
																	<div style="display:none">{{$v = $somme->investiman}}</div> 
															 		<td>{{substr($v, 0, 8)}}</td>																								
															 		<div style="display:none">{{$v = $somme->investiman}}</div> 
															 		<td>{{substr($v, 11)}}</td>
															 		{{-- <div style="display:none">{{$vo = $somme->suppleant}}</div>  --}}
																	 <td></td>
																	<td> {{ number_format($somme->forfait->montantMin  , 0, ',', ' ' ) }} - {{$somme->forfait->libelle_Forfait  }}</td> 															 	
															  		<td>{{ $somme->jalon }}</td> 
															  		<td>{{ number_format($somme->soustract, 0, ',', ' ') }}</td> 
																	{{-- <td></td>																							 										   																			  --}}
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


<script type="text/javascript"> 
    function displayForm(c){ 
        if(c.value == "Oui"){ 

 document.getElementById("ccform").style.visibility='visible'; 

        } else if(c.value == "Non"){ 
            document.getElementById("ccform").style.visibility='hidden'; 
        } 
        else{ 

        } 
     }         
</script>  

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
	<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection 
