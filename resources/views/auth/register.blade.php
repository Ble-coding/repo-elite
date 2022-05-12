@extends('layouts.master2')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<div class="text-white">
                                    
									<div class="card-body">
                                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                           @csrf 
                                            <h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>Inscription</strong></h2>
                                            <h4 class="text-white-80 mb-7 text-center">Bienvenue a GESTELITE !</h4>
                                            <div class="row">
                                                <div class="col-md-6 d-block mx-auto">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="{{ __('Nom') }}" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user-plus"></i>
                                                            </div>
                                                        </div>
                                                        <input id="prename" type="text" class="form-control @error('prename') is-invalid @enderror" name="prename" value="{{ old('prename') }}"  autocomplete="prename" placeholder="{{ __('Prénom') }}" autofocus>
                                                        @error('prename')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                 

                                                    {{-- <div class="form-group mb-4">
                                                        <label for="datenaiss" class="form-label">Date de naissance</label>                      
                                                        <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" placeholder="{{ __('Date de naissance') }}" autocomplete="current-datenaiss">
                                                            @error('datenaiss')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror   
                                                    </div> --}}
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-lock"></i>
                                                            </div>
                                                        </div>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Mot de passe') }}" autocomplete="current-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror   
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-block mx-auto">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-phone"></i>
                                                            </div>
                                                        </div>
                                                        <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}"  autocomplete="tel" placeholder="{{ __('Numéro de téléphone') }}" autofocus>
                                                        @error('tel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    {{-- <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-type"></i>
                                                            </div>
                                                        </div>
                                                        <input id="typepiece" type="text" class="form-control @error('typepiece') is-invalid @enderror" name="typepiece" value="{{ old('typepiece') }}"  autocomplete="typepiece" placeholder="{{ __('Type de pièce') }}" autofocus>
                                                        @error('typepiece')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-check-square"></i>
                                                            </div>
                                                        </div>
                                                        <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
                                                        @error('numpiece')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="dateexp" class="form-label">Date d'expiration</label>
                                                        <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') }}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
                                                            @error('dateexp')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div> --}}
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-mail"></i>
                                                            </div>
                                                        </div>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="{{ __('Email') }}">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-lock"></i>
                                                            </div>
                                                        </div>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="{{ __('Confirmation mot de passe') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 d-block mx-auto">
                                                <div class="row">
                                                    <div class="col-12"> 
                                                        {{--  --}}
                                                        <button  disabled style="background-color:#ff0017; color:#fff" class="btn btn-block px-4"> {{ __('S\'inscrire') }}</button>
                                                    </div>
                                                    <div class="col-12 mt-1 text-center">
                                                        <span class="text-bold text-center">INSCRIPTION INDISPONIBLE POUR LE MOMENT</span>
                                                  </div>
                                                    {{-- <div class="col-6 text-center">
                                                          <span class="text-center">INSCRIPTION INDISPONIBLE POUR LE MOMENT</span>
                                                        <input id="remember_me" type="checkbox" class="btn btn-link box-shadow-0 px-0 text-white-80" name="remember">
                                                             <span class="btn btn-link box-shadow-0 px-0 text-white-80">{{ __('Remember me') }}</span>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        @if (Route::has('password.request'))
                                                             <a href="{{ route('password.request') }}" class="btn btn-link box-shadow-0 px-0 text-white-80">{{ __('Mot de passe oublié ?') }}</a>
                                                        @endif
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="text-center pt-4">
                                                <div class="font-weight-normal fs-16">Vons avez un compte ?<a class="btn-link font-weight-normal text-white-80" href="{{ route('login') }}"> Connectez-vous</a></div>
                                            </div>
                                        </form>
									</div>
									<div class="custom-btns text-center">
										<button  class="btn btn-icon" type="button"><span class="btn-inner-icon"><a style="color:#fff" href="https://www.facebook.com/elitealliancesas"><i class="fa fa-facebook-f"></i></a></span></button>
										<button class="btn btn-icon" type="button"><span class="btn-inner-icon"><a style="color:#fff" href="https://www.linkedin.com/company/elitealliancesas"><i class="fa fa-linkedin"></i></a></span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-none d-md-flex align-items-center">
							<img src="{{URL::asset('assets/images/png/login.png')}}" alt="img">
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection
@section('js')
@endsection