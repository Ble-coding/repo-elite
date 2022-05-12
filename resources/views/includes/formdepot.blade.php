@csrf
{{-- @if(Route::is('depot.depots.create') )
<div class="input-group mb-4">
    <a style="background:#262626; color:#fff" class="btn btn" class="form-control" href="{{ route('particuliers.create') }}">Enregistrer un nouveau particulier</a>
 </div>
 @endif
 <div class="form-row">
    <div class="form-group col-md-6 mb-4"> <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user"></i>
            </div>   
            <select class="form-control select2-show-search @error('particulier_id') is-invalid @enderror" name="particulier_id">
                <optgroup label="Particulier">
                    @foreach($particuliers as $particulier)														
                    <option value="{{$particulier->id}}" {{ $particulier->id ? 'selected' : '' }}>{{ $particulier->name }} {{ $particulier->prename }} -- {{$particulier->tel }} </option>
                    @endforeach						
                </optgroup>							
            </select>
            @error('particulier_id')
                     <div class="invalid-feedback">
                                       {{ $errors->first('particulier_id') }}
                    </div>
            @enderror 
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-italic"></i>
                </div>
            </div>
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $depot->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du dépot') }}" autofocus>
            @error('montant')
                <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                </div>
            @enderror
        </div>
    </div>
</div>  --}}



  
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Compte particulier
        </div>
    </div>
    <select class="form-control select2-show-search @error('particulier_id') is-invalid @enderror" name="particulier_id">
        <optgroup label="Particulier">
            @foreach($particuliers as $particulier)														
            <option value="{{$particulier->id}}" {{ $depot->particulier_id == $particulier->id ? 'selected' : '' }}> {{$particulier->code }} --- {{ $particulier->name }} {{ $particulier->prename }}  
                --- {{ $particulier->email }} - {{ $particulier->tel }}</option>
            @endforeach	
           				
        </optgroup>							
    </select>
    @error('particulier_id')
             <div class="invalid-feedback">
                               {{ $errors->first('particulier_id') }}
            </div>
    @enderror 
</div>


<div class="form-row">
    <div class="form-group col-md-6 mb-0"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-italic"></i>
            </div>
            <input id="montantD" type="text" class="form-control @error('montantD') is-invalid @enderror" name="montantD" value="{{ old('montantD') ?? $depot->montantD  }}"  autocomplete="montantD" placeholder="{{ __('Montant déposé') }}" autofocus>
            @error('montantD')
                <div class="invalid-feedback">
                                {{ $errors->first('montantD') }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-italic"></i>
                </div>
            </div>
            <input id="montantR" type="text" class="form-control @error('montantR') is-invalid @enderror" name="montantR" value="{{ old('montantR') ?? $depot->montantR  }}"  autocomplete="montantR" placeholder="{{ __('Montant reçu') }}" autofocus>
            @error('montantR')
                <div class="invalid-feedback">
                                {{ $errors->first('montantR') }}
                </div>
            @enderror
        </div>
    </div>
    {{-- <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-italic"></i>
                </div>
            </div>
            <input id="rendu" type="text" class="form-control @error('rendu') is-invalid @enderror" name="rendu" value="{{ old('rendu') ?? $depot->rendu  }}"  autocomplete="rendu" placeholder="{{ __('Montant rendu') }}" autofocus>
            @error('rendu')
                <div class="invalid-feedback">
                                {{ $errors->first('rendu') }}
                </div>
            @enderror
        </div>
    </div> --}}

</div>




<div class="form-row">
    <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name_deposant') ?? $depot->name_deposant }}" class="form-control @error('name_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du remettant') }}" id="name_deposant" name="name_deposant">
            @error('name_deposant')
                <div class="invalid-feedback">
                    {{ $errors->first('name_deposant') }}
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
            <input  value="{{ old('prename_deposant') ?? $depot->prename_deposant }}" class="form-control @error('prename_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du remettant') }}" id="prename_deposant" name="prename_deposant">
            @error('prename_deposant')
                <div class="invalid-feedback">
                    {{ $errors->first('prename_deposant') }}
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
            <input  value="{{ old('tel_deposant') ?? $depot->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="tel" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
            @error('tel_deposant')
                <div class="invalid-feedback">
                    {{ $errors->first('tel_deposant') }}
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
                    Adresse  
                </div>
            </div>
            <input id="add_deposant" type="text" class="form-control @error('add_deposant') is-invalid @enderror" name="add_deposant" value="{{ old('add_deposant') ?? $depot->add_deposant  }}"  autocomplete="add_deposant" placeholder="{{ __('Adresse du remettant') }}" autofocus>
                    @error('add_deposant')
                        <div class="invalid-feedback">
                                        {{ $errors->first('add_deposant') }}
                        </div>
                    @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Type de pièce
            </div>   
            <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                @foreach($pieces as $piece)	
                <option value="{{ $piece->id }}" {{  $depot->piece_id == $piece->id ? 'selected' :  ''}}>
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
   
    {{-- <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input  value="{{ old('tel_deposant') ?? $depot->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
            @error('tel_deposant')
                <div class="invalid-feedback">
                    {{ $errors->first('tel_deposant') }}
                </div>
            @enderror
        </div>										
    </div> --}}
</div>


<div class="input-group mb-4">
    {{-- <div class="form-group col-md-4 mb-0">
        <div class="input-group mb-4"> --}}
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $depot->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
                    @error('numpiece')
                        <div class="invalid-feedback">
                                        {{ $errors->first('numpiece') }}
                        </div>
                    @enderror
        {{-- </div>										
    </div> --}}
</div>




<div class="form-row">
    <div class="input-group mb-4">
        <div class="input-group-prepend ">
            <div class="input-group-text">
                <label class="col-md-2 form-label">Motif</label>
            </div>
        </div>
        <div class="col-md-6">
                <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $depot->motif }}</textarea>
                @error('motif')
                 <div class="invalid-feedback">
                 {{ $errors->first('motif') }}
                 </div>
                  @enderror
        </div>
        <div class="col-md-4 mb-0">
            <div class="form-label">Timbre</div>
            <div class="custom-controls-stacked">  
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="timbre" value="Oui" @if (old('timbre') ==  'Oui'
                    || $depot->timbre == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="timbre" @if (old('timbre') ==  'Non'
                    || $depot->timbre == 'Non') checked @endif value="Non">
                    <span class="custom-control-label">Non</span>
                </label> 
                @error('timbre')
                    <div class="invalid-feedback">
                                    {{ $errors->first('timbre') }}
                    </div>
               @enderror            
            </div>							
    </div>
    </div>


</div>


{{-- <div class="form-group col-md-4 mb-0">
    										
</div> --}}







{{-- <div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date du dépot
        </div>
    </div>
    <input id="datedepot" type="date" class="form-control @error('datedepot') is-invalid @enderror" name="datedepot" value="{{ old('datedepot') ?? $depot->datedepot}}" autocomplete="datedepot" autofocus placeholder="{{ __('Date du dépot') }}">
    @error('datedepot')
        <div class="invalid-feedback">
                        {{ $errors->first('datedepot') }}
    </div>
    @enderror
 </div> --}}













 









   