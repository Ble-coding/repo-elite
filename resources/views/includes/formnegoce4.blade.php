<div class="form-row">
        <div class="form-group col-md-8 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Choisir le type 
                    </div>
                </div>
                <select id="typing" class="form-control select2-show-search  @error('typing') is-invalid @enderror" name="typing">
                    <optgroup label="Choix">
                                            <option value="1" {{  $protection->typing == 1 ? 'selected' :  ''}}>
                                            INCENDIE </option> 
                                            <option value="2" {{  $protection->typing == 2 ? 'selected' :  ''}}>
                                            IMMEUBLE </option>                                   
                                            <option value="3" {{  $protection->typing == 3 ? 'selected' :  ''}}>
                                            STOCK ET MATERIEL
                                                </option>    
                                            <option value="4" {{  $protection->typing == 4 ? 'selected' :  ''}}>
                                            INTERRUPTION DES ACTIVITES </option>    
                                            <option value="5" {{  $protection->typing == 5 ? 'selected' :  ''}}>
                                            AUTRE </option>    
                    </optgroup>							
                </select>
                @error('typing')
                    <div class="invalid-feedback">
                                    {{ $errors->first('typing') }}
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
                <input  value="{{ old('montant_pro') ?? $protection->montant_pro }}" class="form-control @error('montant_pro') is-invalid @enderror" type="text" placeholder="{{ __('Montant') }}" id="montant_pro" name="montant_pro">
                @error('montant_pro')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_pro') }}
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
                <input  value="{{ old('assu') ?? $protection->assu }}" class="form-control @error('assu') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE D’ASSURANCES') }}" id="assu" name="assu">
                @error('assu')
                    <div class="invalid-feedback">
                        {{ $errors->first('assu') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>

<div class="form-row">
        <div class="form-group col-md-8 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Choisir le type 
                    </div>
                </div>
                <select id="typing1" class="form-control select2-show-search  @error('typing1') is-invalid @enderror" name="typing1">
                    <optgroup label="Choix">
                                            <option value="1" {{  $protection->typing == 1 ? 'selected' :  ''}}>
                                            INCENDIE </option> 
                                            <option value="2" {{  $protection->typing == 2 ? 'selected' :  ''}}>
                                            IMMEUBLE </option>                                   
                                            <option value="3" {{  $protection->typing == 3 ? 'selected' :  ''}}>
                                            STOCK ET MATERIEL
                                                </option>    
                                            <option value="4" {{  $protection->typing == 4 ? 'selected' :  ''}}>
                                            INTERRUPTION DES ACTIVITES </option>    
                                            <option value="5" {{  $protection->typing == 5 ? 'selected' :  ''}}>
                                            AUTRE </option>    
                    </optgroup>							
                </select>
                @error('typing1')
                    <div class="invalid-feedback">
                                    {{ $errors->first('typing1') }}
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
                <input  value="{{ old('montant_pro1') ?? $protection->montant_pro1 }}" class="form-control @error('montant_pro1') is-invalid @enderror" type="text" placeholder="{{ __('Montant 1') }}" id="montant_pro1" name="montant_pro1">
                @error('montant_pro1')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_pro1') }}
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
                <input  value="{{ old('assu1') ?? $protection->assu1 }}" class="form-control @error('assu1') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE D’ASSURANCES 1') }}" id="assu1" name="assu1">
                @error('assu1')
                    <div class="invalid-feedback">
                        {{ $errors->first('assu1') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>

<div class="form-row">
        <div class="form-group col-md-8 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Choisir le type 
                    </div>
                </div>
                <select id="typing2" class="form-control select2-show-search  @error('typing2') is-invalid @enderror" name="typing2">
                    <optgroup label="Choix">
                                            <option value="1" {{  $protection->typing == 1 ? 'selected' :  ''}}>
                                            INCENDIE </option> 
                                            <option value="2" {{  $protection->typing == 2 ? 'selected' :  ''}}>
                                            IMMEUBLE </option>                                   
                                            <option value="3" {{  $protection->typing == 3 ? 'selected' :  ''}}>
                                            STOCK ET MATERIEL
                                                </option>    
                                            <option value="4" {{  $protection->typing == 4 ? 'selected' :  ''}}>
                                            INTERRUPTION DES ACTIVITES </option>    
                                            <option value="5" {{  $protection->typing == 5 ? 'selected' :  ''}}>
                                            AUTRE </option>    
                    </optgroup>							
                </select>
                @error('typing2')
                    <div class="invalid-feedback">
                                    {{ $errors->first('typing2') }}
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
                <input  value="{{ old('montant_pro2') ?? $protection->montant_pro2 }}" class="form-control @error('montant_pro2') is-invalid @enderror" type="text" placeholder="{{ __('Montant 2') }}" id="montant_pro2" name="montant_pro2">
                @error('montant_pro2')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_pro2') }}
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
                <input  value="{{ old('assu2') ?? $protection->assu2 }}" class="form-control @error('assu2') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE D’ASSURANCES 2') }}" id="assu2" name="assu2">
                @error('assu2')
                    <div class="invalid-feedback">
                        {{ $errors->first('assu2') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>


<div class="form-row">
        <div class="form-group col-md-8 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Choisir le type 
                    </div>
                </div>
                <select id="typing3" class="form-control select2-show-search  @error('typing3') is-invalid @enderror" name="typing3">
                    <optgroup label="Choix">
                                            <option value="1" {{  $protection->typing == 1 ? 'selected' :  ''}}>
                                            INCENDIE </option> 
                                            <option value="2" {{  $protection->typing == 2 ? 'selected' :  ''}}>
                                            IMMEUBLE </option>                                   
                                            <option value="3" {{  $protection->typing == 3 ? 'selected' :  ''}}>
                                            STOCK ET MATERIEL
                                                </option>    
                                            <option value="4" {{  $protection->typing == 4 ? 'selected' :  ''}}>
                                            INTERRUPTION DES ACTIVITES </option>    
                                            <option value="5" {{  $protection->typing == 5 ? 'selected' :  ''}}>
                                            AUTRE </option>    
                    </optgroup>							
                </select>
                @error('typing3')
                    <div class="invalid-feedback">
                                    {{ $errors->first('typing3') }}
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
                <input  value="{{ old('montant_pro3') ?? $protection->montant_pro3 }}" class="form-control @error('montant_pro3') is-invalid @enderror" type="text" placeholder="{{ __('Montant 3') }}" id="montant_pro3" name="montant_pro3">
                @error('montant_pro3')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_pro3') }}
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
                <input  value="{{ old('assu3') ?? $protection->assu3 }}" class="form-control @error('assu3') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE D’ASSURANCES 3') }}" id="assu3" name="assu3">
                @error('assu3')
                    <div class="invalid-feedback">
                        {{ $errors->first('assu3') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>


<div class="form-row">
        <div class="form-group col-md-8 mb-0">
           <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Choisir le type 
                    </div>
                </div>
                <select id="typing4" class="form-control select2-show-search  @error('typing4') is-invalid @enderror" name="typing4">
                    <optgroup label="Choix">
                                            <option value="1" {{  $protection->typing == 1 ? 'selected' :  ''}}>
                                            INCENDIE </option> 
                                            <option value="2" {{  $protection->typing == 2 ? 'selected' :  ''}}>
                                            IMMEUBLE </option>                                   
                                            <option value="3" {{  $protection->typing == 3 ? 'selected' :  ''}}>
                                            STOCK ET MATERIEL
                                                </option>    
                                            <option value="4" {{  $protection->typing == 4 ? 'selected' :  ''}}>
                                            INTERRUPTION DES ACTIVITES </option>    
                                            <option value="5" {{  $protection->typing == 5 ? 'selected' :  ''}}>
                                            AUTRE </option>    
                    </optgroup>							
                </select>
                @error('typing4')
                    <div class="invalid-feedback">
                                    {{ $errors->first('typing4') }}
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
                <input  value="{{ old('montant_pro4') ?? $protection->montant_pro4 }}" class="form-control @error('montant_pro4') is-invalid @enderror" type="text" placeholder="{{ __('Montant 4') }}" id="montant_pro4" name="montant_pro4">
                @error('montant_pro4')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_pro4') }}
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
                <input  value="{{ old('assu4') ?? $protection->assu4 }}" class="form-control @error('assu4') is-invalid @enderror" type="text" placeholder="{{ __('COMPAGNIE D’ASSURANCES 4') }}" id="assu4" name="assu4">
                @error('assu4')
                    <div class="invalid-feedback">
                        {{ $errors->first('assu4') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>