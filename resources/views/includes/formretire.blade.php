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



  





{{-- <div  style="display:none">{{$p = $caisse->id}}</div> --}}

{{-- <input style="display:none" value="{{ old('caisse_id') ?? $retire->caisse_id }}" class="form-control @error('caisse_id') is-invalid @enderror" type="text" value="{{$p}}" id="caisse_id" name="caisse_id"> --}}

<div class="form-row">
    <div class="form-group col-md-6 mb-3">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name_debiteur') ?? $retire->name_debiteur }}" class="form-control @error('name_debiteur') is-invalid @enderror" type="text" placeholder="{{ __('Nom du débiteur') }}" id="name_debiteur" name="name_debiteur">
            @error('name_debiteur')
                <div class="invalid-feedback">
                    {{ $errors->first('name_debiteur') }}
                </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-3"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-italic"></i>
            </div>
            <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $retire->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant à retirer') }}" autofocus>
            @error('montant')
                <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                </div>
            @enderror
        </div>
    </div>
</div>







<div class="form-row">
    <div class="input-group mb-4">
        <div class="input-group-prepend ">
            <div class="input-group-text">
                <label class="col-md-2 form-label">Motif</label>
            </div>
        </div>
        <div class="col-md-6">
                <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $retire->motif }}</textarea>
                @error('motif')
                 <div class="invalid-feedback">
                 {{ $errors->first('motif') }}
                 </div>
                  @enderror
        </div>

    </div>


</div>

