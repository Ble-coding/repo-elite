@extends('layouts.master')
@section('css')
        <!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
        <style>
            @media print{
                #hidden{
                    display : none;                 
                }

                .total .espace{height: 48%;}
    .container-fluid .content {
                    text-align: center;
                    position:absolute;
                    background:rgba(0,0,0,0.5);
                    top:0;
                    left:0;
                    right:0;
                    bottom:0;
                    
                }

                /* .impression_visible{display:block} */

            }




        .table, td, th {
  border: 1px solid #262626 !important;
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
                                <h4 class="page-title mb-0">Formulaire </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Versement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Versement</a></li>
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

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

<div class=" container-fluid">
    <div class="div  position-ref">
        <div class=" content p-5 row">
            <div class="col-12 total mb-2" style="border-right:1px solid #262626;background:#fff;border-left:1px solid #262626">
                <div class="row espace">
                     <div class="col-12">                
                       <table class="table">
                               <thead>
                                   <tr style="background-color:#FFF">
                                       <th style="border-right-color: #fff!important"><div class="m-2"><strong style="color:#262626">Reçu de versement ELITE CREDIT - COPIE ELITE CREDIT</strong></div></th>
                                       <th>
                                               <div class="text-right">
                                                   <img class="" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img">
                                               </div></th>
                                   </tr> 
                               </thead>
                       </table>
                       <div style="color:#262626" class="row">
                           <div class="col-md-3">
                             <div class="col">Nom du client</div>
                             <div class="col">Contrat N° </div>
                             <div class="col">Adresse & Tél </div>
                           </div>
                           <div class="col-md-3">
                             <div class="col">{{$vente->name}} {{$vente->prename}}</div>
                             <div class="col">{{$vente->contrat}}  </div>
                             <div class="col">{{$vente->adresse}} - {{$vente->tel}} </div>
                           </div>
                           <div class="col-md-3">
                             <div class="col">Date</div>
                             <div class="col">ACTIVITES (GO/CD) </div>
                             <div class="col">Agence </div>
                           </div>
                           <div class="col-md-3">
                               <div class="col">Émis le : {{\Carbon\Carbon::now()->format('d/m/Y')}}</div>
                               <div class="col"><strong> ELITE AUTO </strong></div>
                               <div class="col"><strong>ELITE DEAL CI </strong></div>
                           </div>
                       </div> 
                     </div>
                     <div class="col-lg-12">
                         
                       <table class="table" border="1">
                           <tr>
                               <th style="color:#262626" rowspan="2">MONTANT Versé (EN FCFA chiffre)</th>
 
                               @if ($vente->payment == 'Unique')
                               {{-- <h6>Versement</h6> --}}
                                   <div style="display:none" >{{$v = ($vente->montant * $bonus) / 100   }}</div>
                            
                                          
                                       @if($vente->compteur = 1)
 
                                         <th style="color:#262626;" rowspan="2">{{ number_format($v + $vente->montant, 0, ',', ' ') }}</th>
                                     @endif
                                 @else
                                 <div style="display:none" >{{$v0 = ($vente->montant * (($bonus) /100)) }}</div> 
                                 <div style="display:none" >{{$v1 = ($v0 + $vente->montant)/$vente->duree}}</div> 
                    
                                 @if ($vente->compteur >= 1)
                                     <th style="color:#262626;" rowspan="2">{{ number_format($v1, 0, ',', ' ') }}</th>
                                     @endif  
                                     
                                 @endif
                               <th style=" border-color: #fff!important; width: 20%;:#262626"></th>
                           </tr>
                           <tr>
                               <td style=" border-color: #fff!important; color:#262626"></td>
                           </tr>
                           <tr>
                                <td style="color:#262626" > MONTANT Versé (EN FCFA LETTRE) </td>
                               <td style="color:#262626" > {{$chiffre}}</td>
                               <td style=" border-color: #fff!important; color:#262626"> </td>
                           </tr>
                       </table>  
                       <div class="col-lg-12">
                         <div class="row">
                             {{-- <div class="col-md-2"> <strong></strong> </div> --}}
                             <div style="color:#ff0017" class="col-md-8"> 
                                 <div class="text-center"><strong>ELITE ALLIANCE VOUS DIT MERCI. ELITE ALLIANCE  c'est VOUS!
                                     Service client au 2722245811.</strong></div>
                                 <div class="text-center"><strong>Au plaisir de vous revoir</strong> </div>
                             </div>
                             <div class="col-md-4"><strong></strong> </div>
                         </div> 
                     </div> 
 
                     </div>
 
                     <div class="col-lg-12">
                         <div class="row">
                             <div class="col-md-4"> <strong>ELITE CREDIT</strong> </div>
                             <div class="col-md-4"> </div>
                             <div class="col-md-4"><strong> CLIENT</strong> </div>
                         </div> 
                     </div> 
                     <div class="col-lg-12">
 
                         <div class="row">
                             <div class="col-md-2"> <strong></strong> </div>
                             <div class="col-md-8"> 
                                 <div class="text-center">ELITE CREDIT Cote d'ivoire</div>
                                 <div class="text-center">Siège social: Abidjan / Cocody riviera palmeraie rond pont Ado immeuble zoé</div>
                                 <div class="text-center">08 BP 189 Abidjan 08 - SASU au capital: 5 000 000 FCFA RCCM:C I-ABJ-03-2021-B17-00076</div>
                                 <div class="text-center">Tél:2722245811 /Email:info@elitescredits.com</div>
                             </div>
                             <div class="col-md-2"><strong></strong> </div>
                         </div> 
                     </div>
            
                     {{-- <div class="col-lg-12">
                         <div class="">
                             <small>Powered by: ELITE <strong style="color:#FF0017">CREDIT</strong> (<strong>W</strong>est <strong>A</strong>frican <strong>G</strong>roup  )</small>
                         </div>
                     </div> --}}
                 </div>
 
                  {{-- <hr/> --}}
                  <div class="p-5 ligne_horizontal">✄</div> 
 
                  
                  <div class="row espace">
                     <div class="col-12">                
                       <table class="table">
                               <thead>
                                   <tr style="background-color:#FFF">
                                       <th style="border-right-color: #fff!important"><div class="m-2"><strong style="color:#262626">Reçu de versement ELITE CREDIT - COPIE CLIENT</strong></div></th>
                                       <th>
                                               <div class="text-right">
                                                   <img class="" src="{{URL::asset('assets/images/users/elite.jpg')}}" width="190" height="25" alt="img">
                                               </div></th>
                                   </tr> 
                               </thead>
                       </table>
                       <div style="color:#262626" class="row">
                           <div class="col-md-3">
                             <div class="col">Nom du client</div>
                             <div class="col">Contrat N° </div>
                             <div class="col">Adresse & Tél </div>
                           </div>
                           <div class="col-md-3">
                             <div class="col">{{$vente->name}} {{$vente->prename}}</div>
                             <div class="col">{{$vente->contrat}}  </div>
                             <div class="col">{{$vente->adresse}} - {{$vente->tel}} </div>
                           </div>
                           <div class="col-md-3">
                             <div class="col">Date</div>
                             <div class="col">ACTIVITES (GO/CD) </div>
                             <div class="col">Agence </div>
                           </div>
                           <div class="col-md-3">
                               <div class="col">Émis le : {{\Carbon\Carbon::now()->format('d/m/Y')}}</div>
                               <div class="col"><strong> ELITE AUTO </strong></div>
                               <div class="col"><strong>ELITE DEAL CI </strong></div>
                           </div>
                       </div> 
                     </div>
                     <div class="col-lg-12">
                         
                       <table class="table" border="1">
                           <tr>
                               <th style="color:#262626" rowspan="2">MONTANT Versé (EN FCFA chiffre)</th>
 
                               @if ($vente->payment == 'Unique')
                               {{-- <h6>Versement</h6> --}}
                                   <div style="display:none" >{{$v = ($vente->montant * $bonus) / 100   }}</div>
                            
                                          
                                       @if($vente->compteur = 1)
 
                                         <th style="color:#262626;" rowspan="2">{{ number_format($v + $vente->montant, 0, ',', ' ') }}</th>
                                     @endif
                                 @else
                                 <div style="display:none" >{{$v0 = ($vente->montant * (($bonus) /100)) }}</div> 
                                 <div style="display:none" >{{$v1 = ($v0 + $vente->montant)/$vente->duree}}</div> 
                    
                                 @if ($vente->compteur >= 1)
                                     <th style="color:#262626;" rowspan="2">{{ number_format($v1, 0, ',', ' ') }}</th>
                                     @endif  
                                     
                                 @endif
                               <th style=" border-color: #fff!important; width: 20%;:#262626"></th>
                           </tr>
                           <tr>
                               <td style=" border-color: #fff!important; color:#262626"></td>
                           </tr>
                           <tr>
                               <td style="color:#262626" > MONTANT Versé (EN FCFA LETTRE) </td>
                               <td style="color:#262626" > {{$chiffre}}</td>
                               <td style=" border-color: #fff!important; color:#262626"> </td>
                           </tr>
                       </table>  
                       <div class="col-lg-12">
                         <div class="row">
                             {{-- <div class="col-md-2"> <strong></strong> </div> --}}
                             <div style="color:#ff0017" class="col-md-8"> 
                                 <div class="text-center"><strong>ELITE ALLIANCE VOUS DIT MERCI. ELITE ALLIANCE  c'est VOUS!
                                     Service client au 2722245811.</strong></div>
                                 <div class="text-center"><strong>Au plaisir de vous revoir</strong> </div>
                             </div>
                             <div class="col-md-4"><strong></strong> </div>
                         </div> 
                     </div> 
 
                     </div>
 
                     <div class="col-lg-12">
                         <div class="row">
                             <div class="col-md-4"> <strong>ELITE CREDIT</strong> </div>
                             <div class="col-md-4"> </div>
                             <div class="col-md-4"><strong> CLIENT</strong> </div>
                         </div> 
                     </div> 
                     <div class="col-lg-12">
 
                         <div class="row">
                             <div class="col-md-2"> <strong></strong> </div>
                             <div class="col-md-8"> 
                                 <div class="text-center">ELITE CREDIT Cote d'ivoire</div>
                                 <div class="text-center">Siège social: Abidjan / Cocody riviera palmeraie rond pont Ado immeuble zoé</div>
                                 <div class="text-center">08 BP 189 Abidjan 08 - SASU au capital: 5 000 000 FCFA RCCM:C I-ABJ-03-2021-B17-00076</div>
                                 <div class="text-center">Tél:2722245811 /Email:info@elitescredits.com</div>
                             </div>
                             <div class="col-md-2"><strong></strong> </div>
                         </div> 
                     </div>
            
                     {{-- <div class="col-lg-12">
                         <div class="">
                             <small>Powered by: ELITE <strong style="color:#FF0017">CREDIT</strong> (<strong>W</strong>est <strong>A</strong>frican <strong>G</strong>roup  )</small>
                         </div>
                     </div> --}}
                 </div>
                     <div class="page-rightheader">
                         <div class="btn btn-list">
                             <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> 
                         </div>
                     </div>
                     {{-- <div class="col-lg-12">
                         <div class="">
                             <small>Powered by: ELITE <strong style="color:#FF0017">CREDIT</strong> (<strong>W</strong>est <strong>A</strong>frican <strong>G</strong>roup  )</small>
                         </div>
                     </div> --}}
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
 let print =   window.print();
 
//  console.log(print);
//  if(!print){
    SubmitMe();
//  }
  

     
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

