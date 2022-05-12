@extends('layouts.master')
@section('css')
		<!-- INTERNAl Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
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
								<h4 class="page-title mb-0">Liste transactions des entreprises</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Solde Compte courant</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="{{route('depots.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouveau particulier </a> --}}
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
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Dépots</a></li>
				<li><a href="#tab2" data-toggle="tab">Retraits</a></li>
				<li><a href="#tab3" data-toggle="tab">Dépots supprimés</a></li>
				<li><a href="#tab4" data-toggle="tab">Retraits supprimés</a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">
				
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
													<table class="table table-bordered border-top text-nowrap" id="example4">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Date</th>
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom Entreprise</th>	
																<th class="border-bottom-0 w-20">Gérant</th>
																{{-- <th class="border-bottom-0 w-20">Email</th>--}}
																<th class="border-bottom-0 w-15">Montant</th> 
																{{-- <th class="border-bottom-0 w-15">Solde actuel</th> --}}
																<th class="border-bottom-0 w-10">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!empty($deposes) && $deposes->count())
															@foreach($deposes as $depose)
															 <tr>
															 <th scope="row">{{$depose->id}}</th>
															 <td>{{\Carbon\Carbon::parse($depose->updated_at)->format('d/m/Y')}}</td> 
															 <td>{{$depose->society->code}}</td>
															 <td>{{$depose->society->name}}</td> 
														 <td>{{$depose->society->name_gerant}} {{$depose->society->prename_gerant}} {{$depose->society->email}} {{$depose->society->tel}}</td>
																 {{-- <td>{{$depose->email}}</td>            --}} 
																 <td>{{ number_format($depose->montant, 0, ',', ' ') }}</td>        
																 {{-- <td>{{ number_format($depose->total_quantity, 0, ',', ' ') }}</td>                                            --}}
																 <td>
																	{{-- @can('show-deposes') --}}
																	{{-- <a href="{{ route('depose.deposes.show' , ['depose' => $depose->id]) }}" style="background-color:#fff" class="btn btn-">👀</a> --}}
																	{{-- @endcan --}}
																	
																	   @if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depose->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($depose->created_at)->addDay(3))    )

																	   @else
																	
																		@can('edit-deposes')
																		<a href="{{ route('depose.deposes.edit' , ['depose' => $depose->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																		@endcan
																	   @endif

																	   @can('delete-deposes')
																	   <form class="d-inline" method="POST" action="{{ route('depose.deposes.destroy' , ['depose' => $depose->id]) }}">
																		@csrf
																		@method('DELETE')
																		<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce dépot ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																</form>   
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
			<div class="tab-pane  " id="tab2">
				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste Retraits</h3>
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
																<th class="border-bottom-0 w-20">Nom Entreprise</th>
																<th class="border-bottom-0 w-20">Gérant</th>				
																<th class="border-bottom-0 w-15">Montant</th>
																{{-- <th class="border-bottom-0 w-15">Solde actuel</th> --}}
																<th class="border-bottom-0 w-10">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!empty($widraws) && $widraws->count())
															@foreach($widraws as $widraw)
															 <tr>
															 <th scope="row">{{$widraw->id}}</th>
															 <td>{{\Carbon\Carbon::parse($widraw->updated_at)->format('d/m/Y')}}</td> 
															 <td>{{$widraw->sod->society->code}}</td> 
																 <td>{{$widraw->sod->society->name}}</td>     
																 <td>{{$widraw->sod->society->name_gerant}} {{$widraw->sod->society->prename_gerant}} {{$widraw->sod->society->email}} {{$widraw->sod->society->tel}}</td>                                                                                                        
																 <td>{{ number_format($widraw->montant, 0, ',', ' ') }}</td>      
																 {{-- <td>{{ number_format($widraw->total_quantity, 0, ',', ' ') }}</td>                                          --}}
																 <td>
																	
																	@if ( \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($widraw->created_at))  &&  \Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($widraw->created_at)->addDay(3))    )

																	@else
																
																	
																		@can('edit-widraws')
																		<a href="{{ route('widraw.widraws.edit' , ['widraw' => $widraw->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																		@endcan
																	@endif

																	@can('delete-widraws')
																	<form class="d-inline" method="POST" action="{{ route('widraw.widraws.destroy' , ['widraw' => $widraw->id]) }}">
																	 @csrf
																	 @method('DELETE')
																	 <button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce retrait ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
															 </form>   
																	@endcan
																	{{-- @can('show-retraits') --}}
																	{{-- <a href="{{ route('retrait.retraits.show' , ['retrait' => $retrait->id]) }}" style="background-color:#fff" class="btn btn-">👀</a> --}}
																	{{-- @endcan --}}
																	{{-- @can('edit-retraits')
																	   <a href="{{ route('retrait.retraits.edit' , ['retrait' => $retrait->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																	   @endcan
																	   @can('delete-retraits')
																	   <form class="d-inline" method="POST" action="{{ route('retrait.retraits.destroy' , ['retrait' => $retrait->id]) }}">
																		@csrf
																		@method('DELETE')
																		<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce retrait ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																</form>   
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
			<div class="tab-pane" id="tab3">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste des dépots supprimés</h3>
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
															<th class="border-bottom-0 w-20">Date sup.</th>						
															<th class="border-bottom-0 w-20">Numéro compte</th>
															<th class="border-bottom-0 w-20">Nom Entreprise</th>
															<th class="border-bottom-0 w-20">Gérant</th>
															<th class="border-bottom-0 w-15">Montant</th>
															<th class="border-bottom-0 w-30">Admin</th>
															<th class="border-bottom-0 w-10">Actions</th>
														</tr>
													</thead>
													<tbody>
														@if(!empty($partSupps) && $partSupps->count())
														@foreach($partSupps as $ent)
														<tr>
														<th scope="row">{{$ent->id}}</th>
														<td>{{$ent->deleted_at}}</td>			
															<td>{{$ent->society->code}}</td>
															<td>{{$ent->society->name}}</td>      
															<td>{{$ent->society->name_gerant}} {{$ent->society->prename_gerant}} {{$ent->society->email}}  {{$ent->society->tel}}</td>  
															<td>{{$ent->montant}}</td>
															<td>{{implode(' , ', $ent->user->roles()->pluck('name')->toArray())}}</td>                                
															<td>
																
																@can('delete-deposes')
																
																<form method="POST"  class="d-inline" action="{{route('depose.deposes.restore' , ['depose' => $depose->id]) }}">
																	@csrf
																	@method('PUT')																			
																	<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos du dépot ?');" type="submit">✔️</button>																			
																</form>


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
		<div class="tab-pane" id="tab4">				
			<div class="card col-md-10">
				<div class="card-header">
					<h3 class="card-title">Liste des retraits supprimés</h3>
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
														<th class="border-bottom-0 w-20">Date sup.</th>
														{{-- <th class="border-bottom-0 w-20">Image</th> --}}
														<th class="border-bottom-0 w-20">Numéro compte</th>
														<th class="border-bottom-0 w-20">Nom Entreprise</th>
														<th class="border-bottom-0 w-20">Gerant</th>
														<th class="border-bottom-0 w-15">Montant</th>
														<th class="border-bottom-0 w-30">Admin</th>
														<th class="border-bottom-0 w-10">Actions</th>
													</tr>
												</thead>
												<tbody>
													@if(!empty($partSups) && $partSups->count())
													@foreach($partSups as $ent)
													<tr>
													<th scope="row">{{$ent->id}}</th>
													<td>{{$ent->deleted_at}}</td>			
														<td>{{$ent->sod->society->code}}</td>
														<td>{{$ent->sod->society->name}}</td>
														<td>{{$ent->sod->society->name_gerant}} {{$ent->sod->society->prename_gerant}} {{$ent->sod->society->email}}  {{$ent->sod->society->tel}}</td>       
														<td>{{$ent->montant}}</td> 
														<td>{{implode(' , ', $ent->user->roles()->pluck('name')->toArray())}}</td>                                                  
														<td>
															
															@can('delete-widraws')
															
															<form method="POST"  class="d-inline" action="{{route('widraw.widraws.restore' , ['widraw' => $widraw->id]) }}">
																@csrf
																@method('PUT')																			
																<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos du retrait ?');" type="submit">✔️</button>																			
															</form>

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
		</div>
	</div>
</div>


						<!-- Row -->
						{{-- <div class="row flex-lg-nowrap">
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
																	<th class="border-bottom-0 w-20">Nom complet</th>
																	<th class="border-bottom-0 w-15">Solde</th>
																	<th class="border-bottom-0 w-20">Statut</th>
																</tr>
															</thead>
															<tbody>
                                                                @if(!empty($depots) && $depots->count())
                                                                 @foreach($depots as $depot)
                                                                 <tr>
                                                                  <th scope="row">{{$depot->id}}</th>
																	 <td>{{$depot->particulier->name}} {{$depot->particulier->prename}}</td> 
																	 <td>{{ number_format($depot->montant, 0, ',', ' ') }}</td> 
																 
																	@if ($depot->montant > 10000)
																		<td><i class="fa fa-check text-success"></i>Solde suffisant</td>
																	@elseif($depot->montant > 0 && $depot->montant <= 10000)
																		<td><i class="fa fa-sort-numeric-desc text-warning"></i> Attention!!!</td>
																	@else
																		<td><i class="fa fa-exclamation-triangle text-danger"></i> Solde insuffisant</td>
																	@endif		
																	
																
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
						</div> --}}
						<!-- End Row -->

					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
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