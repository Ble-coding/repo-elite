@csrf

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


@if(Route::is('investir.investis.index') )
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text"> 
            Compte client
        </div>
    </div>
    <select class="form-control select2-show-search @error('investiman') is-invalid @enderror" name="investiman">
        <optgroup label="Client">
            {{-- {{$customers}} --}}
            @foreach($particuliers as $cust)	
            <option  value="{{$cust->code }} --- {{ $cust->name }} {{ $cust->prename }} --{{ $cust->email }}  - {{ $cust->tel }}  " {{ $investi->investiman == $cust->id ? 'selected' : '' }}> {{$cust->code }} --- {{ $cust->name }} {{ $cust->prename }} --{{ $cust->email }}  - {{ $cust->tel }}   </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('investiman')
             <div class="invalid-feedback">
                               {{ $errors->first('investiman') }}
            </div>
    @enderror 
</div>
@endif


{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
          Choisir un parrain
        </div>
    </div>
    <select class="form-control select2-show-search @error('customer') is-invalid @enderror" name="customer">
        <optgroup label="Client">
            @foreach($customers as $customer)														
            <option value="{{$customer->name}}" {{ $customer->name ? 'selected' : '' }}> {{$customer->code }} --- {{ $customer->name }} {{ $customer->prename }} --{{ $customer->email }}  - {{ $customer->tel }}   </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('customer')
             <div class="invalid-feedback">
                               {{ $errors->first('customer') }}
            </div>
    @enderror 
</div> --}}

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
        <select class="form-control select2-show-search @error('customer_id') is-invalid @enderror" name="customer_id">
            <optgroup label="Client">
                @foreach($suppleants as $suppleant)														 
                <option value="{{$suppleant->id}}" {{ $investi->suppleant_id == $suppleant->id ? 'selected' : '' }}> 
                    {{$suppleant->code }} ---  {{ $suppleant->name }} {{ $suppleant->prename }} --{{ $suppleant->email }}  - {{ $suppleant->tel }} 
                </option>
            @endforeach						
            </optgroup>							
        </select>
        @error('customer_id')
                <div class="invalid-feedback">
                                {{ $errors->first('customer_id') }}
                </div>
        @enderror 
    </div>
    
{{-- <div class="form-group m-0">
    <div class="form-label">Bonus</div>
    <div class="custom-controls-stacked">
    
        <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input"
            type="checkbox" name="bonus" value="" id="">
            <label for="" class="custom-control-label">Bonus</label>
        </label>
    
    </div>
</div> --}}
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














 









   