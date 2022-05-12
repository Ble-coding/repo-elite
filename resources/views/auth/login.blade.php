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
                                        <form method="POST" action="{{ route('login') }}">
                                           @csrf 
                                            <h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>Connexion</strong></h2>
                                            <h4 class="text-white-80 mb-7 text-center">Bienvenue a GESTELITE !</h4>
                                            <div class="row">
                                                <div class="col-9 d-block mx-auto">
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
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Mot de passe') }}" autocomplete="current-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror   
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button style="background-color:#ff0017; color:#fff" class="btn btn-block px-4"> {{ __('Se connecter') }}</button>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <input id="remember_me" type="checkbox" class="btn btn-link box-shadow-0 px-0 text-white-80" name="remember">
                                                                 <span class="btn btn-link box-shadow-0 px-0 text-white-80">{{ __('Remember me') }}</span>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            @if (Route::has('password.request'))
                                                                 <a href="{{ route('password.request') }}" class="btn btn-link box-shadow-0 px-0 text-white-80">{{ __('Mot de passe oublié ?') }}</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center pt-4">
                                                <div class="font-weight-normal fs-16">Vons n'avez pas de compte ?<a class="btn-link font-weight-normal text-white-80" href="{{ route('register') }}"> Ouvrir un compte</a></div>
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