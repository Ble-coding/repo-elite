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

            @media screen {
                .defaut_invisible{display:none}
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
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Retrait</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Retrait</a></li>
								</ol>
							</div>
							<div class="page-rightheader">
								<div class="btn btn-list">
									{{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
								</div>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
{{-- impression_visible defaut_invisible --}}


{{-- <div class=" container-fluid">
    <div class="div position-ref">
        <div class=" content p-5 row">
            <div class="col-12 total mb-2" style="background:#fff;">
               <div class="row espace">
                 <div class="mt-3 col-md-12">
                    <div style="font-size: 16px" class="text-center col-12">
                        <i> BORDEREAU DE VERSEMENT ESPECES N° {{$depot->reference}}</i> 
                   </div>
                    <div style="color:#262626" class="text-center mt-3 row">
                        <div class="col-md-6">
                            {{$depot->particulier->code}}
                        </div>
                        <div class="col-md-6">
                            
                            {{\Carbon\Carbon::now()->translatedFormat('d M Y')}} à
                            {{\Carbon\Carbon::now()->translatedFormat('H:i:s')}}
                        </div>
                    </div>
                    <div class="mt-3 col-md-12">
                        <div style="color:#262626" class="row">
                            <div class="col-md-5">
                              <div class="col">Agence ...... : Cocody Riviera Palmeraie</div>
                              <div class="col">Devise ...... : XOF FRANC CFA B.C.E.A.O. </div>
                              <div class="col">Caisse ...... : 001 CAISSE AUXIL. 3 . COC.PALM</div>
                              <div class="col">Guichetier ...... : 001</div>
                              <div class="col">Gestionnaire ...... : {{Auth::user()->name}}</div>
                              <div class="col">Nom du remettant ...... : Mr {{$depot->name_deposant}} {{$depot->prename_deposant}} </div>
                              <div class="col">Pays de residence ...... : 225 - COTE D'IVOIRE</div>
                              <div class="col">Motif ........... : {{$depot->motif}}</div>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5 mt-7">
                              <div class="col">Mr/Mme {{$depot->particulier->name}} {{$depot->particulier->prename}}</div>
                              <div class="col">{{$depot->particulier->address}}  </div>
                            </div>
                        </div> 
                    </div> <br>

                    <div class="mt-3 col-md-12">
                        <div style="color:#262626" class="row">
                            <div class="col-md-3">
                              <div class="col">Montant ...... : </div>
                               <div class="col">Timbre ............ :  </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="col">{{ number_format($depot->montantR, 0, ',', ' ') }} XOF</div>
                                @if ($depot->timbre == "Oui")
                                 <div class="col">{{ number_format(100, 0, ',', ' ') }} XOF </div>  
                                @else
                                <div class="col">{{ number_format(0, 0, ',', ' ') }} XOF </div> 
                                @endif
                            </div>
                            <div class="col-md-3">
                              <div class="col"></div>
                              <div class="col">Taxe ......... : </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col"> {{ number_format(0, 0, ',', ' ') }} XOF </div>
                            </div>
                        </div> 
                    </div> <br>


                    <div class="mt-3 col-md-12">
                        <div style="color:#262626" class="row">
                            <div class="col-md-5">
                              <div class="col">Montant recu</div>
                              <div class="col">Montant rendu </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                              <div class="col">{{ number_format($depot->montantR, 0, ',', ' ') }}</div>
                              <div class="col">{{ number_format($depot->rendu, 0, ',', ' ') }}  </div>
                            </div>
                        </div> 
                    </div> <br>

                    
                    <div class="mt-3 col-md-12">
                        <div style="color:#262626" class="row">
                            <div class="col-md-5">
                              <div class="col">Nous portons au credit du compte n°{{$depot->particulier->code}}     XOF :</div>
                              <div class="col">Soit </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                              <div class="col">{{ number_format($depot->montantD, 0, ',', ' ') }}</div>
                              <div class="col">{{ $chiffre }}  </div>
                            </div>
                        </div> 
                    </div> <br>

                 </div>
               </div>
            </div>
        </div>
    </div>
</div> --}} 

<div   class="row">
    <div class="col-md-1">

    </div>
    <div class="card col-md-10">
        <div class="card-header">
            <h3 class="card-title">Nouveau retrait</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-1"> 

                </div>
                <div class="col-md-10">
            
                        <form class="form-horizontal" name="MyForm" action="{{ route('depot.depots.storeded') }}" method="POST" enctype="multipart/form-data">                                    
                        
                            {{-- @csrf --}}
                            @include('includes.formretrait')  

                                                                    <div class="jumbotron">
                                                                        {{-- <h1 class="display-3">Salut!</h1> --}}
                                                
                                                   
                                                                            <p class="lead">Vous etes sur le point d'effectuer un retrait de <strong>{{$depot->particulier->name}} {{$depot->particulier->prename}}</strong> titulaire du 
                                                                                compte <strong>{{$depot->particulier->code}} </strong>.
                                                    
                                                                           
                                                                            Veuillez vous assurer que vous avez également la somme exacte avant de lui remettre ce qui lui revient de droit(le reçu).
                                                                             Cette action est irreversible.</p>
                                                                        <hr class="my-4">
                                                                        <p>Etes vous sur?.</p>
                                                          
                                                                    </div>
                                                                      
                                                                <div class="text-wrap">
                                                                    <div class="btn-list text-right">
                                                                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Retirer</button>
                                                                        {{-- <input type="button" style="background:#FF0017; color:#fff" class="btn btn" value="Retirer" onclick="PrintMeSubmitMe(this); return false;"> --}}
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        
            
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