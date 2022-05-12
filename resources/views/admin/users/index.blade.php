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
								<h4 class="page-title mb-0">Liste des sous utilisateurs</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Sous utlisateurs</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{route('admin.users.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouvel utilisateur </a>
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
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Utilisateurs</a></li>
			
					<li><a href="#tab2" data-toggle="tab">Supprimés</a></li>	
		
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste utilisateurs</h3>
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
															<th class="border-bottom-0 w-20">Utilisateur</th>
															<th class="border-bottom-0 w-15">Nom</th>
															<th class="border-bottom-0 w-30">Email</th>
															<th class="border-bottom-0 w-30">Roles</th>
															<th class="border-bottom-0 w-10">Actions</th>
														</tr>
													</thead>
													<tbody>
														@if(!empty($users) && $users->count())
														@foreach($users as $user)
														 <tr>
														 <th scope="row">{{$user->id}}</th>
															 <td><span class="avatar brround avatar-md d-block" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span></td>
															 <td>{{$user->name}}</td>
															 <td>{{$user->email}}</td>        
															 <td>{{implode(' , ', $user->roles()->get()->pluck('name')->toArray())}}</td>                                             
															 <td>
																@can('show-users')
																<a href="{{ route('admin.users.show' , ['user' => $user->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																@endcan
																  @can('edit-users')
																   <a href="{{ route('admin.users.edit' , ['user' => $user->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																   @endcan
																   @can('delete-users')
																   <form class="d-inline" method="POST" action="{{ route('admin.users.destroy' , ['user' => $user->id]) }}">
																	@csrf
																	@method('DELETE')
																	<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
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
							<h3 class="card-title">Liste des utilisateurs supprimés</h3>
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
																<th class="border-bottom-0 w-20">Utilisateur</th>
																{{-- <th class="border-bottom-0 w-15">Nom</th> --}}
																<th class="border-bottom-0 w-30">Email</th>
																<th class="border-bottom-0 w-30">Roles</th>
																<th class="border-bottom-0 w-10">Actions</th>

															</tr>
														</thead>
														<tbody>
															@if(!empty($partSups) && $partSups->count())
															@foreach($partSups as $par)
															<tr>
																<th scope="row">{{$par->id}}</th>
																<td>{{$par->deleted_at}}</td>
																<td>{{$par->name}} {{$par->prename}}</td>
																<td>{{$par->email}}</td>
																<td>{{implode(' , ', $user->roles()->get()->pluck('name')->toArray())}}</td>                  
																<td>
																	@can('delete-users')
																	
																<form method="POST"  class="d-inline" action="{{route('admin.users.restore' , ['user' => $user->id]) }}">
																	@csrf
																	@method('PUT')																			
																	<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos de l\'utilisateur ?');" type="submit">✔️</button>																			
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