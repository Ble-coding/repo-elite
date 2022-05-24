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
						<div id="hidden" class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Investissement </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Versement</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Espece</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a>
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
{{-- impression_visible defaut_invisible --}}
<div class=" container-fluid">   
    <div class="div position-ref">  
        <div class=" content p-5 row">
            <div class="col-12 total mb-2" style="background:#fff;">
               <div class="row espace">
                 <div class="mt-3 col-md-12">
                    <img src="{{URL::asset('assets/images/brand/embleme.png')}}" width="100"
                    height="100"  class="" alt="ELITE ALLIANCE">
                    <div style="font-size: 16px" class="text-center col-12">
                        <i> BORDEREAU DE VERSEMENT ESPECES N° {{$investi->reference}}</i> 
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
                              <div class="col">Nom du remettant ...... : {{$investi->name_deposant}} {{$investi->prename_deposant}} </div>
                              <div class="col">Adresse du remettant ...... :  {{$investi->add_deposant}}</div>
                              <div class="col">Pays de residence ...... : 225 - COTE D'IVOIRE</div>
                              <div class="col">Motif ........... : {{$investi->motif}}</div>
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
                        <div style="color:#262626" class="row">
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
                            </div>
                            {{-- <div class="col-md-3">
                              <div class="col"></div>
                              <div class="col">Taxe ......... : </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col"> {{ number_format(0, 0, ',', ' ') }} XOF </div>
                            </div> --}}
                        </div> 
                    </div> <br>


                    <div class="mt-3 ">
                        <div style="color:#262626" class="row">
                            <div class="col-md-10 text-left">
                              <div class="col">Montant recu</div>
                              <div class="col">Montant rendu </div>
                            </div>
                            {{-- <div class="col-md-2">
                            </div> --}}
                            <div class="col-md-2">
                              <div class="col">{{ number_format($investi->montantR, 0, ',', ' ') }}</div>
                              <div class="col">{{ number_format($investi->rendu, 0, ',', ' ') }}  </div>
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
                              <div class="col">{{ number_format($investi->montant, 0, ',', ' ') }}</div>
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
                       <i> BORDEREAU DE VERSEMENT ESPECES N° {{$investi->reference}}</i> 
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
                             <div class="col">Nom du remettant ...... : {{$investi->name_deposant}} {{$investi->prename_deposant}} </div>
                             <div class="col">Adresse du remettant ...... :  {{$investi->add_deposant}}</div>
                             <div class="col">Pays de residence ...... : 225 - COTE D'IVOIRE</div>
                             <div class="col">Motif ........... : {{$investi->motif}}</div>
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
                       <div style="color:#262626" class="row">
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
                           </div>
                           {{-- <div class="col-md-3">
                             <div class="col"></div>
                             <div class="col">Taxe ......... : </div>
                           </div>
                           <div class="col-md-3">
                               <div class="col"> {{ number_format(0, 0, ',', ' ') }} XOF </div>
                           </div> --}}
                       </div> 
                   </div> <br>


                   <div class="mt-3 ">
                       <div style="color:#262626" class="row">
                           <div class="col-md-10 text-left">
                             <div class="col">Montant recu</div>
                             <div class="col">Montant rendu </div>
                           </div>
                           {{-- <div class="col-md-2">
                           </div> --}}
                           <div class="col-md-2">
                             <div class="col">{{ number_format($investi->montantR, 0, ',', ' ') }}</div>
                             <div class="col">{{ number_format($investi->rendu, 0, ',', ' ') }}  </div>
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
                             <div class="col">{{ number_format($investi->montant, 0, ',', ' ') }}</div>
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