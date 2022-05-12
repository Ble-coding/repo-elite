@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
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
								<h4 class="page-title mb-0">Archives</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Données</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Nouveau Particulier</a></li>
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




{{-- <div id="hidden"> --}}
    <form class="form-horizontal" action="{{ route('particuliers.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row">
            <div class="col-md-1">
            </div>   
            <div class="card col-md-10">
                    <div class="card-header">
                        <h3 class="card-title">Identité</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                                    @include('includes.formparticulier')
                                {{-- <div class="text-wrap">
                                    <div class="btn-list text-right">
                                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                                    </div>
                                </div>                              --}}
                        </div>
                        <div class="col-md-1">
                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>   
        </div>
            
        <div class="row">
            <div class="col-md-1">
            </div>   
            <div class="card col-md-10">
                    <div class="card-header">
                        <h3 class="card-title">Activité professionnelles</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                            @include('includes.formparticulier1')                   
                        </div>
                        <div class="col-md-1">
                    
                        </div>
                    </div>
                    <div class="text-wrap">
                        <div class="btn-list text-right">
                            <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                            {{-- <input type="button" style="background:#FF0017; color:#fff" class="btn btn" value="Valider" onclick="PrintMeSubmitMe(this); return false;"> --}}
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-1">
            </div>  
        </div>


    </form>  
{{-- </div> --}}
@endsection
@section('js')
<!--INTERNAL Select2 js -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>
    <script  src="{{asset('assets/js/js/jquery.repeater.min.js')}}"  ></script>
    <script  src="{{asset('assets/js/js/repeat-init.js')}}"  ></script>
    <script  src="{{asset('assets/js/js/dff.js')}}"  ></script>
    <script type="text/javascript"> 
        function displayForm(c){ 
            if(c.value == "Marie"){ 
                document.getElementById("ccform").style.visibility='visible'; 
            } else if(c.value == "Celibataire"){ 
                document.getElementById("ccform").style.visibility='hidden'; 
            } 
            else{} 
        }     
        
        
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
@endsection


