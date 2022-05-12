{{-- @csrf --}}
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-file-plus"></i>
                </div>
            </div>
            <input  value="{{ old('prof') ?? $customer->prof }}" class="form-control @error('prof') is-invalid @enderror" type="text" placeholder="{{ __('Profession') }}" id="prof" name="prof">
            @error('prof')
                <div class="invalid-feedback">
                    {{ $errors->first('prof') }}
                </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-briefcase"></i>
                </div>
            </div>
            <input  value="{{ old('nom_ent') ?? $customer->nom_ent }}" class="form-control @error('nom_ent') is-invalid @enderror" type="text" placeholder="{{ __('Nom Entreprise') }}" id="nom_ent" name="nom_ent">
            @error('nom_ent')
                <div class="invalid-feedback">
                    {{ $errors->first('nom_ent') }}
                </div>
            @enderror
        </div>										
    </div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
          Adresse
        </div>
    </div>
    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $customer->address  }}" placeholder="{{ __('Adresse') }}" autocomplete="address" autofocus>
        @error('address')
            <div class="invalid-feedback">
                {{ $errors->first('address') }}
            </div>
        @enderror
</div>
{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-map"></i>
        </div>
    </div>
    <input value="{{ old('lieu') ?? $customer->lieu }}" class="form-control @error('lieu') is-invalid @enderror" type="text" placeholder="{{ __('Lieu de naissance') }}" id="lieu" name="lieu">
    @error('lieu')
        <div class="invalid-feedback">
            {{ $errors->first('lieu') }}
        </div>
    @enderror
</div> --}}
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input  value="{{ old('tel_ent') ?? $customer->tel_ent }}" class="form-control @error('tel_ent') is-invalid @enderror" type="text" placeholder="{{ __('Téléphone Entreprise') }}" id="tel_ent" name="tel_ent">
            @error('tel_ent')
                <div class="invalid-feedback">
                    {{ $errors->first('tel_ent') }}
                </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Date debut 
                </div>
            </div>
            <input  value="{{ old('date_deb') ?? $customer->date_deb }}" class="form-control @error('date_deb') is-invalid @enderror" type="date"  id="date_deb" name="date_deb">
                        @error('date_deb')
                                <div class="invalid-feedback">
                                                    {{ $errors->first('date_deb') }}
                                </div>
                        @enderror
        </div>										
    </div>    
</div>

  
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
        Type de contrat
        </div>   
        <select name="type_id" id="type_id" class="@error('type_id') is-invalid @enderror form-control custom-select select2">
            @foreach($types as $type)	
            <option value="{{$type->id}}" {{  $customer->type_id == $type->id ? 'selected' :  ''}}>
                {{ $type->name }}</option>
            @endforeach
        </select> 
        @error('type_id')
                <div class="invalid-feedback">
                                {{ $errors->first('type_id') }}
                </div>
        @enderror 
    </div>
</div>









