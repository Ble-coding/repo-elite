
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('compagnie') ?? $assurance->compagnie }}" class="form-control @error('compagnie') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE') }}" id="compagnie" name="compagnie">
                @error('compagnie')
                    <div class="invalid-feedback">
                        {{ $errors->first('compagnie') }}
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
                <input  value="{{ old('benef') ?? $assurance->benef }}" class="form-control @error('benef') is-invalid @enderror" type="text" placeholder="{{ __('BENEFICIAIRE') }}" id="benef" name="benef">
                @error('benef')
                    <div class="invalid-feedback">
                        {{ $errors->first('benef') }}
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
                <input  value="{{ old('nominal') ?? $assurance->nominal }}" class="form-control @error('nominal') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR NOMINALE') }}" id="nominal" name="nominal">
                @error('nominal')
                    <div class="invalid-feedback">
                        {{ $errors->first('nominal') }}
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
                <input  value="{{ old('compagnie1') ?? $assurance->compagnie1 }}" class="form-control @error('compagnie1') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE 1') }}" id="compagnie1" name="compagnie1">
                @error('compagnie1')
                    <div class="invalid-feedback">
                        {{ $errors->first('compagnie1') }}
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
                <input  value="{{ old('benef1') ?? $assurance->benef1 }}" class="form-control @error('benef1') is-invalid @enderror" type="text" placeholder="{{ __('BENEFICIAIRE 1') }}" id="benef1" name="benef1">
                @error('benef1')
                    <div class="invalid-feedback">
                        {{ $errors->first('benef1') }}
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
                <input  value="{{ old('nominal1') ?? $assurance->nominal1 }}" class="form-control @error('nominal1') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR NOMINALE 1') }}" id="nominal1" name="nominal1">
                @error('nominal1')
                    <div class="invalid-feedback">
                        {{ $errors->first('nominal1') }}
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
                <input  value="{{ old('nbr_part1') ?? $assurance->nbr_part1 }}" class="form-control @error('nbr_part1') is-invalid @enderror" type="number" placeholder="{{ __('NOMBRE DE PARTS/ACTIONS 1') }}" id="nbr_part1" name="nbr_part1">
                @error('nbr_part1')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_part1') }}
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
                <input  value="{{ old('compagnie2') ?? $assurance->compagnie2 }}" class="form-control @error('compagnie2') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE 2') }}" id="compagnie2" name="compagnie2">
                @error('compagnie2')
                    <div class="invalid-feedback">
                        {{ $errors->first('compagnie2') }}
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
                <input  value="{{ old('benef2') ?? $assurance->benef2 }}" class="form-control @error('benef2') is-invalid @enderror" type="text" placeholder="{{ __('BENEFICIAIRE 2') }}" id="benef2" name="benef2">
                @error('benef2')
                    <div class="invalid-feedback">
                        {{ $errors->first('benef2') }}
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
                <input  value="{{ old('nominal3') ?? $assurance->nominal3 }}" class="form-control @error('nominal3') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR NOMINALE 3') }}" id="nominal3" name="nominal3">
                @error('nominal3')
                    <div class="invalid-feedback">
                        {{ $errors->first('nominal3') }}
                    </div>
                @enderror
            </div>											
        </div>









        
    </div>