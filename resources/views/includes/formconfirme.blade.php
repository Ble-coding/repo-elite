@csrf


<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Particulier code
        </div>
    </div>
    <div style="display:none" >{{$o = $client->id}}</div>
    <input id="client_id" type="text" class="form-control" name="client_id" value="{{$o}}" autocomplete="client_id">
 
</div> 
{{-- style="display: none"  --}}
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend  mb-2">
        <div class="input-group-text">
            <label class="col-md-3 form-label">Motif</label>
        </div>
    </div>
        <div class="col-md-9">
            <textarea class="form-control @error('motif') is-invalid @enderror" id="motif" name="motif" placeholder="Entrez....." rows="3">{{ old('motif') ?? $client->motif }}</textarea>
        </div>
</div>




