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
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Validation </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Validation</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Validation</a></li>
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




<div   class="row">
    <div class="col-md-1">

    </div>
    <div class="card col-md-10">
        <div class="card-header">
            {{-- <h3 class="card-title">Validation code de transfert {{$transfert->code}}</h3> --}}
            <h3 class="card-title">Validation du transfert</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-1"> 

                </div>
                <div class="col-md-10"> 
             
                        <form class="form-horizontal" name="MyForm" action="{{ route('transfert.validates.storeded') }}" method="POST" enctype="multipart/form-data">                                    
                            {{-- @method('PATCH')  , ['transfert' => $transfert->id] --}}
                            @csrf
                            @include('includes.formvalidate')  

                                                                    <div class="jumbotron">
                                                                        {{-- <h1 class="display-3">Salut!</h1> --}}
                                                
                                                   
                                                                            <p class="lead">Vous etes sur le point de valider un transfert du compte {{$transfert->send->name}} @if ($transfert->solde_id !== Null)
                                                                                {{$transfert->solde->particulier->code}} {{$transfert->solde->particulier->name}} {{$transfert->solde->particulier->prename}}
                                                                             @elseif($transfert->sode_id !== Null)
                                                                                 {{$transfert->sode->client->code}} {{$transfert->sode->client->name}} {{$transfert->sode->client->prename}}
                                                                             @elseif($transfert->sold_id !== Null)
                                                                                 {{$transfert->sold->entreprise->code}} {{$transfert->sold->entreprise->name}}
                                                                             @elseif($transfert->sod_id !== Null)
                                                                                 {{$transfert->sod->society->code}} {{$transfert->sod->society->name}}
                                                                            @elseif($transfert->credit_id !== Null)
                                                                            {{ $transfert->credit->name }}
                                                                              @else
                                                                                     
                                                                                     
                                                                             @endif  sur le compte {{$transfert->receive->name}} de @if ($transfert->olde_id !== Null)
                                                                             {{$transfert->olde->particulier->code}} {{$transfert->olde->particulier->name}} {{$transfert->olde->particulier->prename}}
                                                                             @elseif($transfert->ode_id !== Null)
                                                                                 {{$transfert->ode->client->code}} {{$transfert->ode->client->name}} {{$transfert->ode->client->prename}}
                                                                         @elseif($transfert->old_id !== Null)
                                                                             {{$transfert->old->entreprise->code}} {{$transfert->old->entreprise->name}}
                                                                             @elseif($transfert->od_id !== Null)
                                                                                 {{$transfert->od->society->code}} {{$transfert->od->society->name}}
                                                                             @elseif($transfert->redit_id !== Null)
                                                                             {{ $transfert->redit->name }}
                                                                             @else
                                                                                     
                                                                                     
                                                                             @endif .
                                                    
                                                                           
                                                                            Veuillez vous assurer que vous avez également verifier les informations avant de valider.
                                                                             Cette action est irreversible.</p>
                                                                        <hr class="my-4">
                                                                        <p>Etes vous sur?.</p>
                                                          
                                                                    </div>
                                                                      
                                                                <div class="text-wrap">
                                                                    <div class="btn-list text-right">
                                                                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
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