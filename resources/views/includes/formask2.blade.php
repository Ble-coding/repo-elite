
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('banque') ?? $bancarisation->banque }}" class="form-control @error('banque') is-invalid @enderror" type="text" placeholder="{{ __('Banque') }}" id="banque" name="banque">
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
                <input  value="{{ old('montantBank') ?? $bancarisation->montantBank }}" class="form-control @error('montantBank') is-invalid @enderror" type="text" placeholder="{{ __('Montant') }}" id="montantBank" name="montantBank">
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
                <input  value="{{ old('type') ?? $bancarisation->type }}" class="form-control @error('type') is-invalid @enderror" type="text" placeholder="{{ __('Type') }}" id="type" name="type">
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
                        Date d'ouverture 
                    </div>
                </div>
                <input  value="{{ old('date_compte') ?? $bancarisation->date_compte }}" class="form-control @error('date_compte') is-invalid @enderror" placeholder="{{ __('# De compte') }}" type="date" id="date_compte" name="date_compte">
                @error('date_compte')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte') }}
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
                <input  value="{{ old('balance') ?? $bancarisation->balance }}" class="form-control @error('balance') is-invalid @enderror" type="text" placeholder="{{ __('Balance') }}" id="balance" name="balance">
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
                <input  value="{{ old('banque1') ?? $bancarisation->banque1 }}" class="form-control @error('banque1') is-invalid @enderror" type="text" placeholder="{{ __('Banque 1') }}" id="banque1" name="banque1">
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
                <input  value="{{ old('montantBank1') ?? $bancarisation->montantBank1 }}" class="form-control @error('montantBank1') is-invalid @enderror" type="text" placeholder="{{ __('Montant 1') }}" id="montantBank1" name="montantBank1">
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
                <input  value="{{ old('type1') ?? $bancarisation->type1 }}" class="form-control @error('type1') is-invalid @enderror" type="text" placeholder="{{ __('Type 1') }}" id="type1" name="type1">
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
                         Date d'ouverture 1
                    </div>
                </div>
                <input  value="{{ old('date_compte1') ?? $bancarisation->date_compte1 }}" class="form-control @error('date_compte1') is-invalid @enderror" placeholder="{{ __('# De compte 1') }}" type="date" id="date_compte1" name="date_compte1">
                @error('date_compte1')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte1') }}
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
                <input  value="{{ old('balance1') ?? $bancarisation->balance1 }}" class="form-control @error('balance1') is-invalid @enderror" type="text" placeholder="{{ __('Balance 1') }}" id="balance1" name="balance1">
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
                <input  value="{{ old('banque2') ?? $bancarisation->banque2 }}" class="form-control @error('banque2') is-invalid @enderror" type="text" placeholder="{{ __('Banque 2') }}" id="banque2" name="banque2">
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
                <input  value="{{ old('montantBank2') ?? $bancarisation->montantBank2 }}" class="form-control @error('montantBank2') is-invalid @enderror" type="text" placeholder="{{ __('Montant 2') }}" id="montantBank2" name="montantBank2">
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
                <input  value="{{ old('type2') ?? $bancarisation->type2 }}" class="form-control @error('type2') is-invalid @enderror" type="text" placeholder="{{ __('Type 2') }}" id="type2" name="type2">
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
                       Date d'ouverture 2
                    </div>
                </div>
                <input  value="{{ old('date_compte2') ?? $bancarisation->date_compte2 }}" class="form-control @error('date_compte2') is-invalid @enderror" placeholder="{{ __('# De compte 2') }}" type="date" id="date_compte2" name="date_compte2">
                @error('date_compte2')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte2') }}
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
                <input  value="{{ old('balance2') ?? $bancarisation->balance2 }}" class="form-control @error('balance2') is-invalid @enderror" type="text" placeholder="{{ __('Balance 2') }}" id="balance2" name="balance2">
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
                <input  value="{{ old('banque3') ?? $bancarisation->banque3 }}" class="form-control @error('banque3') is-invalid @enderror" type="text" placeholder="{{ __('Banque 3') }}" id="banque3" name="banque3">
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
                <input  value="{{ old('montantBank3') ?? $bancarisation->montantBank3 }}" class="form-control @error('montantBank3') is-invalid @enderror" type="text" placeholder="{{ __('Montant 3') }}" id="montantBank3" name="montantBank3">
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
                <input  value="{{ old('type3') ?? $bancarisation->type3 }}" class="form-control @error('type3') is-invalid @enderror" type="text" placeholder="{{ __('Type 3') }}" id="type3" name="type3">
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
                        Date d'ouverture 3
                    </div>
                </div>
                <input  value="{{ old('date_compte3') ?? $bancarisation->date_compte3 }}" class="form-control @error('date_compte3') is-invalid @enderror" placeholder="{{ __('# De compte 3') }}" type="date" id="date_compte3" name="date_compte3">
                @error('date_compte3')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte3') }}
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
                <input  value="{{ old('balance3') ?? $bancarisation->balance3 }}" class="form-control @error('balance3') is-invalid @enderror" type="text" placeholder="{{ __('Balance 3') }}" id="balance3" name="balance3">
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
                <input  value="{{ old('banque4') ?? $bancarisation->banque4 }}" class="form-control @error('banque4') is-invalid @enderror" type="text" placeholder="{{ __('Banque 4') }}" id="banque4" name="banque4">
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
                <input  value="{{ old('montantBank4') ?? $bancarisation->montantBank4 }}" class="form-control @error('montantBank4') is-invalid @enderror" type="text" placeholder="{{ __('Montant 4') }}" id="montantBank4" name="montantBank4">
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
                <input  value="{{ old('type4') ?? $bancarisation->type4 }}" class="form-control @error('type4') is-invalid @enderror" type="text" placeholder="{{ __('Type 4') }}" id="type4" name="type4">
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
                        Date d'ouverture 4
                    </div>
                </div>
                <input  value="{{ old('date_compte4') ?? $bancarisation->date_compte4 }}" class="form-control @error('date_compte4') is-invalid @enderror" placeholder="{{ __('# De compte 4') }}" type="date" id="date_compte4" name="date_compte4">
                @error('date_compte4')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte4') }}
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
                <input  value="{{ old('balance4') ?? $bancarisation->balance4 }}" class="form-control @error('balance4') is-invalid @enderror" type="text" placeholder="{{ __('Balance 4') }}" id="balance4" name="balance4">
                @error('balance4')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance4') }}
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
                <input  value="{{ old('banque5') ?? $bancarisation->banque5 }}" class="form-control @error('banque5') is-invalid @enderror" type="text" placeholder="{{ __('Banque 5') }}" id="banque5" name="banque5">
                @error('banque5')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque5') }}
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
                <input  value="{{ old('montantBank5') ?? $bancarisation->montantBank5 }}" class="form-control @error('montantBank5') is-invalid @enderror" type="text" placeholder="{{ __('Montant 5') }}" id="montantBank5" name="montantBank5">
                @error('montantBank5')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank5') }}
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
                <input  value="{{ old('type5') ?? $bancarisation->type5 }}" class="form-control @error('type5') is-invalid @enderror" type="text" placeholder="{{ __('Type 5') }}" id="type5" name="type5">
                @error('type5')
                    <div class="invalid-feedback">
                        {{ $errors->first('type5') }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                       Date d'ouverture 5
                    </div>
                </div>
                <input  value="{{ old('date_compte5') ?? $bancarisation->date_compte5 }}" class="form-control @error('date_compte5') is-invalid @enderror" placeholder="{{ __('# De compte 5') }}" type="date" id="date_compte5" name="date_compte5">
                @error('date_compte5')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte5') }}
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
                <input  value="{{ old('balance5') ?? $bancarisation->balance5 }}" class="form-control @error('balance5') is-invalid @enderror" type="text" placeholder="{{ __('Balance 5') }}" id="balance5" name="balance5">
                @error('balance5')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance5') }}
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
                <input  value="{{ old('banque6') ?? $bancarisation->banque6 }}" class="form-control @error('banque6') is-invalid @enderror" type="text" placeholder="{{ __('Banque 6') }}" id="banque6" name="banque6">
                @error('banque6')
                    <div class="invalid-feedback">
                        {{ $errors->first('banque6') }}
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
                <input  value="{{ old('montantBank6') ?? $bancarisation->montantBank6 }}" class="form-control @error('montantBank6') is-invalid @enderror" type="text" placeholder="{{ __('Montant 6') }}" id="montantBank6" name="montantBank6">
                @error('montantBank6')
                    <div class="invalid-feedback">
                        {{ $errors->first('montantBank6') }}
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
                <input  value="{{ old('type6') ?? $bancarisation->type6 }}" class="form-control @error('type6') is-invalid @enderror" type="text" placeholder="{{ __('Type 6') }}" id="type6" name="type6">
                @error('type6')
                    <div class="invalid-feedback">
                        {{ $errors->first('type6') }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                       Date d'ouverture 6
                    </div>
                </div>
                <input  value="{{ old('date_compte6') ?? $bancarisation->date_compte6 }}" class="form-control @error('date_compte6') is-invalid @enderror" placeholder="{{ __('# De compte 6') }}" type="date" id="date_compte6" name="date_compte6">
                @error('date_compte6')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_compte6') }}
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
                <input  value="{{ old('balance6') ?? $bancarisation->balance6 }}" class="form-control @error('balance6') is-invalid @enderror" type="text" placeholder="{{ __('Balance 6') }}" id="balance6" name="balance6">
                @error('balance6')
                    <div class="invalid-feedback">
                        {{ $errors->first('balance6') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>















