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
								<h4 class="page-title mb-0">Liste des demandes</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Particuliers</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									@can('manage-bancaires')
									<a href="{{route('bancaires.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouvelle demande </a>
									@endcan

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


		<div class="panel panel-primary">
			<div class="tab-menu-heading">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab1" class="active" data-toggle="tab">Demandes</a></li>
						{{-- <li class=""><a href="#tab2" data-toggle="tab">Refusées</a></li> --}}
						{{-- @can('manage-users')
							<li><a href="#tab3" data-toggle="tab">Supprimés</a></li>
						@endcan						 --}}
					</ul>
				</div>
			</div>
			<div class="panel-body tabs-menu-body">
				<div class="tab-content">
					<div class="tab-pane active " id="tab1">
						<div class="card col-md-10">
							<div class="card-header">
								<h3 class="card-title">Liste demandes</h3>
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
																		<th class="border-bottom-0 w-20">Date D.</th>
																		{{-- <th class="border-bottom-0 w-20"></th> --}}
																		<th class="border-bottom-0 w-20">Numéro-compte/Nom-prénoms</th>
                                                                        <th class="border-bottom-0 w-30">Tel</th>
																		{{-- <th class="border-bottom-0 w-15">Montant</th> --}}
																		<th class="border-bottom-0 w-10">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	@if(!empty($bancaires) && $bancaires->count())
																	@foreach($bancaires as $bancaire)
																	 <tr>
																	 <th scope="row">{{$bancaire->id}}</th>
																		<td>{{\Carbon\Carbon::parse($bancaire->created_at)->format('d/m/Y')}}</td>


                                                                        @if ( $bancaire->renseigne_id == 2)
                                                                                @if ($bancaire->particulier_id !== Null)
                                                                                <td>{{$bancaire->particulier->code}} - {{$bancaire->particulier->name}} {{$bancaire->particulier->prename}}</td>
                                                                                @elseif($bancaire->client_id !== Null)
                                                                                    <td>{{$bancaire->client->code}} - {{$bancaire->client->name}} {{$bancaire->client->prename}}</td>
                                                                                @elseif($bancaire->customer_id !== Null)
                                                                                    <td>{{$bancaire->customer->code}} - {{$bancaire->customer->name}} {{$bancaire->customer->prename}}</td>
                                                                                @else

                                                                                @endif

                                                                                @if ($bancaire->particulier_id !== Null)
                                                                                    <td>{{$bancaire->particulier->tel}}</td>
                                                                                @elseif($bancaire->client_id !== Null)
                                                                                    <td>{{$bancaire->client->tel}}</td>
                                                                                @elseif($bancaire->customer_id !== Null)
                                                                                    <td>{{$bancaire->customer->tel}}</td>
                                                                                @else

                                                                                @endif
                                                                        @else
                                                                            <td>{{$bancaire->name}} {{$bancaire->prename}}</td>
                                                                            <td>{{$bancaire->cel}}</td>

                                                                        @endif



																		 <td>
																			{{-- @can('manage-investis')
						  												    	<a href="{{ route('confirmators.stored' , ['customer' => $customer->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																			@endcan  --}}



																			@can('manage-bancaires')
																			    <a href="{{ route('bancaires.print' , ['bancaire' => $bancaire->id]) }}" style="background-color:#eee;" class="btn btn-">🖨️</a>
																		        {{-- @can('edit-customers')
																			        <a href="{{ route('customers.edit' , ['customer' => $customer->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																			    @endcan --}}
											 								   {{-- <form class="d-inline" method="POST" action="{{ route('customers.destroy' , ['customer' => $customer->id]) }}">
																			    	@csrf
																			    	@method('DELETE')
                                                                                            <button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client. Cette action est irréversible ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
																		        </form>    --}}
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
