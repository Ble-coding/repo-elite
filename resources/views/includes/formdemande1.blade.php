
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('nameC') ?? $conjoint->nameC }}" class="form-control @error('nameC') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="nameC" name="nameC">
                @error('nameC')
                    <div class="invalid-feedback">
                        {{ $errors->first('nameC') }}
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
                <input  value="{{ old('prenameC') ?? $conjoint->prenameC }}" class="form-control @error('prenameC') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prenameC" name="prenameC">
                @error('prenameC')
                    <div class="invalid-feedback">
                        {{ $errors->first('prenameC') }}
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
                        Date de naissance
                    </div>
                </div> 
                <input  value="{{ old('datenaissC') ?? $conjoint->datenaissC }}" class="form-control @error('datenaissC') is-invalid @enderror" type="date" id="datenaissC" name="datenaissC">
                @error('datenaissC')
                    <div class="invalid-feedback">
                        {{ $errors->first('datenaissC') }}
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
                <input  value="{{ old('name_naissanceC') ?? $conjoint->name_naissanceC }}" class="form-control @error('name_naissanceC') is-invalid @enderror" type="text" placeholder="{{ __('Nom de naissance ') }}" id="name_naissanceC" name="name_naissanceC">
                @error('name_naissanceC')
                    <div class="invalid-feedback">
                        {{ $errors->first('name_naissanceC') }}
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
                <input  value="{{ old('commune_residenceC') ?? $conjoint->commune_residenceC }}" class="form-control @error('commune_residenceC') is-invalid @enderror" type="text" placeholder="{{ __('Commune de résidence') }}" id="commune_residenceC" name="commune_residenceC">
                @error('commune_residenceC')
                    <div class="invalid-feedback">
                        {{ $errors->first('commune_residenceC') }}
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
                <input  value="{{ old('communeC') ?? $conjoint->communeC }}" class="form-control @error('communeC') is-invalid @enderror" type="text" placeholder="{{ __('Commune de naissance') }}" id="communeC" name="communeC">
                @error('communeC')
                    <div class="invalid-feedback">
                        {{ $errors->first('communeC') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 mb-0">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Choisir le type de pièce
                </div>
            </div>
            <select id="piece_idC" class="form-control select2-show-search  @error('piece_idC') is-invalid @enderror" name="piece_idC">
                <optgroup label="Piece">
                    @foreach($pieces as $piece)
                                        <option value="{{ $piece->id }}" {{  $conjoint->piece_idC == $piece->id ? 'selected' :  ''}}>
                                        {{ $piece->nom}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('piece_idC')
                    <div class="invalid-feedback">
                                    {{ $errors->first('piece_idC') }}
                    </div>
                @enderror  
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('nbr_dependantC') ?? $conjoint->nbr_dependant }}" class="form-control @error('nbr_dependantC') is-invalid @enderror" type="number" placeholder="{{ __('Nombre de dépendants') }}" id="nbr_dependantC" name="nbr_dependantC">
                @error('nbr_dependantC')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_dependantC') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-4 mb-0">
            <div class="form-group m-0">
                <div class="form-label">Sexe</div>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="sexeC" value="M" @if (old('sexeC') ==  'M'
                        || $conjoint->sexeC == 'M') checked @endif checked >
                        <span class="custom-control-label">M</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="sexeC" @if (old('sexeC') ==  'F'
                        || $conjoint->sexeC == 'F') checked @endif value="F">
                        <span class="custom-control-label">F</span>
                    </label>             
                </div>
            </div>								
        </div>
    </div>
   


  










      

