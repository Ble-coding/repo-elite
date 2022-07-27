
<div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('nameResp') ?? $responsable->nameResp }}" class="form-control @error('nameResp') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="nameResp" name="nameResp">
                @error('nameResp')
                    <div class="invalid-feedback">
                        {{ $errors->first('nameResp') }}
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
                <input  value="{{ old('prenameResp') ?? $responsable->prenameResp }}" class="form-control @error('prenameResp') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prenameResp" name="prenameResp">
                @error('prenameResp')
                    <div class="invalid-feedback">
                        {{ $errors->first('prenameResp') }}
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
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('addressResp') ?? $responsable->addressResp }}" class="form-control @error('addressResp') is-invalid @enderror" type="text" placeholder="{{ __('Adresse actuelle') }}" id="addressResp" name="addressResp">
                @error('addressResp')
                    <div class="invalid-feedback">
                        {{ $errors->first('addressResp') }}
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
                <input  value="{{ old('ville') ?? $responsable->ville }}" class="form-control @error('ville') is-invalid @enderror" type="text" placeholder="{{ __('Ville') }}" id="ville" name="ville">
                @error('ville')
                    <div class="invalid-feedback">
                        {{ $errors->first('ville') }}
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
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                <input  value="{{ old('depuisResp') ?? $responsable->depuisResp }}" class="form-control @error('depuisResp') is-invalid @enderror" type="text" placeholder="{{ __('Depuis') }}" id="depuisResp" name="depuisResp">
                @error('depuisResp')
                    <div class="invalid-feedback">
                        {{ $errors->first('depuisResp') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
             <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Date de naissance
                    </div>
                </div> 
                <input value="{{ old('datenaiss') ?? $responsable->datenaiss }}" class="form-control @error('datenaiss') is-invalid @enderror" type="date" placeholder="{{ __('Date de naissance') }}" id="datenaiss" name="datenaiss">
                @error('datenaiss')
                    <div class="invalid-feedback">
                        {{ $errors->first('datenaiss') }}
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
                            <i class="fe fe-file-plus"></i>
                        </div>
                    </div> 
                    <input  value="{{ old('prof') ?? $responsable->prof }}" class="form-control @error('prof') is-invalid @enderror" type="text" placeholder="{{ __('Profession') }}" id="prof" name="prof">
                    @error('prof')
                        <div class="invalid-feedback">
                            {{ $errors->first('prof') }}
                        </div>
                    @enderror
                </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
        	<div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div> 
                <input  value="{{ old('nationnalite') ?? $responsable->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationalité') }}" id="nationnalite" name="nationnalite">
                @error('nationnalite')
                    <div class="invalid-feedback">
                        {{ $errors->first('nationnalite') }}
                    </div>
                @enderror
            </div>												
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 mb-0">
       	            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('nbr_dependant') ?? $responsable->nbr_dependant }}" class="form-control @error('nbr_dependant') is-invalid @enderror" type="number" placeholder="{{ __('Nombre de dépendants') }}" id="nbr_dependant" name="nbr_dependant">
                @error('nbr_dependant')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_dependant') }}
                    </div>
                @enderror
            </div>						
        </div>
        <div class="form-group col-md-4 mb-0">  
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-phone"></i>
                    </div>
                </div> 
                <input  value="{{ old('tel_residence') ?? $responsable->tel_residence }}" class="form-control @error('tel_residence') is-invalid @enderror" type="tel" placeholder="{{ __('N° Téléphone résidence ') }}" id="tel_residence" name="tel_residence">
                @error('tel_residence')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_residence') }}
                    </div>
                @enderror
            </div>				          								
        </div>
        <div class="form-group col-md-4 mb-0">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-phone"></i>
                    </div>
                </div> 
                <input  value="{{ old('bureau') ?? $responsable->bureau }}" class="form-control @error('bureau') is-invalid @enderror" type="tel" placeholder="{{ __('Bureau') }}" id="bureau" name="bureau">
                @error('bureau')
                    <div class="invalid-feedback">
                        {{ $errors->first('bureau') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Choisir le type de pièce
                </div>
            </div>
            <select id="piece_id" class="form-control select2-show-search  @error('piece_id') is-invalid @enderror" name="piece_id">
                <optgroup label="Piece">
                    <option value="">Choisir</option>	
                    @foreach($pieces as $piece)
                                        <option value="{{ $piece->id }}" {{  $responsable->piece_id == $piece->id ? 'selected' :  ''}}>
                                        {{ $piece->nom}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('piece_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('piece_id') }}
                    </div>
                @enderror  										
        </div>
           <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Date d’expiration
                    </div>
                </div>
                <input  value="{{ old('daexp') ?? $responsable->daexp }}" class="form-control @error('daexp') is-invalid @enderror" type="date" placeholder="{{ __('Date d\'expiration') }}" id="daexp" name="daexp">
                @error('daexp')
                    <div class="invalid-feedback">
                        {{ $errors->first('daexp') }}
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
                        Date de mariage
                    </div>
                </div>
                <input  value="{{ old('date_mariage') ?? $responsable->date_mariage }}" class="form-control @error('date_mariage') is-invalid @enderror" type="date" placeholder="{{ __('Date de mariage') }}" id="date_mariage" name="date_mariage">
                @error('date_mariage')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_mariage') }}
                    </div>
                @enderror
            </div>								
        </div>
         <div class="form-group col-md-6 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Etat civil
                    </div>
                </div>
                <select id="etat_id" class="form-control select2-show-search  @error('etat_id') is-invalid @enderror" name="etat_id">
                    <optgroup label="Etat">
                        <option value="">Choisir</option>	
                        @foreach($etats as $etat)
                                            <option value="{{ $etat->id }}" {{  $responsable->etat_id == $etat->id ? 'selected' :  ''}}>
                                            {{ $etat->name}} </option>
                                            @endforeach                                  
                    </optgroup>							
                </select>
                    @error('etat_id')
                        <div class="invalid-feedback">
                                        {{ $errors->first('etat_id') }}
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
                <input  value="{{ old('nom_conjoint') ?? $responsable->nom_conjoint }}" class="form-control @error('nom_conjoint') is-invalid @enderror" type="text" placeholder="{{ __('Nom du conjoint') }}" id="nom_conjoint" name="nom_conjoint">
                @error('nom_conjoint')
                    <div class="invalid-feedback">
                        {{ $errors->first('nom_conjoint') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Régime matrimonial 
                </div>
            </div>  
            <select id="regime_id" class="form-control select2-show-search  @error('regime_id') is-invalid @enderror" name="regime_id">
                <optgroup label="Regime">
                    <option value="">Choisir</option>	
                    @foreach($regimes as $regime)
                                        <option value="{{ $regime->id }}" {{  $responsable->regime_id == $regime->id ? 'selected' :  ''}}>
                                        {{ $regime->name}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('regime_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('regime_id') }}
                    </div>
                @enderror  
          </div>	
        </div>	
    </div>
      <div class="form-row mb-2">
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Avez-vous déjà emprunté</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" onclick="displayForm(this)" name="emprunt" value="Oui" @if (old('emprunt') ==  'Oui'
                        || $responsable->emprunt == 'Oui') checked @endif  >
                        <span class="custom-control-label">Oui</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" onclick="displayForm(this)" class="custom-control-input" name="emprunt" @if (old('emprunt') ==  'Non'
                        || $responsable->emprunt == 'Non') checked @endif checked value="Non">
                        <span class="custom-control-label">Non</span>
                    </label>             
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Prêts antérieurs</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" onclick="displayForm(this)" name="anterieur" 
                        value="Yes" @if (old('anterieur') ==  'Yes'
                        || $responsable->anterieur == 'Yes') checked @endif >
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="anterieur" type="radio" class="custom-control-input"  onclick="displayForm(this)" name="anterieur" 
                        value="No" @if (old('anterieur') ==  'No'
                        || $responsable->anterieur == 'No') checked @endif checked>
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
    </div>

    
    <div style="visibility:hidden ; position:relative" id="ccform">

        <div class="form-row">
            <div class="form-group col-md-6 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                <input  value="{{ old('where_emprunt') ?? $responsable->where_emprunt }}" class="form-control @error('where_emprunt') is-invalid @enderror" type="text" placeholder="{{ __('Avez-vous déjà emprunté ') }}" id="where_emprunt" name="where_emprunt">
                                @error('where_emprunt')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('where_emprunt') }}
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
               <input  value="{{ old('where_anterieur') ?? $responsable->where_anterieur }}" class="form-control @error('where_anterieur') is-invalid @enderror" type="text" placeholder="{{ __('Prêts antérieurs ') }}" id="where_anterieur" name="where_anterieur">
                                @error('where_anterieur')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('where_anterieur') }}
                                        </div>
                                @enderror
                </div>											
            </div>
        </div>

    </div>


    

 

   




  










      

