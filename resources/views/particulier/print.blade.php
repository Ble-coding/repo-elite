@extends('layouts.master13')
@section('css')
        <!-- INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
        <style>
            @media print{
                
				#hidden{
                    display : none;
                }
            }

            @media screen {
                .visible{display:none}
}


	  
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
{{-- --}}
<div class="container p-5">
	<div class="row">
		<div class="col-12 p-3 mb-2" style="background:#fff;">
           
			<div class="row pt-5">

				<div class=" text-center col-md-12">
					<p style="font-size:18px; text-decoration: underline;font-weight: bold; color: #262626">
                        CONVENTION D’OUVERTURE D’UN COMPTE EPARGNE
                    </p>
				</div>
				<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Agence : ELITE CREDIT </strong><br>
                                <strong>Numéro du Client  : </strong>{{$particulier->tel}}<br>
                                <strong>Numéro du Compte Epargne  : </strong> {{$particulier->code}}
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-6">
                                Entre les soussignés :
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="">
                           <p> La société <strong>ELITE CREDIT </strong>, immeuble Zoe, Cocody-Riviera Bonoumin, 
                            01 BP 235 ABIDJAN 01 ; numéro compte contribuable : CC 2198712 U de droit ivoirien, domiciliée à Abidjan, immatriculée au greffe du tribunal 
                            de commerce d’Abidjan sous le N° CI-ABJ-03-2021-B17-00076. <p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <p>Ci -après dénommé <strong>ELITE CREDIT </strong>,</p> <br>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="">
                            <p>ET Mr <strong>{{$particulier->name}} {{$particulier->prename}}</strong> Résident à {{$particulier->lieu_habitation}},
                                Tel (+225){{$particulier->tel}}, de pays de nationalité {{$particulier->nationnalite}}.
                                Homme né(e) le {{\Carbon\Carbon::parse($particulier->datenaiss)->format('d/m/Y')}} à {{$particulier->lieu}}.
                                Titulaire de la pièce d’Immatriculation de type {{$particulier->piece->nom}} N°{{$particulier->numpiece}} dument habilité aux fins des présentes et de leurs suites </p>
                         </div>
                        


                        <div class="mt-3 row">
                            <div class="col-md-6">
                                Ci-après dénommé le Client,
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div style="font-size: 15px" class="col-md-6">
                                IL A ETE CONVENU ET ARRETE CE QUI SUIT :
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>
                        <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 1 :</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>ELITE CREDIT consent à son client l’ouverture d’un Compte Epargne à condition que ce dernier s’engage 
                                à en exécuter les conditions définies aux présentes. Le Compte Epargne est 
                                un compte qui permet à toute personne physique de se constituer une épargne 
                                à son rythme. Toutes les conditions 
                                tarifaires relatives au Compte sont affichées dans les agences <strong>ELITE ALLIANCE</strong>. </p>
                         </div> <br>


                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 2 : OUVERTURE DE COMPTE</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Le délai d’ouverture du Compte Epargne est immédiat, 
                                sous réserve que le dossier d’ouverture du client soit 
                                au complet et que l’étude des pièces constitutives soit satisfaisante.</p>
                                <p>A l’ouverture du compte, ELITE CREDIT  remet à son client
                                     une Carte d’Identification Client (CIC). La CIC renseigne son nom et prénom, 
                                     le numéro de Compte Epargne, le numéro de la carte d’identité ainsi que sa 
                                     signature. Toute opérations sur le Compte Epargne requiert 
                                    la CIC et la carte d’identité aux guichets de  
                                 <strong>ELITE ALLIANCE</strong>. </p>
                                 <p>En cas de perte de sa CIC, le client peut demander à <i>ELITE CREDIT</i> de lui remettre une nouvelle
                                      moyennant l’acquittement d’un montant forfaitaire qui sera prélevé de son Compte Epargne.</p>
                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 3 : FRAIS  DE COMPTE</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Pour ouvrir un Compte Epargne, le Client doit s’acquitter des frais d’ouvertures de 
                                <i>ELITE CREDIT</i> 
                                Les conditions tarifaires sont affichées dans les agences de <i>ELITE ALLIANCE</i> .
                               </p>
                         </div>
 <br>
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 4 : FRAIS DE GESTION</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Les conditions en vigueur relatives à ces frais de gestion mensuels sont affichées dans les agences <i>ELITE ALLIANCE</i></p>
                            <p>Le titulaire n’est redevable d’aucune commission de mouvement sur le compte. 
                                 Cependant, certains frais, dont notamment ceux associés au retour d’un 
                                chèque impayé au retard de paiement d’une échéance de crédit,
                                 à l’édition d’un relevé de Compte, etc., sont perceptible sur le Compte Epargne.</p>
                         </div> <br> 

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 5 : FRAIS D’UN VIREMENT INTERNE</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
<br>              <div style="font-size: 15px;" class="">
                            <p>Les virements internes, entre deux comptes
                                 ouverts dans le livre de <i>ELITE CREDIT</i> sont Gratuits.
                               </p>

                         </div>  <br> <br> 
                         <br> 



                         
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 6 : DEPOT MINIMUM</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Un dépôt minimum est exigé à l’ouverture du Compte Epargne. 
                                Les conditions en vigueur sont affichées à l’agence <strong>ELITE ALLIANCE</strong>.
                               </p>

                         </div>  <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 7 : SOLDE MINIMUM</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Tout moment, le compte Epargne doit présenter un solde supérieur au solde minimum exigé.
                               </p>
                               <p>Les conditions en vigueur relatives au solde minimum sont affichées dans les agences <strong>ELITE ALLIANCE</strong>.</p>
                               <p>Tout retrait qui rendrait le solde du compte inférieur au solde minimum est refusé.</p>
                         </div>  <br>

                         
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 8 : MOTANT MINIMUM D’OPERATION</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Toute opération réalisée sur le compte Epargne  doit respecter le montant minimum d’opération.
Ce dernier est clairement affiché dans les agences <strong>ELITE ALLIANCE</strong>.
Toute opération en dessus du montant minimum sera refusée.</p>
                         </div>  <br>

                         
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 9 : DISPONIBILITE DES FONDS</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                           <p> Les fonds déposés sur un compte Epargne sont disponibles immédiatement,
                            à la première demande du client, pendant les heures d’ouvertures des guichets des agences <strong>ELITE ALLIANCE</strong>. 
                            Les retraits sont autorisés jusqu’à concurrence 
                             des avoirs aux comptes, en respectant le montant minimum d’opération et le solde minimum du compte. 
                            Le nombre de retraits autorisés sur un compte Epargne est illimité.</p>
                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 10 : SOLDE DEBITEUR</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Le solde d’un compte Epargne ne peut en aucun cas être débité.</p>
                         </div> <br>

                         <div class="row">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 11 : TAUX DE RENUMERATION</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                           <p> Le compte Epargne a un taux de rémunération de 3,4% annuel.</p>
                         </div> <br>


                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 12 : CONSIGNATAIRE</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Le titulaire doit désigner sur le Formulaire d’ouverture de compte s’il désire 
                                avoir un consignataire sur son compte Epargne . Le cas échéant, ce dernier dispose 
                                des mêmes pouvoirs sur le compte que le titulaire et les cosignataires d’un même 
                                compte sont solidaires pour toutes les opérations qui y sont rattachés.</p>
                         </div> <br>
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 13 : PROCURATION</strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Le titulaire d’un Compte Epargne peut désigner un mandataire- et un seul- habilité 
                                à réaliser des opération (retrait, transfert) sur le compte.
                                 Les habilitations conférées aux mandataires cessent automatiquement
                                 d’être valides au décès du titulaire du compte.</p>
                                 <p>Le titulaire doit délimiter l’étendue des pouvoirs du mandataire, 
                                     que ce soit en termes de montant ; de type d’opérations ou de durée du mandat. 
                                     Ces habilitations ainsi que l’identité du mandataire sont à renseigner dans la Fiche de Procuration 
                                     (inclus dans le formulaire de Demande d’Ouverture de Compte) que le client (titulaire) doit impérativement signer. 
                                     Si le titulaire ne souhaite pas limiter les pouvoirs de son mandataire, il doit insérer la mention néant dans 
                                     la Fiche de Procuration avant la réception de la notification.</p>
                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 14 : SERVICES ASSOCIES </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br> 

                        <div style="font-size: 15px;" class="">
                            <p>Le compte Epargne offre une palette de service : retrait en espèces, dépôt en espèces ou par chèque, 
                                virement interne entre Compte de 
                               <strong> ELITE CREDIT</strong>. Le nombre d’opérations autorisées sur un Compte Epargne est illimité.</p>
                                 <p>Le compte Epargne retrace toutes les opérations.
                                      En plus des opérations crédit, 
                                     des dépôts et des retraits, le compte Epargne retrace toutes les opérations des services associés.</p>
                         </div>
 <br><br><br><br><br>
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 15 : DEPOT PAR CHEQUE </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>
                                Un Compte Epargne peut être approvisionné par la remise d’un chèque à l’ordre de <strong> ELITE CREDIT</strong>. 
                                Pour faire de face aux frais de retour d’un chèque impayé, un solde minimum doit être maintenu dans le compte avant le dépôt du chèque.
                                 <strong> ELITE CREDIT</strong>
                                 prélèvera des frais pour tout retour d’un chèque impayé. 
                                Les conditions tarifaires en vigueur sont affichées dans les agences de <strong>ELITE ALLIANCE</strong>.</p>
                                 <p>La date de valeur d’un dépôt par chèque dépend du délai de traitement
                                      de la compensation réalisée par la banque partenaire de <strong>ELITE CREDIT</strong>.</p>
                         </div>
                         <br>
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 16 : LUTTE CONTRE LE BLANCHIMENT D’ARGENT </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>
                                Une restriction concernant les dépôts supérieurs à un certain seuil est instaurée pour appliquer la règlementation relative
                                 à la « Lutte contre le Blanchissement d’Argent ».</p>
                                 <p> Au -delà de ce seuil, une demande de justification de la provenance des fonds est un préalable à l’octroi
                                 de l’autorisation du dépôt. Les conditions en vigueur relatives à ce seuil sont affichées dans les agences de 
                                 <strong>ELITE ALLIANCE</strong>.
                                </p>
                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 17  : LUTTE CONTRE LE BLANCHIMENT D’ARGENT </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>La clôture d’un Compte Epargne est possible à tout moment sous réserve que le Client s’acquitte des 
                                frais de clôture. 
                                Les conditions en vigueur sont affichées dans les agences de <strong>ELITE ALLIANCE</strong>.</p>
                            <p>Avant de pouvoir procéder à la clôture, tous les frais, pénalités 
                                et commissions dû par le client associé
                                 au compte Epargne doit avoir été remboursé intégralement. </p>
                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 18  : COMPTE DECLASSE </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Un compte Epargne qui reste sans mouvement pendant une période de 6 mois 
                                est déclassé comme « dormant ». Dans ce cas, il ne sera plus possible pour le Client d’enregistrer 
                                des mouvements sur le compte, ni au débit ni au crédit. Des procédures spécifiques existent pour réactiver 
                                et / ou clôturer un compte déclassé. En cas de solde nul, le compte Epargne sera clôturé automatiquement 
                                6 mois après avoir été déclassé comme « dormant ».</p>
                         </div>  <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 19  : DECES DU TITULAIRE </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Nul ne peut effectuer de mouvement sur un Compte Epargne dont le titulaire
                                 est décédé. Cette mesure s’applique également au mandataire désigné par procuration. 
                                 Les habilitations conférées au mandataire
                                 cessent automatiquement d’être valides au décès du titulaire du compte.</p>
                            <p>Dès que ELITE <strong>CREDIT</strong> est informé de la date du décès de son client, le compte Epargne est déclassé en compte inactif. 
                                Le compte déclassé ne peut plus enregistrer de mouvement, ni au débit ni au crédit.</p>
                                <p>Au décès du titulaire, le solde disponible sur le compte Epargne sera mis à disposition de son ayant droit,
                                     que le titulaire doit obligatoirement désigner 
                                    lors de l’ouverture du compte sur le Formulaire de <i>Demande d’Ouverture de Compte</i>.</p>
                         </div>
 <br>
                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 20  : RECU D’OPERATION </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Toute opération associée au compte Epargne, effectuée aux guichets de
                                 <strong>ELITE ALLIANCE</strong> fait l’objet de l’Edition d’un reçu d’opération en
                                  2 exemplaires. Ce reçu doit être signé par le client et le caissier de <strong>ELITE ALLIANCE</strong> , pour marquer l’effectivité de l’opération.</p>

                         </div> <br>

                         <div class="row mt-3">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-6">
                                <strong>ARTICLE 21  : RELEVE DE COMPTE </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Moyennant le paiement d’un montant forfaitaire, <strong>ELITE CREDIT</strong> remet au client qui fait la demande un relevé de son compte Epargne.
                                 Ce relevé retrace toutes les opérations réalisées sur le compte pendant une période donnée. Ce service est facturé selon les conditions en vigueur 
                                 affichées dans les agences de <strong>ELITE ALLIANCE</strong>.
                                 Le paiement de ce service se fait par prélèvement automatique sur le compte Epargne du client.
                                </p>
                                <p>
                                    Le client est tenu de signaler en agence de <strong>ELITE ALLIANCE</strong> les erreurs qu’il aurait constatées dans les relevés de son 
                                    compte Epargne qui lui sont délivrés. 
                                    Le client à 30 jours à compter de la date de réception pour les signaler à ELITE <strong>CREDIT</strong>. A défaut de réclamation par écrit dans les 30 jours, 
                                    les informations reprises dans les relevés sont, 
                                    sauf erreur matérielle manifeste, réputées exactes et le client est censé les avoirs approuvées
                                </p>
                                <p><strong> ELITE CREDIT<strong> peut à tout moment rectifier les erreurs matérielles commises par elle.</p>
                         </div>
<br><br><br>
                         <div class="row">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-8">
                                <strong>ARTICLE 22  : RETRAIT DE MONTANTS DEPASSANT 1 MILLION FCFA  </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Pour les retraits supérieurs à 1.000.000 de francs CFA (Un millions FCFA), le client doit prévenir l’Agence <strong>ELITE CREDIT</strong> 48h à l’avance.
                                </p>
                                <p>
                                    <strong>ELITE CREDIT</strong> mettra tout en œuvre pour éviter de faire jouer ce préavis. Aussi, un chèque peut-il être établi à charge pour le client d’effectuer le retrait au
                                     guichet de la banque UBA Partenaire de <strong>ELITE CREDIT</strong>.
                                    </p>
                         </div><br> 


                         <div class="row ">
                            <div style="font-size: 18px; text-decoration: underline" class="col-md-8">
                                <strong>ARTICLE 23  : ELECTION DE DOMICILE ET COMPETENCE JUDICAIRE </strong>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> <br>

                        <div style="font-size: 15px;" class="">
                            <p>Pour l’exécution de la présente convention d’ouverture de compte Epargne,
                                ELITE <strong> CREDIT</strong> et le client font élection de leur domicile en leur adresse indiquée dans la présente convention d’ouverture de
                                 compte Epargne.
                                </p>
                                <p>
                                    Le présent contrat est régie par le droit ivoirien. Les tribunaux ivoiriens seront compétents pour tous les litiges et différends relatifs 
                                    à l’interprétation et l’exécution de cette convention d’Ouverture de Compte Epargne.
                                    </p>
                                <p>Ainsi convenu et signé en 2 exemplaires à Abidjan, le {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                         </div> <br>

                         <div class="row mb-4">
                            <div class="col-md-6">
                                <strong>ELITE CREDIT</strong>
         
                            </div>
                            <div class="col-md-6">
                                  <strong>Client</strong><br>
                                  <p>(Signature à précéder de la                  
                                    mention «  lu et Approuvé »)
                                    </p>
                            </div>
                        </div>

                        <div class="row mt-9">
                            <div class="col-md-6">
              
         
                            </div>
                            <div class="col-md-6">
                         
                            </div>
                        </div>
                        
                     

				</div>
			</div>
		</div>
	</div>
</div>


{{-- <div class="container p-5">
	<div class="row">
		<div class="col-12 p-3 mb-2" style="background:#fff;">
           
			<div class="row pt-5">

			
				<div class="col-md-12">
                       

                    
                      

                       

                        
				</div>
			</div>
		</div>
	</div>
</div> --}}



@endsection
@section('js')
        <!-- INTERNAL Select2 js -->
        <script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection






