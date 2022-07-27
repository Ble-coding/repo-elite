
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('prof_empS') ?? $spousse->prof_empS }}" class="form-control @error('prof_empS') is-invalid @enderror" type="text" placeholder="{{ __('Profession') }}" id="prof_empS" name="prof_empS">
                @error('prof_empS')
                    <div class="invalid-feedback">
                        {{ $errors->first('prof_empS') }}
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
                <input  value="{{ old('name_empS') ?? $spousse->name_empS }}" class="form-control @error('name_empS') is-invalid @enderror" type="text" placeholder="{{ __('Nom de l\'employeur') }}" id="name_empS" name="name_empS">
                @error('name_empS')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_empS') }}
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
                <input  value="{{ old('addresseS') ?? $spousse->addresseS }}" class="form-control @error('addresseS') is-invalid @enderror" type="text" placeholder="{{ __('Adresse') }}" id="addresseS" name="addresseS">
                @error('addresseS')
                    <div class="invalid-feedback">
                        {{ $errors->first('addresseS') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        DATE DE DEBUT DE SERVICE
                    </div>
                </div>
                <input  value="{{ old('date_debS') ?? $spousse->date_debS }}" class="form-control @error('date_debS') is-invalid @enderror" type="date" id="date_debS" name="date_debS">
                @error('date_debS')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_debS') }}
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
                <input  value="{{ old('positionS') ?? $spousse->positionS }}" class="form-control @error('positionS') is-invalid @enderror" type="text" placeholder="{{ __('position') }}" id="positionS" name="positionS">
                @error('positionS')
                    <div class="invalid-feedback">
                        {{ $errors->first('positionS') }}
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
                <input  value="{{ old('emp_preS') ?? $spousse->emp_preS }}" class="form-control @error('emp_preS') is-invalid @enderror" type="text" placeholder="{{ __('Employeur precedent') }}" id="emp_preS" name="emp_preS">
                @error('emp_preS')
                    <div class="invalid-feedback">
                        {{ $errors->first('emp_preS') }}
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
                        DATE DE FIN DE SERVICE
                    </div>
                </div>
                <input  value="{{ old('date_finS') ?? $spousse->date_finS }}" class="form-control @error('date_finS') is-invalid @enderror" type="date" id="date_finS" name="date_finS">
                @error('date_finS')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_finS') }}
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
                <input  value="{{ old('autre_actS') ?? $spousse->autre_actS }}" class="form-control @error('autre_actS') is-invalid @enderror" type="text" placeholder="{{ __('Autres activités') }}" id="autre_actS" name="autre_actS">
                @error('autre_actS')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_actS') }}
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
                        DATE D’INSTALLATION
                    </div>
                </div>
                <input  value="{{ old('date_instS') ?? $spousse->date_instS }}" class="form-control @error('date_instS') is-invalid @enderror" type="date"  id="date_instS" name="date_instS">
                @error('date_instS')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_instS') }}
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
                <input value="{{ old('proprioS') ?? $spousse->proprioS }}" class="form-control @error('proprioS') is-invalid @enderror" type="text" placeholder="{{ __('Proprietaire du fonds') }}" id="proprioS" name="proprioS">
                @error('proprioS')
                    <div class="invalid-feedback">
                        {{ $errors->first('proprioS') }}
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
        {{-- <div class="form-group col-md-4 mb-0">
            											
        </div> --}}
    </div>
 













      

