

       {{-- <div class="form-row mb-2">
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Envoie</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="envoie_id" value="Epargne" onclick="displayForme(this)" @if (old('envoie_id') ==  'Epargne'
                        || $transfert->envoie_id == 'Epargne') checked @endif checked >
                        <span class="custom-control-label">Epargne</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="envoie_id"  onclick="displayForme(this)" @if (old('envoie_id') ==  'Courant'
                        || $transfert->envoie_id == 'Courant') checked @endif value="Courant">
                        <span class="custom-control-label">Courant</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="envoie_id" onclick="displayForme(this)"  @if (old('envoie_id') ==  'Investissement'
                        || $transfert->envoie_id == 'Investissement') checked @endif value="Investissement">
                        <span class="custom-control-label">Investissement</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Reception</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="reception_id" value="Epargne" onclick="displayForm(this)" @if (old('reception_id') ==  'Epargne'
                        || $transfert->reception_id == 'Epargne') checked @endif checked >
                        <span class="custom-control-label">Epargne</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="reception_id" onclick="displayForm(this)" @if (old('reception_id') ==  'Courant'
                        || $transfert->reception_id == 'Courant') checked @endif value="Courant">
                        <span class="custom-control-label">Courant</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="reception_id" onclick="displayForm(this)" @if (old('reception_id') ==  'Investissement'
                        || $transfert->reception_id == 'Investissement') checked @endif value="Investissement">
                        <span class="custom-control-label">Investissement</span>
                    </label>              
                </div>
            </div>										
        </div>
       </div> --}}
 
 

        <div class="form-row mb-2">
                <div class="form-group col-md-6 mb-0">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Compte Envoie
                        </div>
                    </div>
                    <select id="send_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('send_id') is-invalid @enderror" name="send_id">
                        <optgroup label="Envoie">
                            @foreach($sends as $send)	
                                                <option value="{{ $send->id }}" {{  $transfert->send_id == $send->id ? 'selected' :  ''}}>
                                                {{ $send->name}} </option>
                                                @endforeach                                  
                        </optgroup>							
                    </select>
                        @error('send_id')
                            <div class="invalid-feedback">
                                            {{ $errors->first('send_id') }}
                            </div>
                        @enderror  								
                </div> 
                 
                <div class="form-group col-md-6 mb-0">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Compte Reception
                        </div>
                    </div>
                    <select onchange="mySecondfunction()" id="receive_id" class="form-control select2-show-search @error('receive_id') is-invalid @enderror" name="receive_id">
                        <optgroup label="Reception">
                            @foreach($receives as $receive)	
                                                <option value="{{ $receive->id }}" {{  $transfert->receive_id == $receive->id ? 'selected' :  ''}}>
                                                {{ $receive->name }} </option>
                            @endforeach                                  
                        </optgroup>							
                    </select>
                        @error('receive_id')
                            <div class="invalid-feedback">
                                            {{ $errors->first('receive_id') }}
                            </div>
                        @enderror 									
                </div>
        </div> 

        <div class="form-row mb-2">
            <div id="img1"  class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Epargne
                    </div>
                </div>
                {{-- onchange="valueGet()" --}}
                <select class="form-control select2-show-search @error('solde_id') is-invalid @enderror"   name="solde_id">
                    <optgroup label="Epargne">
                        <option value="">Choisir</option>	
                        @foreach($soldes as $solde)	
                                            <option value="{{ $solde->id }}" {{  $transfert->solde_id == $solde->id ? 'selected' :  ''}}>
                                                {{ $solde->particulier->code }} --  {{ $solde->particulier->name }} {{ $solde->particulier->prename }}</option>
                                            @endforeach
                                    
                    </optgroup>							
                </select>
                    @error('solde_id')
                        <div class="invalid-feedback">
                                        {{ $errors->first('solde_id') }}
                        </div>
                    @enderror 
            </div>

            <div id="img2" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Courant
                    </div>
                </div>
                <select class="form-control select2-show-search @error('sode_id') is-invalid @enderror" name="sode_id">
                    <optgroup label="Courant">
                        <option value="">Choisir</option>	
                        @foreach($sodes as $sode)	
                        <option value="{{ $sode->id }}" {{  $transfert->sode_id == $sode->id ? 'selected' :  ''}}>
                            {{ $sode->client->code }} --  {{ $sode->client->name }} {{ $sode->client->prename }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('sode_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('sode_id') }}
                    </div>
                @enderror 
            </div>

            <div id="img3" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Entreprise Epargne
                    </div>
                </div>
                <select class="form-control select2-show-search @error('sold_id') is-invalid @enderror" name="sold_id">
                    <optgroup label="Epargne">
                        <option value="">Choisir</option>	
                        @foreach($solds as $sold)	
                        <option value="{{ $sold->id }}" {{  $transfert->sold_id == $sold->id ? 'selected' :  ''}}>
                            {{ $sold->entreprise->code }} --  {{ $sold->entreprise->name }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('sold_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('sold_id') }}
                    </div>
                @enderror 
            </div>

            <div id="img4" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Entreprise Courant
                    </div>
                </div>
                <select class="form-control select2-show-search @error('sod_id') is-invalid @enderror" name="sod_id">
                    <optgroup label="Courant">
                        <option value="">Choisir</option>	
                        @foreach($sods as $sod)	
                        <option value="{{ $sod->id }}" {{  $transfert->sod_id == $sod->id ? 'selected' :  ''}}>
                            {{ $sod->society->code }} -- {{ $sod->society->name }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('sod_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('sod_id') }}
                    </div>
                @enderror 
            </div>
        
            
            <div id="help1"  class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Epargne
                    </div>
                </div>
                <select class="form-control select2-show-search @error('olde_id') is-invalid @enderror" name="olde_id">
                    <optgroup label="Epargne">
                        <option value="">Choisir</option>	
                        @foreach($soldes as $solde)	
                                            <option value="{{ $solde->id }}" {{  $transfert->solde_id == $solde->id ? 'selected' :  ''}}>
                                                {{ $solde->particulier->code }} --  {{ $solde->particulier->name }} {{ $solde->particulier->prename }}</option>
                                            @endforeach
                                    
                    </optgroup>							
                </select>
                    @error('olde_id')
                        <div class="invalid-feedback">
                                        {{ $errors->first('olde_id') }}
                        </div>
                    @enderror 
            </div>

            <div id="help2" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Courant
                    </div>
                </div>
                <select class="form-control select2-show-search @error('ode_id') is-invalid @enderror" name="ode_id">
                    <optgroup label="Courant">
                        <option value="">Choisir</option>	
                        @foreach($sodes as $sode)	
                        <option value="{{ $sode->id }}" {{  $transfert->sode_id == $sode->id ? 'selected' :  ''}}>
                            {{ $sode->client->code }} --  {{ $sode->client->name }} {{ $sode->client->prename }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('ode_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('ode_id') }}
                    </div>
                @enderror 
            </div>

            <div id="help3" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Entreprise Epargne
                    </div>
                </div>
                <select class="form-control select2-show-search @error('old_id') is-invalid @enderror" name="old_id">
                    <optgroup label="Epargne">
                        <option value="">Choisir</option>	
                        @foreach($solds as $sold)	
                        <option value="{{ $sold->id }}" {{  $transfert->sold_id == $sold->id ? 'selected' :  ''}}>
                            {{ $sold->entreprise->code }} --  {{ $sold->entreprise->name }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('old_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('old_id') }}
                    </div>
                @enderror 
            </div>

            <div id="help4" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Entreprise Courant
                    </div>
                </div>
                <select class="form-control select2-show-search @error('od_id') is-invalid @enderror" name="od_id">
                    <optgroup label="Courant">
                        <option value="">Choisir</option>	
                        @foreach($sods as $sod)	
                        <option value="{{ $sod->id }}" {{  $transfert->sod_id == $sod->id ? 'selected' :  ''}}>
                            {{ $sod->society->code }} -- {{ $sod->society->name }}</option>
                        @endforeach                        
                    </optgroup>							
                </select>
                @error('od_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('od_id') }}
                    </div>
                @enderror 
            </div>
        </div>
          
        <div class="form-row">
            <div class="form-group col-md-6 mb-0"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-italic"></i>
                    </div>
                    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $transfert->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant à envoyé') }}" autofocus>
                    @error('montant')
                        <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

       