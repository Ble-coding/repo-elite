<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name') ?? $vente->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom du client') }}" id="name" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
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
            <input  value="{{ old('prename') ?? $vente->prename }}" class="form-control @error('prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénoms du client') }}" id="prename" name="prename">
            @error('prename')
                <div class="invalid-feedback">
                    {{ $errors->first('prename') }}
                </div>
            @enderror
        </div>											
    </div>
    {{-- --}}

</div>


<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-sunset"></i>
                </div>
            </div>
            <input  value="{{ old('nationnalite') ?? $vente->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationnalité') }}" id="nationnalite" name="nationnalite">
            @error('nationnalite')
                <div class="invalid-feedback">
                    {{ $errors->first('nationnalite') }}
                </div>
            @enderror
        </div>										
    </div> 
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-sunset"></i>
                </div>
            </div>
            <input  value="{{ old('tel') ?? $vente->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
            @error('tel')
                    <div class="invalid-feedback">
                                    {{ $errors->first('tel') }}
                    </div>
            @enderror
        </div>										
    </div>
    {{-- --}}
</div>

 
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
            Type de pièce
            </div>   
            <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                @foreach($pieces as $piece)	
                <option value="{{ $piece->id }}" {{  $vente->piece_id == $piece->id ? 'selected' :  ''}}>
                    {{ $piece->nom }}</option>
                @endforeach
            </select> 
            @error('piece_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('piece_id') }}
                    </div>
            @enderror 
        </div>
    </div>
    <div class="form-group col-md-6 mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
                <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $vente->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
                @error('numpiece')
                    <div class="invalid-feedback">
                                    {{ $errors->first('numpiece') }}
                    </div>
                @enderror
            </div>                   
    </div> 
</div> 
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $vente->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
        <div class="invalid-feedback">
                        {{ $errors->first('dateexp') }}
    </div>
    @enderror
</div>

<div class="form-row mb-2">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-map"></i>
                </div>
            </div>
            <input value="{{ old('adresse') ?? $vente->adresse }}" class="form-control @error('adresse') is-invalid @enderror" type="text" placeholder="{{ __('Adresse') }}" id="adresse" name="adresse">
            @error('adresse')
                <div class="invalid-feedback">
                    {{ $errors->first('adresse') }}
                </div>
            @enderror
        </div>										
    </div>     
    {{-- --}}
 <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-mail"></i>
                </div>
            </div>
            <input  value="{{ old('email') ?? $vente->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
            @error('email')
                    <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                    </div>
            @enderror
        </div>																			
    </div> 
</div>

<div class="form-group col-md-6 mb-0">
    <div class="form-group m-0">
        <div class="form-label">Sexe</div>
        <div class="custom-controls-stacked">
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="sexe" value="M" @if (old('sexe') ==  'M'
                || $vente->sexe == 'M') checked @endif checked >
                <span class="custom-control-label">M</span>
            </label>
            <label class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="sexe" @if (old('sexe') ==  'F'
                || $vente->sexe == 'F') checked @endif value="F">
                <span class="custom-control-label">F</span>
            </label>             
        </div>
    </div>										
</div>









