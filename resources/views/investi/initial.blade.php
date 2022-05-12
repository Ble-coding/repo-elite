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
								<h4 class="page-title mb-0">Liste des bonus parrains</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Solde parrains</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <button data-target="#modaldemo2" data-toggle="modal" style="background:#262626; color:#fff" href="" class="btn btn"><i class="fe fe-minus mr-1"></i>Retrait</button>  --}}
								
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
				<li class=""><a href="#tab1" class="active" data-toggle="tab">Bonus</a></li>
				 <li><a href="#tab2" data-toggle="tab">Retraits effectués</a></li>
				<li><a href="#tab3" data-toggle="tab">Transactions terminées</a></li>
				{{--<li><a href="#tab4" data-toggle="tab">Solde</a></li> --}}
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active " id="tab1">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste bonus</h3>
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
																<th class="border-bottom-0 w-20">Date réc.</th>
										 							<th class="border-bottom-0 w-20">Client</th>

																	@can('manage-users')
																	<th class="border-bottom-0 w-15">Montant investi</th>
																	@endcan

																	<th class="border-bottom-0 w-15">Montant à retiré</th>
													
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}												
																	<th class="border-bottom-0 w-10">Actions</th>
																	
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($bonus) && $bonus->count())
																@foreach($bonus as $investi)
																<tr>
															 		<th scope="row">{{$investi->id}}</th>
                                                                     <td>{{\Carbon\Carbon::parse($investi->created_at)->format('d/m/Y')}}</td>						  
															 		
															 		<td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>

																	@can('manage-users') 	
																	<td>{{ number_format($investi->montantB, 0, ',', ' ') }}</td> 
																	@endcan																		
																		
							                            	<td>{{ number_format($investi->total , 0, ',', ' ') }}</td>  
															
				
																										   									
																	<td>
																	
																		@if($investi->total != 0 )
																			<a href="{{ route('investir.bonus.edited' , ['investi' => $investi->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
                                                                      @endif
																	</td> 
																	{{-- @endcan			  --}}
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
			<div class="tab-pane " id="tab2">				
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
													<table class="table table-bordered border-top text-nowrap" id="example2">
														<thead>
															<tr>
																<th class="align-top border-bottom-0 wd-5"></th>
																<th class="border-bottom-0 w-20">Date rét.</th>
										 							<th class="border-bottom-0 w-20">Client</th>

																	{{-- @can('manage-users')
																	<th class="border-bottom-0 w-15">Montant investi</th>
																	@endcan --}}

																	<th class="border-bottom-0 w-15">Montant retiré</th>
													
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}												
																	{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																	
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($recepts) && $recepts->count())
																@foreach($recepts as $investi)
																<tr>
															 		<th scope="row">{{$investi->id}}</th>
                                                                     <td>{{\Carbon\Carbon::parse($investi->created_at)->format('d/m/Y')}}</td>						  
															 		
															 		<td>{{$investi->customer->name}} {{$investi->customer->prename}} -- {{$investi->customer->tel}}  {{$investi->customer->email}}</td>

																	{{-- @can('manage-users') 	
																	<td>{{ number_format($investi->montantB, 0, ',', ' ') }}</td> 
																	@endcan																		 --}}
																		
							                            	<td>{{ number_format($investi->montant , 0, ',', ' ') }}</td>  
															
				
																										   									
																	{{-- <td>
																	
																		@if($investi->total != 0 )
																			<a href="{{ route('investir.bonus.edited' , ['investi' => $investi->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
                                                                      @endif
																	</td>  --}}
																	{{-- @endcan			  --}}
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
			<div class="tab-pane " id="tab3">				
				<div class="card col-md-10">
					<div class="card-header">
						<h3 class="card-title">Liste traçabilité bonus</h3>
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
																<th class="border-bottom-0 w-20">Date réc.</th>
										 							<th class="border-bottom-0 w-20">Client</th>

																	@can('manage-users')
																	<th class="border-bottom-0 w-15">Montant investi</th>
																	@endcan

																	<th class="border-bottom-0 w-15">Montant réçu</th>
													
																	{{-- <th class="border-bottom-0 w-15">Actions</th> --}}												
																	{{-- <th class="border-bottom-0 w-10">Actions</th> --}}
																	
															
															</tr>
														</thead>
														<tbody>
															@if(!empty($tracs) && $tracs->count())
																@foreach($tracs as $investi)
																<tr>
															 		<th scope="row">{{$investi->id}}</th>
                                                                     <td>{{\Carbon\Carbon::parse($investi->created_at)->format('d/m/Y')}}</td>						  
															 		
															 		<td>{{$investi->customer->name}} {{$investi->customer->prename}} --  {{$investi->customer->tel}}  {{$investi->customer->email}}</td>

																	@can('manage-users') 	
																	<td>{{ number_format($investi->montantB, 0, ',', ' ') }}</td> 
																	@endcan																		
																		
							                            	<td>{{ number_format($investi->total , 0, ',', ' ') }}</td>  
															
				
																										   									
																	{{-- <td>
																	
																		@if($investi->total != 0 )
																			<a href="{{ route('investir.bonus.edited' , ['investi' => $investi->id]) }}" style="background-color:#eee;" class="btn btn-"><i class="fe fe-minus mr-1"></i></a>
                                                                      @endif
																	</td>  --}}
																	{{-- @endcan			  --}}
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

{{-- 
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
</script>   --}}

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
