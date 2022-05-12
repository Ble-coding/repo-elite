@csrf
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-user"></i>
        </div>
    </div>
    <input  value="{{ old('name') ?? $user->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="name" name="name">
                 @error('name')
                          <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                         </div>
                 @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-user-plus"></i>
        </div>
    </div>
    <input  value="{{ old('prename') ?? $user->name }}" class="form-control @error('prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prename" name="prename">
                 @error('prename')
                          <div class="invalid-feedback">
                                            {{ $errors->first('prename') }}
                         </div>
                 @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-mail"></i>
        </div>
    </div>
    <input  value="{{ old('email') ?? $user->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
    @error('email')
             <div class="invalid-feedback">
                               {{ $errors->first('email') }}
            </div>
    @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-phone"></i>
        </div>
    </div>
    <input  value="{{ old('tel') ?? $user->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
    @error('tel')
             <div class="invalid-feedback">
                               {{ $errors->first('tel') }}
            </div>
    @enderror
</div>


{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'anniversaire
        </div>
    </div>
    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" value="{{ old('datenaiss') ?? $user->datenaiss  }}" autocomplete="datenaiss" autofocus>
            @error('datenaiss')
             <div class="invalid-feedback">
                               {{ $errors->first('datenaiss') }}
            </div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-type"></i>
                </div>   
                <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                    @foreach($pieces as $piece)														
                    <option value="{{$piece->id}}" {{ $piece->id ? 'selected' : '' }}>{{ $piece->nom }}</option>
                   @endforeach
                </select> 
                @error('piece_id')
                         <div class="invalid-feedback">
                                           {{ $errors->first('piece_id') }}
                        </div>
                @enderror 
             </div>
    </div>
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-check-square"></i>
            </div>    
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $user->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
            @error('numpiece')
            <div class="invalid-feedback">
                              {{ $errors->first('numpiece') }}
           </div>
   @enderror
    </div>
</div>
</div> --}}


{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $user->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
    <div class="invalid-feedback">
                      {{ $errors->first('dateexp') }}
   </div>
@enderror
            </div> --}}

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-lock"></i>
                    </div>
                </div>
                <input  value="{{ old('password') ?? $user->password }}" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Mot de passe') }}" id="password" name="password">
                @error('password')
                         <div class="invalid-feedback">
                                           {{ $errors->first('password') }}
                        </div>
                @enderror
                        </div>

                       
                                    @if(Route::is('admin.users.create') )
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fe fe-lock"></i>
                                            </div>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirmation mot de passe') }}">
                                                </div>
                                @endif





<div class="form-group m-0">
    <div class="form-label">Roles</div>
    <div class="custom-controls-stacked">
        @foreach($roles as $role)
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input"
            type="checkbox" name="roles[]" value="{{$role->id}}" id="{{$role->id}}"
            @if ($user->roles->pluck('id')->contains($role->id))
                    checked                
            @endif>
            <label for="{{$role->id}}" class="custom-control-label">{{$role->name}}</label>
        </label>
        @error('roles"')
        <div class="invalid-feedback">
            {{ $errors->first('roles"') }}
        </div>  
        @enderror
        @endforeach	
    </div>
</div>

{{-- <div class="form-footer mt-2">
    <a href="#" class="btn btn-primary">Confirm  Details</a>
</div> --}}

						
							