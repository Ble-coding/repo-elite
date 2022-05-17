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
								<h4 class="page-title mb-0">Liste des clients</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Particuliers</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{route('customers.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouveau particulier </a>
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
									 {{-- <button data-target="#modaldemo1" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-plus mr-1"></i>Nouveau particulier</button>  --}}
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
									{{-- <a class="btn btn-success" data-target="#modaldemo1" data-toggle="modal" href="">Nouveau client</a> --}}
										</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
{{-- @if(session()->has('error'))
	<div class="alert alert-danger" role="alert">
		{{ session()->get('error') }}
	</div>
@else --}}
@if(session()->has('message'))
	<div class="alert alert-success" role="alert">
		{{ session()->get('message') }}
	</div>
@endif
						{{-- <div class="modal" id="modaldemo1">
										<div class="modal-dialog" role="document">
											<div class="modal-content modal-content-demo">
												<div class="modal-header">
													<h6 class="modal-title">Ajouter un nouveau client</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
											<div class="modal-body">
										<form class="form-horizontal" action="{{ route('particuliers.store') }}" method="POST" enctype="multipart/form-data">    
					   						@csrf
											   @include('includes.formparticulier')
											<div class="modal-footer">
													<button class="btn btn-primary">Sauvegarder</button>
												<button class="btn btn-secondary" data-dismiss="modal" type="button">Fermer</button>
											</div>
						</form>
					</div>
			</div>
		</div> </div> --}}



		<div class="panel panel-primary">
			<div class="tab-menu-heading">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab1" class="active" data-toggle="tab">Particuliers</a></li>
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
								<h3 class="card-title">Liste particuliers</h3>
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
																		<th class="border-bottom-0 w-20">Image</th>
																		<th class="border-bottom-0 w-20">Numéro compte</th>
																		<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																		<th class="border-bottom-0 w-15">Date de naissance</th>
																		{{-- <th class="border-bottom-0 w-30">Email</th> --}}
																		<th class="border-bottom-0 w-30">Tel</th>
																		{{-- @can('manage-users')
																		<th class="border-bottom-0 w-30">Admin</th>
																		@endcan --}}
																	
																		<th class="border-bottom-0 w-10">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	@if(!empty($customers) && $customers->count())
																	@foreach($customers as $customer)
																	 <tr>
																	 <th scope="row">{{$customer->id}}</th>
																	 @php
																		$image = DB::table('customers')->where('id', 1)->first();
																		$images = explode('|', $customer->image);
																	   @endphp  
																		 <td> 
																			{{-- <span class="avatar brround avatar-md d-block">	 --}}																			
																				<div class="user-pic">
																					<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" alt="img" class="avatar avatar-md brround">
																				</div>
																			{{-- </span> --}}
																		</td>
																		<td>{{$customer->code}}</td>
																		 <td>{{$customer->name}} {{$customer->prename}}</td>       
																		 <td>{{\Carbon\Carbon::parse($customer->datenaiss)->format('d/m/Y')}}</td> 
																		 {{-- <td></td>  --}}
																		 <td>{{$customer->tel}} <br> {{$customer->email}}</td>   
																		  {{-- @can('manage-users')
																		  <td>{{$customer->user->name}} -- {{implode(' , ', $customer->user->roles()->pluck('name')->toArray())}}</td> 
																		  @endcan   --}}
																		                                                 
																		 <td>
																			{{-- @can('show-customers') --}}
																			<a href="{{ route('customers.show' , ['customer' => $customer->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																			<a href="{{ route('customers.print' , ['customer' => $customer->id]) }}" style="background-color:#eee;" class="btn btn-">🖨️</a>
																			{{-- @endcan --}} 
																			@can('edit-customers')
																			   <a href="{{ route('customers.edit' , ['customer' => $customer->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																			   @endcan
																			   {{-- @can('delete-customers') --}}
											 								   <form class="d-inline" method="POST" action="{{ route('customers.destroy' , ['customer' => $customer->id]) }}">
																				@csrf
																				@method('DELETE')
																				<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client. Cette action est irréversible ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																		</form>   
																			   {{-- @endcan --}}
																			  
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
					@can('manage-users')
						<div class="tab-pane" id="tab2">				
							<div class="card col-md-10">
								<div class="card-header">
									<h3 class="card-title">Liste des particuliers supprimés</h3>
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
																		{{-- <th class="border-bottom-0 w-20">Image</th> --}}
																		<th class="border-bottom-0 w-20">Numéro compte</th>
																		<th class="border-bottom-0 w-20">Nom & prénoms</th>	
																		<th class="border-bottom-0 w-15">Date de naissance</th>
																		{{-- <th class="border-bottom-0 w-30">Email</th> --}}
																		{{-- <th class="border-bottom-0 w-30">Tel</th> --}}
																		<th class="border-bottom-0 w-30">Admin</th>
																		<th class="border-bottom-0 w-10">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	@if(!empty($partSups) && $partSups->count())
																	@foreach($partSups as $par)
																	<tr>
																	<th scope="row">{{$par->id}}</th>
																	<td>{{$par->deleted_at}}</td>
																	{{-- @php
																		$image = DB::table('customers')->where('id', 1)->first();
																		$images = explode('|', $par->image);
																	@endphp  
																		<td>																		
																				<div class="user-pic">
																					<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" alt="img" class="avatar avatar-md brround">
																				</div>
																		</td> --}}
																		<td>{{$par->code}}</td>
																		<td>{{$par->name}} {{$par->prename}} -- {{$par->tel}} -- {{$par->email}}</td>       
																		<td>{{\Carbon\Carbon::parse($par->datenaiss)->format('d/m/Y')}}</td> 
																		{{-- <td>{{$par->email}}</td>  --}}
																		{{-- <td>{{$par->tel}}</td>      --}}
																		<td>{{$par->user->name}} -- {{implode(' , ', $par->user->roles()->pluck('name')->toArray())}}
																			</td> 
																			
																		<td>
																		
																			@can('delete-customers')
																			{{-- @if(!isset($customers))	 --}}
																			{{-- <div>{{$v = $customer->id}}</div> --}}
																			<form method="POST"  class="d-inline" action="{{route('customers.restore' , ['customer' => $customer->id]) }}">
																				@csrf
																				@method('PUT')																			
																				<button style="background:#eee; color:#262626" class="btn btn" onclick="return confirm('Êtes-vous sûr de vouloir restaurer les infos du client ?');" type="submit">✔️</button>																			
																				</form>
	
																			{{-- @endif --}}


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