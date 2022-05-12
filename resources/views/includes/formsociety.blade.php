{{-- @csrf --}}
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Formes juridiques
            </div>   
            <select name="forme_id" id="forme_id" class="@error('forme_id') is-invalid @enderror form-control custom-select select2">
                @foreach($formes as $forme)	
               <option value="{{$forme->id}}" {{ $society->forme_id == $forme->id ? 'selected' : '' }}>{{ $forme->name }}</option>
                    @endforeach
            </select> 
            @error('forme_id')
                     <div class="invalid-feedback">
                                       {{ $errors->first('forme_id') }}
                    </div>
            @enderror 
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name') ?? $society->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom societé') }}" id="name" name="name">
                         @error('name')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                 </div>
                         @enderror
        </div>
    </div>
</div>  
<div class="form-row">
	<div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-text">
                    <i class="fe fe-map"></i>
            </div>
                <input  value="{{ old('siege') ?? $society->siege }}" class="form-control @error('siege') is-invalid @enderror" type="text" placeholder="{{ __('Siège de la societé') }}" id="siege" name="siege">
                             @error('siege')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('siege') }}
                                     </div>
                             @enderror
        </div>											
	</div>
    <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
                <input  value="{{ old('capital') ?? $society->capital }}" class="form-control @error('capital') is-invalid @enderror" type="text" placeholder="{{ __('Capital') }}" id="capital" name="capital">
                             @error('capital')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('capital') }}
                                     </div>
                             @enderror
            </div>										
	</div>
</div>
{{-- <div class="form-row">
		<div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-database"></i>
                    </div>
                </div>
                <input  value="{{ old('ri') ?? $society->ri }}" class="form-control @error('ri') is-invalid @enderror" type="text" placeholder="{{ __('Regime d\'imposition') }}" id="ri" name="ri">
                             @error('ri')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('ri') }}
                                     </div>
                             @enderror
            </div>											
		</div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-check-square"></i>
                    </div>
                </div>
                <input  value="{{ old('nc') ?? $society->nc }}" class="form-control @error('nc') is-invalid @enderror" type="text" placeholder="{{ __('Numéro du contribuable') }}" id="nc" name="nc">
                             @error('nc')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('nc') }}
                                     </div>
                             @enderror
            </div>										
		</div>
</div> --}}
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Numéro RCCM
            </div>
            <input id="nr" type="text" class="form-control @error('nr') is-invalid @enderror" name="nr" value="{{ old('nr') ?? $society->nr  }}" placeholder="{{ __(' Numéro RCCM') }}" autocomplete="nr" autofocus>
            @error('nr')
                <div class="invalid-feedback">
                                {{ $errors->first('nr') }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input id="tel_ent" type="tel" class="form-control @error('tel_ent') is-invalid @enderror" name="tel_ent" value="{{ old('tel_ent') ?? $society->tel_ent  }}"  autocomplete="tel_ent" placeholder="{{ __('Tel entreprise') }}" autofocus>
            @error('tel_ent')
                <div class="invalid-feedback">
                                {{ $errors->first('tel_ent') }}
                </div>
            @enderror
        </div>
    </div>
</div>
<div class="form-row">
	<div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('name_gerant') ?? $society->name_gerant }}" class="form-control @error('name_gerant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du gérant') }}" id="name_gerant" name="name_gerant">
                             @error('name_gerant')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('name_gerant') }}
                                     </div>
                             @enderror
        </div>											
	</div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user-plus"></i>
                    </div>
                </div>
                <input  value="{{ old('prename_gerant') ?? $society->prename_gerant }}" class="form-control @error('prename_gerant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du gérant') }}" id="prename_gerant" name="prename_gerant">
                             @error('prename_gerant')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('prename_gerant') }}
                                     </div>
                             @enderror
        </div>										
	</div> 
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'anniversaire
        </div>
    </div>
    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" value="{{ old('datenaiss') ?? $society->datenaiss  }}" autocomplete="datenaiss" autofocus>
            @error('datenaiss')
                <div class="invalid-feedback">
                                {{ $errors->first('datenaiss') }}
                </div>
            @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-map"></i>
        </div>
    </div>
    <input value="{{ old('lieu') ?? $society->lieu }}" class="form-control @error('lieu') is-invalid @enderror" type="text" placeholder="{{ __('Lieu de naissance') }}" id="lieu" name="lieu">
                 @error('lieu')
                          <div class="invalid-feedback">
                                            {{ $errors->first('lieu') }}
                         </div>
                 @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-sunset"></i>
                </div>
            </div>
            <input  value="{{ old('nationnalite') ?? $society->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationnalité') }}" id="nationnalite" name="nationnalite">
                         @error('nationnalite')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('nationnalite') }}
                                 </div>
                         @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-map"></i>
                </div>
            </div>
            <input  value="{{ old('lieu_habitation') ?? $society->lieu_habitation }}" class="form-control @error('lieu_habitation') is-invalid @enderror" type="text" placeholder="{{ __('Lieu d`\'habitation') }}" id="lieu_habitation" name="lieu_habitation">
                         @error('lieu_habitation')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('lieu_habitation') }}
                                 </div>
                         @enderror
        </div>										
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input  value="{{ old('tel') ?? $society->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
            @error('tel')
                     <div class="invalid-feedback">
                                       {{ $errors->first('tel') }}
                    </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-mail"></i>
                </div>
            </div>
            <input  value="{{ old('email') ?? $society->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
            @error('email')
                     <div class="invalid-feedback">
                                       {{ $errors->first('email') }}
                    </div>
            @enderror
        </div>										
    </div>
</div>
<div class="form-row mb-2">
    <div class="form-group col-md-6 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Sexe</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="sexe" value="M" 
                    @if (old('sexe') ==  'M'
                    || $society->sexe == 'M') checked @endif checked>
                    <span class="custom-control-label">M</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="sexe" 
                    @if (old('sexe') ==  'F'
                    || $society->sexe == 'F') checked @endif value="F">
                    <span class="custom-control-label">F</span>
                </label>             
            </div>
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Situation</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input  type="radio" class="custom-control-input" onclick="displayForm(this)" name="situation" 
                    value="Celibataire" @if (old('situation') ==  'Celibataire'
                    || $society->situation == 'Celibataire') checked @endif checked>
                    <span class="custom-control-label">Célibataire</span>
                </label> 
                <label class="custom-control custom-radio">
                    <input id="marie" type="radio" class="custom-control-input"  onclick="displayForm(this)" name="situation" 
                    value="Marie" @if (old('situation') ==  'Marie'
                    || $society->situation == 'Marie') checked @endif>
                    <span class="custom-control-label">Marié(e)</span>
                </label>              
            </div>
        </div>										
    </div>
</div>

{{-- 
@if(Route::is('societys.create') )

<div style="visibility:hidden ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $society->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
                            @error('successeur_name')
                                    <div class="invalid-feedback">
                                                        {{ $errors->first('successeur_name') }}
                                    </div>
                            @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user-plus"></i>
            </div>
        </div>
        <input   value="{{ old('successeur_prename') ?? $society->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
                    @error('successeur_prename')
                            <div class="invalid-feedback">
                                                {{ $errors->first('successeur_prename') }}
                            </div>
                    @enderror
                            </div>									
        </div>
    </div>
    
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-phone"></i>
            </div>
        </div>
        <input  value="{{ old('successeur_tel') ?? $society->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>
@elseif (Route::is('societys.edit') )

<div style="visibility:visible ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $society->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
                            @error('successeur_name')
                                    <div class="invalid-feedback">
                                                        {{ $errors->first('successeur_name') }}
                                    </div>
                            @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user-plus"></i>
            </div>
        </div>
        <input   value="{{ old('successeur_prename') ?? $society->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
                    @error('successeur_prename')
                            <div class="invalid-feedback">
                                                {{ $errors->first('successeur_prename') }}
                            </div>
                    @enderror
                            </div>									
        </div>
    </div>
    
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-phone"></i>
            </div>
        </div>
        <input  value="{{ old('successeur_tel') ?? $society->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>
@endif --}}


<div style="visibility:hidden ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $society->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
                            @error('successeur_name')
                                    <div class="invalid-feedback">
                                                        {{ $errors->first('successeur_name') }}
                                    </div>
                            @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user-plus"></i>
            </div>
        </div>
        <input   value="{{ old('successeur_prename') ?? $society->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
                    @error('successeur_prename')
                            <div class="invalid-feedback">
                                                {{ $errors->first('successeur_prename') }}
                            </div>
                    @enderror
                            </div>									
        </div>
    </div>
    
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-phone"></i>
            </div>
        </div>
        <input  value="{{ old('successeur_tel') ?? $society->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>


<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input value="{{ old('personne_name') ?? $society->personne_name }}" class="form-control @error('personne_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom de la personne à contacter') }}" id="personne_name" name="personne_name">
                         @error('personne_name')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('personne_name') }}
                                 </div>
                         @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user-plus"></i>
                </div>
            </div>
            <input value="{{ old('personne_prename') ?? $society->personne_prename }}" class="form-control @error('personne_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom de la personne à contacter') }}" id="personne_prename" name="personne_prename">
                         @error('personne_prename')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('personne_prename') }}
                                 </div>
                         @enderror
        </div>
    </div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-phone"></i>
        </div>
    </div>
    <input value="{{ old('personne_tel') ?? $society->personne_tel }}" class="form-control @error('personne_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone à contacter en cas d\'urgence') }}" id="personne_tel" name="personne_tel">
        @error('personne_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('personne_tel') }}
                </div>
        @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Type de pièce
            </div>   
            <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                @foreach($pieces as $piece)	
                <option value="{{ $piece->id }}" {{  $society->piece_id == $piece->id ? 'selected' :  ''}}>
                    {{ $piece->nom }}</option>
                @endforeach
            </select> 
            @error('piece_id')
                     <div class="invalid-feedback">
                                       {{ $errors->first('piece_id') }}
                    </div>
            @enderror 
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $society->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
            @error('numpiece')
                <div class="invalid-feedback">
                                {{ $errors->first('numpiece') }}
                </div>
            @enderror
        </div>
    </div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $society->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
        <div class="invalid-feedback">
                        {{ $errors->first('dateexp') }}
    </div>
    @enderror
</div>
@if(Route::is('societies.create') )
<div class="input-group mb-4">
    <div class="form-group col-md-6 mb-4"> 
        <div class="form-label">Selectionnez la photo d'identité</div>
            <div class="custom-file">
              <input class="@error('image') is-invalid @enderror" id="image" name="image[]" 
                    multiple  value="{{ old('image') ?? $society->image }}"
                    accept="image/png, image/jpeg" type="file">
                    @error('image')
                        <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                        </div>
                    @enderror
            </div>      
    </div>
</div>
@endif

{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Selectionnez la photo d'identité
        </div>
    </div>
    <input class="@error('image_identite') is-invalid @enderror" id="image_identite" name="image_identite[]" 
         multiple value="{{ old('image') ?? $society->image_identite }}"
            accept="image/png, image/jpeg" type="file">
                @error('image_identite')
                    <div class="invalid-feedback">
                     {{ $errors->first('image_identite') }}
                    </div>
                @enderror
 </div>
</div> --}}








 


{{-- </div> 

</div> --}}






   