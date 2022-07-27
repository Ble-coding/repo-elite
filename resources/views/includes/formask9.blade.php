<div class="form-row mb-2">
       <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">AVEZ VOUS FAIT L’OBJET D’UNE REPRISE DE POSSESSION ? </div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" name="reprise" 
                        value="Ok" @if (old('reprise') ==  'Ok'
                        || $detail->reprise == 'Ok') checked @endif checked>
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="reprise" type="radio" class="custom-control-input"  name="reprise" 
                        value="Disok" @if (old('reprise') ==  'Disok'
                        || $detail->reprise == 'Disok') checked @endif>
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                    <input  value="{{ old('repriseD') ?? $detail->repriseD }}" class="form-control @error('repriseD') is-invalid @enderror" type="text" placeholder="{{ __('Detail') }}" id="repriseD" name="repriseD">
                                @error('repriseD')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('repriseD') }}
                                        </div>
                                @enderror
                </div>								
        </div>
</div>

<div class="form-row mb-2">
       <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">ETES VOUS PARTIE D’UNE RECLAMATION OU POURSUITE ?  </div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" name="reclamation" 
                        value="Ok" @if (old('reclamation') ==  'Ok'
                        || $detail->reclamation == 'Ok') checked @endif checked>
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="reclamation" type="radio" class="custom-control-input"  name="reclamation" 
                        value="Disok" @if (old('reclamation') ==  'Disok'
                        || $detail->reclamation == 'Disok') checked @endif>
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
             <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                <input  value="{{ old('reclamationD') ?? $detail->reclamationD }}" class="form-control @error('reclamationD') is-invalid @enderror" type="text" placeholder="{{ __('Reclamation') }}" id="reclamationD" name="reclamationD">
                                @error('reclamationD')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('reclamationD') }}
                                        </div>
                                @enderror
                </div>								
        </div>
</div>

<div class="form-row mb-2">
       <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">AVEZ VOUS FAIT FAILLITE ?  </div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" name="faillite" 
                        value="Ok" @if (old('faillite') ==  'Ok'
                        || $detail->faillite == 'Ok') checked @endif checked>
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="faillite" type="radio" class="custom-control-input"  name="faillite" 
                        value="Disok" @if (old('faillite') ==  'Disok'
                        || $detail->faillite == 'Disok') checked @endif>
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
             <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                <input  value="{{ old('failliteD') ?? $detail->failliteD }}" class="form-control @error('failliteD') is-invalid @enderror" type="text" placeholder="{{ __('Faillite') }}" id="failliteD" name="failliteD">
                                @error('failliteD')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('failliteD') }}
                                        </div>
                                @enderror
                </div>								
        </div>
</div>

<div class="form-row mb-2">
        <div class="form-group col-md-6 mb-0">
            <div class="form-group m-0">
                <div class="form-label">DEVEZ-VOUS DES IMPOTS ECHUS ? </div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input  type="radio" class="custom-control-input" name="echus" 
                        value="Ok" @if (old('echus') ==  'Ok'
                        || $detail->echus == 'Ok') checked @endif checked>
                        <span class="custom-control-label">Oui</span>
                    </label> 
                    <label class="custom-control custom-radio">
                        <input id="echus" type="radio" class="custom-control-input"  name="echus" 
                        value="Disok" @if (old('echus') ==  'Disok'
                        || $detail->echus == 'Non') checked @endif> 
                        <span class="custom-control-label">Non</span>
                    </label>              
                </div>
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
             <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                <input  value="{{ old('echusD') ?? $detail->echusD }}" class="form-control @error('echusD') is-invalid @enderror" type="text" placeholder="{{ __('Echu') }}" id="echusD" name="echusD">
                                @error('echusD')
                                        <div class="invalid-feedback">
                                                            {{ $errors->first('echusD') }}
                                        </div>
                                @enderror
                </div>								
        </div>
</div>