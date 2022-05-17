@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Compte Investissement Client</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Investissement</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Edit Investissement</a></li>
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

<div class="row">
<div class="col-md-2">

</div>
<div class="card col-md-8">
    <div class="card-header">
        {{-- <div style="display:none">{{$v = $investi->investiman}}</div>  --}}
        <h3 class="card-title">Modification des informations de l'investissement du {{\Carbon\Carbon::parse($investi->updated_at)->format('d/m/Y')}} de 
            @if ($investi->particulier_id !== Null)
            <td>{{$investi->particulier->code}} - {{$investi->particulier->name}} {{$investi->particulier->prename}}</td>
        @elseif($investi->client_id !== Null)
            <td>{{$investi->client->code}} - {{$investi->client->name}} {{$investi->client->prename}}</td>
        @elseif($investi->intervenant_id !== Null)
        <td>{{$investi->intervenant->code}} - {{$investi->intervenant->name}} {{$investi->intervenant->prename}}</td>
        @else
         
        @endif
   </h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                                                        <form class="form-horizontal" action="{{ route('investir.investis.update', ['investi' => $investi->id]) }}" method="POST" enctype="multipart/form-data">   
                                                            @method('PATCH')                                    
                                                                @include('includes.forminvesti')
                                                            <div class="text-wrap">
                                                            <div class="btn-list text-right">
                                                                <button type="submit" style="background:#262626; color:#fff" class="btn btn">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
         
            <div class="col-md-1">
         
            </div>

            
            
        </div>
    </div>
</div>


<div class="col-md-2">

</div>
</div>

						
					
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')


<script type="text/javascript">

function mySelectfunction(){
    getValue = document.getElementById("envoie_id").value;
    if(getValue == 4){
        document.getElementById("img1").style.display = "block";
        document.getElementById("img2").style.display = "none";
        document.getElementById("img3").style.display = "none";
    }
    if(getValue == 5){
        document.getElementById("img1").style.display = "none";
        document.getElementById("img2").style.display = "block";
        document.getElementById("img3").style.display = "none";
    }
    if(getValue == 6){
        document.getElementById("img1").style.display = "none";
        document.getElementById("img2").style.display = "none";
        document.getElementById("img3").style.display = "block";
    }

}
    function displayForm(c){ 
        if(c.value == "Oui"){ 

 document.getElementById("ccform").style.visibility='visible'; 

        } else if(c.value == "Non"){ 
            document.getElementById("ccform").style.visibility='hidden'; 
        } 
        else{ 

        } 
     }         
</script>  

		<!--INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection