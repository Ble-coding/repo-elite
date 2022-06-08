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
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Compte Courant Particulier </a></li>
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
				@can('manage-investis') 	
				<li class=""><a  href="#tab1" class="active"  data-toggle="tab">Dépots </a></li> 
					@endcan
					@can('manage-visiteurs') 
					<li class=""><a  href="#tab2"  data-toggle="tab">Nouveaux dépots </a></li>
					@endcan
					@can('manage-investis') 	
					<li class=""><a href="#tab3" data-toggle="tab">Solde</a></li> 
					<li class=""><a href="#tab4" data-toggle="tab">Retraits </a></li> 
				@endcan
               
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">

            @can('manage-investis')
				<div class="tab-pane active" id="tab1">
					
					<div class="card col-md-10">
						<div class="card-header">
							<h3 class="card-title">Liste Dépots</h3>
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
																<th class="border-bottom-0 w-20">Date</th>
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																<th class="border-bottom-0 w-20">Remettant-tel</th>
																{{-- <th class="border-bottom-0 w-20">Email</th>--}}
																<th class="border-bottom-0 w-15">Montant</th> 
																{{-- <th class="border-bottom-0 w-15">Solde actuel</th> --}}
																@can('manage-visiteurs')
																<th class="border-bottom-0 w-10">Actions</th>
																@endcan
															</tr>
														</thead>
														<tbody>
															@if(!empty($listDepositarys) && $listDepositarys->count())
															@foreach($listDepositarys as $depositary)
																<tr>
																<th scope="row">{{$depositary->id}}</th>
																<td>{{\Carbon\Carbon::parse($depositary->updated_at)->format('d/m/Y')}}</td> 
																<td>{{$depositary->client->code}}</td>
																	<td>{{$depositary->client->name}} {{$depositary->client->prename}} -- {{$depositary->client->email}} {{$depositary->client->tel}}</td> 
																	<td>{{$depositary->name_deposant}} {{$depositary->prename_deposant}} -- <br> {{$depositary->tel_deposant}}</td>     
																	{{-- <td>{{$depositary->email}}</td>            --}} 
																	<td>{{ number_format($depositary->montantD, 0, ',', ' ') }}</td>        
																	{{-- <td>{{ number_format($depositary->total_quantity, 0, ',', ' ') }}</td>--}}
																	@can('manage-visiteurs')
																	<td>

																				{{-- @if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depositary->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depositary->created_at)->addDay(3))    )

																			@else
																		
																				@can('edit-depositarys')
																								<a href="{{ route('depositary.depositarys.edit' , ['depositary' => $depositary->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																				@endcan
																			@endif --}}
																			
																			<a href="{{ route('depositary.prints.printer' , ['depositary' => $depositary->id]) }}" style="background-color:#262626;" class="btn btn-">🖨️</a>
																			
																				{{-- @can('delete-depositarys')
																				<form class="d-inline" method="POST" action="{{ route('depositary.depositarys.destroy' , ['depositary' => $depositary->id]) }}">
																		@csrf
																		@method('DELETE')
																		<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce dépot ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																								</form>   
																				@endcan --}}
																			
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
													{{-- <div class="row d-flex justify-content-center">
														{{ $users->links() }}
													</div> --}}
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

				@can('manage-visiteurs')
				<div class="tab-pane" id="tab2">				
                    <div class="card col-md-10">
                        <div class="card-header">
                            <h3 class="card-title">Création</h3>
                        </div>
                    </div>
																				<form class="form-horizontal" action="{{ route('depositary.depositarys.store') }}" method="POST" enctype="multipart/form-data">    
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
																												@include('includes.formdepositary')
																									</div>
																									<div class="col-md-1">
																								
																									</div>
																								</div>
																								<div class="text-wrap">
																									<div class="btn-list text-right">
																										<button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Déposer</button>
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

			@can('manage-investis')
				<div class="tab-pane" id="tab3">
									<div class="card col-md-10">
										<div class="card-header">
											<h3 class="card-title">Liste des soldes depots clients</h3>
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
																				<th class="border-bottom-0 w-20">Numéro de compte</th>
																				{{-- <th class="border-bottom-0 w-20">Nom & prénoms</th> --}}
																				<th class="border-bottom-0 w-20">Proprietaire</th>
																				<th class="border-bottom-0 w-20">Remettant-tel</th>
																	<th class="border-bottom-0 w-15">Solde actuel</th>
																	@can('manage-visiteurs')
																	<th class="border-bottom-0 w-15">Actions</th>
																	@endcan
																</tr>
															</thead>  
															<tbody>
																@if(!empty($depositarys) && $depositarys->count())                                                               
																@foreach($depositarys as $depositary)
																<tr>
																<th scope="row">{{$depositary->id}}</th>
																<td>{{\Carbon\Carbon::parse($depositary->created_at)->format('d/m/Y')}}</td> 
																<td>{{$depositary->client->code}}</td> 
																	<td>{{$depositary->client->name}} {{$depositary->client->prename}} -- {{$depositary->client->email}} {{$depositary->client->tel}}</td> 
																	{{-- <td>{{$depositary->client->name}} {{$depositary->client->prename}} -- {{$depositary->client->email}} {{$depositary->client->tel}}</td>  --}}
																	<td>{{$depositary->name_deposant}} {{$depositary->prename_deposant}} -- <br> {{$depositary->tel_deposant}}</td>     
																	
																	<td>{{ number_format($depositary->montantD, 0, ',', ' ') }}</td>  
																	{{-- <td>{{ $solde->montant}}</td>  --}}
																	@can('manage-visiteurs')                                  
																		 <td> 
																			{{-- @can('show-soldes') --}}
																			{{-- <a href="{{ route('solde.soldes.show' , ['solde' => $solde->id]) }}" style="background-color:#fff" class="btn btn-">👀</a> --}}
																			{{-- @endcan --}}
																			@if ($depositary->client->status == 0)
																				@if ($depositary->montantD > 5000)
																					
																				<a href="{{ route('depositary.depositarys.stored' , ['depositary' => $depositary->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
																				@endif
																			@else
																	
																			@endif
	
																			{{-- @can('edit-soldes')
																			<a href="{{ route('solde.soldes.edit' , ['solde' => $solde->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																			@endcan
																			@can('delete-soldes')
																			<form class="d-inline" method="POST" action="{{ route('solde.soldes.destroy' , ['solde' => $solde->id]) }}">
																			 @csrf
																			 @method('DELETE')
																			 <button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compte ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																		</form>   
																			   @endcan --}}
	
																		
													                                                                          
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
							<h3 class="card-title">Liste retraits</h3>
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
																<th class="border-bottom-0 w-20">Date</th>
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																<th class="border-bottom-0 w-20">Debiteur-tel</th>
																{{-- <th class="border-bottom-0 w-20">Email</th>--}}
																<th class="border-bottom-0 w-15">Montant</th> 
																{{-- <th class="border-bottom-0 w-15">Solde actuel</th> --}}
																@can('manage-visiteurs')
																<th class="border-bottom-0 w-10">Actions</th>
																@endcan
															</tr>
														</thead>
														<tbody>
															@if(!empty($removes) && $removes->count())
															@foreach($removes as $remove)
																<tr>
																<th scope="row">{{$remove->id}}</th>
																<td>{{\Carbon\Carbon::parse($remove->updated_at)->format('d/m/Y')}}</td> 
																<td>{{$remove->sode->client->code}}</td> 
																	<td>{{$remove->sode->client->name}} {{$remove->sode->client->prename}} -- {{$remove->sode->client->email}} {{$remove->sode->client->tel}}</td> 
																	<td>{{$remove->name_retirant}} {{$remove->prename_retirant}} -- <br> {{$remove->tel_retirant}}</td>     
																	{{-- <td>{{$depot->email}}</td>            --}} 
																	<td>{{ number_format($remove->montant, 0, ',', ' ') }}</td>        
																	{{-- <td>{{ number_format($depot->total_quantity, 0, ',', ' ') }}</td>--}}
																	@can('manage-visiteurs')
																	<td>
																	
																			<a href="{{ route('remove.printer.printer' , ['remove' => $remove->id]) }}" style="background-color:#262626;" class="btn btn-">🖨️</a>
																
																				{{-- @if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depot->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depot->created_at)->addDay(3))    )
																						
																			@else
																		
																				@can('edit-depots')
																								<a href="{{ route('depot.depots.edit' , ['depot' => $depot->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																				@endcan
																			@endif --}}

																			{{-- <a href="{{ route('retrait.prints.printer' , ['depot' => $depot->id]) }}" style="background-color:#262626;" class="btn btn-">🖨️</a> --}}



																				{{-- @can('delete-depots')
																				<form class="d-inline" method="POST" action="{{ route('depot.depots.destroy' , ['depot' => $depot->id]) }}">
																		@csrf
																		@method('DELETE')
																		<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce dépot ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																								</form>   
																				@endcan --}}
																			
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
													{{-- <div class="row d-flex justify-content-center">
														{{ $users->links() }}
													</div> --}}
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
