@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Archives</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Données</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Nouvelle Entreprise</a></li>
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

{{-- <div class="row">
<div class="col-md-1">
</div>
<div class="card col-md-10">
    <div class="card-header">
        <h3 class="card-title">Nouvelle Entreprise</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                                                        <form class="form-horizontal" action="{{ route('entreprises.store') }}" method="POST" enctype="multipart/form-data">                                    
                                                                @include('includes.formentreprise')
                                                            <div class="text-wrap">
                                                            <div class="btn-list text-right">
                                                                <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
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
</div> --}}



            <form class="form-horizontal" action="{{ route('entreprises.store') }}" method="POST" enctype="multipart/form-data">  
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
                                            @include('includes.formentreprise')
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
                                    @include('includes.formentreprise1')
                                </div>
                                <div class="col-md-1">
                            
                                </div>
                            </div>
                            <div class="text-wrap">
                                <div class="btn-list text-right">
                                    <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>  
                </div>
            </form> 

@endsection
@section('js')
<script type="text/javascript">   
   function displayForm(c){ 
            if(c.value == "Marie"){ 
                document.getElementById("ccform").style.visibility='visible'; 
            } else if(c.value == "Celibataire"){ 
                document.getElementById("ccform").style.visibility='hidden'; 
            } 
            else{} 
        } 
        
        function displayForme(c){ 
            if(c.value == "Oui"){ 
                document.getElementById("cform").style.visibility='visible'; 
            } else if(c.value == "Non"){ 
                document.getElementById("cform").style.visibility='hidden'; 
            } 
            else{} 
        }  
</script>  
<!--INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection