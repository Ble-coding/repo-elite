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
								<h4 class="page-title mb-0">Liste des entreprises</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Entreprises</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									@can('manage-clients')
									<a href="{{route('entreprises.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouvelle entreprise </a>
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
									@endcan

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
				<li class=""><a href="#tab1" class="active" data-toggle="tab">En attente</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Entreprises</a></li>
						@can('manage-users')
							<li><a href="#tab3" data-toggle="tab">Supprimés</a></li>
						@endcan
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste entreprises en attente</h3>
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
																{{-- <th class="border-bottom-0 w-20">Image</th> --}}
																<th class="border-bottom-0 w-20">Date C.</th>
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom entreprise</th>
																<th class="border-bottom-0 w-15">Forme juridique</th>
																<th class="border-bottom-0 w-30">Nom du gérant</th>
																<th class="border-bottom-0 w-30">Tel gérant</th>
																{{-- @can('manage-users')
																<th class="border-bottom-0 w-30">Admin</th>
																@endcan --}}
																{{-- @can('manage-clients') --}}
																<th class="border-bottom-0 w-10">Actions</th>
																{{-- @endcan --}}
															</tr>
														</thead>
														<tbody>
															@if(!empty($entreprises) && $entreprises->count())
															@foreach($entreprises as $entreprise)
															 <tr>
															 	<th scope="row">{{$entreprise->id}}</th>
																{{-- @php
																	$image = DB::table('entreprises')->where('id', 1)->first();
																	$images = explode('|', $entreprise->image);
																	@endphp
																		<td> --}}
																			{{-- <span class="avatar brround avatar-md d-block">	 --}}
																				{{-- <div class="user-pic">
																					<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" alt="img" class="avatar avatar-md brround">
																				</div> --}}
																			{{-- </span> --}}
																		{{-- </td> --}}
																<td>{{\Carbon\Carbon::parse($entreprise->created_at)->format('d/m/Y')}}</td>
																<td>{{$entreprise->code}}</td>
																 <td>{{$entreprise->name}}</td>
																 <td>{{$entreprise->forme->name}}</td>
																 <td>{{$entreprise->name_gerant}} {{$entreprise->prename_gerant}}</td>
																 <td>{{$entreprise->tel}}</td>
																 {{-- @can('manage-users')
																 <td>{{$entreprise->user->name}} -- {{implode(' , ', $entreprise->user->roles()->pluck('name')->toArray())}}</td>
																 @endcan  --}}

																 <td>
																	{{-- @can('show-entreprises') --}}
																	@can('manage-investis')
																			<a href="{{ route('confirmers.stored', ['entreprise' => $entreprise->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																	@endcan
																	{{-- <a href="{{ route('entreprises.show' ,  --}}
																	@can('manage-clients')
																		<a href="{{ route('entreprises.print' , ['entreprise' => $entreprise->id]) }}" style="background-color:#eee;" class="btn btn-">🖨️</a>
																		{{-- @endcan --}}
																			@can('edit-entreprises')
																			<a href="{{ route('entreprises.edit' , ['entreprise' => $entreprise->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																			@endcan
																		{{-- @can('delete-entreprises') --}}
																		<form class="d-inline" method="POST" action="{{ route('entreprises.destroy' , ['entreprise' => $entreprise->id]) }}">
																				@csrf
																				@method('DELETE')
																				<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette entreprise ?. Cette action est irréversible.');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
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


			<div class="tab-pane " id="tab2">
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste entreprises en attente</h3>
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
																{{-- <th class="border-bottom-0 w-20">Image</th> --}}
																<th class="border-bottom-0 w-20">Date C.</th>
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom entreprise</th>
																<th class="border-bottom-0 w-15">Forme juridique</th>
																<th class="border-bottom-0 w-30">Nom du gérant</th>
																<th class="border-bottom-0 w-30">Tel gérant</th>
																{{-- @can('manage-users')
																<th class="border-bottom-0 w-30">Admin</th>
																@endcan --}}
																{{-- @can('manage-clients') --}}
																{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																{{-- @endcan --}}
															</tr>
														</thead>
														<tbody>
															@if(!empty($listEntreprises) && $listEntreprises->count())
															@foreach($listEntreprises as $listEntreprise)
															 <tr>
															 	<th scope="row">{{$listEntreprise->id}}</th>
																{{-- @php
																	$image = DB::table('entreprises')->where('id', 1)->first();
																	$images = explode('|', $entreprise->image);
																	@endphp
																		<td> --}}
																			{{-- <span class="avatar brround avatar-md d-block">	 --}}
																				{{-- <div class="user-pic">
																					<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" alt="img" class="avatar avatar-md brround">
																				</div> --}}
																			{{-- </span> --}}
																		{{-- </td> --}}
																<td>{{\Carbon\Carbon::parse($listEntreprise->created_at)->format('d/m/Y')}}</td>
																<td>{{$listEntreprise->code}}</td>
																 <td>{{$listEntreprise->name}}</td>
																 <td>{{$listEntreprise->forme->name}}</td>
																 <td>{{$listEntreprise->name_gerant}} {{$listEntreprise->prename_gerant}}</td>
																 <td>{{$listEntreprise->tel}}</td>
																 {{-- @can('manage-users')
																 <td>{{$entreprise->user->name}} -- {{implode(' , ', $entreprise->user->roles()->pluck('name')->toArray())}}</td>
																 @endcan  --}}
																	{{--
																 <td> --}}
																	{{-- @can('show-entreprises') --}}
																	{{-- @can('manage-investis')
																			<a href="{{ route('confirmers.stored', ['entreprise' => $entreprise->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																	@endcan  --}}
																	{{-- <a href="{{ route('entreprises.show' ,  --}}
																	{{-- @can('manage-clients')
																		<a href="{{ route('entreprises.print' , ['entreprise' => $entreprise->id]) }}" style="background-color:#eee;" class="btn btn-">🖨️</a> --}}
																		{{-- @endcan --}}
																			{{-- @can('edit-entreprises')
																			<a href="{{ route('entreprises.edit' , ['entreprise' => $entreprise->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																			@endcan --}}
																		{{-- @can('delete-entreprises') --}}
																		{{-- <form class="d-inline" method="POST" action="{{ route('entreprises.destroy' , ['entreprise' => $entreprise->id]) }}">
																				@csrf
																				@method('DELETE')
																				<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette entreprise ?. Cette action est irréversible.');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																		</form>
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


			@can('manage-users')
				<div class="tab-pane" id="tab3">
					<div class="card col-md-10">
						<div class="card-header">
							<h3 class="card-title">Liste des entreprises supprimées</h3>
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
																<th class="border-bottom-0 w-20">Date sup.</th>
																{{-- <th class="border-bottom-0 w-20">Image</th> --}}
																<th class="border-bottom-0 w-20">Numéro compte</th>
																<th class="border-bottom-0 w-20">Nom entreprise</th>
																<th class="border-bottom-0 w-15">Forme juridique</th>
																<th class="border-bottom-0 w-30">Nom du gérant</th>
																<th class="border-bottom-0 w-30">Tel gérant</th>
																{{-- <th class="border-bottom-0 w-30">Email</th> --}}
																{{-- <th class="border-bottom-0 w-30">Tel</th> --}}
																{{-- <th class="border-bottom-0 w-30">Admin</th> --}}
																<th class="border-bottom-0 w-10">Actions</th>
															</tr>
														</thead>
														<tbody>
															@if(!empty($partSups) && $partSups->count())
															@foreach($partSups as $ent)
															<tr>
															<th scope="row">{{$ent->id}}</th>
															<td>{{$ent->deleted_at}}</td>
																<td>{{$ent->code}}</td>
																<td>{{$ent->name}} {{$ent->tel_ent}}</td>
																<td>{{$ent->forme->name}}</td>
																<td>{{$ent->name_gerant}}</td>
																<td>{{$ent->tel}}</td>
																{{-- <td>{{$ent->user->name}} -- {{implode(' , ', $ent->user->roles()->pluck('name')->toArray())}}</td>                                                   --}}
																<td>

																	@can('delete-entreprises')

																<form method="POST"  class="d-inline" action="{{route('entreprises.restore' , ['entreprise' => $entreprise->id]) }}">
																	@csrf
																	@method('PUT')
																	<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos de l\'entreprise ?');" type="submit">✔️</button>
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
			@endcan
		</div>
	</div>
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
