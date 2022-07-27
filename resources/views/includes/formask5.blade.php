
 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('sgbk') ?? $actif->sgbk }}" class="form-control @error('sgbk') is-invalid @enderror" type="text" placeholder="{{ __('ENCAISSE SGBK  ') }}" id="sgbk" name="sgbk">
                @error('sgbk')
                    <div class="invalid-feedback">
                        {{ $errors->first('sgbk') }}
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
                <input  value="{{ old('institutions') ?? $actif->institutions }}" class="form-control @error('institutions') is-invalid @enderror" type="text" placeholder="{{ __('ENCAISSE – AUTRES INSTITUTIONS FINANCIERES  ') }}" id="institutions" name="institutions">
                @error('institutions')
                    <div class="invalid-feedback">
                        {{ $errors->first('institutions') }}
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
                <input  value="{{ old('assurance') ?? $actif->assurance }}" class="form-control @error('assurance') is-invalid @enderror" type="text" placeholder="{{ __('ASSURANCE-VIE – VALEUR DE RACHAT ') }}" id="assurance" name="assurance">
                @error('assurance')
                    <div class="invalid-feedback">
                        {{ $errors->first('assurance') }}
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
                <input  value="{{ old('compte') ?? $actif->compte }}" class="form-control @error('compte') is-invalid @enderror" type="text" placeholder="{{ __('COMPTES DE RETRAITES') }}" id="compte" name="compte">
                @error('compte')
                    <div class="invalid-feedback">
                        {{ $errors->first('compte') }}
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
                <input  value="{{ old('negociable') ?? $actif->negociable }}" class="form-control @error('negociable') is-invalid @enderror" type="text" placeholder="{{ __('TITRES NEGOCIABLES') }}" id="negociable" name="negociable">
                @error('negociable')
                    <div class="invalid-feedback">
                        {{ $errors->first('negociable') }}
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
                <input  value="{{ old('sommes') ?? $actif->sommes }}" class="form-control @error('sommes') is-invalid @enderror" type="text" placeholder="{{ __('COMPTES CLIENTS ET SOMMES PRETEES') }}" id="sommes" name="sommes">
                @error('sommes')
                    <div class="invalid-feedback">
                        {{ $errors->first('sommes') }}
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
                        <i class="fe fe-user-plus"></i>
                    </div>
                </div>
                <input  value="{{ old('sommes1') ?? $actif->sommes1 }}" class="form-control @error('sommes1') is-invalid @enderror" type="text" placeholder="{{ __('COMPTES CLIENTS ET SOMMES PRETEES 1 ') }}" id="sommes1" name="sommes1">
                @error('sommes1')
                    <div class="invalid-feedback">
                        {{ $errors->first('sommes1') }}
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
                <input  value="{{ old('auto') ?? $actif->auto }}" class="form-control @error('auto') is-invalid @enderror" type="text" placeholder="{{ __('AUTOMOBILES') }}" id="auto" name="auto">
                @error('auto')
                    <div class="invalid-feedback">
                        {{ $errors->first('auto') }}
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
                <input  value="{{ old('immo') ?? $actif->immo }}" class="form-control @error('immo') is-invalid @enderror" type="text" placeholder="{{ __('BIENS IMMOBILIERS ') }}" id="immo" name="immo">
                @error('immo')
                    <div class="invalid-feedback">
                        {{ $errors->first('immo') }}
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
                <input  value="{{ old('int') ?? $actif->int }}" class="form-control @error('int') is-invalid @enderror" type="text" placeholder="{{ __('INTERETS COMMERCIAUX') }}" id="int" name="int">
                @error('int')
                    <div class="invalid-feedback">
                        {{ $errors->first('int') }}
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
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('element') ?? $actif->element }}" class="form-control @error('element') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES ELEMENTS D’ACTIFS ') }}" id="element" name="element">
                @error('element')
                    <div class="invalid-feedback">
                        {{ $errors->first('element') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('element1') ?? $actif->element1 }}" class="form-control @error('element1') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES ELEMENTS D’ACTIFS 1 ') }}" id="element1" name="element1">
                @error('element1')
                    <div class="invalid-feedback">
                        {{ $errors->first('element1') }}
                    </div>
                @enderror
            </div>											
        </div>
         <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('element2') ?? $actif->element2 }}" class="form-control @error('element2') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES ELEMENTS D’ACTIFS 2') }}" id="element2" name="element2">
                @error('element2')
                    <div class="invalid-feedback">
                        {{ $errors->first('element2') }}
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
                <input  value="{{ old('actif_tot') ?? $actif->actif_tot }}" class="form-control @error('actif_tot') is-invalid @enderror" type="text" placeholder="{{ __('(A) ACTIF TOTAL') }}" id="actif_tot" name="actif_tot">
                @error('actif_tot')
                    <div class="invalid-feedback">
                        {{ $errors->first('actif_tot') }}
                    </div>
                @enderror
            </div>											
        </div>
        {{-- <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user-plus"></i>
                    </div>
                </div>
                <input  value="{{ old('prename3') ?? $actif->prename3 }}" class="form-control @error('prename3') is-invalid @enderror" type="text" placeholder="{{ __('Prenom 3') }}" id="prename3" name="prename3">
                @error('prename3')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename3') }}
                    </div>
                @enderror
            </div>										
        </div> --}}
    </div>

