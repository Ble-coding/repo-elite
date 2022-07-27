{{-- <div class="form-row mb-2">
    <div class="form-group col-md-6 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Choix</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="choix" onclick="displayForm(this)" value="Nouveau" @if (old('choix') ==  'Nouveau'
                    || $general->choix == 'Nouveau') checked @endif checked >
                    <span class="custom-control-label">Nouveau Client</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="choix" onclick="displayForm(this)" @if (old('choix') ==  'Existant'
                    || $general->choix == 'Existant') checked @endif value="Existant">
                    <span class="custom-control-label">Client Existant</span>
                </label>             
            </div>
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
   										
    </div>
</div> --}}


<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Choisir le type client
        </div>
    </div>
    <select id="renseigne_id"  onchange="mySelectfunction1()"  class="form-control select2-show-search  @error('renseigne_id') is-invalid @enderror" name="renseigne_id">
        <optgroup label="Choix">
            {{-- <option value="">Choisir</option>	 --}}
            @foreach($renseignes as $renseigne)
                                <option value="{{ $renseigne->id }}" {{  $general->renseigne_id == $renseigne->id ? 'selected' :  ''}}>
                                {{ $renseigne->name}} </option>
                                @endforeach                                  
        </optgroup>							
    </select>
        @error('renseigne_id')
            <div class="invalid-feedback">
                            {{ $errors->first('renseigne_id') }}
            </div>
        @enderror  
</div>

<div id="help1"> 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('name') ?? $general->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="name" name="name">
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
                <input  value="{{ old('prename') ?? $general->prename }}" class="form-control @error('prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prename" name="prename">
                @error('prename')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename') }}
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
                <input  value="{{ old('name_naissance') ?? $general->name_naissance }}" class="form-control @error('name_naissance') is-invalid @enderror" type="text" placeholder="{{ __('Nom de naissance') }}" id="name_naissance" name="name_naissance">
                @error('name_naissance')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_naissance') }}
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
                <input  value="{{ old('address') ?? $general->address }}" class="form-control @error('address') is-invalid @enderror" type="text" placeholder="{{ __('Adresse actuelle') }}" id="address" name="address">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
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
                <input  value="{{ old('nationnalite') ?? $general->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationalité') }}" id="nationnalite" name="nationnalite">
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
                <input  value="{{ old('commune') ?? $general->commune }}" class="form-control @error('commune') is-invalid @enderror" type="text" placeholder="{{ __('Commune de naissance :') }}" id="commune" name="commune">
                @error('commune')
                    <div class="invalid-feedback">
                        {{ $errors->first('commune') }}
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
                <input  value="{{ old('communeR') ?? $general->communeR }}" class="form-control @error('communeR') is-invalid @enderror" type="text" placeholder="{{ __('Commune de résidence :') }}" id="communeR" name="communeR">
                @error('communeR')
                    <div class="invalid-feedback">
                        {{ $errors->first('communeR') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('nbr_dependant') ?? $general->nbr_dependant }}" class="form-control @error('nbr_dependant') is-invalid @enderror" type="number" placeholder="{{ __('Nombre de dépendants') }}" id="nbr_dependant" name="nbr_dependant">
                @error('nbr_dependant')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_dependant') }}
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
                <input  value="{{ old('depuis') ?? $general->depuis }}" class="form-control @error('depuis') is-invalid @enderror" type="text" placeholder="{{ __('Depuis') }}" id="depuis" name="depuis">
                @error('depuis')
                    <div class="invalid-feedback">
                        {{ $errors->first('depuis') }}
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
                <input value="{{ old('datenaiss') ?? $general->datenaiss }}" class="form-control @error('datenaiss') is-invalid @enderror" type="date" placeholder="{{ __('Date de naissance') }}" id="datenaiss" name="datenaiss">
                @error('datenaiss')
                    <div class="invalid-feedback">
                        {{ $errors->first('datenaiss') }}
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
                        <i class="fe fe-phone"></i>
                    </div>
                </div> 
                <input  value="{{ old('tel_residence') ?? $general->tel_residence }}" class="form-control @error('tel_residence') is-invalid @enderror" type="tel" placeholder="{{ __('N° Téléphone résidence ') }}" id="tel_residence" name="tel_residence">
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
                <input  value="{{ old('cel') ?? $general->cel }}" class="form-control @error('cel') is-invalid @enderror" type="tel" placeholder="{{ __('Cellulaire ') }}" id="cel" name="cel">
                @error('cel')
                    <div class="invalid-feedback">
                        {{ $errors->first('cel') }}
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
                <input  value="{{ old('bureau') ?? $general->bureau }}" class="form-control @error('bureau') is-invalid @enderror" type="tel" placeholder="{{ __('Bureau') }}" id="bureau" name="bureau">
                @error('bureau')
                    <div class="invalid-feedback">
                        {{ $errors->first('bureau') }}
                    </div>
                @enderror
            </div>											
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Sexe</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="sexe" value="M" @if (old('sexe') ==  'M'
                        || $general->sexe == 'M') checked @endif checked >
                        <span class="custom-control-label">M</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="sexe" @if (old('sexe') ==  'F'
                        || $general->sexe == 'F') checked @endif value="F">
                        <span class="custom-control-label">F</span>
                    </label>             
                </div>
            </div>								
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Choisir le type de pièce
                </div>
            </div>
            <select id="piece_id" class="form-control select2-show-search  @error('piece_id') is-invalid @enderror" name="piece_id">
                <optgroup label="Piece">
                    <option value="">Choisir</option>	
                    @foreach($pieces as $piece)
                                        <option value="{{ $piece->id }}" {{  $general->piece_id == $piece->id ? 'selected' :  ''}}>
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
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('name_fille') ?? $general->name_fille }}" class="form-control @error('name_fille') is-invalid @enderror" type="text" placeholder="{{ __('Nom de jeune fille de la mère') }}" id="name_fille" name="name_fille">
                @error('name_fille')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_fille') }}
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
                <input  value="{{ old('prename_fille') ?? $general->prename_fille }}" class="form-control @error('prename_fille') is-invalid @enderror" type="text" placeholder="{{ __('Prénom de jeune fille de la mère') }}" id="prename_fille" name="prename_fille">
                @error('prename_fille')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename_fille') }}
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
                        <i class="fe fe-mail"></i>
                    </div>
                </div> 
                <input  value="{{ old('email') ?? $general->email }}" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('Adresse e-mail') }}" id="email" name="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-file-plus"></i>
                        </div>
                    </div> 
                    <input  value="{{ old('prof') ?? $general->prof }}" class="form-control @error('prof') is-invalid @enderror" type="text" placeholder="{{ __('Profession') }}" id="prof" name="prof">
                    @error('prof')
                        <div class="invalid-feedback">
                            {{ $errors->first('prof') }}
                        </div>
                    @enderror
                </div>											
        </div>
    </div>
    <div class="form-row mb-2">
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
                                            <option value="{{ $etat->id }}" {{  $general->etat_id == $etat->id ? 'selected' :  ''}}>
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
        <div class="form-group col-md-6 mb-0">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Régime matrimonial 
                </div>
            </div>  
            <select id="regime_id" class="form-control select2-show-search  @error('regime_id') is-invalid @enderror" name="regime_id">
                <optgroup label="Regime">
                    <option value="">Choisir</option>	
                    @foreach($regimes as $regime)
                                        <option value="{{ $regime->id }}" {{  $general->regime_id == $regime->id ? 'selected' :  ''}}>
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
    <div class="form-row">
        <div class="form-group col-md-6 mt-1">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Date de mariage
                    </div>
                </div>
                <input  value="{{ old('date_mariage') ?? $general->date_mariage }}" class="form-control @error('date_mariage') is-invalid @enderror" type="date" placeholder="{{ __('Date de mariage') }}" id="date_mariage" name="date_mariage">
                @error('date_mariage')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_mariage') }}
                    </div>
                @enderror
            </div>
        </div> 	
    </div>
</div>




    <div id="help2" style="display: none" class="input-group mb-4"> 
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Compte
                </div>
            </div>
            <select id="envoie_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('envoie_id') is-invalid @enderror" name="envoie_id">
                <optgroup label="Compte">
                    <option value="">Choisir</option>	
                    @foreach($envoies as $envoie)
                                        <option value="{{ $envoie->id }}" {{  $general->envoie_id == $envoie->id ? 'selected' :  ''}}>
                                        {{ $envoie->name}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('envoie_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('envoie_id') }}
                    </div>
                @enderror  
        </div>
        
            <div class="">
                <div id="img1"  class="input-group mb-4"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Client Epargne
                        </div>
                    </div>
                    <select class="form-control select2-show-search @error('particulier_id') is-invalid @enderror" name="particulier_id">
                        <optgroup label="Epargne">
                            <option value="">Choisir</option>	
                            @foreach($particuliers as $particulier)	
                                                <option value="{{ $particulier->id }}" {{  $general->particulier_id == $particulier->id ? 'selected' :  ''}}>
                                                    {{ $particulier->code }} --  {{ $particulier->name }} {{ $particulier->prename }}</option>
                                                @endforeach
                                        
                        </optgroup>							
                    </select>
                        @error('particulier_id')
                            <div class="invalid-feedback">
                                            {{ $errors->first('particulier_id') }}
                            </div>
                        @enderror 
                </div>
            </div>
            <div class="">
                <div id="img2" style="display:none;" class="input-group mb-4"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Client Courant
                        </div>
                    </div>
                    <select class="form-control select2-show-search @error('client_id') is-invalid @enderror" name="client_id">
                        <optgroup label="Courant">
                            <option value="">Choisir</option>	
                            @foreach($clients as $client)	
                            <option value="{{ $client->id }}" {{  $general->client_id == $client->id ? 'selected' :  ''}}>
                                {{ $client->code }} --  {{ $client->name }} {{ $client->prename }}</option>
                            @endforeach
                                        
                        </optgroup>							
                    </select>
                    @error('client_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('client_id') }}
                    </div>
                    @enderror 
                </div>
            </div>
            <div class="">
                <div  id="img3" style="display:none;" class="input-group mb-4"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Client Investissement
                        </div>
                    </div>
                    <select class="form-control select2-show-search @error('customer_id') is-invalid @enderror" name="customer_id">
                        <optgroup label="Investissement">
                            <option value="">Choisir</option>	
                            @foreach($customers as $customer)	
                            <option value="{{ $customer->id }}" {{  $general->customer_id == $customer->id ? 'selected' :  ''}}>
                                {{ $customer->code }} --  {{ $customer->name }} {{ $customer->prename }}</option>
                            @endforeach
                                        
                        </optgroup>							
                    </select>
                    @error('customer_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('customer_id') }}
                    </div>
                    @enderror 
                </div>
        
            </div>
        
    </div>
  










      

