@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
        <style>
            @media print{
                #hidden{
                    display : none;                 
                }


            }  

            @media screen {   
                .defaut_invisible{display:none}
}



        .table, td, th {
  border: 1px solid #262626 !important;
}


.bord{
    height: 90px;
    padding-bottom: 60px;
    padding-right: 80px;
    padding-left: 80px;
    border: 1px dotted #262626;
    border-bottom: 1px dotted #fff!important;
}

hr{
        height: 1px;
        border-top: 1px dotted #ccc;
      }

      .ligne_horizontal { 
display: flex; 
flex-direction: row; 
} 

.ligne_horizontal:before, 
.ligne_horizontal:after { 
content: ""; 
flex: 1 1; 
border-bottom: 2px dotted #ccc; 
margin: auto; 
} 
     

        </style>
@endsection
@section('page-header')
						<!--Page header-->
						<div id="hidden"  class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Retrait </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Retrait</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Nouveau retrait</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')


<div class="impression_visible container-fluid">   
    <div class="div  defaut_invisible position-ref">  
        <div class=" content p-5 row">
            <div class="col-12 total mb-2" style="background:#fff;">
               <div class="row espace">
                 <div class="mt-3 col-md-12">
                    <img src="{{URL::asset('assets/images/brand/embleme.png')}}" width="100"
                    height="100"  class="" alt="ELITE ALLIANCE">
                    <div style="font-size: 16px" class="text-center col-12">
                        <i> BORDEREAU DE RETRAIT ESPECES N° {{$investi->reference}}</i> 
                    </div>
                    <div style="color:#262626" class="text-center mt-3 row">
                        <div class="col-md-6">
                            {{-- {{$investi->particulier->code}} --}}
                            @if ($investi->particulier_id !== Null) 
                            <td>{{$investi->particulier->code}}</td>
                            @elseif($investi->client_id !== Null)
                                <td>{{$investi->client->code}}</td>
                            @elseif($investi->customer_id !== Null)
                                <td>{{$investi->customer->code}}</td>
                            @else
                                
                            @endif
                        </div>
                        <div class="col-md-6"> 
                            
                            {{\Carbon\Carbon::now()->translatedFormat('d M Y')}} à
                            {{\Carbon\Carbon::now()->translatedFormat('H:i:s')}}
                        </div>
                    </div>
                    <div class="mt-3">
                        <div style="color:#262626" class="row">
                            <div class="col-md-10 text-left">
                              <div class="col"><span>Agence ...... : Cocody Riviera Bonoumin<span><br></div>
                              <div class="col">Devise ...... : XOF FRANC CFA B.C.E.A.O. </div>
                              <div class="col">Caisse ...... : 001 CAISSE AUXIL. 1 . COC.Bonoumin</div>
                              <div class="col">Guichetier ...... : 001</div>
                              <div class="col">Gestionnaire ...... :  </div>
                              {{-- <div class="col">Nom du débiteur ...... : {{$investi->name_deposant}} {{$investi->prename_deposant}} </div>
                              <div class="col">Adresse du débiteur ...... :  {{$investi->add_deposant}}</div> --}}
                              <div class="col">Pays de residence ...... : 225 - COTE D'IVOIRE</div>
                              {{-- <div class="col">Motif ........... : {{$investi->motif}}</div> --}}
                            </div>
                            {{-- <div class="col-md-2">
                            </div> --}}
                            <div class="col-md-2 mt-7">
                              <div class="col">
                                    @if ($investi->particulier_id !== Null) 
                                    <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
                                    @elseif($investi->client_id !== Null)
                                        <td>{{$investi->client->name}} {{$investi->client->prename}}<td>
                                    @elseif($investi->customer_id !== Null)
                                        <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
                                    @else
                                        
                                    @endif
                                  
                                </div>
                              <div class="col">
                                @if ($investi->particulier_id !== Null) 
                                <td>{{$investi->particulier->address}}</td>
                                @elseif($investi->client_id !== Null)
                                    <td>{{$investi->client->address}} <td>
                                @elseif($investi->customer_id !== Null)
                                    <td>{{$investi->customer->address}} </td>
                                @else
                                    
                                @endif
                            </div>
                            </div>
                        </div> 
                    </div> <br>

                    <div class="mt-3">
                        {{-- <div style="color:#262626" class="row">
                            <div class="col-md-3 text-left">
                              <div class="col">Montant ...... : </div>
                               <div class="col">Timbre ............ :  </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="col">{{ number_format($investi->montantR, 0, ',', ' ') }} XOF</div>
                                @if ($investi->timbre == "Oui")
                                 <div class="col">{{ number_format(100, 0, ',', ' ') }} XOF </div>  
                                @else
                                <div class="col">{{ number_format(0, 0, ',', ' ') }} XOF </div> 
                                @endif
                            </div> --}}
                            {{-- <div class="col-md-3">
                              <div class="col"></div>
                              <div class="col">Taxe ......... : </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col"> {{ number_format(0, 0, ',', ' ') }} XOF </div>
                            </div> --}}
                        {{-- </div>  --}}
                    </div> <br>
                    <div class="mt-3 ">
                        <div style="color:#262626" class="row">
                            <div class="col-md-10 text-left">
                              <div class="col">Montant debité</div>
                              {{-- <div class="col">Montant rendu </div> --}}
                            </div>
                            {{-- <div class="col-md-2">
                            </div> --}}
                            <div class="col-md-2">
                              <div class="col">

                                @if ($investi->jalon == 'Oui')
																		<div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
																			@if($investi->compteur = 1)
																				{{-- <td>{{$v + $investi->montant }}</td>   --}}
																				<div style="display:none" >{{$viol = $v + $investi->montant}} </div>  
																		        <div class="col">{{ number_format($viol, 0, ',', ' ') }}</div> 
																			@else
																				Impossible 
																			@endif

                                @else 
                                                                            <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM  * $investi->forfait->duree) /100))}}</div> 
                                                                            <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 
   
                                                                            @if ($investi->compteur > 1)
                                                                                 {{-- <td> {{$v1}}</td>  --}}
                                                                                 <div class="col">{{ number_format($v1, 0, ',', ' ') }}</div>  
                                                                            @elseif($investi->compteur = 1)
                                                                                {{-- <td> </td>   --}}
                                                                                <div style="display:none" >{{$vtrack = $v1 + $investi->montant }} </div>  
                                                                                <div class="col">{{ number_format($vtrack, 0, ',', ' ') }}</div> 
                                                                            @else		
                                                                            Impossible
                                                                            @endif



                                @endif

                              </div>
                              {{-- <div class="col">{{ number_format($investi->rendu, 0, ',', ' ') }}  </div> --}}
                            </div>
                        </div> 
                    </div> <br>      
                    <div class="mt-3 ">
                        <div style="color:#262626" class="row">
                            <div class="col-md-9 text-left">
                              <div class="col">Nous portons au credit du compte n° <span class="mr-2">
                                @if ($investi->particulier_id !== Null) 
                                <td>{{$investi->particulier->code}}</td>
                                @elseif($investi->client_id !== Null)
                                    <td>{{$investi->client->code}}</td>
                                @elseif($investi->customer_id !== Null)
                                    <td>{{$investi->customer->code}}</td>
                                @else
                                    
                                @endif
                            </span>   XOF :</div>
                              <div class="col">Soit {{ $chiffre }}  </div>
                            </div>
                            {{-- <div class="col-md-2">
                            </div> --}}
                            <div class="col-md-3">
                              <div class="col">
                                  {{-- {{ number_format($investi->montant, 0, ',', ' ') }} --}}

                                  @if ($investi->jalon == 'Oui')
                                  <div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
                                      @if($investi->compteur = 1)
                                          {{-- <td>{{$v + $investi->montant }}</td>   --}}
                                          <div style="display:none" >{{$viol = $v + $investi->montant}} </div>  
                                          <div class="col">{{ number_format($viol, 0, ',', ' ') }}</div> 
                                      @else
                                          Impossible 
                                      @endif

                         @else 
                                      <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM  * $investi->forfait->duree) /100))}}</div> 
                                      <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 

                                      @if ($investi->compteur > 1)
                                           {{-- <td> {{$v1}}</td>  --}}
                                           <div class="col">{{ number_format($v1, 0, ',', ' ') }}</div>  
                                      @elseif($investi->compteur = 1)
                                          {{-- <td> </td>   --}}
                                          <div style="display:none" >{{$vtrack = $v1 + $investi->montant }} </div>  
                                          <div class="col">{{ number_format($vtrack, 0, ',', ' ') }}</div> 
                                      @else		
                                      Impossible
                                      @endif



                       @endif

                                </div>
                              <div class="col">Valeur : {{\Carbon\Carbon::now()->format('d/m/Y')}} </div>
                            </div>
                        </div> 
                    </div> <br>

                    <div class="mt-3 col-md-12">
                        <div style="color:#262626" class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="bord">Client</div>
                                    <div class="bord">Guichetier</div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                              <div class="col">OPERATION EFFECTUEE</div>          
                            </div>
                        </div> 
                    </div>

                 </div>
               </div>
               <div class="p-5 ligne_horizontal">✄</div> 
               <div class="row espace">
                <div class="mt-3 col-md-12">
                   <img src="{{URL::asset('assets/images/brand/embleme.png')}}" width="100"
                   height="100"  class="" alt="ELITE ALLIANCE">
                   <div style="font-size: 16px" class="text-center col-12">
                       <i> BORDEREAU DE RETRAIT ESPECES N° {{$investi->reference}}</i> 
                   </div>
                   <div style="color:#262626" class="text-center mt-3 row">
                       <div class="col-md-6">
                           {{-- {{$investi->particulier->code}} --}}
                           @if ($investi->particulier_id !== Null) 
                           <td>{{$investi->particulier->code}}</td>
                           @elseif($investi->client_id !== Null)
                               <td>{{$investi->client->code}}</td>
                           @elseif($investi->customer_id !== Null)
                               <td>{{$investi->customer->code}}</td>
                           @else
                               
                           @endif
                       </div>
                       <div class="col-md-6"> 
                           
                           {{\Carbon\Carbon::now()->translatedFormat('d M Y')}} à
                           {{\Carbon\Carbon::now()->translatedFormat('H:i:s')}}
                       </div>
                   </div>
                   <div class="mt-3">
                       <div style="color:#262626" class="row">
                           <div class="col-md-10 text-left">
                             <div class="col"><span>Agence ...... : Cocody Riviera Bonoumin<span><br></div>
                             <div class="col">Devise ...... : XOF FRANC CFA B.C.E.A.O. </div>
                             <div class="col">Caisse ...... : 001 CAISSE AUXIL. 1 . COC.Bonoumin</div>
                             <div class="col">Guichetier ...... : 001</div>
                             <div class="col">Gestionnaire ...... :  </div>
                             {{-- <div class="col">Nom du débiteur ...... : {{$investi->name_deposant}} {{$investi->prename_deposant}} </div>
                             <div class="col">Adresse du débiteur ...... :  {{$investi->add_deposant}}</div> --}}
                             <div class="col">Pays de residence ...... : 225 - COTE D'IVOIRE</div>
                             {{-- <div class="col">Motif ........... : {{$investi->motif}}</div> --}}
                           </div>
                           {{-- <div class="col-md-2">
                           </div> --}}
                           <div class="col-md-2 mt-7">
                             <div class="col">
                                   @if ($investi->particulier_id !== Null) 
                                   <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
                                   @elseif($investi->client_id !== Null)
                                       <td>{{$investi->client->name}} {{$investi->client->prename}}<td>
                                   @elseif($investi->customer_id !== Null)
                                       <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
                                   @else
                                       
                                   @endif
                                 
                               </div>
                             <div class="col">
                               @if ($investi->particulier_id !== Null) 
                               <td>{{$investi->particulier->address}}</td>
                               @elseif($investi->client_id !== Null)
                                   <td>{{$investi->client->address}} <td>
                               @elseif($investi->customer_id !== Null)
                                   <td>{{$investi->customer->address}} </td>
                               @else
                                   
                               @endif
                           </div>
                           </div>
                       </div> 
                   </div> <br>

                   <div class="mt-3">
                       {{-- <div style="color:#262626" class="row">
                           <div class="col-md-3 text-left">
                             <div class="col">Montant ...... : </div>
                              <div class="col">Timbre ............ :  </div>  
                           </div>
                           <div class="col-md-3">
                               <div class="col">{{ number_format($investi->montantR, 0, ',', ' ') }} XOF</div>
                               @if ($investi->timbre == "Oui")
                                <div class="col">{{ number_format(100, 0, ',', ' ') }} XOF </div>  
                               @else
                               <div class="col">{{ number_format(0, 0, ',', ' ') }} XOF </div> 
                               @endif
                           </div> --}}
                           {{-- <div class="col-md-3">
                             <div class="col"></div>
                             <div class="col">Taxe ......... : </div>
                           </div>
                           <div class="col-md-3">
                               <div class="col"> {{ number_format(0, 0, ',', ' ') }} XOF </div>
                           </div> --}}
                       {{-- </div>  --}}
                   </div> <br>
                   <div class="mt-3 ">
                       <div style="color:#262626" class="row">
                           <div class="col-md-10 text-left">
                             <div class="col">Montant debité</div>
                             {{-- <div class="col">Montant rendu </div> --}}
                           </div>
                           {{-- <div class="col-md-2">
                           </div> --}}
                           <div class="col-md-2">
                             <div class="col">

                               @if ($investi->jalon == 'Oui')
                                                                       <div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
                                                                           @if($investi->compteur = 1)
                                                                               {{-- <td>{{$v + $investi->montant }}</td>   --}}
                                                                               <div style="display:none" >{{$viol = $v + $investi->montant}} </div>  
                                                                               <div class="col">{{ number_format($viol, 0, ',', ' ') }}</div> 
                                                                           @else
                                                                               Impossible 
                                                                           @endif

                               @else 
                                                                           <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM  * $investi->forfait->duree) /100))}}</div> 
                                                                           <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 
  
                                                                           @if ($investi->compteur > 1)
                                                                                {{-- <td> {{$v1}}</td>  --}}
                                                                                <div class="col">{{ number_format($v1, 0, ',', ' ') }}</div>  
                                                                           @elseif($investi->compteur = 1)
                                                                               {{-- <td> </td>   --}}
                                                                               <div style="display:none" >{{$vtrack = $v1 + $investi->montant }} </div>  
                                                                               <div class="col">{{ number_format($vtrack, 0, ',', ' ') }}</div> 
                                                                           @else		
                                                                           Impossible
                                                                           @endif



                               @endif

                             </div>
                             {{-- <div class="col">{{ number_format($investi->rendu, 0, ',', ' ') }}  </div> --}}
                           </div>
                       </div> 
                   </div> <br>      
                   <div class="mt-3 ">
                       <div style="color:#262626" class="row">
                           <div class="col-md-9 text-left">
                             <div class="col">Nous portons au credit du compte n° <span class="mr-2">
                               @if ($investi->particulier_id !== Null) 
                               <td>{{$investi->particulier->code}}</td>
                               @elseif($investi->client_id !== Null)
                                   <td>{{$investi->client->code}}</td>
                               @elseif($investi->customer_id !== Null)
                                   <td>{{$investi->customer->code}}</td>
                               @else
                                   
                               @endif
                           </span>   XOF :</div>
                             <div class="col">Soit {{ $chiffre }}  </div>
                           </div>
                           {{-- <div class="col-md-2">
                           </div> --}}
                           <div class="col-md-3">
                             <div class="col">
                                 {{-- {{ number_format($investi->montant, 0, ',', ' ') }} --}}

                                 @if ($investi->jalon == 'Oui')
                                 <div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
                                     @if($investi->compteur = 1)
                                         {{-- <td>{{$v + $investi->montant }}</td>   --}}
                                         <div style="display:none" >{{$viol = $v + $investi->montant}} </div>  
                                         <div class="col">{{ number_format($viol, 0, ',', ' ') }}</div> 
                                     @else
                                         Impossible 
                                     @endif

                        @else 
                                     <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM  * $investi->forfait->duree) /100))}}</div> 
                                     <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 

                                     @if ($investi->compteur > 1)
                                          {{-- <td> {{$v1}}</td>  --}}
                                          <div class="col">{{ number_format($v1, 0, ',', ' ') }}</div>  
                                     @elseif($investi->compteur = 1)
                                         {{-- <td> </td>   --}}
                                         <div style="display:none" >{{$vtrack = $v1 + $investi->montant }} </div>  
                                         <div class="col">{{ number_format($vtrack, 0, ',', ' ') }}</div> 
                                     @else		
                                     Impossible
                                     @endif



                      @endif

                               </div>
                             <div class="col">Valeur : {{\Carbon\Carbon::now()->format('d/m/Y')}} </div>
                           </div>
                       </div> 
                   </div> <br>

                   <div class="mt-3 col-md-12">
                       <div style="color:#262626" class="row">
                           <div class="col-md-8">
                               <div class="row">
                                   <div class="bord">Client</div>
                                   <div class="bord">Guichetier</div>
                               </div>
                           </div>
                           <div class="col-md-4 mt-4">
                             <div class="col">OPERATION EFFECTUEE</div>          
                           </div>
                       </div> 
                   </div>

                </div>
              </div>
            </div>
        </div>
    </div>  
</div>



<div  id="hidden" class="row">
<div class="col-md-1">

</div>
<div class="card col-md-10">
    <div class="card-header">
        <h3 class="card-title">Retrait du compte    @if ($investi->particulier_id !== Null)
            <td>{{$investi->particulier->code}} </td>
        @elseif($investi->client_id !== Null)
            <td>{{$investi->client->code}}</td>
        @elseif($investi->customer_id !== Null)
        <td>{{$investi->customer->code}}</td>
        @else
         
        @endif de    @if ($investi->particulier_id !== Null)
            <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
        @elseif($investi->client_id !== Null)
            <td> {{$investi->client->name}} {{$investi->client->prename}}</td>
        @elseif($investi->customer_id !== Null)
        <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
        @else
         
        @endif</h3>
    </div>

    <div class="card-body">
        <div  class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                <form class="form-horizontal" name="MyForm" action="{{ route('investir.diminishes.storeded') }}" method="POST" enctype="multipart/form-data">                                    
                    
                    {{-- @csrf --}}
                    <div class="jumbotron">
                        <h1 class="display-3">Salut!</h1>
                        @if ($investi->jalon == 'Oui')
                            <div style="display:none" >{{$v = ($investi->montant * $investi->forfait->pourcentageJ ) / 100   }}</div>
                     
                                   
                                @if($investi->compteur = 1)
                                <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v + $investi->montant, 0, ',', ' ') }} Fcfa du compte @if ($investi->particulier_id !== Null)
                                    <td>{{$investi->particulier->code}} </td>
                                @elseif($investi->client_id !== Null)
                                    <td>{{$investi->client->code}}</td>
                                @elseif($investi->customer_id !== Null)
                                <td>{{$investi->customer->code}}</td>
                                @else
                                 
                                @endif de    @if ($investi->particulier_id !== Null)
                                    <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
                                @elseif($investi->client_id !== Null)
                                    <td> {{$investi->client->name}} {{$investi->client->prename}}</td>
                                @elseif($investi->customer_id !== Null)
                                <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
                                @else
                                 
                                @endif. 
                                @else
                                Impossible 
                                @endif

                        @else
                            <div style="display:none" >{{$v0 = ($investi->montant * (($investi->forfait->pourcentageM) /100 ) * $investi->forfait->duree) }}</div> 
                            <div style="display:none" >{{$v1 = $v0/$investi->forfait->duree}}</div> 
               
                            @if ($investi->compteur > 1)
                            <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v1, 0, ',', ' ') }} Fcfa du compte @if ($investi->particulier_id !== Null)
                                <td>{{$investi->particulier->code}} </td>
                            @elseif($investi->client_id !== Null)
                                <td>{{$investi->client->code}}</td>
                            @elseif($investi->customer_id !== Null)
                            <td>{{$investi->customer->code}}</td>
                            @else
                             
                            @endif de    @if ($investi->particulier_id !== Null)
                                <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
                            @elseif($investi->client_id !== Null)
                                <td> {{$investi->client->name}} {{$investi->client->prename}}</td>
                            @elseif($investi->customer_id !== Null)
                            <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
                            @else
                             
                            @endif.   
                            @elseif($investi->compteur = 1)
                            <p class="lead">Vous etes sur le point d'effectuer un retrait de {{ number_format($v1 + $investi->montant, 0, ',', ' ') }} Fcfa du compte @if ($investi->particulier_id !== Null)
                                <td>{{$investi->particulier->code}} </td>
                            @elseif($investi->client_id !== Null)
                                <td>{{$investi->client->code}}</td>
                            @elseif($investi->customer_id !== Null)
                            <td>{{$investi->customer->code}}</td>
                            @else
                             
                            @endif de    @if ($investi->particulier_id !== Null)
                                <td>{{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
                            @elseif($investi->client_id !== Null)
                                <td> {{$investi->client->name}} {{$investi->client->prename}}</td>
                            @elseif($investi->customer_id !== Null)
                            <td>{{$investi->customer->name}} {{$investi->customer->prename}}</td>
                            @else
                             
                            @endif. 
                            @else
                            Impossible 
                            @endif
                           
                        @endif
                            Veuillez vous assurer de l'accord du client et d'avoir également la somme en caisse à lui remettre.
                             Cette action est irreversible.</p>
                        <hr class="my-4">
                        <p>Etes vous sur?.</p>
          
                    </div>
                        @include('includes.formdiminish')  
                <div class="text-wrap">
                <div class="btn-list text-right">
                    {{-- <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button> --}}
                    <input type="button" style="background:#FF0017; color:#fff" class="btn btn" value="Valider" onclick="PrintMeSubmitMe(this); return false;">
                </div>
            </form> 
                                                    </div>
         
            <div class="col-md-1">
         
            </div>

            
            
        </div>
    </div>
</div>


<div class="col-md-1">

</div>
</div>

						
					
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
<script language="javascript" type="text/javascript">

    function PrintMeSubmitMe()
    {
 window.print();
 
    SubmitMe();

     
    }
    
    
    function SubmitMe()
    {   
        document.MyForm.submit();
        
  
    }
    </script>
<!--INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection