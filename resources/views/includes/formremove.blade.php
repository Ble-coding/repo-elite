

@csrf

<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Code solde
        </div>
    </div>
    <div  style="display:none">{{$p = $depositary->id}}</div>
    <input id="sode_id" type="text" class="form-control" name="sode_id" value="{{$p}}" autocomplete="sode_id">
 
</div>  


<div class="form-row">
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name_retirant') ?? $remove->name_retirant }}" class="form-control @error('name_retirant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du débiteur') }}" id="name_retirant" name="name_retirant">
            @error('name_retirant')
                <div class="invalid-feedback">
                    {{ $errors->first('name_retirant') }}
                </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user-plus"></i>
                </div>
            </div>
            <input  value="{{ old('prename_retirant') ?? $remove->prename_retirant }}" class="form-control @error('prename_retirant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du débiteur') }}" id="prename_retirant" name="prename_retirant">
            @error('prename_retirant')
                <div class="invalid-feedback">
                    {{ $errors->first('prename_retirant') }}
                </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input  value="{{ old('tel_retirant') ?? $remove->tel_retirant }}" class="form-control @error('tel_retirant') is-invalid @enderror" type="tel" placeholder="{{ __('Tel débiteur') }}" id="tel_retirant" name="tel_retirant">
            @error('tel_retirant')
                <div class="invalid-feedback">
                    {{ $errors->first('tel_retirant') }}
                </div>
            @enderror
        </div>										
    </div>
</div>

  
<div class="form-row">
    <div class="form-group col-md-4 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Pièce
            </div>   
            <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                @foreach($pieces as $piece)	
                <option value="{{ $piece->id }}" {{  $remove->piece_id == $piece->id ? 'selected' :  ''}}>
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
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $remove->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
                    @error('numpiece')
                        <div class="invalid-feedback">
                                        {{ $errors->first('numpiece') }}
                        </div>
                    @enderror
        </div>										
    </div>
    <div class="form-group col-md-4 mb-0"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-italic"></i>
            </div>
            <input id="add_retirant" type="text" class="form-control @error('add_retirant') is-invalid @enderror" name="add_retirant" value="{{ old('add_retirant') ?? $remove->add_retirant  }}"  autocomplete="add_retirant" placeholder="{{ __('Adresse du débiteur') }}" autofocus>
                @error('add_retirant')
                <div class="invalid-feedback">
                                {{ $errors->first('add_retirant') }}
                </div>
            @enderror
        </div>
    </div>

</div>






<div class="input-group mb-4">
    {{-- <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4"> --}}
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-italic"></i>
                </div>
            </div>
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $remove->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du retrait') }}" autofocus>
            @error('montant')
            <div class="invalid-feedback">
                            {{ $errors->first('montant') }}
            </div>
        @enderror
        {{-- </div>										
    </div> --}}
</div>