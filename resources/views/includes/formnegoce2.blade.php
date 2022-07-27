

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('nom_preteur') ?? $cannexe->nom_preteur }}" class="form-control @error('nom_preteur') is-invalid @enderror" type="text" placeholder="{{ __('Nom du preteur') }}" id="nom_preteur" name="nom_preteur">
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
                <input  value="{{ old('monnaie') ?? $cannexe->monnaie }}" class="form-control @error('monnaie') is-invalid @enderror" type="text" placeholder="{{ __('Monnaie') }}" id="monnaie" name="monnaie">
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
                <input  value="{{ old('objet_pret') ?? $cannexe->objet_pret }}" class="form-control @error('objet_pret') is-invalid @enderror" type="text" placeholder="{{ __('Objet du pret') }}" id="objet_pret" name="objet_pret">
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
                <input  value="{{ old('montant_origine') ?? $cannexe->montant_origine }}" class="form-control @error('montant_origine') is-invalid @enderror" type="text" placeholder="{{ __('Montant à l\'origine') }}" id="montant_origine" name="montant_origine">
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
                <input  value="{{ old('solde') ?? $cannexe->solde }}" class="form-control @error('solde') is-invalid @enderror" type="text" placeholder="{{ __('Solde du') }}" id="solde" name="solde">
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
                <input  value="{{ old('tauxR') ?? $cannexe->tauxR }}" class="form-control @error('tauxR') is-invalid @enderror" type="text" placeholder="{{ __('Taux') }}" id="tauxR" name="tauxR">
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
                <input  value="{{ old('echeance') ?? $cannexe->echeance }}" class="form-control @error('echeance') is-invalid @enderror" placeholder="{{ __('Echeance') }}" type="text" id="echeance" name="echeance">
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
                <input  value="{{ old('autre_act') ?? $cannexe->autre_act }}" class="form-control @error('autre_act') is-invalid @enderror" type="text" placeholder="{{ __('Autres activités') }}" id="autre_act" name="autre_act">
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
                <input  value="{{ old('nom_preteur1') ?? $cannexe->nom_preteur1 }}" class="form-control @error('nom_preteur1') is-invalid @enderror" type="text" placeholder="{{ __('Nom du preteur1') }}" id="nom_preteur1" name="nom_preteur1">
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
                <input  value="{{ old('monnaie1') ?? $cannexe->monnaie1 }}" class="form-control @error('monnaie1') is-invalid @enderror" type="text" placeholder="{{ __('Monnaie 1') }}" id="monnaie1" name="monnaie1">
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
                <input  value="{{ old('objet_pret1') ?? $cannexe->objet_pret1 }}" class="form-control @error('objet_pret1') is-invalid @enderror" type="text" placeholder="{{ __('Objet du pret 1') }}" id="objet_pret1" name="objet_pret1">
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
                <input  value="{{ old('montant_origine1') ?? $cannexe->montant_origine1 }}" class="form-control @error('montant_origine1') is-invalid @enderror" type="text" placeholder="{{ __('Montant à l\'origine 1') }}" id="montant_origine1" name="montant_origine1">
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
                <input  value="{{ old('solde1') ?? $cannexe->solde1 }}" class="form-control @error('solde1') is-invalid @enderror" type="text" placeholder="{{ __('Solde du 1') }}" id="solde1" name="solde1">
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
                <input  value="{{ old('tauxR1') ?? $cannexe->tauxR1 }}" class="form-control @error('tauxR1') is-invalid @enderror" type="text" placeholder="{{ __('Taux 1') }}" id="tauxR1" name="tauxR1">
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
                <input  value="{{ old('echeance1') ?? $cannexe->echeance1 }}" class="form-control @error('echeance1') is-invalid @enderror" placeholder="{{ __('Echeance 1') }}" type="text" id="echeance1" name="echeance1">
                @error('echeance1')
                    <div class="invalid-feedback">
                        {{ $errors->first('echeance1') }}
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
                <input  value="{{ old('nom_preteur3') ?? $cannexe->nom_preteur3 }}" class="form-control @error('nom_preteur3') is-invalid @enderror" type="text" placeholder="{{ __('Nom du preteur 3') }}" id="nom_preteur3" name="nom_preteur3">
                @error('nom_preteur3')
                    <div class="invalid-feedback">
                        {{ $errors->first('nom_preteur3') }}
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
                <input  value="{{ old('monnaie3') ?? $cannexe->monnaie3 }}" class="form-control @error('monnaie3') is-invalid @enderror" type="text" placeholder="{{ __('Monnaie 3') }}" id="monnaie3" name="monnaie3">
                @error('monnaie3')
                    <div class="invalid-feedback">
                        {{ $errors->first('monnaie3') }}
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
                <input  value="{{ old('objet_pret3') ?? $cannexe->objet_pret3 }}" class="form-control @error('objet_pret3') is-invalid @enderror" type="text" placeholder="{{ __('Objet du pret 3') }}" id="objet_pret3" name="objet_pret3">
                @error('objet_pret3')
                    <div class="invalid-feedback">
                        {{ $errors->first('objet_pret3') }}
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
                <input  value="{{ old('montant_origine3') ?? $cannexe->montant_origine3 }}" class="form-control @error('montant_origine3') is-invalid @enderror" type="text" placeholder="{{ __('Montant à l\'origine 3') }}" id="montant_origine3" name="montant_origine3">
                @error('montant_origine3')
                    <div class="invalid-feedback">
                        {{ $errors->first('montant_origine3') }}
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
                <input  value="{{ old('solde3') ?? $cannexe->solde3 }}" class="form-control @error('solde3') is-invalid @enderror" type="text" placeholder="{{ __('Solde du 3') }}" id="solde3" name="solde3">
                @error('solde3')
                    <div class="invalid-feedback">
                        {{ $errors->first('solde3') }}
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
                <input  value="{{ old('tauxR3') ?? $cannexe->tauxR3 }}" class="form-control @error('tauxR3') is-invalid @enderror" type="text" placeholder="{{ __('Taux 3') }}" id="tauxR3" name="tauxR3">
                @error('tauxR3')
                    <div class="invalid-feedback">
                        {{ $errors->first('tauxR3') }}
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
                <input  value="{{ old('echeance3') ?? $cannexe->echeance3 }}" class="form-control @error('echeance3') is-invalid @enderror" placeholder="{{ __('Echeance 3') }}" type="text" id="echeance3" name="echeance3">
                @error('echeance3')
                    <div class="invalid-feedback">
                        {{ $errors->first('echeance3') }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
















