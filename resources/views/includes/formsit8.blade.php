

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('nom_preteur') ?? $relation->nom_preteur }}" class="form-control @error('nom_preteur') is-invalid @enderror" type="text" placeholder="{{ __('Nom du preteur') }}" id="nom_preteur" name="nom_preteur">
                @error('nom_preteur')
                    <div class="invalid-feedback">
                        {{ $errors->first('nom_preteur') }}
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
                <input  value="{{ old('monnaie') ?? $relation->monnaie }}" class="form-control @error('monnaie') is-invalid @enderror" type="text" placeholder="{{ __('Monnaie') }}" id="monnaie" name="monnaie">
                @error('monnaie')
                    <div class="invalid-feedback">
                        {{ $errors->first('monnaie') }}
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
                <input  value="{{ old('objet_pret') ?? $relation->objet_pret }}" class="form-control @error('objet_pret') is-invalid @enderror" type="text" placeholder="{{ __('Objet du pret') }}" id="objet_pret" name="objet_pret">
                @error('objet_pret')
                    <div class="invalid-feedback">
                        {{ $errors->first('objet_pret') }}
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
                <input  value="{{ old('montant_origine') ?? $relation->montant_origine }}" class="form-control @error('montant_origine') is-invalid @enderror" type="text" placeholder="{{ __('Montant à l\'origine') }}" id="montant_origine" name="montant_origine">
                @error('montant_origine')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_origine') }}
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
                <input  value="{{ old('solde') ?? $relation->solde }}" class="form-control @error('solde') is-invalid @enderror" type="text" placeholder="{{ __('Solde du') }}" id="solde" name="solde">
                @error('solde')
                    <div class="invalid-feedback">
                        {{ $errors->first('solde') }}
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
                <input  value="{{ old('tauxR') ?? $relation->tauxR }}" class="form-control @error('tauxR') is-invalid @enderror" type="text" placeholder="{{ __('Taux') }}" id="tauxR" name="tauxR">
                @error('tauxR')
                    <div class="invalid-feedback">
                        {{ $errors->first('tauxR') }}
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
                <input  value="{{ old('echeance') ?? $relation->echeance }}" class="form-control @error('echeance') is-invalid @enderror" placeholder="{{ __('Echeance') }}" type="text" id="echeance" name="echeance">
                @error('echeance')
                    <div class="invalid-feedback">
                        {{ $errors->first('echeance') }}
                    </div>
                @enderror
            </div>
        </div>
        {{-- <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div>
                <input  value="{{ old('autre_act') ?? $relation->autre_act }}" class="form-control @error('autre_act') is-invalid @enderror" type="text" placeholder="{{ __('Autres activités') }}" id="autre_act" name="autre_act">
                @error('autre_act')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_act') }}
                    </div>
                @enderror
            </div>
        </div> --}}
    </div>



    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('nom_preteur1') ?? $relation->nom_preteur1 }}" class="form-control @error('nom_preteur1') is-invalid @enderror" type="text" placeholder="{{ __('Nom du preteur1') }}" id="nom_preteur1" name="nom_preteur1">
                @error('nom_preteur1')
                    <div class="invalid-feedback">
                        {{ $errors->first('nom_preteur1') }}
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
                <input  value="{{ old('monnaie1') ?? $relation->monnaie1 }}" class="form-control @error('monnaie1') is-invalid @enderror" type="text" placeholder="{{ __('Monnaie 1') }}" id="monnaie1" name="monnaie1">
                @error('monnaie1')
                    <div class="invalid-feedback">
                        {{ $errors->first('monnaie1') }}
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
                <input  value="{{ old('objet_pret1') ?? $relation->objet_pret1 }}" class="form-control @error('objet_pret1') is-invalid @enderror" type="text" placeholder="{{ __('Objet du pret 1') }}" id="objet_pret1" name="objet_pret1">
                @error('objet_pret1')
                    <div class="invalid-feedback">
                        {{ $errors->first('objet_pret1') }}
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
                <input  value="{{ old('montant_origine1') ?? $relation->montant_origine1 }}" class="form-control @error('montant_origine1') is-invalid @enderror" type="text" placeholder="{{ __('Montant à l\'origine 1') }}" id="montant_origine1" name="montant_origine1">
                @error('montant_origine1')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_origine1') }}
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
                <input  value="{{ old('solde1') ?? $relation->solde1 }}" class="form-control @error('solde1') is-invalid @enderror" type="text" placeholder="{{ __('Solde du 1') }}" id="solde1" name="solde1">
                @error('solde1')
                    <div class="invalid-feedback">
                        {{ $errors->first('solde1') }}
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
                <input  value="{{ old('tauxR1') ?? $relation->tauxR1 }}" class="form-control @error('tauxR1') is-invalid @enderror" type="text" placeholder="{{ __('Taux 1') }}" id="tauxR1" name="tauxR1">
                @error('tauxR1')
                    <div class="invalid-feedback">
                        {{ $errors->first('tauxR1') }}
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
                <input  value="{{ old('echeance1') ?? $relation->echeance1 }}" class="form-control @error('echeance1') is-invalid @enderror" placeholder="{{ __('Echeance 1') }}" type="text" id="echeance1" name="echeance1">
                @error('echeance1')
                    <div class="invalid-feedback">
                        {{ $errors->first('echeance1') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>















