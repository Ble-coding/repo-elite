
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('rev_mens') ?? $revenu->rev_mens }}" class="form-control @error('rev_mens') is-invalid @enderror" type="text" placeholder="{{ __('Revenu mensuel') }}" id="rev_mens" name="rev_mens">
                @error('rev_mens')
                    <div class="invalid-feedback">
                        {{ $errors->first('rev_mens') }}
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
                <input  value="{{ old('comm') ?? $revenu->comm }}" class="form-control @error('comm') is-invalid @enderror" type="text" placeholder="{{ __('Commissions') }}" id="comm" name="comm">
                @error('comm')
                    <div class="invalid-feedback">
                        {{ $errors->first('comm') }}
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
                <input  value="{{ old('div_int') ?? $revenu->div_int }}" class="form-control @error('div_int') is-invalid @enderror" type="text" placeholder="{{ __('Dividendes et interets') }}" id="div_int" name="div_int">
                @error('div_int')
                    <div class="invalid-feedback">
                        {{ $errors->first('div_int') }}
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
                <input  value="{{ old('rev_loc') ?? $revenu->rev_loc }}" class="form-control @error('rev_loc') is-invalid @enderror" type="text" placeholder="{{ __('Revenus de location') }}" id="rev_loc" name="rev_loc">
                @error('rev_loc')
                    <div class="invalid-feedback">
                        {{ $errors->first('rev_loc') }}
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
                <input  value="{{ old('autre_rev1') ?? $revenu->autre_rev1 }}" class="form-control @error('autre_rev1') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 1') }}" id="autre_rev1" name="autre_rev1">
                @error('autre_rev1')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev1') }}
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
                <input  value="{{ old('autre_rev2') ?? $revenu->autre_rev2 }}" class="form-control @error('autre_rev2') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 2') }}" id="autre_rev2" name="autre_rev2">
                @error('autre_rev2')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev2') }}
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
                <input  value="{{ old('rev_mens_conj') ?? $revenu->rev_mens_conj }}" class="form-control @error('rev_mens_conj') is-invalid @enderror" type="text" placeholder="{{ __('Revenu mensuel du conjoint') }}" id="rev_mens_conj" name="rev_mens_conj">
                @error('rev_mens_conj')
                    <div class="invalid-feedback">
                        {{ $errors->first('rev_mens_conj') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('autre_rev_conj') ?? $revenu->autre_rev_conj }}" class="form-control @error('autre_rev_conj') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus du conjoint') }}" id="autre_rev_conj" name="autre_rev_conj">
                @error('autre_rev_conj')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev_conj') }}
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
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div>
                <input  value="{{ old('tot_rev') ?? $revenu->tot_rev }}" class="form-control @error('tot_rev') is-invalid @enderror" placeholder="{{ __('Total revenus A') }}" type="text"  id="tot_rev" name="tot_rev">
                @error('tot_rev')
                    <div class="invalid-feedback">
                        {{ $errors->first('tot_rev') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            {{-- <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input value="{{ old('proprioS') ?? $spousse->proprioS }}" class="form-control @error('proprioS') is-invalid @enderror" type="text" placeholder="{{ __('Proprietaire du fonds') }}" id="proprioS" name="proprioS">
                @error('proprioS')
                    <div class="invalid-feedback">
                        {{ $errors->first('proprioS') }}
                    </div>
                @enderror
            </div>											 --}}
        </div>
    </div>
    {{-- <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-phone"></i>
                    </div>
                </div> 
                <input  value="{{ old('patenteS') ?? $spousse->patenteS }}" class="form-control @error('patenteS') is-invalid @enderror" type="text" placeholder="{{ __('Patente DGI') }}" id="patenteS" name="patenteS">
                @error('patenteS')
                    <div class="invalid-feedback">
                        {{ $errors->first('patenteS') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-phone"></i>
                    </div>
                </div>
                <input  value="{{ old('nbr_persS') ?? $spousse->nbr_persS }}" class="form-control @error('nbr_persS') is-invalid @enderror" type="number" placeholder="{{ __('Nombre de persones employees ') }}" id="nbr_persS" name="nbr_persS">
                @error('nbr_persS')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_persS') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div> --}}
 













      

