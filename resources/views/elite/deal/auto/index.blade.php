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
								<h4 class="page-title mb-0">Mini Dash</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Elite Deal</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste et Enregistrement</a></li>
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
                {{-- @can('manage-visiteurs') --}}
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Nouveaux clients </a></li>
                {{-- @endcan --}}
				@can('manage-clients')
				<li><a href="#tab2" data-toggle="tab">Client</a></li>
				@endcan
				{{-- 
				 <li><a href="{{route('elite.elites.create')}}">Vente</a></li>
				 --}}
                @can('manage-investis')
					<li><a href="#tab3" data-toggle="tab">Liste ventes</a></li>
					 <li><a href="#tab4" data-toggle="tab">Versement effectués</a></li>
					 <li><a href="#tab5" data-toggle="tab">Transactions terminées</a></li>
					<li><a href="#tab6" data-toggle="tab">Reste</a></li>
                @endcan
			 	{{-- @can('manage-users')
                 <li><a href="#tab7" data-toggle="tab">Supprimés</a></li> 
                @endcan --}}
				{{--<li><a href="#tab8" data-toggle="tab">Solde</a></li> --}}
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
		

			@can('manage-clients')
                <div class="tab-pane " id="tab2">				
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
								{{-- <div class="text-wrap">
									<div class="btn-list text-right">
										<button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
									</div>
								</div>    --}}
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
                </div> 
       
			@endcan

					{{-- @can('manage-visiteurs') --}}
			<div class="tab-pane active" id="tab1">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des enregistrements clients</h3>
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
																<th class="border-bottom-0 w-20">Date C.</th>
																		<th class="border-bottom-0 w-20">N°contrat</th>
																		<th class="border-bottom-0 w-20">Code - Client</th>	
																		<th class="border-bottom-0 w-30">Tel</th>
																		<th class="border-bottom-0 w-15">Immat véhicule</th>
																		<th class="border-bottom-0 w-15">Val vente</th>																
																		@can('manage-users')
																		<th class="border-bottom-0 w-15">paiement</th>
																		{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																		@endcan
																		{{-- @can('manage-visiteurs') --}}
																			<th class="border-bottom-0 w-10">Actions</th>
																		{{-- @endcan --}}
															</tr>
														</thead>
														<tbody>
															@if(!empty($ventes) && $ventes->count())
															@foreach($ventes as $vente) 
																<tr>
																	<th scope="row">{{$vente->id}}</th>
																	<td>{{\Carbon\Carbon::parse($vente->created_at)->format('d/m/Y')}}</td> 
																	   <td>{{$vente->contrat}}</td>
																		<td><strong>{{$vente->code}}</strong> <br> {{$vente->name}} {{$vente->prename}}</td>       
																		<td>{{$vente->email}} -- <br>  {{$vente->tel}}</td> 
																		<td>{{$vente->immatricule}} <br> {{$vente->marque}}</td>  
																		<td>{{ number_format($vente->montant, 0, ',', ' ') }}</td> 
																		 @can('manage-users')
																		 <td>{{$vente->payment}} -- {{$vente->duree}} mois</td> 
																		 {{-- <td>{{$vente->user->name}} -- {{implode(' , ', $vente->user->roles()->pluck('name')->toArray())}}</td>  --}}
																		 @endcan  
																		
																		<td>  
																			@can('manage-clients')
																			  <a href="{{ route('elite.elites.show' , ['vente' => $vente->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																			  @endcan 
																			  @can('manage-visiteurs')
																			   <a href="{{ route('elite.decaisses.stord' , ['vente' => $vente->id]) }}" style="background-color:#eee;" class="btn btn-">🎟️</a> 
                                                                            @endcan
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
			{{-- @endcan --}}

			<div class="tab-pane" id="tab3">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des ventes clients</h3>
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
																<th class="border-bottom-0 w-20">Date V.</th>
																		<th class="border-bottom-0 w-20">Date Rac</th>
																		<th class="border-bottom-0 w-20">N°contrat</th>
																		<th class="border-bottom-0 w-20">Code - Client</th>	
																		<th class="border-bottom-0 w-30">Tel</th>
																		<th class="border-bottom-0 w-15">Immat véhicule</th>
																
																		@can('manage-users')
																		<th class="border-bottom-0 w-15">paiement</th>
																		<th class="border-bottom-0 w-15">Val vente</th>
																		{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																		@endcan
																		<th class="border-bottom-0 w-15">Vers</th>
																		@can('manage-visiteurs')
																		<th class="border-bottom-0 w-10">Actions</th>
																		@endcan
															</tr>
														</thead>
														<tbody>
															@if(!empty($decaisses) && $decaisses->count())
																@foreach($decaisses as $vente) 
																<tr>
																	<th scope="row">{{$vente->id}}</th>
																	<td>{{\Carbon\Carbon::parse($vente->created_at)->format('d/m/Y')}}</td> 
																	@if ($vente->payment == 'Unique')
																	<div style="display:none">{{$unique = \Carbon\Carbon::parse($vente->created_at)->addMonth($vente->duree)->subDay(1)->format('d/m/Y')}}</div>
																   <td>{{$unique}}</td> 
																   @else 
																   
																<div style="display:none">{{$datei = \Carbon\Carbon::now()->format('m')}}</div>
															   <div style="display:none">{{$datev = \Carbon\Carbon::now()->addMonth(1)->format('m')}}</div>								
															   <div style="display:none">{{$date = (int) $datei  }}</div> {{-- 4 --}}
															   <div style="display:none">{{$datek = (int) $datev }}</div> 
															   <div style="display:none">{{$datek = $datev - $date }}</div> 
																<div style="display:none">{{$datep = $datek + $datei }}</div>
																<div style="display:none">{{$dates = "$datep" }}</div>
															   <div style="display:none">{{$aLongTimeAgo = \Carbon\Carbon::parse('12-'.$dates.'-2022')->format('m')}}</div>
															   <div style="display:none">{{$dateu = \Carbon\Carbon::parse($vente->created_at)->format('d')}}</div>
															   <div style="display:none">{{$datel = \Carbon\Carbon::parse($vente->created_at)->format('Y')}}</div>
															   <div style="display:none">{{$dat = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->format('d/m/Y')}}</div>
															   <div style="display:none">{{$datevi = \Carbon\Carbon::parse($vente->created_at)->addMonth($vente->duree)->format('d/m/Y')}}</div>
															   <div style="display:none">{{$dateRemoveDay = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->subDay(1)->format('d/m/Y')}}</div>
																		@if ($dat <= $datevi)
																<td>{{$dateRemoveDay}}  </td> 
																	   @else
																<td>Paiement en attente du {{$dateRemoveDay}}</td>	
																	   @endif
																   @endif			
																	   <td>{{$vente->contrat}}</td>
																		<td><strong>{{$vente->code}} </strong> <br> {{$vente->name}} {{$vente->prename}}</td>       
																		<td>{{$vente->email}} -- <br>  {{$vente->tel}}</td> 
																		<td>{{$vente->immatricule}} -- <br> {{$vente->marque}}</td>  
																		
																		 @can('manage-users')
																		 <td>{{$vente->payment}} -- {{$vente->duree}} mois</td> 
																		 <td>{{$vente->montant}}</td> 
																		 {{-- <td>{{$vente->user->name}} -- {{implode(' , ', $vente->user->roles()->pluck('name')->toArray())}}</td>  --}}
																		 @endcan  
																			
																		 @if ($vente->payment == 'Unique')
																		 {{-- <div style="display:none">{{$v = ($vente->montant * $bonus0) / 100   }}</div> --}}

																		 @if($vente->duree == 1)
																			<div style="display:none" >{{$v = ($vente->montant * (($bonus) /100))}}</div> 
																		
																		@elseif ($vente->duree == 2) 
																			<div style="display:none" >{{$v = ($vente->montant * (($bonus1) /100))}}</div> 
																		 @elseif($vente->duree == 3)
																			<div style="display:none" >{{$v = ($vente->montant * (($bonus2) /100))}}</div> 
																		 @else 
																		Erreur        
																		
																		@endif

																			 @if($vente->compteur = 1)
																				  <div style="display:none" >{{$viol = $v + $vente->montant}} </div>  
																				  <td>{{ number_format($viol, 0, ',', ' ') }}</td> 
																			 @else
																					Impossible 
																			 @endif	
			
																		 @else
																		 
																		@if($vente->duree == 1)
																			<div style="display:none" >{{$v0 = ($vente->montant * (($bonus) /100))}}</div> 
																		
																		@elseif ($vente->duree == 2) 
																			<div style="display:none" >{{$v0 = ($vente->montant * (($bonus1) /100))}}</div> 
																		@elseif($vente->duree == 3)
																			<div style="display:none" >{{$v0 = ($vente->montant * (($bonus2) /100))}}</div> 
																		 @else 
																		Erreur        
																		
																		@endif

											
																		 <div style="display:none" >{{$v1 = ($v0 + $vente->montant)/$vente->duree}}</div> 
																			 @if ($vente->compteur >=1)
																	  
																				<td>{{ number_format($v1, 0, ',', ' ') }}</td>  
																		
																			@endif
																		 @endif
																		 {{-- <td>{{$vente->immatricule}} {{$vente->marque}}</td>  --}}
																		 @can('manage-visiteurs')
																		<td>
																		 
			
																		   {{-- @can('manage-ventes') 
																				@if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($vente->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($vente->created_at)->addDay(30)) )
																						@if ($vente->compteur !== 0)
																							<a href="{{ route('elite.rachats.stored' , ['vente' => $vente->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
																						@else
																							
																						@endif
																				@endif
																			@endcan  --}}
			
																			@can('manage-ventes') 
																				@if ($vente->compteur !== 0)
																				<a href="{{ route('elite.rachats.stored' , ['vente' => $vente->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
																				<a href="{{ route('elite.prints.printer' , ['vente' => $vente->id]) }}" style="background-color:#262626;" class="btn btn-">🖨️</a>
																				@else
																					
																				@endif
																			@endcan 
			
																			{{-- @if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($vente->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($vente->created_at)->addDay(3))    )
																				
															  
																					@else
																		 
																					@can('edit-users')
																					<a href="{{ route('elite.elites.edit' , ['vente' => $vente->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>		
																					@endcan
																					@can('delete-users')
																						<form class="d-inline" method="POST" action="{{ route('elite.elites.destroy' , ['vente' => $vente->id]) }}">
																								@csrf
																								@method('DELETE')
																								<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette vente. Cette action est irréversible ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																						</form>   
																					@endcan		
																			@endif --}}
			
																			 
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
					
			<div class="tab-pane" id="tab4">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des Versements effectués</h3>
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
																<th class="border-bottom-0 w-20">Date</th>
																		<th class="border-bottom-0 w-20">Id vent.</th>
																		<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																		<th class="border-bottom-0 w-30">Tel</th>
																		<th class="border-bottom-0 w-15">Immat véhicule</th>
																		@can('manage-users')
																		<th class="border-bottom-0 w-15">Type paiement</th>
																		<th class="border-bottom-0 w-15">Val vente</th>
																		{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																		@endcan
																		{{-- <th class="border-bottom-0 w-15">Val rachat</th> --}}
																		<th class="border-bottom-0 w-10">montant versé</th>
																		{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
															</tr>
														</thead>
														<tbody>
															@if(!empty($rachats) && $rachats->count())
																@foreach($rachats as $rachat) 
																<tr>
																	<th scope="row">{{$rachat->id}}</th>
																	<td>{{\Carbon\Carbon::parse($rachat->created_at)->format('d/m/Y')}}</td>           		
																	<td>{{$rachat->vente->contrat}}</td>
																		<td>{{$rachat->vente->name}} {{$rachat->vente->prename}}</td>       
																		<td>{{$rachat->vente->tel}} </td> 
																		<td>{{$rachat->vente->immatricule}} -- <br> {{$rachat->vente->marque}}</td>  
																		
																		@can('manage-users')
																		<td>{{$rachat->payment}}</td> 
																		<td>{{ number_format($rachat->vente->montant, 0, ',', ' ') }}</td> 
																		{{-- <td>{{$rachat->user->name}} -- {{implode(' , ', $rachat->user->roles()->pluck('name')->toArray())}}</td>  --}}
																		@endcan  
																			
																	
																		<td>{{ number_format($rachat->montant, 0, ',', ' ') }}</td> 
																		{{-- <td>
																			@can('manage-ventes') 
																			@if ($vente->compteur !== 0)
																			<a href="{{ route('elite.printers.printer' , ['vente' => $vente->id]) }}" style="background-color:#262626;" class="btn btn-">🖨️</a>
																			@else
																				
																			@endif
																		@endcan 
																		</td> --}}
																	
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

			<div class="tab-pane" id="tab5">				
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
													<table class="table table-bordered border-top text-nowrap" id="example1">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-30">N°contrat</th> 
																<th class="border-bottom-0 w-20">Date</th>
																		<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																		<th class="border-bottom-0 w-20">Tel</th>	
																		<th class="border-bottom-0 w-15">Immat véhicule</th>
																	
																		@can('manage-users')
																		<th class="border-bottom-0 w-15">Type paiement</th>
																		<th class="border-bottom-0 w-10">montant vente</th> 
																		{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																		@endcan
																		<th class="border-bottom-0 w-15">Val rachat</th>


															</tr>
														</thead>
														<tbody>
															@if(!empty($transactions) && $transactions->count())
																@foreach($transactions as $transaction) 
																<tr>
																	<th scope="row">{{$transaction->id}}</th>
																	<td>{{$transaction->contrat}}</td>
																	<td>{{\Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y')}}</td>           		

																		<td>{{$transaction->name}} {{$transaction->prename}}</td>       
																		<td>{{$transaction->tel}} </td> 
																		<td>{{$transaction->immatricule}} {{$transaction->marque}}</td>  
																		
																		@can('manage-users')
																		<td>{{$transaction->payment}} -- {{$transaction->duree}} mois</td> 
																		<td>{{ number_format($transaction->montant, 0, ',', ' ') }}</td>
																		{{-- <td>{{$transaction->user->name}} -- {{implode(' , ', $transaction->user->roles()->pluck('name')->toArray())}}</td>  --}}
																		@endcan  
																			
																	
																		@if ($transaction->payment == 'Unique')

																			@if($transaction->duree == 1)
																				<div style="display:none" >{{$v = ($transaction->montant * (($bonus) /100))}}</div> 
																			
																			@elseif ($transaction->duree == 2) 
																				<div style="display:none" >{{$v = ($transaction->montant * (($bonus1) /100))}}</div> 
																			 @elseif($transaction->duree == 3)
																				<div style="display:none" >{{$v = ($transaction->montant * (($bonus2) /100))}}</div> 
																			@else 
																			Erreur        
																			
																			@endif

																		{{-- <div style="display:none">{{$v = ($transaction->montant * $bonus) / 100   }}</div> --}}
																			
																				<div style="display:none" >{{$viol = $v + $transaction->montant}} </div>  
																				<td>{{ number_format($viol, 0, ',', ' ') }}</td> 
																			

																		@else
																		{{-- <div style="display:none" >{{$v0 = ($transaction->montant * (($bonus) /100))}}</div>  --}}

																		@if($transaction->duree == 1)
																			<div style="display:none" >{{$v0 = ($transaction->montant * (($bonus) /100))}}</div> 
																		
																		@elseif ($transaction->duree == 2) 
																			<div style="display:none" >{{$v0 = ($transaction->montant * (($bonus1) /100))}}</div> 
																		 @elseif($transaction->duree == 3)
																			<div style="display:none" >{{$v0 = ($transaction->montant * (($bonus2) /100))}}</div> 
																		@else 
																		Erreur        
																		
																		@endif


																		<div style="display:none" >{{$v1 = ($v0 + $transaction->montant)/$transaction->duree}}</div> 
																		
																	
																				<td>{{ number_format($v1 * $transaction->duree, 0, ',', ' ') }}</td>  
																		
																		@endif

																		{{--  <td>
																			<a href="{{ route('elite.elites.show' , ['visiteur' => $visiteur->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>

																		</td> --}}
																	
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

			<div class="tab-pane" id="tab6">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Reste pour le versement</h3>
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
													<table class="table table-bordered border-top text-nowrap" id="example">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																{{-- <th class="border-bottom-0 w-20">Numéro de compte</th> --}}
																		<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																		<th class="border-bottom-0 w-20">Tel</th>	
																		<th class="border-bottom-0 w-15">Immat véhicule</th>
																	
																		@can('manage-users')
																		<th class="border-bottom-0 w-15">Type paiement</th>
																		{{-- <th class="border-bottom-0 w-10">montant vente</th>  --}}
																		{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																		@endcan
																		<th class="border-bottom-0 w-15">Reste</th>

															</tr>
														</thead>
														<tbody>
															@if(!empty($sommes) && $sommes->count())
																@foreach($sommes as $somme) 
																<tr>
																	<th scope="row">{{$somme->id}}</th>
																	{{-- <td>{{$somme->code}}</td>       		 --}}
																		<td>{{$somme->name}} {{$somme->prename}}</td>       
																		<td>{{$somme->tel}} </td> 
																		<td>{{$somme->immatricule}} {{$somme->marque}}</td>  
																		
																		@can('manage-users')
																		<td>{{$somme->payment}} -- {{$somme->duree}} mois</td> 
																		@endcan  

																				<td>{{ number_format($somme->soustract, 0, ',', ' ') }}</td> 

																		
																</tr>
																@endforeach
																@else
																					<tr>
																							<td colspan="10" class="text-center"><i style="color: white"><strong>Aucun enregistrements correspondants trouvés</strong></i></td>
																						</tr>
																@endif													
														</tbody>
													</table>	
													{{-- {{ $sommes->links() }}				 --}}
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
