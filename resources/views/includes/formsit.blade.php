{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Choisir le type client
        </div>
    </div>
    <select id="renseigne_id"  onchange="mySelectfunction1()"  class="form-control select2-show-search  @error('renseigne_id') is-invalid @enderror" name="renseigne_id">
        <optgroup label="Choix">
            @foreach($renseignes as $renseigne)
                                <option value="{{ $renseigne->id }}" {{  $general->renseigne_id == $renseigne->id ? 'selected' :  ''}}>
                                {{ $renseigne->name}} </option>
                                @endforeach                                  
        </optgroup>							
    </select>
        @error('renseigne_id')
            <div class="invalid-feedback">
                            {{ $errors->first('renseigne_id') }}
            </div>
        @enderror  
</div> --}}
 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('prof_emp') ?? $emprunteur->prof_emp }}" class="form-control @error('prof_emp') is-invalid @enderror" type="text" placeholder="{{ __('Profession') }}" id="prof_emp" name="prof_emp">
                @error('prof_emp')
                    <div class="invalid-feedback">
                        {{ $errors->first('prof_emp') }}
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
                <input  value="{{ old('name_emp') ?? $emprunteur->name_emp }}" class="form-control @error('name_emp') is-invalid @enderror" type="text" placeholder="{{ __('Nom de l\'employeur') }}" id="name_emp" name="name_emp">
                @error('name_emp')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_emp') }}
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
                <input  value="{{ old('addresse') ?? $emprunteur->addresse }}" class="form-control @error('addresse') is-invalid @enderror" type="text" placeholder="{{ __('Adresse') }}" id="addresse" name="addresse">
                @error('addresse')
                    <div class="invalid-feedback">
                        {{ $errors->first('addresse') }}
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
                <input  value="{{ old('date_deb') ?? $emprunteur->date_deb }}" class="form-control @error('date_deb') is-invalid @enderror" type="date" id="date_deb" name="date_deb">
                @error('date_deb')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_deb') }}
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
                <input  value="{{ old('position') ?? $emprunteur->position }}" class="form-control @error('position') is-invalid @enderror" type="text" placeholder="{{ __('Position') }}" id="position" name="position">
                @error('position')
                    <div class="invalid-feedback">
                        {{ $errors->first('position') }}
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
                <input  value="{{ old('emp_pre') ?? $emprunteur->emp_pre }}" class="form-control @error('emp_pre') is-invalid @enderror" type="text" placeholder="{{ __('Employeur precedent') }}" id="emp_pre" name="emp_pre">
                @error('emp_pre')
                    <div class="invalid-feedback">
                        {{ $errors->first('emp_pre') }}
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
                <input  value="{{ old('date_fin') ?? $emprunteur->date_fin }}" class="form-control @error('date_fin') is-invalid @enderror" type="date" id="date_fin" name="date_fin">
                @error('date_fin')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_fin') }}
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
                <input  value="{{ old('autre_act') ?? $emprunteur->autre_act }}" class="form-control @error('autre_act') is-invalid @enderror" type="text" placeholder="{{ __('Autres activités') }}" id="autre_act" name="autre_act">
                @error('autre_act')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_act') }}
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
                <input  value="{{ old('date_inst') ?? $emprunteur->date_inst }}" class="form-control @error('date_inst') is-invalid @enderror" type="date"  id="date_inst" name="date_inst">
                @error('date_inst')
                    <div class="invalid-feedback">
                        {{ $errors->first('date_inst') }}
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
                <input value="{{ old('proprio') ?? $emprunteur->proprio }}" class="form-control @error('proprio') is-invalid @enderror" type="text" placeholder="{{ __('Proprietaire du fonds') }}" id="proprio" name="proprio">
                @error('proprio')
                    <div class="invalid-feedback">
                        {{ $errors->first('proprio') }}
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
                <input  value="{{ old('patente') ?? $emprunteur->patente }}" class="form-control @error('patente') is-invalid @enderror" type="text" placeholder="{{ __('Patente DGI') }}" id="patente" name="patente">
                @error('patente')
                    <div class="invalid-feedback">
                        {{ $errors->first('patente') }}
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
                <input  value="{{ old('nbr_pers') ?? $emprunteur->nbr_pers }}" class="form-control @error('nbr_pers') is-invalid @enderror" type="number" placeholder="{{ __('Nombre de persones employees ') }}" id="nbr_pers" name="nbr_pers">
                @error('nbr_pers')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_pers') }}
                    </div>
                @enderror
            </div>										
        </div>
        {{-- <div class="form-group col-md-4 mb-0">
            											
        </div> --}}
    </div>
 













      

