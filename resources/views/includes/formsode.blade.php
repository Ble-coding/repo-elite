@csrf


<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Particulier
        </div>
    </div>
    <select disabled class="form-control select2-show-search @error('particulier_id') is-invalid @enderror" name="particulier_id">
        <optgroup label="Particulier">
            @foreach($particuliers as $particulier)														
            <option value="{{$particulier->id}}" {{ $particulier->id ? 'selected' : '' }}> {{ $particulier->code}} {{ $particulier->name}} {{ $particulier->prename}}  </option>
            @endforeach						
        </optgroup>							
    </select>
    @error('particulier_id')
             <div class="invalid-feedback">
                               {{ $errors->first('particulier_id') }}
            </div>
    @enderror 
</div>

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-italic"></i>
        </div>
    </div>
    <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $sode->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant du solde') }}" autofocus>
            @error('montant')
                <div class="invalid-feedback">
                                {{ $errors->first('montant') }}
                </div>
            @enderror
</div>
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













 









   