
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('typeM') ?? $mobiliere->typeM }}" class="form-control @error('typeM') is-invalid @enderror" type="text" placeholder="{{ __('Type') }}" id="typeM" name="typeM">
                @error('typeM')
                    <div class="invalid-feedback">
                        {{ $errors->first('typeM') }}
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
                <input  value="{{ old('descriptionM') ?? $mobiliere->descriptionM }}" class="form-control @error('descriptionM') is-invalid @enderror" type="text" placeholder="{{ __('Description') }}" id="descriptionM" name="descriptionM">
                @error('descriptionM')
                    <div class="invalid-feedback">
                        {{ $errors->first('descriptionM') }}
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
                <input  value="{{ old('valeurM') ?? $mobiliere->valeurM }}" class="form-control @error('valeurM') is-invalid @enderror" type="text" placeholder="{{ __('Valeur') }}" id="valeurM" name="valeurM">
                @error('valeurM')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM') }}
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
                <input  value="{{ old('typeM1') ?? $mobiliere->typeM1 }}" class="form-control @error('typeM1') is-invalid @enderror" type="text" placeholder="{{ __('Type 1') }}" id="typeM1" name="typeM1">
                @error('typeM1')
                    <div class="invalid-feedback">
                        {{ $errors->first('typeM1') }}
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
                <input  value="{{ old('descriptionM1') ?? $mobiliere->descriptionM1 }}" class="form-control @error('descriptionM1') is-invalid @enderror" type="text" placeholder="{{ __('Description 1') }}" id="descriptionM1" name="descriptionM1">
                @error('descriptionM1')
                    <div class="invalid-feedback">
                        {{ $errors->first('descriptionM1') }}
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
                <input  value="{{ old('valeurM1') ?? $mobiliere->valeurM1 }}" class="form-control @error('valeurM1') is-invalid @enderror" type="text" placeholder="{{ __('Valeur 1') }}" id="valeurM1" name="valeurM1">
                @error('valeurM1')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM1') }}
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
                <input  value="{{ old('typeM2') ?? $mobiliere->typeM2 }}" class="form-control @error('typeM2') is-invalid @enderror" type="text" placeholder="{{ __('Type 2') }}" id="typeM2" name="typeM2">
                @error('typeM2')
                    <div class="invalid-feedback">
                        {{ $errors->first('typeM2') }}
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
                <input  value="{{ old('descriptionM2') ?? $mobiliere->descriptionM2 }}" class="form-control @error('descriptionM2') is-invalid @enderror" type="text" placeholder="{{ __('Description 2') }}" id="descriptionM2" name="descriptionM2">
                @error('descriptionM2')
                    <div class="invalid-feedback">
                        {{ $errors->first('descriptionM2') }}
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
                <input  value="{{ old('valeurM2') ?? $mobiliere->valeurM2 }}" class="form-control @error('valeurM2') is-invalid @enderror" type="text" placeholder="{{ __('Valeur 2') }}" id="valeurM2" name="valeurM2">
                @error('valeurM2')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM2') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>












