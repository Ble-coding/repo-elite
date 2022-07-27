
<div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('pretB') ?? $passif->pretB }}" class="form-control @error('pretB') is-invalid @enderror" type="text" placeholder="{{ __('PRETS BANCAIRES') }}" id="pretB" name="pretB">
                @error('pretB')
                    <div class="invalid-feedback">
                        {{ $errors->first('pretB') }}
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
                <input  value="{{ old('biens') ?? $passif->biens }}" class="form-control @error('biens') is-invalid @enderror" type="text" placeholder="{{ __('HYPOTHEQUES SUR BIENS IMMOBILIERS') }}" id="biens" name="biens">
                @error('biens')
                    <div class="invalid-feedback">
                        {{ $errors->first('biens') }}
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
                                <i class="fe fe-map"></i>
                            </div>
                        </div>
                        <input  value="{{ old('carteCredit') ?? $passif->carteCredit }}" class="form-control @error('carteCredit') is-invalid @enderror" type="text" placeholder="{{ __('CARTES DE CREDIT') }}" id="carteCredit" name="carteCredit">
                        @error('carteCredit')
                            <div class="invalid-feedback">
                                {{ $errors->first('carteCredit') }}
                            </div>
                        @enderror
                    </div>										
        </div>
        <div class="form-group col-md-4 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-map"></i>
                        </div>
                    </div>
                    <input  value="{{ old('carteCredit1') ?? $passif->carteCredit1 }}" class="form-control @error('carteCredit1') is-invalid @enderror" type="text" placeholder="{{ __('CARTES DE CREDIT 1') }}" id="carteCredit1" name="carteCredit1">
                    @error('carteCredit1')
                        <div class="invalid-feedback">
                            {{ $errors->first('carteCredit1') }}
                        </div>
                    @enderror
                </div>										
        </div>
          <div class="form-group col-md-4 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-map"></i>
                        </div>
                    </div>
                    <input  value="{{ old('carteCredit2') ?? $passif->carteCredit2 }}" class="form-control @error('carteCredit2') is-invalid @enderror" type="text" placeholder="{{ __('CARTES DE CREDIT 2') }}" id="carteCredit2" name="carteCredit2">
                    @error('carteCredit2')
                        <div class="invalid-feedback">
                            {{ $errors->first('carteCredit2') }}
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
                <input  value="{{ old('autres') ?? $passif->autres }}" class="form-control @error('autres') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES OBLIGATIONS') }}" id="autres" name="autres">
                @error('autres')
                    <div class="invalid-feedback">
                        {{ $errors->first('autres') }}
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
                <input  value="{{ old('autres1') ?? $passif->autres1 }}" class="form-control @error('autres1') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES OBLIGATIONS 1') }}" id="autres1" name="autres1">
                @error('autres1')
                    <div class="invalid-feedback">
                        {{ $errors->first('autres1') }}
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
                    <input  value="{{ old('passife') ?? $passif->passife }}" class="form-control @error('passife') is-invalid @enderror" type="text" placeholder="{{ __('(B) PASSIF TOTAL') }}" id="passife" name="passife">
                    @error('passife')
                        <div class="invalid-feedback">
                            {{ $errors->first('passife') }}
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
                <input  value="{{ old('valeur') ?? $passif->valeur }}" class="form-control @error('valeur') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR NETTE (A-B)') }}" id="valeur" name="valeur">
                @error('valeur')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur') }}
                    </div>
                @enderror
            </div>												
        </div>
</div>
<div class="form-row mb-2">
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">OBLIGATIONS DIVERSES</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" name="diverses" 
                        value="Oui" @if (old('diverses') ==  'Oui'
                        || $passif->diverses == 'Oui') checked @endif >
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="diverses" type="radio" class="custom-control-input"  name="diverses" 
                        value="Non" @if (old('diverses') ==  'Non'
                        || $passif->anterieur == 'Non') checked @endif checked>
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">AVEZ-VOUS D’AUTRES OBLIGATIONS (COSIGNATAIRE, ENDOSSEUR, CAUTION)?</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" onclick="displayFormis(this)" 
                        name="cosigne" value="Oui" @if (old('cosigne') ==  'Oui'
                        || $passif->cosigne == 'Oui') checked @endif  >
                        <span class="custom-control-label">Oui</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" onclick="displayFormis(this)" class="custom-control-input" 
                        name="cosigne" @if (old('cosigne') ==  'Non'
                        || $passif->cosigne == 'Non') checked @endif checked value="Non">
                        <span class="custom-control-label">Non</span>
                    </label>             
                </div>
            </div>										
        </div>
</div>

    
    <div style="visibility:hidden ; position:relative" id="cccform">

        <div class="form-row">
            <div class="form-group col-md-6 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                            <input  value="{{ old('mt') ?? $passif->mt }}" class="form-control @error('mt') is-invalid @enderror" type="text" placeholder="{{ __('PRECISER LE MONTANT DE CES OBLIGATIONS ') }}" id="mt" name="mt">
                                @error('mt')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('mt') }}
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
                      <input  value="{{ old('nature') ?? $passif->nature }}" class="form-control @error('nature') is-invalid @enderror" type="text" placeholder="{{ __('PRECISER LA NATURE DE CES OBLIGATIONS ') }}" id="nature" name="nature">
                                @error('nature')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('nature') }}
                                        </div>
                                @enderror
                </div>											
            </div>
        </div>

    </div>

 
    

 

   




  










      

