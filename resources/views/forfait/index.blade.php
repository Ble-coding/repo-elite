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
								<h4 class="page-title mb-0">Liste des forfaits</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Forfaits</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{route('admin.forfaits.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouveau Forfait </a>
									{{-- <button data-target="#modaldemo3" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-plus mr-1"></i>Forfait</button>  --}}
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
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Forfaits</a></li>
				@can('manage-users')
					<li><a href="#tab2" data-toggle="tab">Supprimés</a></li>	
				@endcan						
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste forfaits</h3>
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
																<th class="border-bottom-0 w-20">Libelle</th>
																<th class="border-bottom-0 w-15">Duree</th>
																<th class="border-bottom-0 w-30">%Mensuel-%Jalonnement</th>
																 <th class="border-bottom-0 w-30">Nombre investissements</th>
																<th class="border-bottom-0 w-10">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!empty($forfaits) && $forfaits->count())
															@foreach($forfaits as $forfait)
															 <tr>
															 <th scope="row">{{$forfait->id}}</th>
																 <td>{{$forfait->libelle_Forfait}}</td>
																 <td>{{$forfait->duree}}</td>
																	 {{-- <td>{{\Carbon\Carbon::parse($forfait->duree)->format('m/Y')}}</td>  --}}
																 <td>{{$forfait->pourcentageM}}% -{{$forfait->pourcentageJ}}%</td> 

																 
																
																 <td>{{$forfait->investissements_count}}</td>   
																
																
																	<td>
																		@can('show-users')
																		<a href="{{ route('admin.forfaits.show' , ['forfait' => $forfait->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																		@endcan 
																		@can('edit-users')
																		<a href="{{ route('admin.forfaits.edit' , ['forfait' => $forfait->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																		   @endcan
																		   @can('delete-users')
																		   <form class="d-inline" method="POST" action="{{ route('admin.forfaits.destroy' , ['forfait' => $forfait->id]) }}">
																			@csrf
																			@method('DELETE')
																			<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce forfait ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
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
		
				<div class="tab-pane" id="tab2">				
					<div class="card col-md-10">
						<div class="card-header">
							<h3 class="card-title">Liste des forfaits supprimés</h3>
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
																<th class="border-bottom-0 w-20">Date sup.</th>
																<th class="border-bottom-0 w-20">Libelle</th>
																<th class="border-bottom-0 w-15">Duree</th>
																<th class="border-bottom-0 w-30">%Mensuel-%Jalonnement</th>
																 {{-- <th class="border-bottom-0 w-30">Nombre investissements</th> --}}
																<th class="border-bottom-0 w-10">Actions</th>

															</tr>
														</thead>
														<tbody>
															@if(!empty($partSups) && $partSups->count())
															@foreach($partSups as $par)
															<tr>
																<th scope="row">{{$par->id}}</th>
																<td>{{$par->deleted_at}}</td>
																<td>{{$par->libelle_Forfait}}</td>
																<td>{{$par->duree}}</td>
																	{{-- <td>{{\Carbon\Carbon::parse($forfait->duree)->format('m/Y')}}</td>  --}}
																<td>{{$par->pourcentageJ}}% -{{$par->pourcentageJ}}%</td>  
																{{-- <td>{{$par->investissements_count}}</td>    --}}
																<td>
																	@can('delete-users')
																	
																<form method="POST"  class="d-inline" action="{{route('admin.forfaits.restore' , ['forfait' => $forfait->id]) }}">
																	@csrf
																	@method('PUT')																			
																	<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos du forfait ?');" type="submit">✔️</button>																			
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