@csrf


<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Particulier code
        </div>
    </div>
    <div style="display:none" >{{$o = $particulier->id}}</div>
    <input id="particulier_id" type="text" class="form-control" name="particulier_id" value="{{$o}}" autocomplete="particulier_id">
 
</div> 
{{-- style="display: none"  --}}
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend  mb-2">
        <div class="input-group-text">
            <label class="col-md-3 form-label">Motif</label>
        </div>
    </div>
        <div class="col-md-9">
            <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $particulier->motif }}</textarea>
        </div>
</div>




