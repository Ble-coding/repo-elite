@extends('layouts.master')
@section('css')
		<!-- INTERNAl Forn-wizard css-->
		<link href="{{URL::asset('assets/plugins/forn-wizard/css/forn-wizard.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/formwizard/smart_wizard.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/formwizard/smart_wizard_theme_dots.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					<!--Page header-->
                    <div id="hidden" class="page-header">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0">FORMULAIRE </h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>DEMANDE DE CREDIT </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">ENTREPRISE</a></li>
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



						<!--row open-->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										{{-- <h3 class="card-title">Accordion-Wizard-Form</h3> --}}
									</div>
									<div class="">
										<form class="form-horizontal" id="form" action="{{ route('bancarisations.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
											<div class="list-group">
												<div class="list-group-item" data-acc-step>
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">RENSEIGNEMENTS GENERAUX</span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                        <h3 class="card-title"></h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div> 
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formask')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                                    <div class="row">
                                                                                <div class="col-md-1">
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                        <div class="card-header">
                                                                                            <h3 class="card-title">BESOIN DE CREDIT </h3>
                                                                                        </div>
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                            <div class="col-md-10">
                                                                                                @include('includes.formask1')
                                                                                            </div>
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-wrap">
                                                                                            <div class="btn-list text-right">
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
                                                                                <div class="col-md-10">
                                                                                        <div class="card-header">
                                                                                            <h3 class="card-title">BANCARISATION </h3>
                                                                                        </div>
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                            <div class="col-md-10">
                                                                                                @include('includes.formask2')
                                                                                            </div>
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-wrap">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                </div>
                                                                    </div>



                                                                    <div class="row">
                                                                                <div class="col-md-1">
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                        <div class="card-header">
                                                                                            <h3 class="card-title">REFERENCES COMMERCIALES </h3>
                                                                                        </div>
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                            <div class="col-md-10">
                                                                                                @include('includes.formask3')
                                                                                            </div>
                                                                                            <div class="col-md-1">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-wrap">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                </div>
                                                                    </div>

                                                     

													</div>
												</div>
												<div class="list-group-item" data-acc-step>
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">ETATS FINANCIERS PERSONNELS DU RESPONSABLE</span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                        <h3 class="mt-3 card-title"></h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formask4')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">PROFIL FINANCIER ACTIF</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formask5')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">PROFIL FINANCIER PASSIF </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formask6')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                       

													</div>
												</div>
												<div class="list-group-item" data-acc-step>
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">REVENUS ET DEPENSES ANNUELS ACTUELS
                                                    </span></h5>
													<div data-acc-content>
                                                     <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">REVENUS ANNUELS ACTUELS</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formask7')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
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
                                                            <div class="col-md-10">
                                                                        <h3 class="mt-3 card-title">DEPENSES ANNUELLES ACTUELS</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formask8')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">DETAIL</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formask9')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">TITRES NEGOCIABLES, ACTIONS ET OBLIGATIONS </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formnegoce')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
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
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">ANNEXE B: ASSURANCE-VIE PERSONNELLE ET COLLECTIVE</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                               @include('includes.formnegoce1')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>
													</div>
												</div>

                                                <div class="list-group-item" data-acc-step>
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">
                                                    GARANTIES</span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title"></h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formnegoce3')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
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
                                                            <div class="col-md-10">
                                                                        <h3 class="mt-3 card-title">ASSURANCE (veuillez préciser le type et le montant de vos protections actuelles)</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                      @include('includes.formnegoce4')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">REFERENCES PERSONNELLES</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formnegoce5')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        {{-- <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">TITRES NEGOCIABLES, ACTIONS ET OBLIGATIONS </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formnegoce')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
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
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">ANNEXE B: ASSURANCE-VIE PERSONNELLE ET COLLECTIVE</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                               @include('includes.formnegoce1')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div> --}}
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->



					</div>
				</div><!-- end app-content-->
            </div>
            @endsection
            @section('js')
            <!--INTERNAL Select2 js -->
            <script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

            <!-- INTERNAl Forn-wizard js-->
            <script src="{{URL::asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/formwizard/fromwizard.js')}}"></script>

            <!-- INTERNAl Accordion-Wizard-Form js-->
            <script src="{{URL::asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
            <script src="{{URL::asset('assets/js/form-wizard2.js')}}"></script>

                <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
                <script src="{{asset('assets/js/select2.js')}}"></script>
                <script  src="{{asset('assets/js/js/jquery.repeater.min.js')}}"  ></script>
                <script  src="{{asset('assets/js/js/repeat-init.js')}}"  ></script>
                <script  src="{{asset('assets/js/js/dff.js')}}"  ></script>
                <script type="text/javascript">

   function displayForm(c){ 
            if(c.value == "Oui"){ 
                document.getElementById("ccform").style.visibility='visible'; 
            } else if(c.value == "Non"){ 
                document.getElementById("ccform").style.visibility='hidden'; 
            } 
            else{} 

            if(c.value == "Yes"){ 
                document.getElementById("ccform").style.visibility='visible'; 
            } else if(c.value == "No"){ 
                document.getElementById("ccform").style.visibility='hidden'; 
            } 

            else{} 
        }     


         function displayFormis(c){ 
            if(c.value == "Oui"){ 
                document.getElementById("cccform").style.visibility='visible'; 
            } else if(c.value == "Non"){ 
                document.getElementById("cccform").style.visibility='hidden'; 
            } 
            else{} 

        }     

       
            function mySelectfunction1(){
                    getValue = document.getElementById("renseigne_id").value;
                    if(getValue == 1){
                        document.getElementById("help1").style.display = "block";
                        document.getElementById("help2").style.display = "none";
                    }
                    if(getValue == 2){
                        document.getElementById("help1").style.display = "none";
                        document.getElementById("help2").style.display = "block";
                    }

                }

                function mySelectfunction(){
                    getValue = document.getElementById("service_id").value;
                    if(getValue == 1){
                        document.getElementById("img1").style.display = "block";
                        document.getElementById("img2").style.display = "none";
                    }
                    if(getValue == 2){
                        document.getElementById("img1").style.display = "none";
                        document.getElementById("img2").style.display = "block";
                    }
     
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
