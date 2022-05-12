@csrf


<div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Code Investissement
        </div>
    </div>
    <div style="display:none" >{{$o = $investi->id}}</div>
    <input id="code_inv" type="text" class="form-control" name="code_inv" value="{{$o}}" autocomplete="code_inv">
 
</div>  

{{-- <span>Vous etes sur le point d\'effectuer un retrait de compte. <br>Veuillez vous assurer de l'accord du client et d'avoir également la somme en <br> caisse à lui remettre. <br>Cette action est irreversible. Etes vous sur?</span> --}}
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Client
        </div>
    </div>
    <input id="investiman" type="text" class="form-control" name="investiman" value="{{ $investi->investiman}}" autocomplete="investiman">
</div> 

<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Jalon
        </div>
    </div>
    <input id="jalon" type="text" class="form-control" name="jalon" value="{{ $investi->jalon}}" autocomplete="jalon">
</div>
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Forfait
        </div>
    </div>
    <select class="form-control select2-show-search" name="forfait_id">
        <optgroup label="Forfait">
            {{-- @foreach($forfaits as $forfait)														  --}}
            <option value="{{$investi->forfait_id}}"> 
                {{$investi->forfait_id }}
            {{-- </option> --}}
            {{-- @endforeach						 --}}
        </optgroup>							
    </select>
</div>  


{{-- @if ($investi->jalon == 'Oui')
<div style="display:none" >{{$v = (($investi->montant * $investi->forfait->pourcentageJ )/ 100) + $investi->montant  }}</div>
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Montant
        </div>
    </div>
    <input id="montant" type="text" class="form-control" name="montant" value="{{$v}}" autocomplete="montant">
</div>   
@else
<div style="display:none" >{{$v0 = ($investi->montant * ($investi->forfait->pourcentageM * $investi->forfait->duree ) / 100) }}</div> 
<div style="display:none" >{{$v1 = $v0/2}}</div> 
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Montant
        </div>
    </div>
    <input id="montant" type="text" class="form-control" name="montant" value="{{ $v1}}" autocomplete="montant">
</div> 
@endif --}}




{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Forfait
        </div>
    </div>
    <select class="form-control select2-show-search @error('forfait_id') is-invalid @enderror" name="forfait_id">
        <optgroup label="Forfait">
            @foreach($forfaits as $forfait)														 
            <option value="{{$forfait->id}}" {{ $forfait->id ? 'selected' : '' }}> 
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
</div> --}}

{{-- <div class="input-group mb-4">
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

{{-- 
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Compte Client
        </div>
    </div>
    <select class="form-control select2-show-search @error('customer_id') is-invalid @enderror" name="customer_id">
        <optgroup label="client">
            @foreach($customers as $customer)														
            <option value="{{$customer->id}}" {{ $customer->id ? 'selected' : '' }}> {{$customer->code }} --- {{ $customer->name }} {{ $customer->prename }} --{{ $customer->email }}  - {{ $customer->tel }}   </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('customer_id')
             <div class="invalid-feedback">
                               {{ $errors->first('customer_id') }}
            </div>
    @enderror 
</div> --}}
{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-italic"></i>
        </div>
    </div>
    
    @if(Route::is('investir.investis.index'))
    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $investi->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du retait') }}" autofocus>
    @elseif(Route::is('diminish.diminishes.edit'))
    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $diminish->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du retrait') }}" autofocus>
    @endif
            @error('montant')
                <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                </div>
            @enderror
</div> --}}


{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date du retrait
        </div>
    </div>
    <input id="dateretrait" type="date" class="form-control @error('dateretrait') is-invalid @enderror" name="dateretrait" value="{{ old('dateretrait') ?? $retrait->dateretrait}}" autocomplete="dateretrait" autofocus placeholder="{{ __('Date du retrait') }}">
    @error('dateretrait')
        <div class="invalid-feedback">
                        {{ $errors->first('dateretrait') }}
    </div>
    @enderror
 </div> --}}













 









   