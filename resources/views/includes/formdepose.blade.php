@csrf
{{-- @if(Route::is('depose.deposes.create') )
<div class="input-group mb-4">
    <a style="background:#262626; color:#fff" class="btn btn" class="form-control" href="{{ route('societys.create') }}">Enregistrer un nouveau society</a>
 </div>
 @endif
 <div class="form-row">
    <div class="form-group col-md-6 mb-4"> <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user"></i>
            </div>   
            <select class="form-control select2-show-search @error('society_id') is-invalid @enderror" name="society_id">
                <optgroup label="society">
                    @foreach($societys as $society)														
                    <option value="{{$society->id}}" {{ $society->id ? 'selected' : '' }}>{{ $society->name }} {{ $society->prename }} -- {{$society->tel }} </option>
                    @endforeach						
                </optgroup>							
            </select>
            @error('society_id')
                     <div class="invalid-feedback">
                                       {{ $errors->first('society_id') }}
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
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $depose->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du dépot') }}" autofocus>
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
            Compte Entreprise
        </div>
    </div>
    <select class="form-control select2-show-search @error('society_id') is-invalid @enderror" name="society_id">
        <optgroup label="Entreprise">
            @foreach($societys as $society)														
            <option value="{{$society->id}}" {{ $depose->society_id == $society->id ? 'selected' : '' }}> {{$society->code }} --- {{ $society->name }} {{ $society->prename }}  
                --- {{ $society->email }} - {{ $society->tel }}</option>
            @endforeach	
           				
        </optgroup>							
    </select>
    @error('society_id')
             <div class="invalid-feedback">
                               {{ $errors->first('society_id') }}
            </div>
    @enderror 
</div>


<div class="form-row">
    <div class="form-group col-md-6 mb-0"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-italic"></i>
            </div>
            <input id="montantD" type="text" class="form-control @error('montantD') is-invalid @enderror" name="montantD" value="{{ old('montantD') ?? $depose->montantD  }}"  autocomplete="montantD" placeholder="{{ __('Montant déposé') }}" autofocus>
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
            <input id="montantR" type="text" class="form-control @error('montantR') is-invalid @enderror" name="montantR" value="{{ old('montantR') ?? $depose->montantR  }}"  autocomplete="montantR" placeholder="{{ __('Montant reçu') }}" autofocus>
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
            <input id="rendu" type="text" class="form-control @error('rendu') is-invalid @enderror" name="rendu" value="{{ old('rendu') ?? $depose->rendu  }}"  autocomplete="rendu" placeholder="{{ __('Montant rendu') }}" autofocus>
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
            <input  value="{{ old('name_deposant') ?? $depose->name_deposant }}" class="form-control @error('name_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du remettant') }}" id="name_deposant" name="name_deposant">
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
            <input  value="{{ old('prename_deposant') ?? $depose->prename_deposant }}" class="form-control @error('prename_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du remettant') }}" id="prename_deposant" name="prename_deposant">
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
            <input  value="{{ old('tel_deposant') ?? $depose->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="tel" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
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
            <input id="add_deposant" type="text" class="form-control @error('add_deposant') is-invalid @enderror" name="add_deposant" value="{{ old('add_deposant') ?? $depose->add_deposant  }}"  autocomplete="add_deposant" placeholder="{{ __('Adresse du remettant') }}" autofocus>
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
                <option value="{{ $piece->id }}" {{  $depose->piece_id == $piece->id ? 'selected' :  ''}}>
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
            <input  value="{{ old('tel_deposant') ?? $depose->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
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
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $depose->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
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
                <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $depose->motif }}</textarea>
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
                    || $depose->timbre == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="timbre" @if (old('timbre') ==  'Non'
                    || $depose->timbre == 'Non') checked @endif value="Non">
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
    <input id="datedepose" type="date" class="form-control @error('datedepose') is-invalid @enderror" name="datedepose" value="{{ old('datedepose') ?? $depose->datedepose}}" autocomplete="datedepose" autofocus placeholder="{{ __('Date du dépot') }}">
    @error('datedepose')
        <div class="invalid-feedback">
                        {{ $errors->first('datedepose') }}
    </div>
    @enderror
 </div> --}}













 









   