
 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('nameref') ?? $reference->nameref }}" class="form-control @error('nameref') is-invalid @enderror" type="text" placeholder="{{ __('Nom Ref1') }}" id="nameref" name="nameref">
                @error('nameref')
                    <div class="invalid-feedback">
                        {{ $errors->first('nameref') }}
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
                <input  value="{{ old('prenameref') ?? $reference->prenameref }}" class="form-control @error('prenameref') is-invalid @enderror" type="text" placeholder="{{ __('Prenom Ref1') }}" id="prenameref" name="prenameref">
                @error('prenameref')
                    <div class="invalid-feedback">
                        {{ $errors->first('prenameref') }}
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
                <input  value="{{ old('adress_ref') ?? $reference->adress_ref }}" class="form-control @error('adress_ref') is-invalid @enderror" type="text" placeholder="{{ __('Adresse ref1') }}" id="adress_ref" name="adress_ref">
                @error('adress_ref')
                    <div class="invalid-feedback">
                        {{ $errors->first('adress_ref') }}
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
                <input  value="{{ old('tel_ref') ?? $reference->tel_ref }}" class="form-control @error('tel_ref') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone ref1') }}" id="tel_ref" name="tel_ref">
                @error('tel_ref')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_ref1') }}
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
                <input  value="{{ old('name1') ?? $reference->name1 }}" class="form-control @error('name1') is-invalid @enderror" type="text" placeholder="{{ __('Nom Ref2') }}" id="name1" name="name1">
                @error('name1')
                    <div class="invalid-feedback">
                        {{ $errors->first('name1') }}
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
                <input  value="{{ old('prename1') ?? $reference->prename1 }}" class="form-control @error('prename1') is-invalid @enderror" type="text" placeholder="{{ __('Prenom Ref2') }}" id="prename1" name="prename1">
                @error('prename1')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename1') }}
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
                <input  value="{{ old('adress_ref1') ?? $reference->adress_ref1 }}" class="form-control @error('adress_ref1') is-invalid @enderror" type="text" placeholder="{{ __('Adresse ref2') }}" id="adress_ref1" name="adress_ref1">
                @error('adress_ref1')
                    <div class="invalid-feedback">
                        {{ $errors->first('adress_ref1') }}
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
                <input  value="{{ old('tel_ref1') ?? $reference->tel_ref1 }}" class="form-control @error('tel_ref1') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone ref2') }}" id="tel_ref1" name="tel_ref1">
                @error('tel_ref1')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_ref1') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>
   