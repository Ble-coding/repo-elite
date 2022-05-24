{{-- <div class="form-group col-md-6 mb-4"> 
    <div class="input-group-prepend">
        <div class="input-group-text">
            Choisir le client 
        </div>   
        <select name="visiteur_id" id="visiteur_id" class="@error('visiteur_id') is-invalid @enderror form-control custom-select select2">
            @foreach($visiteurs as $visiteur)	
            <option value="{{ $piece->id }}" {{  $vente->visiteur_id == $visiteur->id ? 'selected' :  ''}}>
                {{ $piece->nom }}</option>
            @endforeach
        </select> 
        @error('visiteur_id')
                <div class="invalid-feedback">
                                {{ $errors->first('visiteur_id') }}
                </div>
        @enderror 
    </div>
</div> --}}

{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Choisir le client 
        </div>
    </div>
    <select class="form-control select2-show-search @error('visiteur_id') is-invalid @enderror" name="visiteur_id" >
        @foreach($visiteurs as $visiteur)	
            <option value="{{ $visiteur->id }}" {{  $vente->visiteur_id == $visiteur->id ? 'selected' :  ''}}>
            {{ $visiteur->name }} {{ $visiteur->prename }} -- {{ $visiteur->tel }}</option>
        @endforeach
    </select> 
    @error('visiteur_id')
            <div class="invalid-feedback">
                            {{ $errors->first('visiteur_id') }}
            </div>
    @enderror 
</div> --}}

<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div> 
            </div>
            <input  value="{{ old('immatricule') ?? $vente->immatricule }}" class="form-control @error('immatricule') is-invalid @enderror" type="text" placeholder="{{ __('Immatricula.') }}" id="immatricule" name="immatricule">
            @error('immatricule')
                    <div class="invalid-feedback">
                                    {{ $errors->first('immatricule') }}
                    </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input value="{{ old('carte_grise') ?? $vente->carte_grise }}" class="form-control @error('carte_grise') is-invalid @enderror" type="text" placeholder="{{ __('Numéro Carte grise') }}" id="carte_grise" name="carte_grise">
            @error('carte_grise')
                <div class="invalid-feedback">
                    {{ $errors->first('carte_grise') }}
                </div>
            @enderror
        </div>										
    </div>    
</div>
<div class="form-row">
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-type"></i>
                </div> 
            </div>
            <input  value="{{ old('marque') ?? $vente->marque }}" class="form-control @error('marque') is-invalid @enderror" type="text" placeholder="{{ __('Marque.') }}" id="marque" name="marque">
            @error('marque')
                    <div class="invalid-feedback">
                                    {{ $errors->first('marque') }}
                    </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-type"></i>
                </div>
            </div>
            <input value="{{ old('model') ?? $vente->model }}" class="form-control @error('model') is-invalid @enderror" type="text" placeholder="{{ __('Model') }}" id="model" name="model">
            @error('model')
                <div class="invalid-feedback">
                    {{ $errors->first('model') }}
                </div>
            @enderror
        </div>										
    </div> 
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input value="{{ old('couleur') ?? $vente->couleur }}" class="form-control @error('couleur') is-invalid @enderror" type="text" placeholder="{{ __('Couleur') }}" id="couleur" name="couleur">
            @error('couleur')
                <div class="invalid-feedback">
                    {{ $errors->first('couleur') }}
                </div>
            @enderror
        </div>										
    </div>     
</div>
{{-- <div class="input-group mb-4">
    <div class="input-group-prepend ">
        <div class="input-group-text">
            <label class="col-md-3 form-label">Description du véhicule</label>
        </div>
    </div>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Entrez....." rows="3">{{ old('description') ?? $vente->description }}</textarea>
            @error('description')
             <div class="invalid-feedback">
             {{ $errors->first('description') }}
             </div>
              @enderror
</div> --}}
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date mise en circulation
        </div>
    </div>
    <input id="circulation" type="date" class="form-control @error('circulation') is-invalid @enderror" name="circulation" value="{{ old('circulation') ?? $vente->circulation  }}" autocomplete="circulation" autofocus>
        @error('circulation')
            <div class="invalid-feedback">
                {{ $errors->first('circulation') }}
            </div>
        @enderror
</div>
