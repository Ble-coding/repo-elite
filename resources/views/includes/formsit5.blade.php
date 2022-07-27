
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('banque') ?? $bancaire->banque }}" class="form-control @error('banque') is-invalid @enderror" type="text" placeholder="{{ __('Banque') }}" id="banque" name="banque">
                @error('banque')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque') }}
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
                <input  value="{{ old('montantBank') ?? $bancaire->montantBank }}" class="form-control @error('montantBank') is-invalid @enderror" type="text" placeholder="{{ __('Montant') }}" id="montantBank" name="montantBank">
                @error('montantBank')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank') }}
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
                <input  value="{{ old('type') ?? $bancaire->type }}" class="form-control @error('type') is-invalid @enderror" type="text" placeholder="{{ __('Type') }}" id="type" name="type">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
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
                <input  value="{{ old('num_compte') ?? $bancaire->num_compte }}" class="form-control @error('num_compte') is-invalid @enderror" placeholder="{{ __('# De compte') }}" type="text" id="num_compte" name="num_compte">
                @error('num_compte')
                    <div class="invalid-feedback">
                        {{ $errors->first('num_compte') }}
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
                <input  value="{{ old('balance') ?? $bancaire->balance }}" class="form-control @error('balance') is-invalid @enderror" type="text" placeholder="{{ __('Balance') }}" id="balance" name="balance">
                @error('balance')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance') }}
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
                <input  value="{{ old('banque1') ?? $bancaire->banque1 }}" class="form-control @error('banque1') is-invalid @enderror" type="text" placeholder="{{ __('Banque 1') }}" id="banque1" name="banque1">
                @error('banque1')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque1') }}
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
                <input  value="{{ old('montantBank1') ?? $bancaire->montantBank1 }}" class="form-control @error('montantBank1') is-invalid @enderror" type="text" placeholder="{{ __('Montant 1') }}" id="montantBank1" name="montantBank1">
                @error('montantBank1')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank1') }}
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
                <input  value="{{ old('type1') ?? $bancaire->type1 }}" class="form-control @error('type1') is-invalid @enderror" type="text" placeholder="{{ __('Type 1') }}" id="type1" name="type1">
                @error('type1')
                    <div class="invalid-feedback">
                        {{ $errors->first('type1') }}
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
                <input  value="{{ old('num_compte1') ?? $bancaire->num_compte1 }}" class="form-control @error('num_compte1') is-invalid @enderror" placeholder="{{ __('# De compte 1') }}" type="text" id="num_compte1" name="num_compte1">
                @error('num_compte1')
                    <div class="invalid-feedback">
                        {{ $errors->first('num_compte1') }}
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
                <input  value="{{ old('balance1') ?? $bancaire->balance1 }}" class="form-control @error('balance1') is-invalid @enderror" type="text" placeholder="{{ __('Balance 1') }}" id="balance1" name="balance1">
                @error('balance1')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance1') }}
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
                <input  value="{{ old('banque2') ?? $bancaire->banque2 }}" class="form-control @error('banque2') is-invalid @enderror" type="text" placeholder="{{ __('Banque 2') }}" id="banque2" name="banque2">
                @error('banque2')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque2') }}
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
                <input  value="{{ old('montantBank2') ?? $bancaire->montantBank2 }}" class="form-control @error('montantBank2') is-invalid @enderror" type="text" placeholder="{{ __('Montant 2') }}" id="montantBank2" name="montantBank2">
                @error('montantBank2')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank2') }}
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
                <input  value="{{ old('type2') ?? $bancaire->type2 }}" class="form-control @error('type2') is-invalid @enderror" type="text" placeholder="{{ __('Type 2') }}" id="type2" name="type2">
                @error('type2')
                    <div class="invalid-feedback">
                        {{ $errors->first('type2') }}
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
                <input  value="{{ old('num_compte2') ?? $bancaire->num_compte2 }}" class="form-control @error('num_compte2') is-invalid @enderror" placeholder="{{ __('# De compte 2') }}" type="text" id="num_compte2" name="num_compte2">
                @error('num_compte2')
                    <div class="invalid-feedback">
                        {{ $errors->first('num_compte2') }}
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
                <input  value="{{ old('balance2') ?? $bancaire->balance2 }}" class="form-control @error('balance2') is-invalid @enderror" type="text" placeholder="{{ __('Balance 2') }}" id="balance2" name="balance2">
                @error('balance2')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance2') }}
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
                <input  value="{{ old('banque3') ?? $bancaire->banque3 }}" class="form-control @error('banque3') is-invalid @enderror" type="text" placeholder="{{ __('Banque 3') }}" id="banque3" name="banque3">
                @error('banque3')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque3') }}
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
                <input  value="{{ old('montantBank3') ?? $bancaire->montantBank3 }}" class="form-control @error('montantBank3') is-invalid @enderror" type="text" placeholder="{{ __('Montant 3') }}" id="montantBank3" name="montantBank3">
                @error('montantBank3')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank3') }}
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
                <input  value="{{ old('type3') ?? $bancaire->type3 }}" class="form-control @error('type3') is-invalid @enderror" type="text" placeholder="{{ __('Type 3') }}" id="type3" name="type3">
                @error('type3')
                    <div class="invalid-feedback">
                        {{ $errors->first('type3') }}
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
                <input  value="{{ old('num_compte3') ?? $bancaire->num_compte3 }}" class="form-control @error('num_compte3') is-invalid @enderror" placeholder="{{ __('# De compte 3') }}" type="text" id="num_compte3" name="num_compte3">
                @error('num_compte3')
                    <div class="invalid-feedback">
                        {{ $errors->first('num_compte3') }}
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
                <input  value="{{ old('balance3') ?? $bancaire->balance3 }}" class="form-control @error('balance3') is-invalid @enderror" type="text" placeholder="{{ __('Balance 3') }}" id="balance3" name="balance3">
                @error('balance3')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance3') }}
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
                <input  value="{{ old('banque4') ?? $bancaire->banque4 }}" class="form-control @error('banque4') is-invalid @enderror" type="text" placeholder="{{ __('Banque 4') }}" id="banque4" name="banque4">
                @error('banque4')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque4') }}
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
                <input  value="{{ old('montantBank4') ?? $bancaire->montantBank4 }}" class="form-control @error('montantBank4') is-invalid @enderror" type="text" placeholder="{{ __('Montant 4') }}" id="montantBank4" name="montantBank4">
                @error('montantBank4')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank4') }}
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
                <input  value="{{ old('type4') ?? $bancaire->type4 }}" class="form-control @error('type4') is-invalid @enderror" type="text" placeholder="{{ __('Type 4') }}" id="type4" name="type4">
                @error('type4')
                    <div class="invalid-feedback">
                        {{ $errors->first('type4') }}
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
                <input  value="{{ old('num_compte4') ?? $bancaire->num_compte4 }}" class="form-control @error('num_compte4') is-invalid @enderror" placeholder="{{ __('# De compte 4') }}" type="text" id="num_compte4" name="num_compte4">
                @error('num_compte4')
                    <div class="invalid-feedback">
                        {{ $errors->first('num_compte4') }}
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
                <input  value="{{ old('balance4') ?? $bancaire->balance4 }}" class="form-control @error('balance4') is-invalid @enderror" type="text" placeholder="{{ __('Balance 4') }}" id="balance4" name="balance4">
                @error('balance4')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance4') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>















