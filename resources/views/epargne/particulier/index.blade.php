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
								<h4 class="page-title mb-0">Liste des particuliers</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-grid mr-2 fs-14"></i>Sous utlisateurs</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Liste</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="{{route('epargne_particulier.epargne_particuliers.create')}}" id="hidden"  style="background:#262626; color:#fff" class="btn btn"><i class="fe fe-plus mr-1"></i> Nouveau particulier </a>
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
																	<th class="border-bottom-0 w-20">Image</th>
																	<th class="border-bottom-0 w-20">Nom complet</th>
																	<th class="border-bottom-0 w-15">Date de naissance</th>
																	<th class="border-bottom-0 w-30">Email</th>
                                                                    <th class="border-bottom-0 w-30">Tel</th>
																	<th class="border-bottom-0 w-10">Actions</th>
																</tr>
															</thead>
															<tbody>
                                                                @if(!empty($epargne_particuliers) && $epargne_particuliers->count())
                                                                @foreach($epargne_particuliers as $epargne_particulier)
                                                                 <tr>
                                                                 <th scope="row">{{$epargne_particulier->id}}</th>
																 @php
																	$image = DB::table('epargne_particuliers')->where('id', 1)->first();
																	$images = explode('|', $epargne_particulier->image);
														      	 @endphp  
                                                                     <td>
																		{{-- <span class="avatar brround avatar-md d-block">	 --}}																			
																			<div class="user-pic">
																				<img src="{{URL::to($images[0])}}" style="height:40px;width:40px" alt="img" class="avatar avatar-md brround">
																			</div>
																		{{-- </span> --}}
																	</td>
                                                                     <td>{{$epargne_particulier->name}} {{$epargne_particulier->prename}}</td>       
                                                                     <td>{{\Carbon\Carbon::parse($epargne_particulier->datenaiss)->format('d/m/Y')}}</td> 
																	 <td>{{$epargne_particulier->email}}</td> 
																	 <td>{{$epargne_particulier->tel}}</td>                                             
                                                                     <td>
																		{{-- @can('show-particuliers') --}}
																		<a href="{{ route('epargne_particulier.epargne_particuliers.show' , ['epargne_particulier' => $epargne_particulier->id]) }}" style="background-color:#fff" class="btn btn-">👀</a>
																		{{-- @endcan --}}
																		@can('edit-particuliers')
                                                                           <a href="{{ route('epargne_particulier.epargne_particuliers.edit' , ['epargne_particulier' => $epargne_particulier->id]) }}" style="background-color:#262626;" class="btn btn-">✏️</a>
																		   @endcan
																		   @can('delete-particuliers')
																		   <form class="d-inline" method="POST" action="{{ route('epargne_particulier.epargne_particuliers.destroy' , ['epargne_particulier' => $epargne_particulier->id]) }}">
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