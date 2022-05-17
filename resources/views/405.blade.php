@extends('layouts.master2')
@section('css')
@endsection
@section('content')
<div class="page bg-primary">
			<div class="page-content">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-6">  
							<div class="">
								<div class="text-white">
									{{-- <div class="display-1 mb-5 font-weight-bold error-text"></div> --}}
									<h1 class="h3  mb-3 font-weight-bold">Le compte choisi ne peut en aucun cas envoyer et recevoir
										de l'argent simultanément <h1>
												{{-- <p class="h5 font-weight-normal mb-7 leading-normal">Le montant(<strong style="color:#272D47">{{ $withadrals->montant}} </strong>) entrée de l'entreprise {{ $withadrals->entreprise->name}} est supérieure à celle que nous avons dans la base de données qui est de <strong style="color:#272D47">{{ $withadrals->sold->montant}}</strong>.</p> --}}

									<a   href="{{route('transferts.index')}}" style="background:#FF0017; color:#fff" class="btn btn"><i class="fe fe-arrow-left-circle mr-1"></i>Retour</a>
								</div>
							</div>
						{{-- </div>	<p class="h5 font-weight-normal mb-7 leading-normal">.</p> --}}
		
					</div>
				</div>
			</div>
</div>
@endsection
@section('js')
@endsection