@csrf
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            @if(Route::is('admin.forfaits.create') )
            <i class="fe fe-user"></i> 
            @elseif(Route::is('admin.forfaits.edit') )
              Libellé
         @endif
        </div>
    </div>           
 
    <input  value="{{ old('libelle_Forfait') ?? $forfait->libelle_Forfait }}" class="form-control @error('libelle_Forfait') is-invalid @enderror" type="text" placeholder="{{ __('Libellé') }}" id="libelle_Forfait" name="libelle_Forfait">
                 @error('libelle_Forfait')
                          <div class="invalid-feedback">
                                            {{ $errors->first('libelle_Forfait') }}
                         </div>
                 @enderror
</div>
<div class="input-group mb-4">
    {{-- <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-user-plus"></i>
        </div>
    </div> --}}
    {{-- <input  value="{{ old('duree') ?? $forfait->duree }}" class="form-control @error('duree') is-invalid @enderror" type="month" placeholder="{{ __('Durée') }}" id="duree" name="duree"> --}}
    <input  value="{{ old('duree') ?? $forfait->duree }}" min="1"  class="form-control @error('duree') is-invalid @enderror" type="number" placeholder="{{ __('Durée') }}" id="duree" name="duree">
                 @error('duree')
                          <div class="invalid-feedback">
                                            {{ $errors->first('duree') }}
                         </div>
                 @enderror
                 <div class="input-group-prepend">
                    <div class="input-group-text">
                        Mois
                    </div>
                </div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            @if(Route::is('admin.forfaits.create') )
            <i class="fe fe-trending-up"></i> 
            @elseif(Route::is('admin.forfaits.edit') )
            <i class="fe fe-trending-up mr-1"></i> Trimestriel
        @endif
        </div>
    </div>
    <input  value="{{ old('pourcentageM') ?? $forfait->pourcentageM }}" min="1" class="form-control @error('pourcentageM') is-invalid @enderror" type="number" placeholder="{{ __('Pourcentage Trimestriel') }}" id="pourcentageM" name="pourcentageM">
    @error('pourcentageM')
             <div class="invalid-feedback">
                               {{ $errors->first('pourcentageM') }}
            </div>
    @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            @if(Route::is('admin.forfaits.create') )
            <i class="fe fe-trending-up"></i> 
            @elseif(Route::is('admin.forfaits.edit') )
            <i class="fe fe-trending-up mr-1"></i> Jalonnement
        @endif
           
        </div>
    </div>
    <input  value="{{ old('pourcentageJ') ?? $forfait->pourcentageJ }}" min="1" class="form-control @error('pourcentageJ') is-invalid @enderror" type="number" placeholder="{{ __('Pourcentage Jalonnement') }}" id="pourcentageJ" name="pourcentageJ">
    @error('pourcentageJ')
             <div class="invalid-feedback">
                               {{ $errors->first('pourcentageJ') }}
            </div>
    @enderror
</div>


<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            @if(Route::is('admin.forfaits.create') )
            <i class="fe fe-database"></i> 
            @elseif(Route::is('admin.forfaits.edit') )
            <i class="fe fe-database mr-1"></i> Min
        @endif
        </div>
    </div>
    <input id="montantMin" type="text"  class="form-control @error('montantMin') is-invalid @enderror" name="montantMin" placeholder="{{ __('Montant minimal') }}" value="{{ old('montantMin') ?? $forfait->montantMin  }}" autocomplete="montantMin" autofocus>
            @error('montantMin')
             <div class="invalid-feedback">
                               {{ $errors->first('montantMin') }}
            </div>
    @enderror
</div>   
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            @if(Route::is('admin.forfaits.create') )
            <i class="fe fe-database"></i>
            @elseif(Route::is('admin.forfaits.edit') )
                <i class="fe fe-database mr-1"></i>Max
            @endif
        </div>
    </div>
    <input id="montantMax" type="text"  class="form-control @error('montantMax') is-invalid @enderror" name="montantMax" value="{{ old('montantMax') ?? $forfait->montantMax  }}" placeholder="{{ __('Montant maximal') }}" autocomplete="montantMax" autofocus>
            @error('montantMax')
             <div class="invalid-feedback">
                               {{ $errors->first('montantMax') }}
            </div>
    @enderror
</div>  
</div>
{{-- <div class="form-row">
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
    </div> --}}
    {{-- <div class="form-group col-md-6 mb-4"> 
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
    </div> --}}
{{-- </div> --}}
</div>

{{-- 
<div class="input-group mb-4">
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
            </div>

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
                        </div> --}}

{{--                        
                                    @if(Route::is('admin.users.create') )
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fe fe-lock"></i>
                                            </div>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirmation mot de passe') }}">
                                                </div>
                                @endif --}}




{{-- <div class="input-group mb-4">
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
</div> --}}
{{-- <div class="form-group m-0">
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
</div> --}}

{{-- <div class="form-footer mt-2">
    <a href="#" class="btn btn-primary">Confirm  Details</a>
</div> --}}

						
							