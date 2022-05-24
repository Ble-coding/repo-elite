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

	  
      .ligne_horizontal { 
display: flex; 
flex-direction: row; 
} 

.ligne_horizontal:before, 
.ligne_horizontal:after { 
content: ""; 
flex: 1 1; 
border-bottom: 2px dotted #FF0017; 
margin: auto; 
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
												CONTRAT DE VENTE A REMERE
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
											@if($vente->duree == 1)
												<div style="display:none" >{{$pourcentage = ($vente->montant * (($bonus) /100))}}</div> 
											
											@elseif ($vente->duree == 2) 
												<div style="display:none" >{{$pourcentage = ($vente->montant * (($bonus1) /100))}}</div> 
											 @elseif($vente->duree == 3)
												<div style="display:none" >{{$pourcentage = ($vente->montant * (($bonus2) /100))}}</div> 
											 @else 
											Erreur        
											
											@endif
											{{-- <div style="display: none">  {{$pourcentage = ($vente->montant * $bonus ) / 100}}</div> --}}
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
														<td >Date du paiement  :<div style="display:none">{{$unique = \Carbon\Carbon::parse($vente->created_at)->addMonth($vente->duree)->subDay(1)->format('d/m/Y')}}</div>
															<td>{{$unique}}</td> </td>
													@else
													<div class="row">
														<td >Modalités de rachat : {{$vente->payment}}</td>
														<td >Date du 1er paiement  :<div style="display:none">{{$datei = \Carbon\Carbon::now()->format('m')}}</div>
															<div style="display:none">{{$datev = \Carbon\Carbon::now()->addMonth(1)->format('m')}}</div>								
															<div style="display:none">{{$date = (int) $datei  }}</div> {{-- 4 --}}
															<div style="display:none">{{$datek = (int) $datev }}</div> 
															<div style="display:none">{{$datek = $datev - $date }}</div> 
															 <div style="display:none">{{$datep = $datek + $datei }}</div>
															 <div style="display:none">{{$dates = "$datep" }}</div>
															<div style="display:none">{{$aLongTimeAgo = \Carbon\Carbon::parse('12-'.$dates.'-2022')->format('m')}}</div>
															<div style="display:none">{{$dateu = \Carbon\Carbon::parse($vente->created_at)->format('d')}}</div>
															<div style="display:none">{{$datel = \Carbon\Carbon::parse($vente->created_at)->format('Y')}}</div>
															<div style="display:none">{{$dat = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->format('d/m/Y')}}</div>
															<div style="display:none">{{$datevi = \Carbon\Carbon::parse($vente->created_at)->addMonth($vente->duree)->format('d/m/Y')}}</div>
															<div style="display:none">{{$dateRemoveDay = \Carbon\Carbon::parse($dateu.'-'.$aLongTimeAgo.'-'.$datel)->subDay(1)->format('d/m/Y')}}</div>
																	 @if ($dat <= $datevi)
															 <td>{{$dateRemoveDay}}  </td> 
																	@else
															 <td>Paiement en attente du {{$dateRemoveDay}}</td>	
																	@endif
																	</td>
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

					
						{{-- <hr class="hred"/> --}}
						<div class="p-5 ligne_horizontal"></div> 
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


<div class="container p-5">
	<div class="row">
		<div class="col-12 p-3 mb-2" style="background:#fff;">
			<div class="row pt-5">

				<div class="col-md-12">
					<p style="font-weight: bold; color: #262626">La réception effective du bien met un terme au présent contrat.</p>
				</div>
				<div class="col-md-12">
					<div class="col-md-12">
						Conditions Générales <mark style="background-color:#fff;color: #FF0017">ELITE CREDIT</mark>
					</div>

					<div class="row">
						<div class="mt-4 col-md-6">
							<strong>ELITE CREDIT SARLU</strong> est une société de droit ivoirien, 
							régulièrement constituée, RCCM N° CI-ABJ-03-2022-B13-02780 
							et dont l’objet social est la représentation, la commercialisation, la distribution de tous 
							les services et produits financiers. <br>
								<div class="mt-2 text-center">
									<strong>Article 1 : champ d’application</strong>
								</div>
							<p>Les présentes conditions de vente s’appliquent à toute vente
								 de véhicules conclue entre <strong> ELITE CREDIT </strong> et ses clients.</p>
								
								 <div class="text-center">
									<strong>Article 2 : identification client</strong>
								</div>
							<p>Le client souhaitant vendre son bien réputé propriétaire dudit bien. Du fait de cette présomption
								 de propriété, le client à la pleine capacité de jouissance et de disposition du bien.</p>
							<p>Par conséquent, <strong> ELITE CREDIT </strong> n’est pas tenue de procéder à une enquête concernant la situation de ses clients,
								 mais elle peut cependant, à sa seule discrétion, exiger la présentation de toute documentation qu’elle estimerait utile 
								 à prouver la qualité de propriétaire du client.
								Si les conditions ne lui semblent pas réunies, <strong> ELITE CREDIT </strong> se réserve le droit de ne pas procéder à l’achat du bien d’un client.
								</p>
							<p><strong> ELITE CREDIT </strong> n’acceptera pas d’acquérir un bien dont le client n’est pas propriétaire.</p>	 
							<p>Aucune procuration du propriétaire du bien ne pourrait permettre à un client d’effectuer la transaction pour le compte du propriétaire.
								Le client ne pourra procéder à plus de trois 3 contrats de vente simultanément avec <strong> ELITE CREDIT </strong>.
								</p>

							
								<div class="text-center">
									<strong>Article 3 : objet contrat</strong>
									<strong>3.1 Véhicule</strong>
								</div>
							<p>Le bien objet du contrat peut-être un véhicule automobile. Ne sera accepté qu’un véhicule respectant les normes d’entrées sur le territoire ivoirien et validé mécaniquement par un expert 
								désigné par <strong> ELITE CREDIT </strong>.</p>
							<p>Tous les véhicules dont l’année de mise en circulation est comprise entre 2004
								 à nos jours sont acceptables à l’exception des véhicules de transport.
								</p>
							<p>Par véhicule de transport, il s’entend : berline, véhicule 4*4, minicar.
								Les marques autorisées : françaises, allemandes, américaines.
								<strong> ELITE CREDIT </strong> se réserve le droit d’étudier la possibilité d’accepter ou non un véhicule n’ayant pas été expressément mentionnée.
								</p>
								<div class="text-center">
									<strong>3.2 téléphone portable</strong>
								</div>	 
							<p>Le bien objet du contrat peut-être un téléphone portable. Ne sera accepté que le téléphone ne souffrant d’aucunes pannes et non contrefait. Le téléphone portable accepté sont les dernières séries des marques telles que :
								Samsung, IPhone,
								<strong> ELITE CREDIT </strong> se réserve le droit d’étudier la possibilité d’accepter ou non un téléphone portable n’ayant pas été expressément mentionné
								</p>

								<div class="text-center">
									<strong>Article 4. Définition de la ventet</strong>
								</div>	 
							<p> La vente est conclue en se référant expressément aux informations fournies par le client sur
								 le formulaire d’identification clientèle. Le client est tenu d’informer <strong> ELITE CREDIT </strong>, par écrit et dans
								  les meilleurs délais, de toute modification apportée aux informations communiquées lors de la signature du contrat 
								  et susceptibles d’avoir notamment 
								des conséquences sur la validité des engagements souscrits et sa capacité de
								 racheter le bien.
								</p>
							<p>La vente conclue entre <strong>ELITE CREDIT</strong> et le client est une vente à réméré 
								dont les conditions sont définies par les articles 1659 à 1666 du code civil.</p>
							<p>Le client dans le cadre du contrat de vente se réserve donc pendant 3 mois maximum le droit
								 de reprendre le bien vendu à <strong>ELITE CREDIT</strong>.
								Il rachètera à la date convenue dans le contrat à <strong>ELITE CREDIT</strong> le prix de vente ainsi que les commissions.
								</p>
							<p><strong>ELITE CREDIT</strong> reste propriétaire du bien acquis tant que le client n’aura pas exercé sa 
								faculté de réméré durant la période du rachat choisie définie dans le contrat.</p>
							<p><strong>ELITE CREDIT</strong>  conserve le bien jusqu’au rachat intégral de ce qui lui est du.</p>
							
						</div>
						<div class="col-md-6">						
							<div class="text-center">
								<strong>Article 5 : rachat du bien par le client</strong>
							</div>	 
						<p>Le client à la possibilité de racheter son bien soit :
						Par un paiement in fine ou par un paiement selon un échéancier convenu au préalable entre les parties,
						le rachat intégral peut se faire jusqu’au troisième mois à compter de la date de signature du contrat.</p>
						<p>Le rachat par échéancier peut être choisi par le client, qui au moment de la signature 
							du contrat validera le montant dont il devra s’acquitter mensuellement sur trois mois maximums.
							Le choix du mode de rachat se fera au moment de la signature du contrat et ne saurait être susceptible de
							 modification ultérieure qu’avec l’accord express des parties.
							</p>
							<div class="text-center">
								<strong>Article 6 : retard de rachat</strong>
							</div>	 
						<p>A date échue, le client a l’obligation de se présenter dans l’espace <strong>ELITE CREDIT</strong> où la vente a
							 été conclue pour procéder au paiement intégral de son rachat.</p>
							<p>Passé ce délai, si le client n’a pas exercé sa faculté de rachat, le bien est réputé être
								 la propriété de <strong>ELITE CREDIT</strong> 
								s’étant entièrement réalisé sans aucune autre formalité à titre de validité.</p>

								<div class="text-center">
									<strong>Article 7 : conditions financières</strong>
								</div>	 
							<p><strong>ELITE CREDIT</strong> définit le prix d’achat du véhicule, ce prix d’achat 
								est librement fixé et est susceptible de modification.
								Concernant les commissions, le client devra s’acquitter de frais dont 
								le montant équivaudra à un pourcentage de la valeur du bien estimé par Elite crédit : 17 % pour 
								un mois 22% pour deux et 27% pour rachat en trois mois. Des pénalités de 0.3% du montant 
								de la vente seront par jour de retard d’échéance. Lors du rachat du bien, le client devra 
								s’acquitter du prix bien vendu auquel seront ajoutés les commissions et/ ou les pénalités. 
							   </p>

							   <div class="text-center">
								<strong>Article 8 : responsabilité Elite crédit</strong>
							</div>	 
						<p>En cas de détérioration majeure ou de perte du bien acquis par 
							<strong>ELITE CREDIT</strong>, le vendeur se verra rembourser le prix d’achat intégral du bien.
							<strong>ELITE CREDIT</strong> sera tenue d’apporter la justification de la perte ou de l’altération du bien qui lui a été remis. 
							Le remboursement se sera effectué qu’en cas
							 de détérioration du bien durant la période de garde par <strong>ELITE CREDIT</strong>.
						   </p>
						<p>L’usure normale du bien ne saurait être considérer 
							comme un cas de détérioration majeure.</p>

							<div class="text-center">
								<strong>Article 9 : responsabilité client</strong>
							</div>	 
						<p>Le client reconnait être le propriétaire légitime du bien objet du présent 
							contrat de vente. Il déclare avoir pris connaissance des conditions générales
							 de vente de <strong>ELITE CREDIT</strong> figurant sur le présent document et reconnait qu’un exemplaire
							  lui a été remis. Il déclare approuver et accepter 
							toutes les clauses et conditions du document sans restriction ni réserves.
						   </p>
						<p>L’usure normale du bien ne saurait être considérer 
							comme un cas de détérioration majeure.</p>

							<div class="text-center">
								<strong>Article 10 : droit applicable- juridiction</strong>
							</div>	 
						<p>Les présentes conditions générales de vente sont régies par le droit ivoirien, 
							en ce qui compris les actes uniformes pris en application du traité Ohana. Les 
							tribunaux d’Abidjan sont compétents pour connaitre de tout différend résultant de
							 l’interprétation ou de l’exécution des 
							présentes et qui n’aurait pas pu être réglé à l’amiable par les parties.
						   </p>
						<p>L’usure normale du bien ne saurait être considérer 
							comme un cas de détérioration majeure.</p>
							<p>
								<strong>Signature du client (précédé de la mention lu et approuvé)<strong> 
							</p>
						</div>
					</div>
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

