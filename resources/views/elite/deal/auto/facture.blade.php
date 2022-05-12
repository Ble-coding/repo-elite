@extends('layouts.master')
@section('css')
        <!-- INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
        <style>
            @media print{
                
				#hidden{
                    display : none;
                }
            }

		

.table, td, th {
  border: 1px solid #262626!important;
}


.hred{
        height: 1px;
        background-color: #FF0017;
        border: none;
      }



/* .hr{
	height: 1px;
	background-color: #eee;
	border-style:dashed!important;
} */
	  
        </style>
@endsection
@section('page-header')
                        <!--Page header-->
                        <div  id="hidden" class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Archives</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Données</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Show client</a></li>
                                </ol>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                           
                                    <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> 
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


<div class="container p-5">
	<div class="row">
		<div class="col-12 p-3 mb-2" style="background:#fff;border:1px solid #ccc">
			<div class="row pt-5">
				<div class="col-12">				
					<table class="table mt-3">
							<thead>
								<tr style="background-color:#FFF">
									<th><img class="mb-5" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img"></th>
									<th>
										<div class="mb-5">
											<strong style="color:#262626" class="text-center">
												CONTRAT DE VENTE A <br/> REMERE
											</strong> 
										</div>
											<span style="color:#FF0017">ELITE CREDIT</span>
									</th>
									<th><div class="mb-5"><span style="color:#262626">{{$vente->code}}</span></div></th>
								</tr> 
							</thead>
					</table>
				</div>
				<div class="col-12">				
					<table class="table table-bordered border-top text-nowrap" id="example4">
							<tbody>
								<tr>
									<td>
										DATE: {{\Carbon\Carbon::parse($vente->created_at)->format('d/m/Y')}}
									</td>

											<td>
												<strong>Agence : ELITE CREDIT </strong>
											</td>
											<td>
												<strong>N° Contrat :</strong> {{$vente->contrat}}
											</td>
									
										</tr>
						
							</tbody>
					</table>
				</div>
				<div class="col-12">				
					<table class="table table-bordered border-top text-nowrap" id="example4">
							<tbody>
					
						
										<tr class="west">
											<td>
												<strong>VENTE DU BIEN A ELITE CREDIT CI PAR :</strong>
											</td>

											<td>
											
											</td>
											<td>
											
											</td>
									
										</tr>
						
							</tbody>
					</table>
				</div>
				<div class="col-lg-12">								
					<div class="row">
						<div class="col-12">
							<table>
									<tbody>
									<tr>
										<div>CLIENT : {{$vente->name}} {{$vente->prename}}</div>
									</tr>
									<tr>
										<div>Téléphone : {{$vente->tel}}</div>
									</tr>
									<tr>
										<div>Adresse : {{$vente->adresse}}</div>
									</tr>
									<tr>
										<div><span class="mr-2">Type de pièce d’identité : {{$vente->piece->nom}} </span> <span> N° : {{$vente->numpiece}}</span></div>
									</tr>
									</tbody>
								</table>  						
							</div>
					    </div>
						<div class="row mt-2">
								<div class="col-lg-4">Émis le : {{\Carbon\Carbon::now()->format('d/m/Y')}}</div>
								<div class="col-lg-4">A : ABIDJAN</div>
								<div class="col-lg-4">Délivré par : {{ Auth::user()->name }}</div>
						</div> 
						<table class="table mt-3">
									<thead>
										<tr style="background-color:#FFF">
											<th style="color:#262626">
												IMMATRICULATION {{$vente->immatricule}}<br/>
												N° CARTE GRISE {{$vente->carte_grise}}
											</th>
											<th style="color:#262626">
												Descriptif du véhicule {{$vente->marque}}<br/>
												{{$vente->model}} {{$vente->couleur}}
											</th>
											<th style="color:#262626">
												MISE EN CIRCULATION<br/>
												{{$vente->circulation}}<br/>
											</th>
										</tr>
									</thead>
						</table>
							<div class="row">
								<div class="col-12">
									<table>
										<tbody>
										<tr>
											<div>Valeur de la vente (En chiffre) : {{ number_format($vente->montant, 0, ',', ' ') }}</div>
										</tr>
										<tr>
											<div>Valeur de la vente (En Lettre) : {{$chiffre}}</div>
										</tr>
										</tbody>
									</table>  						
							</div>
						  </div>
						  <hr class="dashed">
						<table class="table mt-4 table-bordered border-top text-nowrap" id="example4">
									<thead>
										<tr style="background-color:#FFF">
											<th style="color:#262626">
												RACHAT PREVU PAR LE CLIENT
											</th>
											<th>							
											</th>
											<th>
											</th>
										</tr>
									</thead>
						</table>
						<div class="row">
								<div class="col-12">
									<table>
										<tbody>
										<tr>
											<div>Nombre de mois : {{ $vente->duree }}mois</div>
										</tr>
										<tr>
											<div style="display: none">  {{$pourcentage = ($vente->montant * $bonus ) / 100}}</div>
											<div style="display: none">  {{$rachat =  $pourcentage + $vente->montant}}</div>
											<div>Montant de rachat (en chiffre) :  {{ number_format($rachat, 0, ',', ' ') }}</div>
										</tr>
										<tr>
											<div>Montant de rachat (en lettre) : {{$regain}}</div>
										</tr>
										<tr>									
											<div class="mt-2 mb-2">Modalités de rachat : </div>
										</tr>
										</tbody>
									</table>  						
							</div>
						</div>
						<table class="table table-bordered border-top text-nowrap" id="example4">
							<tbody>
								<tr>
													@if ($vente->payment == 'Unique')
														<td >Paiement : {{$vente->payment}}</td>
														<td >Date du paiement  :</td>
													@else
													<div class="row">
														<td >Modalités de rachat : {{$vente->payment}}</td>
														<td >Date du 1er paiement  :</td>
													</div>

													@endif
											
								</tr>
					
							</tbody>
						</table>

						<div class="row mt-2 mb-4">
							<div class="col-md-4"> <strong>Chargé clientèle</strong> </div>
							<div class="col-md-4"><strong>Caissier</strong></div>
							<div class="col-md-4"><strong>Signature Client</strong> </div>
					</div> 

					
						<hr class="hred"/>
						<table class="table table-bordered border-top text-nowrap" id="example4">
								<thead>
									<tr style="background-color:#FFF">
										<th style="color:#262626">
											RACHAT DU VEHICULE PAR LE CLIENT
										</th>
										<th>							
										</th>
										<th>
										</th>
									</tr>
								</thead>
						</table>
						<div class="row">
								<div class="col-12">
									<table>
										<tbody>
										<tr>
											@if ($vente->status == 0)
												<div><strong>Etat </strong> : soldé</div>
											@else
											   <div><strong>Etat </strong> : Pas soldé</div>
											@endif		
										</tr>
										<tr>
												<div><strong>Date du rachat </strong> : {{\Carbon\Carbon::now()->format('d/m/Y')}}</div>	
										</tr>
										<tr>
											<div><strong>Montant total payé par le client (en lettres) </strong> :  </div>
										</tr>
										<tr>									 
											<div class="mt-2 mb-2"><strong>REMISE DU BIEN:</strong> </div>
										</tr>
										</tbody>
									</table>  						
								</div>
			   			</div>
						<table class="table mt-2 table-bordered border-top text-nowrap" id="example4">
									<tbody>
										<tr style="background-color:#FFF;">
											<th style="background-color:#FFF; width:60%;color:#262626">
												Je soussigné (e) 
											</th>
											<th style="color:#262626">
												reconnais avoir reçu  ce jour à l’agence							
											</th>
										</tr>
										
									</tbody>
						</table>
						<div class="row">
									<div class="col-12">
										<table>
											<tr>									 
												<div class="mt-2 mb-2"><strong>Le bien dont les caractéristiques sont listées ci-dessus.</strong> </div>
											</tr>
											</tbody>
										</table>  						
									</div>
						</div>
						<table class="table mt-2 table-bordered border-top text-nowrap" id="example4">
									<thead>
										<tr style="background-color:#FFF;">
											<th style="background-color:#FFF; width:50%;color:#262626" >	
											<strong>Chargée client</strong>	
											</th>
											<th  class="text-center" style="background-color:#FFF; width:50%;color:#262626">
												<strong>Caissier</strong>				
											</th>
										</tr>
									</thead>
									<tbody>
										<tr style="background-color:#FFF; ">
											<th style="background-color:#FFF; width:50%;color:#262626" >
												
											</th>
											<th  class="text-center" style="background-color:#FFF; width:50%;color:#262626">
												{{-- <strong>Caissier</strong>							 --}}
											</th>
										</tr>
									</tbody>
						</table>
						<table class="table mt-2 table-bordered border-top text-nowrap" id="example4">
									<thead>
										<tr style="background-color:#FFF;">
											<th style="background-color:#FFF;width:50%;color:#262626" >	
												Signature Client	
											</th>
											<th  class="text-center" style="background-color:#FFF; width:50%;color:#262626">			
											</th>
										</tr>
									</thead>
									<tbody>
										<tr style="background-color:#FFF; ">
											<th style="background-color:#FFF; width:50%;color:#262626" >
												
											</th>
											<th  class="text-center" style="background-color:#FFF;width:50%;color:#262626">
												{{-- <strong>Caissier</strong>							 --}}
											</th>
										</tr>
									</tbody>
						</table>
					</div>
		   </div>
			<div class="ml-2">
				<small>Powered by: ELITE <strong style="color:#FF0017">CREDIT</strong> (<strong>W</strong>est <strong>A</strong>frican <strong>G</strong>roup  )</small>
			</div>
	    </div>
	</div>
</div>

			
@endsection
@section('js')
        <!-- INTERNAL Select2 js -->
        <script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection

