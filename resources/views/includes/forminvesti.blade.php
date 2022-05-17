@csrf








@if(Route::is('investir.investis.index') )

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Forfait
        </div>
    </div>
    <select class="form-control select2-show-search @error('forfait_id') is-invalid @enderror" name="forfait_id">
        <optgroup label="Forfait">
            @foreach($forfaits as $forfait)														 
                <option value="{{$forfait->id}}" {{ $investi->forfait_id == $forfait->id ? 'selected' : '' }}> 
                    {{$forfait->libelle_Forfait }} - {{ $forfait->duree }} mois - {{ $forfait->pourcentageM }} % par mois
                    - 
                    {{ $forfait->pourcentageJ }} % si jalonnement (Min:{{ $forfait->montantMin }} Max: {{ $forfait->montantMax }})
                </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('forfait_id')
             <div class="invalid-feedback">
                               {{ $errors->first('forfait_id') }}
            </div>
    @enderror 
</div>


<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Compte
        </div>
    </div>
    <select id="envoie_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('envoie_id') is-invalid @enderror" name="envoie_id">
        <optgroup label="Compte">
            @foreach($envoies as $envoie)
                                <option value="{{ $envoie->id }}" {{  $investi->envoie_id == $envoie->id ? 'selected' :  ''}}>
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
                                        <option value="{{ $particulier->id }}" {{  $investi->particulier_id == $particulier->id ? 'selected' :  ''}}>
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
                    <option value="{{ $client->id }}" {{  $investi->client_id == $client->id ? 'selected' :  ''}}>
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
                    <option value="{{ $customer->id }}" {{  $investi->customer_id == $customer->id ? 'selected' :  ''}}>
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
@endif


@if(Route::is('investir.investis.edit') )

<div  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Forfait
        </div>
    </div>
    <select disabled class="form-control select2-show-search @error('forfait_id') is-invalid @enderror" name="forfait_id">
        <optgroup label="Forfait">
            @foreach($forfaits as $forfait)														 
                <option value="{{$forfait->id}}" {{ $investi->forfait_id == $forfait->id ? 'selected' : '' }}> 
                    {{$forfait->libelle_Forfait }} - {{ $forfait->duree }} mois - {{ $forfait->pourcentageM }} % par mois
                    - 
                    {{ $forfait->pourcentageJ }} % si jalonnement (Min:{{ $forfait->montantMin }} Max: {{ $forfait->montantMax }})
                </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('forfait_id')
             <div class="invalid-feedback">
                               {{ $errors->first('forfait_id') }}
            </div>
    @enderror 
</div>


<div  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Compte
        </div>
    </div>
    <select disabled id="envoie_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('envoie_id') is-invalid @enderror" name="envoie_id">
        <optgroup label="Compte">
            @foreach($envoies as $envoie)
                                <option value="{{ $envoie->id }}" {{  $investi->envoie_id == $envoie->id ? 'selected' :  ''}}>
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


<div  class="">
    <div  id="img1"  class="input-group mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Epargne
            </div>
        </div>
        <select disabled class="form-control select2-show-search @error('particulier_id') is-invalid @enderror" name="particulier_id">
            <optgroup label="Epargne">
                <option value="">Choisir</option>	
                @foreach($particuliers as $particulier)	
                                    <option value="{{ $particulier->id }}" {{  $investi->particulier_id == $particulier->id ? 'selected' :  ''}}>
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
<div  class="">
    <div  id="img2" class="input-group mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Courant
            </div>
        </div>
        <select disabled class="form-control select2-show-search @error('client_id') is-invalid @enderror" name="client_id">
            <optgroup label="Courant">
                <option value="">Choisir</option>	
                @foreach($clients as $client)	
                <option value="{{ $client->id }}" {{  $investi->client_id == $client->id ? 'selected' :  ''}}>
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
<div  class="">
    <div   id="img3" class="input-group mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Investissement
            </div>
        </div>
        <select disabled class="form-control select2-show-search @error('customer_id') is-invalid @enderror" name="customer_id">
            <optgroup label="Investissement">
                <option value="">Choisir</option>	
                @foreach($customers as $customer)	
                <option value="{{ $customer->id }}" {{  $investi->customer_id == $customer->id ? 'selected' :  ''}}>
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

@endif



<div class="input-group mb-4">
    <div class="form-group m-0">
        <div class="form-label">Choisir un parrain</div>
        <div class="custom-controls-stacked">
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" onclick="displayForm(this)" name="choix" value="Non" @if (old('choix') ==  'Non'
                || $investi->choix == 'Non') checked @endif checked >
                <span class="custom-control-label">Non</span>
            </label>
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" onclick="displayForm(this)" name="choix" @if (old('choix') ==  'Oui'
                || $investi->choix == 'Oui') checked @endif value="Oui">
                <span class="custom-control-label">Oui</span>
            </label>              
        </div>
    </div>										
</div>

<div style="visibility:hidden ; position:relative" id="ccform">
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                Parrain
            </div>
        </div>
        <select class="form-control select2-show-search @error('intervenant_id') is-invalid @enderror" name="intervenant_id">
            <optgroup label="Client">
                <option value="">Choisir</option>
                @foreach($suppleants as $suppleant)														 
                <option value="{{$suppleant->id}}" {{ $investi->suppleant_id == $suppleant->id ? 'selected' : '' }}> 
                    {{$suppleant->code }} ---  {{ $suppleant->name }} {{ $suppleant->prename }} --{{ $suppleant->email }}  - {{ $suppleant->tel }} 
                </option>
            @endforeach						
            </optgroup>							
        </select>
        @error('intervenant_id')
                <div class="invalid-feedback">
                                {{ $errors->first('intervenant_id') }}
                </div>
        @enderror 
    </div>
    

</div>


<div class="input-group mb-4">
    <div class="form-group m-0">
        <div class="form-label">Jalonnement</div>
        <div class="custom-controls-stacked">
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="jalon" value="Non" @if (old('jalon') ==  'Non'
                || $investi->jalon == 'Non') checked @endif checked >
                <span class="custom-control-label">Non</span>
            </label>
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="jalon" @if (old('jalon') ==  'Oui'
                || $investi->jalon == 'Oui') checked @endif value="Oui">
                <span class="custom-control-label">Oui</span>
            </label>              
        </div>
    </div>										
</div>

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-italic"></i>
        </div>
    </div>
    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $investi->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant à investi') }}" autofocus>
            @error('montant')
                <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                </div>
            @enderror
</div>

{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Compte client
        </div>
    </div>
    <select class="form-control select2-show-search @error('customer_id') is-invalid @enderror" name="customer_id">
        <optgroup label="Client">
            @foreach($customers as $customer)														
            <option value="{{$customer->id}}" {{ $customer->id ? 'selected' : '' }}> {{$customer->code }} --- {{ $customer->name }} {{ $customer->prename }} --{{ $customer->email }}  - {{ $customer->prename }}   </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('customer_id')
             <div class="invalid-feedback">
                               {{ $errors->first('customer_id') }}
            </div>
    @enderror 
</div>

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Parrain
        </div>
    </div>
    <select class="form-control select2-show-search @error('suppleant_id') is-invalid @enderror" name="suppleant_id">
        <optgroup label="Client">
            @foreach($suppleants as $suppleant)														
            <option value="{{$suppleant->id}}" {{ $suppleant->id ? 'selected' : '' }}> {{$suppleant->code_parrain }} --- {{ $suppleant->name }} {{ $suppleant->prename }} --{{ $suppleant->email }}  - {{ $suppleant->prename }}   </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('suppleant_id')
             <div class="invalid-feedback">
                               {{ $errors->first('suppleant_id') }}
            </div>
    @enderror 
</div> --}}
















 









   