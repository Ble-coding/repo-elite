
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('rev_mens') ?? $recette->rev_mens }}" class="form-control @error('rev_mens') is-invalid @enderror" type="text" placeholder="{{ __('REVENU MENSUEL ') }}" id="rev_mens" name="rev_mens">
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
                <input  value="{{ old('comm') ?? $recette->comm }}" class="form-control @error('comm') is-invalid @enderror" type="text" placeholder="{{ __('Commissions') }}" id="comm" name="comm">
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
                <input  value="{{ old('div_int') ?? $recette->div_int }}" class="form-control @error('div_int') is-invalid @enderror" type="text" placeholder="{{ __('Dividendes et interets') }}" id="div_int" name="div_int">
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
                <input  value="{{ old('rev_loc') ?? $recette->rev_loc }}" class="form-control @error('rev_loc') is-invalid @enderror" type="text" placeholder="{{ __(' REVENUS DE LOCATION') }}" id="rev_loc" name="rev_loc">
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
                <input  value="{{ old('autre_rev1') ?? $recette->autre_rev1 }}" class="form-control @error('autre_rev1') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 1') }}" id="autre_rev1" name="autre_rev1">
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
                <input  value="{{ old('autre_rev2') ?? $recette->autre_rev2 }}" class="form-control @error('autre_rev2') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 2') }}" id="autre_rev2" name="autre_rev2">
                @error('autre_rev2')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev2') }}
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
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('tot_part') ?? $recette->tot_part }}" class="form-control @error('tot_part') is-invalid @enderror" type="text" placeholder="{{ __('TOTAL PARTIEL') }}" id="tot_part" name="tot_part">
                @error('tot_part')
                    <div class="invalid-feedback">
                        {{ $errors->first('tot_part') }}
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
                <input  value="{{ old('rev_mens_conj') ?? $recette->rev_mens_conj }}" class="form-control @error('rev_mens_conj') is-invalid @enderror" type="text" placeholder="{{ __('revenu mensuel du conjoint') }}" id="rev_mens_conj" name="rev_mens_conj">
                @error('rev_mens_conj')
                    <div class="invalid-feedback">
                        {{ $errors->first('rev_mens_conj') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('autre_rev_conj') ?? $recette->autre_rev_conj }}" class="form-control @error('autre_rev_conj') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus du conjoint') }}" id="autre_rev_conj" name="autre_rev_conj">
                @error('autre_rev_conj')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev_conj') }}
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
                <input  value="{{ old('autre_rev3') ?? $recette->autre_rev3 }}" class="form-control @error('autre_rev3') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 3') }}" id="autre_rev3" name="autre_rev3">
                @error('autre_rev3')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev3') }}
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
                <input  value="{{ old('autre_rev4') ?? $recette->autre_rev4 }}" class="form-control @error('autre_rev4') is-invalid @enderror" type="text" placeholder="{{ __('Autres revenus 4') }}" id="autre_rev4" name="autre_rev4">
                @error('autre_rev4')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_rev4') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-4 mb-0">
       <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div>
                <input  value="{{ old('tot_rev') ?? $recette->tot_rev }}" class="form-control @error('tot_rev') is-invalid @enderror" placeholder="{{ __('REVENUS MENSUELS TOTAUX') }}" type="text"  id="tot_rev" name="tot_rev">
                @error('tot_rev')
                    <div class="invalid-feedback">
                        {{ $errors->first('tot_rev') }}
                    </div>
                @enderror
            </div>	
        </div>
    </div>














      

