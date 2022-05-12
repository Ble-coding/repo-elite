@csrf
	<div class="form-row">
		<div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('name') ?? $epargne_particulier->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="name" name="name">
                             @error('name')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('name') }}
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
                <input  value="{{ old('prename') ?? $epargne_particulier->name }}" class="form-control @error('prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prename" name="prename">
                             @error('prename')
                                      <div class="invalid-feedback">
                                                        {{ $errors->first('prename') }}
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
    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" value="{{ old('datenaiss') ?? $epargne_particulier->datenaiss  }}" autocomplete="datenaiss" autofocus>
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
    <input value="{{ old('lieu') ?? $epargne_particulier->lieu }}" class="form-control @error('lieu') is-invalid @enderror" type="text" placeholder="{{ __('Lieu de naissance') }}" id="lieu" name="lieu">
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
            <input  value="{{ old('nationnalite') ?? $epargne_particulier->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationnalité') }}" id="nationnalite" name="nationnalite">
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
            <input  value="{{ old('lieu_habitation') ?? $epargne_particulier->lieu_habitation }}" class="form-control @error('lieu_habitation') is-invalid @enderror" type="text" placeholder="{{ __('Lieu d`\'habitation') }}" id="lieu_habitation" name="lieu_habitation">
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
            <input  value="{{ old('tel') ?? $epargne_particulier->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
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
            <input  value="{{ old('email') ?? $epargne_particulier->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
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
                    <input type="radio" class="custom-control-input" name="sexe" value="m" checked>
                    <span class="custom-control-label">M</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="sexe" value="f">
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
                    <input type="radio" class="custom-control-input" name="situation" value="marie" checked>
                    <span class="custom-control-label">Marié(e)</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="situation" value="celibataire">
                    <span class="custom-control-label">Célibataire</span>
                </label>               
            </div>
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
                <input  value="{{ old('successeur_name') ?? $epargne_particulier->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
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
        <input  value="{{ old('successeur_prename') ?? $epargne_particulier->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
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
        <input  value="{{ old('successeur_tel') ?? $epargne_particulier->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                 <div class="invalid-feedback">
                                   {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>



<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input value="{{ old('personne_name') ?? $epargne_particulier->personne_name }}" class="form-control @error('personne_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom de la personne à contacter') }}" id="personne_name" name="personne_name">
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
            <input value="{{ old('personne_prename') ?? $epargne_particulier->personne_prename }}" class="form-control @error('personne_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom de la personne à contacter') }}" id="personne_prename" name="personne_prename">
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
    <input  value="{{ old('personne_tel') ?? $epargne_particulier->personne_tel }}" class="form-control @error('personne_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone à contacter en cas d\'urgence') }}" id="personne_tel" name="personne_tel">
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
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $epargne_particulier->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
            @error('numpiece')
                <div class="invalid-feedback">
                                {{ $errors->first('numpiece') }}
                </div>
            @enderror
        </div>
</div>









<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $epargne_particulier->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
        <div class="invalid-feedback">
                        {{ $errors->first('dateexp') }}
    </div>
    @enderror
 </div>
</div>

{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Selectionnez la photo d'identité
        </div>
    </div>
    <input class="@error('image_identite') is-invalid @enderror" id="image_identite" name="image_identite[]" 
         multiple value="{{ old('image') ?? $epargne_particulier->image_identite }}"
            accept="image/png, image/jpeg" type="file">
                @error('image_identite')
                    <div class="invalid-feedback">
                     {{ $errors->first('image_identite') }}
                    </div>
                @enderror
 </div>
</div> --}}


<div class="input-group mb-4">
    <div class="form-group col-md-6 mb-4"> 
        <div class="form-label">Selectionnez la photo d'identité</div>
            <div class="custom-file">
              <input class="@error('image') is-invalid @enderror" id="image" name="image[]" 
                    multiple  value="{{ old('image') ?? $epargne_particulier->image }}"
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





 


</div> 
</div>






   