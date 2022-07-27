
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('type_pat') ?? $patrimoine->type_pat }}" class="form-control @error('type_pat') is-invalid @enderror" type="text" placeholder="{{ __('Type') }}" id="type_pat" name="type_pat">
                @error('type_pat')
                    <div class="invalid-feedback">
                        {{ $errors->first('type_pat') }}
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
                <input  value="{{ old('description') ?? $patrimoine->description }}" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="{{ __('Description') }}" id="description" name="description">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
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
                <input  value="{{ old('valeur') ?? $patrimoine->valeur }}" class="form-control @error('valeur') is-invalid @enderror" type="text" placeholder="{{ __('Valeur') }}" id="valeur" name="valeur">
                @error('valeur')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur') }}
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
                <input  value="{{ old('type_pat1') ?? $patrimoine->type_pat1 }}" class="form-control @error('type_pat1') is-invalid @enderror" type="text" placeholder="{{ __('Type 1') }}" id="type_pat1" name="type_pat1">
                @error('type_pat1')
                    <div class="invalid-feedback">
                        {{ $errors->first('type_pat1') }}
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
                <input  value="{{ old('description1') ?? $patrimoine->description1 }}" class="form-control @error('description1') is-invalid @enderror" type="text" placeholder="{{ __('Description 1') }}" id="description1" name="description1">
                @error('description1')
                    <div class="invalid-feedback">
                        {{ $errors->first('description1') }}
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
                <input  value="{{ old('valeur1') ?? $patrimoine->valeur1 }}" class="form-control @error('valeur1') is-invalid @enderror" type="text" placeholder="{{ __('Valeur 1') }}" id="valeur1" name="valeur1">
                @error('valeur1')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur1') }}
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
                <input  value="{{ old('type_pat2') ?? $patrimoine->type_pat2 }}" class="form-control @error('type_pat2') is-invalid @enderror" type="text" placeholder="{{ __('Type 2') }}" id="type_pat2" name="type_pat2">
                @error('type_pat2')
                    <div class="invalid-feedback">
                        {{ $errors->first('type_pat2') }}
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
                <input  value="{{ old('description2') ?? $patrimoine->description2 }}" class="form-control @error('description2') is-invalid @enderror" type="text" placeholder="{{ __('Description 2') }}" id="description2" name="description2">
                @error('description2')
                    <div class="invalid-feedback">
                        {{ $errors->first('description2') }}
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
                <input  value="{{ old('valeur2') ?? $patrimoine->valeur2 }}" class="form-control @error('valeur2') is-invalid @enderror" type="text" placeholder="{{ __('Valeur 2') }}" id="valeur2" name="valeur2">
                @error('valeur2')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur2') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

















