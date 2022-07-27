
<div class="form-row">
        <div class="form-group col-md-6 mb-0">
         <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('name_ref') ?? $personnel->name_ref }}" class="form-control @error('name_ref') is-invalid @enderror" type="text" placeholder="{{ __('NOM REFERENCE 1') }}" id="name_ref" name="name_ref">
                @error('name_ref')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_ref') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
         <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('prename_ref') ?? $personnel->prename_ref }}" class="form-control @error('prename_ref') is-invalid @enderror" type="text" placeholder="{{ __('PRENOM REFERENCE 1') }}" id="prename_ref" name="prename_ref">
                @error('prename_ref')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename_ref') }}
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
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('adressRef') ?? $personnel->adressRef }}" class="form-control @error('adressRef') is-invalid @enderror" type="text" placeholder="{{ __('ADRESSE REFERENCE 1') }}" id="adressRef" name="adressRef">
                @error('adressRef')
                    <div class="invalid-feedback">
                        {{ $errors->first('adressRef') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
         <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('telRef') ?? $personnel->telRef }}" class="form-control @error('telRef') is-invalid @enderror" type="tel" placeholder="{{ __('TELEPHONE (S) REFERENCE 1 ') }}" id="telRef" name="telRef">
                @error('telRef')
                    <div class="invalid-feedback">
                        {{ $errors->first('telRef') }}
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
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('name_ref1') ?? $personnel->name_ref1 }}" class="form-control @error('name_ref1') is-invalid @enderror" type="text" placeholder="{{ __('NOM REFERENCE 2') }}" id="name_ref1" name="name_ref1">
                @error('name_ref1')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_ref1') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
         <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('prename_ref1') ?? $personnel->prename_ref1 }}" class="form-control @error('prename_ref1') is-invalid @enderror" type="text" placeholder="{{ __('PRENOM REFERENCE 2') }}" id="prename_ref1" name="prename_ref1">
                @error('prename_ref1')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename_ref1') }}
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
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('adressRef1') ?? $personnel->adressRef1 }}" class="form-control @error('adressRef1') is-invalid @enderror" type="text" placeholder="{{ __('ADRESSE REFERENCE 2') }}" id="adressRef1" name="adressRef1">
                @error('adressRef1')
                    <div class="invalid-feedback">
                        {{ $errors->first('adressRef1') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
         <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('telRef1') ?? $personnel->telRef1 }}" class="form-control @error('telRef1') is-invalid @enderror" type="tel" placeholder="{{ __('TELEPHONE (S) REFERENCE 2 ') }}" id="telRef1" name="telRef1">
                @error('telRef1')
                    <div class="invalid-feedback">
                        {{ $errors->first('telRef1') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>



