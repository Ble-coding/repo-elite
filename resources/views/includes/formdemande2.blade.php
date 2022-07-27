
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-italic"></i>
                    </div>
                </div> 
                <input  value="{{ old('montant') ?? $besoin->montant }}" class="form-control @error('montant') is-invalid @enderror" type="text" placeholder="{{ __('Montant') }}" id="montant" name="montant">
                @error('montant')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sliders"></i>
                    </div>
                </div>
                <input  value="{{ old('objet') ?? $besoin->objet }}" class="form-control @error('objet') is-invalid @enderror" type="text" placeholder="{{ __('OBJET DU PRET') }}" id="objet" name="objet">
                @error('objet')
                    <div class="invalid-feedback">
                        {{ $errors->first('objet') }}
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
                        <i class="fe fe-droplet"></i>
                    </div>
                </div> 
                <input  value="{{ old('auto') ?? $besoin->montant }}" class="form-control @error('auto') is-invalid @enderror" type="text" placeholder="{{ __('AUTOFINANCEMENT') }}" id="auto" name="auto">
                @error('auto')
                    <div class="invalid-feedback">
                        {{ $errors->first('auto') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-compass"></i>
                    </div>
                </div> 
                <input  value="{{ old('elite') ?? $besoin->elite }}" class="form-control @error('elite') is-invalid @enderror" type="text" placeholder="{{ __('ELITE CREDIT ') }}" id="elite" name="elite">
                @error('elite')
                    <div class="invalid-feedback">
                        {{ $errors->first('elite') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-italic"></i>
                    </div>
                </div>
                <input  value="{{ old('cout') ?? $besoin->cout }}" class="form-control @error('cout') is-invalid @enderror" type="text" placeholder="{{ __('Cout Total') }}" id="cout" name="cout">
                @error('cout')
                    <div class="invalid-feedback">
                        {{ $errors->first('cout') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>


    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Choisir le type de pret
                </div>
            </div>
            <select id="pret_id" class="form-control select2-show-search  @error('pret_id') is-invalid @enderror" name="pret_id">
                <optgroup label="Pret">
                    @foreach($prets as $pret)
                                        <option value="{{ $pret->id }}" {{  $conjoint->pret_id == $pret->id ? 'selected' :  ''}}>
                                        {{ $pret->name}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('pret_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('pret_id') }}
                    </div>
                @enderror
        </div>											
    </div>

   


  










      

