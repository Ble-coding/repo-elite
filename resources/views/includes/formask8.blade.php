
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('vers_hyp') ?? $spent->vers_hyp }}" class="form-control @error('vers_hyp') is-invalid @enderror" type="text" placeholder="{{ __('VERSEMENTS HYPOTHECAIRES / LOYER') }}" id="vers_hyp" name="vers_hyp">
                @error('vers_hyp')
                    <div class="invalid-feedback">
                        {{ $errors->first('vers_hyp') }}
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
                <input  value="{{ old('impt_fon') ?? $spent->impt_fon }}" class="form-control @error('impt_fon') is-invalid @enderror" type="text" placeholder="{{ __('IMPOTS FONCIERS') }}" id="impt_fon" name="impt_fon">
                @error('impt_fon')
                    <div class="invalid-feedback">
                        {{ $errors->first('impt_fon') }}
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
                <input  value="{{ old('impt_rev') ?? $spent->impt_rev }}" class="form-control @error('impt_rev') is-invalid @enderror" type="text" placeholder="{{ __('IMPOT SUR LE REVENU') }}" id="impt_rev" name="impt_rev">
                @error('impt_rev')
                    <div class="invalid-feedback">
                        {{ $errors->first('impt_rev') }}
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
                <input  value="{{ old('prime') ?? $spent->prime }}" class="form-control @error('prime') is-invalid @enderror" type="text" placeholder="{{ __('Primes d\'assurances') }}" id="prime" name="prime">
                @error('prime')
                    <div class="invalid-feedback">
                        {{ $errors->first('prime') }}
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
                <input  value="{{ old('carte_credit') ?? $spent->carte_credit }}" class="form-control @error('carte_credit') is-invalid @enderror" type="text" placeholder="{{ __('Cartes de credit') }}" id="carte_credit" name="carte_credit">
                @error('carte_credit')
                    <div class="invalid-feedback">
                        {{ $errors->first('carte_credit') }}
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
                <input  value="{{ old('rembourse') ?? $spent->rembourse }}" class="form-control @error('rembourse') is-invalid @enderror" type="text" placeholder="{{ __('REMBOURSEMENTS PRETS') }}" id="rembourse" name="rembourse">
                @error('rembourse')
                    <div class="invalid-feedback">
                        {{ $errors->first('rembourse') }}
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
                <input  value="{{ old('pension') ?? $spent->pension }}" class="form-control @error('pension') is-invalid @enderror" type="text" placeholder="{{ __('Pensions alimentaires') }}" id="pension" name="pension">
                @error('pension')
                    <div class="invalid-feedback">
                        {{ $errors->first('pension') }}
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
                <input  value="{{ old('autre_dep') ?? $spent->autre_dep }}" class="form-control @error('autre_dep') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES DEPENSES 1') }}" id="autre_dep" name="autre_dep">
                @error('autre_dep')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep') }}
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
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                <input  value="{{ old('autre_dep1') ?? $spent->autre_dep1 }}" class="form-control @error('autre_dep1') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES DEPENSES 2') }}" id="autre_dep1" name="autre_dep1">
                @error('autre_dep1')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep1') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                <input  value="{{ old('autre_dep2') ?? $spent->autre_dep2 }}" class="form-control @error('autre_dep2') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES DEPENSES 3') }}" id="autre_dep2" name="autre_dep2">
                @error('autre_dep2')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep2') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                <input  value="{{ old('autre_dep3') ?? $spent->autre_dep3 }}" class="form-control @error('autre_dep3') is-invalid @enderror" type="text" placeholder="{{ __('AUTRES DEPENSES 4') }}" id="autre_dep3" name="autre_dep3">
                @error('autre_dep3')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep3') }}
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
                        <i class="fe fe-phone"></i>
                    </div>
                </div> 
                <input  value="{{ old('tot_dep') ?? $spent->tot_dep }}" class="form-control @error('tot_dep') is-invalid @enderror" type="text" placeholder="{{ __('DEPENSES ANNUELLES TOTALES') }}" id="tot_dep" name="tot_dep">
                @error('tot_dep')
                    <div class="invalid-feedback">
                        {{ $errors->first('tot_dep') }}
                    </div>
                @enderror
            </div>											
        </div>
    </div>
 













      

