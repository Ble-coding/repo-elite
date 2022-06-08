@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Confirmation </h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Validation</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Analyste</a></li>
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
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <div class="main-content-body main-content-body-profile card">
            <div class="main-profile-body">
                <div class="card-body">
                    {{-- <div class="mb-5">
                        <form class="profile-edit">
                            <textarea class="form-control br-br-0 br-bl-0" placeholder="What are you doing right now?" rows="5"></textarea>
                            <div class="profile-share  border border-top-0">
                                <a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic"></i></a>
                                <a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video"></i></a>
                                <a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image"></i></a>
                                <button type="submit" class="btn btn-info pull-right mt-1"><i class="fa fa-share ml-1"></i> Share</button>
                            </div>
                        </form>
                    </div> --}}
                    <h5 class="font-weight-bold">Informations du client {{$client->code}}</h5>
                    <div class="main-profile-bio mb-0">
                        <p>  @if ($client->sexe == 'M')
                            Mr
                        @else
                            Mme
                        @endif
                        <strong>{{$client->name}} {{$client->prename}}</strong>, de pays de nationalité {{$client->nationnalite}} né(e) le {{\Carbon\Carbon::parse($client->datenaiss)->format('d/m/Y')}} à {{$client->lieu}}.
                        Titulaire de la pièce d’Immatriculation de type {{$client->piece->nom}} N°{{$client->numpiece}} expirant le {{\Carbon\Carbon::parse($client->dateexp)->format('d/m/Y')}}.
                        @if ( $client->situation == 'Celibataire')
                      A mentionné(e) être célibataire.
                    @else
                    A mentionné(e) être marié(e) à {{$client->successeur_name}} {{$client->successeur_prename}} dont le contact est {{$client->successeur_tel}}.
                    @endif.</p>  
                       
                       
                        
 <p>En cas d'urgence nom et personne à contacter, @if ( $client->personne_name !== Null
    ||  $client->personne_prename !== Null  || $client->personne_tel !== Null)
     {{$client->personne_name}} {{$client->personne_prename}} {{$client->personne_tel}} 
 @else
     (Neant)
 @endif . </p>
                        {{-- <p class="mb-0">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a></p> --}}
                    </div>
                </div>
                {{-- <div class="card-body border-top">
                    <h5 class="font-weight-bold">Skills</h5>
                    <a class="btn btn-sm btn-light mt-1" href="#">HTML5</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">CSS</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Java Script</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Photo Shop</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Php</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Wordpress</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Sass</a>
                    <a class="btn btn-sm btn-light mt-1" href="#">Angular</a>
                </div> --}}
                <div class="card-body border-top">
                    <h5 class="font-weight-bold">Contact client</h5>
                    <div class="main-profile-contact-list d-lg-flex">
                        <div class="media mr-4">
                            <div class="media-icon bg-primary text-white  mr-3 mt-1">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Mobile</small>
                                <div class="font-weight-normal1">
                                    {{$client->tel}}
                                </div>
                            </div>
                        </div>
                        <div class="media mr-4">
                            <div class="media-icon bg-warning text-white mr-3 mt-1">
                                <i class="fa fa-slack"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Email</small>
                                <div class="font-weight-normal1">
                                    {{$client->email}}
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-info text-white mr-3 mt-1">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Adresse</small>
                                <div class="font-weight-normal1">
                                    {{$client->lieu_habitation}}, Cote d'ivoire
                                </div>
                            </div>
                        </div>
                    </div><!-- main-profile-contact-list -->
                </div>
                <div class="card-body border-top">
                    <h5 class="font-weight-bold">Infos entreprise</h5>
                    <div class="main-profile-contact-list d-lg-flex">
                        <div class="media mr-5">
                            <div class="media-icon bg-success text-white mr-4">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">{{$client->prof}} à {{$client->nom_ent}}</h6>
                                <span>{{$client->date_deb}}- Adresse  {{$client->address}}</span>
                                <p>{{$client->tel_ent}}</p>
                            </div>
                        </div>
                        <div class="media mr-5">
                            <div class="media-icon bg-danger text-white mr-4">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold mb-1">Type contrat {{$client->type->name}} </h6>
                                {{-- <span>2004-2008</span>
                                <p>Graduation: Bachelor of Science in Computer Science</p> --}}
                            </div>
                        </div>
                    </div>
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
        {{-- <h3 class="card-title">Retrait du compte {{substr($investi->customer, 0, 8)}} de {{substr($investi->customer, 12)}} </h3> --}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
           
                <form class="form-horizontal" action="{{ route('confirmes.storeded') }}" method="POST" enctype="multipart/form-data">                                    
                    
                    {{-- @csrf --}}
                    <div class="jumbotron">
                        <h1 class="display-3">Salut!</h1>
                
                                <p class="lead">Vous etes sur le point de confirmer que le client 
                                    <strong>{{$client->name}} {{$client->prename}}</strong>
                                    a tous ses documents conformes aux règles
                                     pour avoir un compte dans les livrets d'ELITE CREDIT.

                             Cette action est irreversible.</p>
                        <hr class="my-4">
                        <p>Etes vous sur?.</p>
          
                    </div>
                        @include('includes.formconfirme')  
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
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
<!--INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection