
 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('nameref') ?? $referendum->nameref }}" class="form-control @error('nameref') is-invalid @enderror" type="text" placeholder="{{ __('Nom AVOCAT ') }}" id="nameref" name="nameref">
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
                <input  value="{{ old('prenameref') ?? $referendum->prenameref }}" class="form-control @error('prenameref') is-invalid @enderror" type="text" placeholder="{{ __('Prenom AVOCAT ') }}" id="prenameref" name="prenameref">
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
                <input  value="{{ old('adress_ref') ?? $referendum->adress_ref }}" class="form-control @error('adress_ref') is-invalid @enderror" type="text" placeholder="{{ __('Adresse AVOCAT ') }}" id="adress_ref" name="adress_ref">
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
                <input  value="{{ old('tel_ref') ?? $referendum->tel_ref }}" class="form-control @error('tel_ref') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone AVOCAT') }}" id="tel_ref" name="tel_ref">
                @error('tel_ref')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_ref') }}
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
                <input  value="{{ old('name1') ?? $referendum->name1 }}" class="form-control @error('name1') is-invalid @enderror" type="text" placeholder="{{ __('Nom COMPTABLE') }}" id="name1" name="name1">
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
                <input  value="{{ old('prename1') ?? $referendum->prename1 }}" class="form-control @error('prename1') is-invalid @enderror" type="text" placeholder="{{ __('Prenom COMPTABLE') }}" id="prename1" name="prename1">
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
                <input  value="{{ old('adress_ref1') ?? $referendum->adress_ref1 }}" class="form-control @error('adress_ref1') is-invalid @enderror" type="text" placeholder="{{ __('Adresse COMPTABLE') }}" id="adress_ref1" name="adress_ref1">
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
                <input  value="{{ old('tel_ref1') ?? $referendum->tel_ref1 }}" class="form-control @error('tel_ref1') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone COMPTABLE') }}" id="tel_ref1" name="tel_ref1">
                @error('tel_ref1')
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
                <input  value="{{ old('nameref2') ?? $referendum->nameref2 }}" class="form-control @error('nameref2') is-invalid @enderror" type="text" placeholder="{{ __('Nom AGENT D’ASSURANCE ') }}" id="nameref2" name="nameref2">
                @error('nameref2')
                    <div class="invalid-feedback">
                        {{ $errors->first('nameref2') }}
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
                <input  value="{{ old('prenameref2') ?? $referendum->prenameref2 }}" class="form-control @error('prenameref2') is-invalid @enderror" type="text" placeholder="{{ __('Prenom AGENT D’ASSURANCE ') }}" id="prenameref2" name="prenameref2">
                @error('prenameref2')
                    <div class="invalid-feedback">
                        {{ $errors->first('prenameref2') }}
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
                <input  value="{{ old('adress_ref2') ?? $referendum->adress_ref2 }}" class="form-control @error('adress_ref2') is-invalid @enderror" type="text" placeholder="{{ __('Adresse AGENT D’ASSURANCE ') }}" id="adress_ref2" name="adress_ref2">
                @error('adress_ref2')
                    <div class="invalid-feedback">
                        {{ $errors->first('adress_ref2') }}
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
                <input  value="{{ old('tel_ref2') ?? $referendum->tel_ref2 }}" class="form-control @error('tel_ref2') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone AGENT D’ASSURANCE') }}" id="tel_ref2" name="tel_ref2">
                @error('tel_ref2')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_ref2') }}
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
                <input  value="{{ old('name3') ?? $referendum->name3 }}" class="form-control @error('name3') is-invalid @enderror" type="text" placeholder="{{ __('Nom AUTRE') }}" id="name3" name="name3">
                @error('name3')
                    <div class="invalid-feedback">
                        {{ $errors->first('name3') }}
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
                <input  value="{{ old('prename3') ?? $referendum->prename3 }}" class="form-control @error('prename3') is-invalid @enderror" type="text" placeholder="{{ __('Prenom AUTRE') }}" id="prename3" name="prename3">
                @error('prename3')
                    <div class="invalid-feedback">
                        {{ $errors->first('prename3') }}
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
                <input  value="{{ old('adress_ref3') ?? $referendum->adress_ref3 }}" class="form-control @error('adress_ref3') is-invalid @enderror" type="text" placeholder="{{ __('Adresse AUTRE') }}" id="adress_ref3" name="adress_ref3">
                @error('adress_ref3')
                    <div class="invalid-feedback">
                        {{ $errors->first('adress_ref3') }}
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
                <input  value="{{ old('tel_ref3') ?? $referendum->tel_ref3 }}" class="form-control @error('tel_ref3') is-invalid @enderror" type="tel" placeholder="{{ __('Telephone AUTRE') }}" id="tel_ref3" name="tel_ref3">
                @error('tel_ref3')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_ref3') }}
                    </div>
                @enderror
            </div>										
        </div>
    </div>
   
