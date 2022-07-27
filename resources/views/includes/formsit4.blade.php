
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">  
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('dispo') ?? $reserve->dispo }}" class="form-control @error('dispo') is-invalid @enderror" type="text" placeholder="{{ __('Disponiblité (A-B)') }}" id="dispo" name="dispo">
                @error('dispo')
                    <div class="invalid-feedback">
                        {{ $errors->first('dispo') }}
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
                <input  value="{{ old('amor') ?? $reserve->amor }}" class="form-control @error('amor') is-invalid @enderror" type="text" placeholder="{{ __('Amortissement Nouveau Pret ELITE CREDIT') }}" id="amor" name="amor">
                @error('amor')
                    <div class="invalid-feedback">
                        {{ $errors->first('amor') }}
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
                <input  value="{{ old('new_dispo') ?? $reserve->new_dispo }}" class="form-control @error('new_dispo') is-invalid @enderror" type="text" placeholder="{{ __('Nouvelle disponibilité') }}" id="new_dispo" name="new_dispo">
                @error('new_dispo')
                    <div class="invalid-feedback">
                        {{ $errors->first('new_dispo') }}
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
                <input  value="{{ old('taux') ?? $reserve->taux }}" class="form-control @error('taux') is-invalid @enderror" type="text" placeholder="{{ __('Taux d\'endettement') }}" id="taux" name="taux">
                @error('taux')
                    <div class="invalid-feedback">
                        {{ $errors->first('taux') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>

 













      

