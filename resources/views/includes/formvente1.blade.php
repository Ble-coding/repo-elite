<div class="input-group mb-4">
    <div class="form-group m-0">
        <div class="form-label">Mode de paiement</div>
        <div class="custom-controls-stacked">
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="payment" value="Unique" @if (old('payment') ==  'Unique'
                || $vente->payment == 'Unique') checked @endif checked >
                <span class="custom-control-label">Unique</span>
            </label>
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="payment" @if (old('payment') ==  'Tranche'
                || $vente->payment == 'Tranche') checked @endif value="Tranche">
                <span class="custom-control-label">Tranche</span>
            </label>              
        </div>
    </div>										
</div>
<div class="form-row">
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Mois
                </div>
            </div>
            <input  value="{{ old('duree') ?? $vente->duree }}" class="form-control @error('duree') is-invalid @enderror" type="number" min="1" max="3" placeholder="{{ __('Durée') }}" id="duree" name="duree">
            @error('duree')
                     <div class="invalid-feedback">
                                       {{ $errors->first('duree') }}
                    </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-italic"></i>
                </div>
            </div>
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $vente->montant  }}"  autocomplete="montant" placeholder="{{ __('Valeur de la vente') }}" autofocus>
                    @error('montant')
                        <div class="invalid-feedback">
                                        {{ $errors->first('montant') }}
                        </div>
                    @enderror
        </div>										
    </div>    
</div>


