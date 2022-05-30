




        <div class="form-row mb-2">
            <div class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        COMPTE ELITE CREDIT
                    </div>
                </div>
                {{-- onchange="valueGet()" --}}
                <select class="form-control select2-show-search @error('credit_id') is-invalid @enderror"   name="credit_id">
                    <optgroup label="Credit">
                        @foreach($credits as $credit)	
                                            <option value="{{ $credit->id }}" {{  $recharge->credit_id == $credit->id ? 'selected' :  ''}}>
                                                {{ $credit->name }} </option>
                                            @endforeach
                                    
                    </optgroup>							
                </select>
                    @error('credit_id')
                        <div class="invalid-feedback">
                                        {{ $errors->first('credit_id') }}
                        </div>
                    @enderror 
            </div>

        
        
            
            <div  class="form-group col-md-6 mb-4"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        COMPTE CAISSE
                    </div>
                </div>
                <select class="form-control select2-show-search @error('caisse_id') is-invalid @enderror" name="caisse_id">
                    <optgroup label="Caisse">
                        @foreach($caisses as $caisse)	
                                            <option value="{{ $caisse->id }}" {{  $recharge->caisse_id == $caisse->id ? 'selected' :  ''}}>
                                                {{ $caisse->name }}</option>
                                            @endforeach
                                    
                    </optgroup>							
                </select>
                    @error('caisse_id')
                        <div class="invalid-feedback">
                                        {{ $errors->first('caisse_id') }}
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
                    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $recharge->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant à envoyer') }}" autofocus>
                    @error('montant')
                        <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>

       