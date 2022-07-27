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
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">PARTICULIER</a></li>
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
										<form class="form-horizontal" id="form" action="{{ route('bancaires.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
											<div class="list-group">
												<div class="list-group-item" data-acc-step>
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">RENSEIGNEMENTS GENERAUX</span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    {{-- <div class="card-header"> --}}
                                                                        <h3 class="card-title"></h3>
                                                                    {{-- </div> --}}
                                                                {{-- <div class="card-body"> --}}
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formdemande')
                                                                                {{-- <div class="text-wrap">
                                                                                    <div class="btn-list text-right">
                                                                                        <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button>
                                                                                    </div>
                                                                                </div>                              --}}
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                {{-- </div> --}}
                                                            </div>
                                                            <div class="col-md-1">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">Conjoint </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formdemande1')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        {{-- <div class="btn-list text-right">
                                                                            <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button> --}}
                                                                            {{-- <input type="button" style="background:#FF0017; color:#fff" class="btn btn" value="Valider" onclick="PrintMeSubmitMe(this); return false;"> --}}
                                                                        {{-- </div> --}}
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
                                                                            @include('includes.formdemande2')
                                                                        </div>
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <div class="btn-list text-right">
                                                                            {{-- <button type="submit" style="background:#FF0017; color:#fff" class="btn btn">Valider</button> --}}
                                                                            {{-- <input type="button" style="background:#FF0017; color:#fff" class="btn btn" value="Valider" onclick="PrintMeSubmitMe(this); return false;"> --}}
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
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">SITUATION PROFESSIONNELLE</span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                        <h3 class="mt-3 card-title">Emprunteur</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formsit')
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
                                                                        <h3 class="card-title">Conjoint </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit1')
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
                                                                        <h3 class="card-title">REVENUS </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit2')
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
                                                                        <h3 class="card-title">DEPENSES </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit3')
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
													<h5 class="mb-0 d-flex" data-acc-title><span class="form-wizard-title">SECTION RÉSERVÉE À ELITE CREDIT
                                                    </span></h5>
													<div data-acc-content>
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-10">
                                                                        {{-- <h3 class="mt-3 card-title">Emprunteur</h3> --}}
                                                                        <h3 class="mt-3 card-title"></h3>
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                                    @include('includes.formsit4')
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
                                                                        <h3 class="card-title">Situation bancaire </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit5')
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
                                                                        <h3 class="card-title">PATRIMOINE </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit6')
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
                                                                        <h3 class="card-title">VALEURS MOBILIERES </h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit7')
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
                                                                        <h3 class="card-title">AUTRE RELATION DE
                                                                            CREDIT
                                                                            NOM</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit8')
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
                                                                        <h3 class="card-title">REFERENCES PERSONNELLES</h3>
                                                                    </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">

                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            @include('includes.formsit9')
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

            //        function displayForm(c){
            //         if(c.value == "Existant"){

            //  document.getElementById("ccform").style.visibility='visible';
            //  document.getElementById("cform").style.visibility='hidden';

            //         } else if(c.value == "Nouveau"){
            //             document.getElementById("ccform").style.visibility='hidden';
            //             document.getElementById("cform").style.visibility='visible';
            //         }
            //         else{

            //         }
            //      }

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
                    getValue = document.getElementById("envoie_id").value;
                    if(getValue == 1){
                        document.getElementById("img1").style.display = "block";
                        document.getElementById("img2").style.display = "none";
                        document.getElementById("img3").style.display = "none";
                    }
                    if(getValue == 2){
                        document.getElementById("img1").style.display = "none";
                        document.getElementById("img2").style.display = "block";
                        document.getElementById("img3").style.display = "none";
                    }
                    if(getValue == 3){
                        document.getElementById("img1").style.display = "none";
                        document.getElementById("img2").style.display = "none";
                        document.getElementById("img3").style.display = "block";
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
