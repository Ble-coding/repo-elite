@csrf
{{-- @if(Route::is('deposit.deposits.create') )
<div class="input-group mb-4">
    <a style="background:#262626; color:#fff" class="btn btn" class="form-control" href="{{ route('entreprises.create') }}">Enregistrer un nouveau entreprise</a>
 </div>
 @endif
 <div class="form-row">
    <div class="form-group col-md-6 mb-4"> <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user"></i>
            </div>   
            <select class="form-control select2-show-search @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
                <optgroup label="entreprise">
                    @foreach($entreprises as $entreprise)														
                    <option value="{{$entreprise->id}}" {{ $entreprise->id ? 'selected' : '' }}>{{ $entreprise->name }} {{ $entreprise->prename }} -- {{$entreprise->tel }} </option>
                    @endforeach						
                </optgroup>							
            </select>
            @error('entreprise_id')
                     <div class="invalid-feedback">
                                       {{ $errors->first('entreprise_id') }}
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
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $deposit->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du dépot') }}" autofocus>
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
    <select class="form-control select2-show-search @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
        <optgroup label="Entreprise">
            @foreach($entreprises as $entreprise)														
            <option value="{{$entreprise->id}}" {{ $deposit->entreprise_id == $entreprise->id ? 'selected' : '' }}> {{$entreprise->code }} --- {{ $entreprise->name }} {{ $entreprise->prename }}  
                --- {{ $entreprise->email }} - {{ $entreprise->tel }}</option>
            @endforeach	
           				
        </optgroup>							
    </select>
    @error('entreprise_id')
             <div class="invalid-feedback">
                               {{ $errors->first('entreprise_id') }}
            </div>
    @enderror 
</div>


<div class="form-row">
    <div class="form-group col-md-6 mb-0"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-italic"></i>
            </div>
            <input id="montantD" type="text" class="form-control @error('montantD') is-invalid @enderror" name="montantD" value="{{ old('montantD') ?? $deposit->montantD  }}"  autocomplete="montantD" placeholder="{{ __('Montant déposé') }}" autofocus>
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
            <input id="montantR" type="text" class="form-control @error('montantR') is-invalid @enderror" name="montantR" value="{{ old('montantR') ?? $deposit->montantR  }}"  autocomplete="montantR" placeholder="{{ __('Montant reçu') }}" autofocus>
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
            <input id="rendu" type="text" class="form-control @error('rendu') is-invalid @enderror" name="rendu" value="{{ old('rendu') ?? $deposit->rendu  }}"  autocomplete="rendu" placeholder="{{ __('Montant rendu') }}" autofocus>
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
            <input  value="{{ old('name_deposant') ?? $deposit->name_deposant }}" class="form-control @error('name_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Nom du remettant') }}" id="name_deposant" name="name_deposant">
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
            <input  value="{{ old('prename_deposant') ?? $deposit->prename_deposant }}" class="form-control @error('prename_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Prénom du remettant') }}" id="prename_deposant" name="prename_deposant">
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
            <input  value="{{ old('tel_deposant') ?? $deposit->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="tel" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
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
            <input id="add_deposant" type="text" class="form-control @error('add_deposant') is-invalid @enderror" name="add_deposant" value="{{ old('add_deposant') ?? $deposit->add_deposant  }}"  autocomplete="add_deposant" placeholder="{{ __('Adresse du remettant') }}" autofocus>
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
                <option value="{{ $piece->id }}" {{  $deposit->piece_id == $piece->id ? 'selected' :  ''}}>
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
            <input  value="{{ old('tel_deposant') ?? $deposit->tel_deposant }}" class="form-control @error('tel_deposant') is-invalid @enderror" type="text" placeholder="{{ __('Tel remettant') }}" id="tel_deposant" name="tel_deposant">
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
            <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $deposit->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
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
                <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $deposit->motif }}</textarea>
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
                    || $deposit->timbre == 'Oui') checked @endif checked >
                    <span class="custom-control-label">Oui</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="timbre" @if (old('timbre') ==  'Non'
                    || $deposit->timbre == 'Non') checked @endif value="Non">
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
    <input id="datedeposit" type="date" class="form-control @error('datedeposit') is-invalid @enderror" name="datedeposit" value="{{ old('datedeposit') ?? $deposit->datedeposit}}" autocomplete="datedeposit" autofocus placeholder="{{ __('Date du dépot') }}">
    @error('datedeposit')
        <div class="invalid-feedback">
                        {{ $errors->first('datedeposit') }}
    </div>
    @enderror
 </div> --}}













 









   