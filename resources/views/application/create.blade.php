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

            @media screen {
                .visible{display:none}
}



        </style>
@endsection
@section('page-header')
                        <!--Page header-->
                        <div  class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Detiter</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Données</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">1000</a></li>
                                </ol>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">

                                    {{-- <a href="#" id="hidden" onclick="window.print()"   style="background:#ff0017; color:#fff" class="btn btn"><i class="fe fe-printer mr-1"></i> Imprimer </a> --}}
                                    {{-- <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a> --}}
                                </div>
                            </div>
                        </div>
                        <!--End Page header-->
@endsection
@section('content')


<div class="row">
<div class="col-md-1">

</div>
<div class="card col-md-10">
    <div class="card-header">
        <h3 class="card-title"></h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                <form class="form-horizontal" name="MyForm" action="" method="POST" enctype="multipart/form-data">                                    
                    
                    {{-- @csrf --}}
                    <div class="jumbotron">
                        <h1 class="display-3">Salut!</h1>

           

                      


                                
                                <p class="lead">Vous etes sur le point de recevoir la somme d Fcfa de  titulaire du 
                                    n°client .
                                  

                       
                     

                            Veuillez vous assurer que le client a également la somme exacte avant de lui remettre ce qui lui revient de droit(le reçu).
                             Cette action est irreversible.</p>
                        <hr class="my-4">
                        <p>Etes vous sur?.</p>
          
                    </div>
                        
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
        <!-- INTERNAL Select2 js -->
        <script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection

