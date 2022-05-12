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
								<h4 class="page-title mb-0">Liste des retraits des particuliers</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Retraits</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{route('retrait.retraits.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouveau retrait </a>
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
									{{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')


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
																	<th class="border-bottom-0 w-20">Nom complet</th>
																	<th class="border-bottom-0 w-20">Contact</th>
																	<th class="border-bottom-0 w-20">Email</th>
																	<th class="border-bottom-0 w-15">Montant</th>
																	<th class="border-bottom-0 w-10">Actions</th>
																</tr>
															</thead>
															<tbody>
                                                                @if(!empty($removes) && $removes->count())
                                                                @foreach($removes as $remove)
                                                                 <tr>
                                                                 <th scope="row">{{$remove->id}}</th>
																 <td>{{\Carbon\Carbon::parse($remove->created_at)->format('d/m/Y')}}</td> 
                                                                     <td>{{$remove->particulier->name}} {{$remove->particulier->prename}}</td>
																	 <td>{{$remove->particulier->tel}}</td>                                            
																	 <td>{{$remove->particulier->email}}</td>                                                        
																	 <td>{{ number_format($remove->montant, 0, ',', ' ') }}</td>                                            
                                                                     <td>
																		{{-- @can('show-removes') --}}
																		{{-- <a href="{{ route('remove.removes.show' , ['remove' => $remove->id]) }}" style="background-color:#fff" class="btn btn-">👀</a> --}}
																		{{-- @endcan --}}
																		@can('edit-removes')
                                                                           <a href="{{ route('remove.removes.edit' , ['remove' => $remove->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																		   @endcan
																		   @can('delete-removes')
																		   <form class="d-inline" method="POST" action="{{ route('remove.removes.destroy' , ['remove' => $remove->id]) }}">
																			@csrf
																			@method('DELETE')
																			<button  onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce retrait ?');" type="submit" style="background:#ff0017;" class="btn btn">🗑️</a>
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