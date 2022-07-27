
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('vers_hyp') ?? $depense->vers_hyp }}" class="form-control @error('vers_hyp') is-invalid @enderror" type="text" placeholder="{{ __('Versements hypothecaires') }}" id="vers_hyp" name="vers_hyp">
                @error('vers_hyp')
                    <div class="invalid-feedback">
                        {{ $errors->first('vers_hyp') }}
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
                <input  value="{{ old('loyers') ?? $depense->loyers }}" class="form-control @error('loyers') is-invalid @enderror" type="text" placeholder="{{ __('Loyers') }}" id="loyers" name="loyers">
                @error('loyers')
                    <div class="invalid-feedback">
                        {{ $errors->first('loyers') }}
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
                <input  value="{{ old('impt_loc') ?? $depense->impt_loc }}" class="form-control @error('impt_loc') is-invalid @enderror" type="text" placeholder="{{ __('Impots locatifs') }}" id="impt_loc" name="impt_loc">
                @error('impt_loc')
                    <div class="invalid-feedback">
                        {{ $errors->first('impt_loc') }}
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
                <input  value="{{ old('prime') ?? $depense->prime }}" class="form-control @error('prime') is-invalid @enderror" type="text" placeholder="{{ __('Primes d\'assurances') }}" id="prime" name="prime">
                @error('prime')
                    <div class="invalid-feedback">
                        {{ $errors->first('prime') }}
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
                <input  value="{{ old('carte_credit') ?? $depense->carte_credit }}" class="form-control @error('carte_credit') is-invalid @enderror" type="text" placeholder="{{ __('Cartes de credit') }}" id="carte_credit" name="carte_credit">
                @error('carte_credit')
                    <div class="invalid-feedback">
                        {{ $errors->first('carte_credit') }}
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
                <input  value="{{ old('rembourse') ?? $depense->rembourse }}" class="form-control @error('rembourse') is-invalid @enderror" type="text" placeholder="{{ __('Remboursement de prets vehicules') }}" id="rembourse" name="rembourse">
                @error('rembourse')
                    <div class="invalid-feedback">
                        {{ $errors->first('rembourse') }}
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
                <input  value="{{ old('pret_conso') ?? $depense->pret_conso }}" class="form-control @error('pret_conso') is-invalid @enderror" type="text" placeholder="{{ __('Remboursement de prets à la conso') }}" id="pret_conso" name="pret_conso">
                @error('pret_conso')
                    <div class="invalid-feedback">
                        {{ $errors->first('pret_conso') }}
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
                <input  value="{{ old('pension') ?? $depense->pension }}" class="form-control @error('pension') is-invalid @enderror" type="text" placeholder="{{ __('Pensions alimentaires') }}" id="pension" name="pension">
                @error('pension')
                    <div class="invalid-feedback">
                        {{ $errors->first('pension') }}
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
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div>
                <input  value="{{ old('elect') ?? $depense->elect }}" class="form-control @error('elect') is-invalid @enderror" placeholder="{{ __('Electricite, Eau') }}" type="text"  id="elect" name="elect">
                @error('elect')
                    <div class="invalid-feedback">
                        {{ $errors->first('elect') }}
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
                <input value="{{ old('transport') ?? $depense->transport }}" class="form-control @error('transport') is-invalid @enderror" type="text" placeholder="{{ __('Transport (Essence, Voiture, Entretien)') }}" id="transport" name="transport">
                @error('transport')
                    <div class="invalid-feedback">
                        {{ $errors->first('transport') }}
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
                <input  value="{{ old('frais') ?? $depense->frais }}" class="form-control @error('frais') is-invalid @enderror" type="text" placeholder="{{ __('Frais scolaires') }}" id="frais" name="frais">
                @error('frais')
                    <div class="invalid-feedback">
                        {{ $errors->first('frais') }}
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
                <input  value="{{ old('nourritur') ?? $depense->nourritur }}" class="form-control @error('nourritur') is-invalid @enderror" type="text" placeholder="{{ __('Nourriture/Employes de maison') }}" id="nourritur" name="nourritur">
                @error('nourritur')
                    <div class="invalid-feedback">
                        {{ $errors->first('nourritur') }}
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
                <input  value="{{ old('epargne_mens') ?? $depense->epargne_mens }}" class="form-control @error('epargne_mens') is-invalid @enderror" type="text" placeholder="{{ __('Epargne mensuelle') }}" id="epargne_mens" name="epargne_mens">
                @error('epargne_mens')
                    <div class="invalid-feedback">
                        {{ $errors->first('epargne_mens') }}
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
                <input  value="{{ old('autre_dep') ?? $depense->autre_dep }}" class="form-control @error('autre_dep') is-invalid @enderror" type="text" placeholder="{{ __('Autres depenses') }}" id="autre_dep" name="autre_dep">
                @error('autre_dep')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep') }}
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
                <input  value="{{ old('tot_dep') ?? $depense->tot_dep }}" class="form-control @error('tot_dep') is-invalid @enderror" type="text" placeholder="{{ __('Total depenses') }}" id="tot_dep" name="tot_dep">
                @error('tot_dep')
                    <div class="invalid-feedback">
                        {{ $errors->first('tot_dep') }}
                    </div>
                @enderror
            </div>											
        </div>
        {{-- <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-phone"></i>
                    </div>
                </div>
                <input  value="{{ old('autre_dep') ?? $depense->autre_dep }}" class="form-control @error('autre_dep') is-invalid @enderror" type="text" placeholder="{{ __('Autres depenses') }}" id="autre_dep" name="autre_dep">
                @error('autre_dep')
                    <div class="invalid-feedback">
                        {{ $errors->first('autre_dep') }}
                    </div>
                @enderror
            </div>										
        </div> --}}
    </div>
 













      

