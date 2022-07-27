

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('garanties') ?? $propo->garanties }}" class="form-control @error('garanties') is-invalid @enderror" type="text" placeholder="{{ __('Garanties proposées ') }}" id="garanties" name="garanties">
                @error('garanties')
                    <div class="invalid-feedback">
                        {{ $errors->first('garanties') }}
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
                <input  value="{{ old('amount') ?? $propo->amount }}" class="form-control @error('amount') is-invalid @enderror" type="text" placeholder="{{ __('Montant') }}" id="amount" name="amount">
                @error('amount')
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
              <div class="form-group col-md-6 mb-0">
                 <div class="form-group m-0">
                    <div class="form-label">En place</div>
                       <div class="custom-controls-stacked">
                        <label class="custom-control custom-radio">
                            <input  type="radio" class="custom-control-input" name="place" 
                            value="Oui" @if (old('place') ==  'Oui'
                            || $propo->place == 'Oui') checked @endif checked>
                            <span class="custom-control-label">Oui</span>
                        </label> 
                        <label class="custom-control custom-radio">
                            <input id="place" type="radio" class="custom-control-input"  name="place" 
                            value="Non" @if (old('place') ==  'Non'
                            || $propo->place == 'Non') checked @endif> 
                            <span class="custom-control-label">Non</span>
                        </label>              
                    </div>
                </div>	
              </div>									
        </div>
          <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Expiration
                    </div>
                </div>
                <input  value="{{ old('dateE') ?? $propo->dateE }}" class="form-control @error('dateE') is-invalid @enderror" type="date" placeholder="{{ __('Date') }}" id="dateE" name="dateE">
                @error('dateE')
                    <div class="invalid-feedback">
                        {{ $errors->first('dateE') }}
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
                <input  value="{{ old('garanties1') ?? $propo->garanties1 }}" class="form-control @error('garanties1') is-invalid @enderror" type="text" placeholder="{{ __('Garanties proposées 1') }}" id="garanties1" name="garanties1">
                @error('garanties1')
                    <div class="invalid-feedback">
                        {{ $errors->first('garanties1') }}
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
                <input  value="{{ old('amount1') ?? $propo->amount1 }}" class="form-control @error('amount1') is-invalid @enderror" type="text" placeholder="{{ __('Montant 1') }}" id="amount1" name="amount1">
                @error('amount1')
                    <div class="invalid-feedback">
                        {{ $errors->first('amount1') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-row">
         <div class="form-group col-md-6 mb-0">
                    <div class="form-group m-0">
                      <div class="form-label">En place</div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input  type="radio" class="custom-control-input" name="place1" 
                                value="Oui" @if (old('place1') ==  'Oui'
                                || $propo->place1 == 'Oui') checked @endif checked>
                                <span class="custom-control-label">Oui</span>
                            </label> 
                            <label class="custom-control custom-radio">
                                <input id="place" type="radio" class="custom-control-input"  name="place1" 
                                value="Non" @if (old('place1') ==  'Non'
                                || $propo->place1 == 'Non') checked @endif> 
                                <span class="custom-control-label">Non</span>
                            </label>              
                        </div>	
                    </div>				
        </div>
         <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Expiration
                    </div>
                </div>
                <input  value="{{ old('dateE1') ?? $propo->dateE1 }}" class="form-control @error('dateE1') is-invalid @enderror" type="date" placeholder="{{ __('Date') }}" id="dateE1" name="dateE1">
                @error('dateE1')
                    <div class="invalid-feedback">
                        {{ $errors->first('dateE1') }}
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
                <input  value="{{ old('garanties2') ?? $propo->garanties2 }}" class="form-control @error('garanties2') is-invalid @enderror" type="text" placeholder="{{ __('Garanties proposées 2') }}" id="garanties2" name="garanties2">
                @error('garanties2')
                    <div class="invalid-feedback">
                        {{ $errors->first('garanties2') }}
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
                <input  value="{{ old('amount2') ?? $propo->amount2 }}" class="form-control @error('amount2') is-invalid @enderror" type="text" placeholder="{{ __('Montant 2') }}" id="amount2" name="amount2">
                @error('amount2')
                    <div class="invalid-feedback">
                        {{ $errors->first('amount2') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-row">
         <div class="form-group col-md-6 mb-0">
                    <div class="form-group m-0">
                      <div class="form-label">En place</div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input  type="radio" class="custom-control-input" name="place2" 
                                value="Oui" @if (old('place2') ==  'Oui'
                                || $propo->place2 == 'Oui') checked @endif checked>
                                <span class="custom-control-label">Oui</span>
                            </label> 
                            <label class="custom-control custom-radio">
                                <input id="place" type="radio" class="custom-control-input"  name="place2" 
                                value="Non" @if (old('place2') ==  'Non'
                                || $propo->place2 == 'Non') checked @endif> 
                                <span class="custom-control-label">Non</span>
                            </label>              
                        </div>
                    </div>						
        </div>
         <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Expiration
                    </div>
                </div>
                <input  value="{{ old('dateE1') ?? $propo->dateE1 }}" class="form-control @error('dateE1') is-invalid @enderror" type="date" placeholder="{{ __('Date') }}" id="dateE1" name="dateE1">
                @error('dateE1')
                    <div class="invalid-feedback">
                        {{ $errors->first('dateE1') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
















