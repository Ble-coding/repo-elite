@csrf
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                {{-- <i class="fe fe-type"></i> --}}
                Secteur d'activité
            </div>   
            {{-- <select name="secteur_id" id="secteur_id" class="@error('secteur_id') is-invalid @enderror form-control custom-select select2">
                @foreach($secteurs as $secteur)		   
                     <option value="{{$secteur->id}}" {{ $secteur->id ? 'selected' : '' }}>{{ $secteur->name }}</option>
               @endforeach
            </select>  --}}
            <input  value="{{ old('secteur') ?? $entreprise->secteur }}" class="form-control @error('secteur') is-invalid @enderror" type="text" placeholder="{{ __('Secteur d\'activité') }}" id="secteur" name="secteur">
            @error('secteur')
                     <div class="invalid-feedback">
                                       {{ $errors->first('secteur') }}
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
            <input  value="{{ old('cam') ?? $entreprise->cam }}" class="form-control @error('cam') is-invalid @enderror" type="text" placeholder="{{ __('Chiffres d\'affaires mensuel') }}" id="cam" name="cam">
                         @error('cam')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('cam') }}
                                 </div>
                         @enderror
        </div>
</div>

</div>


    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-check-square"></i>
            </div>
        </div>  
        <input  value="{{ old('caa') ?? $entreprise->caa }}" class="form-control @error('caa') is-invalid @enderror" type="text" placeholder="{{ __('Chiffres d\'affaires annuel') }}" id="caa" name="caa">
                     @error('caa')
                              <div class="invalid-feedback">
                                                {{ $errors->first('caa') }}
                             </div>
                     @enderror
    </div>
	{{-- <div class="form-row">
		<div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('name_gerant') ?? $entreprise->name_gerant }}" class="form-control @error('name_gerant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du gérant') }}" id="name_gerant" name="name_gerant">
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
                <input  value="{{ old('prename_gerant') ?? $entreprise->prename_gerant }}" class="form-control @error('prename_gerant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du gérant') }}" id="prename_gerant" name="prename_gerant">
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
    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" value="{{ old('datenaiss') ?? $entreprise->datenaiss  }}" autocomplete="datenaiss" autofocus>
            @error('datenaiss')
             <div class="invalid-feedback">
                               {{ $errors->first('datenaiss') }}
            </div>
    @enderror
</div> --}}
{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-map"></i>
        </div>
    </div>
    <input value="{{ old('lieu') ?? $entreprise->lieu }}" class="form-control @error('lieu') is-invalid @enderror" type="text" placeholder="{{ __('Lieu de naissance') }}" id="lieu" name="lieu">
                 @error('lieu')
                          <div class="invalid-feedback">
                                            {{ $errors->first('lieu') }}
                         </div>
                 @enderror
</div> --}}
{{-- <div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-sunset"></i>
                </div>
            </div>
            <input  value="{{ old('nationnalite') ?? $entreprise->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationnalité') }}" id="nationnalite" name="nationnalite">
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
            <input  value="{{ old('lieu_habitation') ?? $entreprise->lieu_habitation }}" class="form-control @error('lieu_habitation') is-invalid @enderror" type="text" placeholder="{{ __('Lieu d`\'habitation') }}" id="lieu_habitation" name="lieu_habitation">
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
            <input  value="{{ old('tel') ?? $entreprise->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
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
            <input  value="{{ old('email') ?? $entreprise->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
            @error('email')
                     <div class="invalid-feedback">
                                       {{ $errors->first('email') }}
                    </div>
            @enderror
        </div>										
    </div>
</div> --}}


{{-- <div class="form-row mb-2">
    <div class="form-group col-md-4 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Avez vous des partenaires à l'étranger?</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="partner" value="Oui" @if (old('partner') ==  'Oui'
                    || $entreprise->partner == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="partner" @if (old('partner') ==  'Non'
                    || $entreprise->partner == 'Non') checked @endif value="Non">
                    <span class="custom-control-label">Non</span>
                </label> 

                @error('partner')
                    <div class="invalid-feedback">
                                    {{ $errors->first('partner') }}
                    </div>
                 @enderror            
            </div>
        </div>										
    </div>
    <div class="form-group col-md-4 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Récevoir des paiements depuis l'etranger?</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="payment" value="Oui" @if (old('payment') ==  'Oui'
                    || $entreprise->payment == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="payment" @if (old('payment') ==  'Non'
                    || $entreprise->payment == 'Non') checked @endif value="Non">
                    <span class="custom-control-label">Non</span>
                </label> 

                  
                @error('payment')
                    <div class="invalid-feedback">
                                    {{ $errors->first('payment') }}
                    </div>
                @enderror          
            </div>
        </div>										
    </div>
    <div class="form-group col-md-4 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Demander du crédit avec son compte</div>
            <div class="custom-controls-stacked">  
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="credit" value="Oui" @if (old('credit') ==  'Oui'
                    || $entreprise->credit == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="credit" @if (old('credit') ==  'Non'
                    || $entreprise->credit == 'Non') checked @endif value="Non">
                    <span class="custom-control-label">Non</span>
                </label> 
                @error('credit')
                    <div class="invalid-feedback">
                                    {{ $errors->first('credit') }}
                    </div>
               @enderror            
            </div>
        </div>										
    </div>
</div> --}}



{{-- @if(Route::is('entreprises.create') )

<div style="visibility:hidden ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $entreprise->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
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
        <input   value="{{ old('successeur_prename') ?? $entreprise->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
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
        <input  value="{{ old('successeur_tel') ?? $entreprise->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>
@elseif (Route::is('entreprises.edit') )

<div style="visibility:visible ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $entreprise->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
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
        <input   value="{{ old('successeur_prename') ?? $entreprise->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
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
        <input  value="{{ old('successeur_tel') ?? $entreprise->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>
@endif --}}


{{-- <div style="visibility:hidden ; position:relative" id="cform">
    <div class="input-group mb-4">
        <div class="input-group-prepend  mb-2">
            <div class="input-group-text">
                <label class="col-md-3 form-label">Ennumérez les partenaires</label>
            </div>
        </div>
            <div class="col-md-9">
                <textarea class="form-control @error('name_partner') is-invalid @enderror" id="name_partner" name="name_partner" placeholder="Entrez....." rows="3">{{ old('name_partner') ?? $entreprise->name_partner }}</textarea>
                @error('name_partner')
                 <div class="invalid-feedback">
                 {{ $errors->first('name_partner') }}
                 </div>
                  @enderror
            </div>
    </div>
</div>  --}}




{{-- @if(Route::is('entreprises.create') )

<div style="visibility:hidden ; position:relative" id="cform">
    <div class="input-group mb-4">
        <div class="input-group-prepend  mb-2">
            <div class="input-group-text">
                <label class="col-md-3 form-label">Ennumérez les partenaires</label>
            </div>
        </div>
            <div class="col-md-9">
                <textarea class="form-control @error('name_partner') is-invalid @enderror" id="name_partner" name="name_partner" placeholder="Entrez....." rows="3">{{ old('name_partner') ?? $entreprise->name_partner }}</textarea>
                @error('name_partner')
                 <div class="invalid-feedback">
                 {{ $errors->first('name_partner') }}
                 </div>
                  @enderror
            </div>
    </div>
</div> 

@elseif (Route::is('entreprises.edit') )

<div style="visibility:visible ; position:relative" id="cform">
    <div class="input-group mb-4">
        <div class="input-group-prepend  mb-2">
            <div class="input-group-text">
                <label class="col-md-3 form-label">Ennumérez les partenaires</label>
            </div>
        </div>
            <div class="col-md-9">
                <textarea class="form-control @error('name_partner') is-invalid @enderror" id="name_partner" name="name_partner" placeholder="Entrez....." rows="3">{{ old('name_partner') ?? $entreprise->name_partner }}</textarea>
                @error('name_partner')
                 <div class="invalid-feedback">
                 {{ $errors->first('name_partner') }}
                 </div>
                  @enderror
            </div>
    </div>
</div> 

@endif --}}

{{-- 
--}}


{{-- <div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input value="{{ old('personne_name') ?? $entreprise->personne_name }}" class="form-control @error('personne_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom de la personne à contacter') }}" id="personne_name" name="personne_name">
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
            <input value="{{ old('personne_prename') ?? $entreprise->personne_prename }}" class="form-control @error('personne_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom de la personne à contacter') }}" id="personne_prename" name="personne_prename">
                         @error('personne_prename')
                                  <div class="invalid-feedback">
                                                    {{ $errors->first('personne_prename') }}
                                 </div>
                         @enderror
        </div>
</div>




<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-phone"></i>
        </div>
    </div>
    <input  value="{{ old('personne_tel') ?? $entreprise->personne_tel }}" class="form-control @error('personne_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone à contacter en cas d\'urgence') }}" id="personne_tel" name="personne_tel">
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
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $entreprise->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
            @error('numpiece')
                <div class="invalid-feedback">
                                {{ $errors->first('numpiece') }}
                </div>
            @enderror
        </div>
</div> --}}



{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $entreprise->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
        <div class="invalid-feedback">
                        {{ $errors->first('dateexp') }}
    </div>
    @enderror
 </div>
</div> --}}

{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Selectionnez la photo d'identité
        </div>
    </div>
    <input class="@error('image_identite') is-invalid @enderror" id="image_identite" name="image_identite[]" 
         multiple value="{{ old('image') ?? $entreprise->image_identite }}"
            accept="image/png, image/jpeg" type="file">
                @error('image_identite')
                    <div class="invalid-feedback">
                     {{ $errors->first('image_identite') }}
                    </div>
                @enderror
 </div>
</div> --}}

{{-- @if(Route::is('entreprises.create') )
<div class="input-group mb-4">
    <div class="form-group col-md-6 mb-4"> 
        <div class="form-label">Selectionnez la photo d'identité</div>
            <div class="custom-file">
              <input class="@error('image') is-invalid @enderror" id="image" name="image[]" 
                    multiple  value="{{ old('image') ?? $entreprise->image }}"
                    accept="image/png, image/jpeg" type="file">
                @error('image')
                    <div class="invalid-feedback">
                     {{ $errors->first('image') }}
                    </div>
                @enderror
            </div>
        </div>
    </div> 
</div>
 --}}





 


{{-- </div> 
@endif
</div> --}}






   