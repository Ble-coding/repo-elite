

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
                    <select id="envoie_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('envoie_id') is-invalid @enderror" name="envoie_id">
                        <optgroup label="Envoie">
                            @foreach($envoies as $envoie)	
                                                <option value="{{ $envoie->id }}" {{  $transfert->envoie_id == $envoie->id ? 'selected' :  ''}}>
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
                 
                <div class="form-group col-md-6 mb-0">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Compte Reception
                        </div>
                    </div>
                    <select onchange="mySecondfunction()" id="reception_id" class="form-control select2-show-search @error('reception_id') is-invalid @enderror" name="reception_id">
                        <optgroup label="Reception">
                            @foreach($receptions as $reception)	
                                                <option value="{{ $reception->id }}" {{  $transfert->reception_id == $reception->id ? 'selected' :  ''}}>
                                                {{ $reception->name }} </option>
                                                @endforeach                                  
                        </optgroup>							
                    </select>
                        @error('reception_id')
                            <div class="invalid-feedback">
                                            {{ $errors->first('reception_id') }}
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
                <select class="form-control select2-show-search @error('solde_id') is-invalid @enderror" name="solde_id">
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
        
            <div  id="img3" style="display:none;" class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Investissement
                    </div>
                </div>
                <select class="form-control select2-show-search @error('somme_id') is-invalid @enderror" name="somme_id">
                    <optgroup label="Investissement">
                        <option value="">Choisir</option>	
                        @foreach($sommes as $somme)	
                            <option value="{{ $somme->id }}" {{  $transfert->somme_id == $somme->id ? 'selected' :  ''}}>
                                    {{-- {{ $somme->investiman }} --}}
                                @if ($somme->particulier_id !== Null)
                                    <td>{{$somme->particulier->code}} - {{$somme->particulier->name}} {{$somme->particulier->prename}}</td>
                                @elseif($somme->client_id !== Null)
                                    <td>{{$somme->client->code}} - {{$somme->client->name}} {{$somme->client->prename}}</td>
                                @elseif($somme->customer_id !== Null)
                                <td>{{$somme->customer->code}} - {{$somme->customer->name}} {{$somme->customer->prename}}</td>
                                @else
                                
                                @endif
                            </option>
                        @endforeach
                                       
                    </optgroup>							
                </select>
                @error('somme_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('somme_id') }}
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
                                        {{ $errors->first('solde_id') }}
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
                                    {{ $errors->first('sode_id') }}
                    </div>
                @enderror 
            </div> 
            <div id="help3" style="display:none;"class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Client Investissement 
                    </div>
                </div>
                <select class="form-control select2-show-search @error('omme_id') is-invalid @enderror" name="omme_id">
                    <optgroup label="Investissement">
                        <option value="">Choisir</option>	
                        @foreach($sommes as $somme)	
                            <option value="{{ $somme->id }}" {{  $transfert->somme_id == $somme->id ? 'selected' :  ''}}>
                                {{-- {{ $somme->investiman }} --}}
                                @if ($somme->particulier_id !== Null)
                                  {{$somme->particulier->code}} - {{$somme->particulier->name}} {{$somme->particulier->prename}}
                                @elseif($somme->client_id !== Null)
                                    {{$somme->client->code}} - {{$somme->client->name}} {{$somme->client->prename}}
                                @elseif($somme->customer_id !== Null)
                                    {{$somme->customer->code}} - {{$somme->customer->name}} {{$somme->customer->prename}}
                                @else
                                
                                @endif
                            </option>
                        @endforeach                              
                    </optgroup>							
                </select>
                @error('omme_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('somme_id') }}
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

       