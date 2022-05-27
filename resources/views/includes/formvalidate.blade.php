<div style="display:none;"  >{{$p = $transfert->id}}</div>
<input style="display:none;"  id="transfert_id" type="text" class="form-control" name="transfert_id" value="{{$p}}" autocomplete="transfert_id">

{{-- <input id="code" type="text" class="form-control" name="code" value="{{ $transfert->code}}" autocomplete="code"> --}}
<div style="display:none;"  class="form-row mb-2">
    <div class="form-group col-md-12 mb-0">
        <div class="input-group-prepend">
            <div class="input-group-text">
                Compte Envoie
            </div>
        </div>
        {{-- <select id="send_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('send_id') is-invalid @enderror" name="send_id">
            <optgroup label="Envoie">
                @foreach($sends as $send)	
                                    <option value="{{ $send->id }}" {{  $transfert->send_id == $send->id ? 'selected' :  ''}}>
                                    {{ $send->name}} </option>
                                    @endforeach                                  
            </optgroup>							
        </select> --}}

        <input id="send_id" type="text" class="form-control" name="send_id" value="{{ $transfert->send_id}}" autocomplete="send_id">

            @error('send_id')
                <div class="invalid-feedback">
                                {{ $errors->first('send_id') }}
                </div>
            @enderror  								
    </div> 
     
</div> 

<div style="display:none;"  class="form-row mb-2">
    <div id="img1"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Epargne
            </div>
        </div>
        {{-- onchange="valueGet()" --}}
        {{-- <select class="form-control select2-show-search @error('solde_id') is-invalid @enderror"   name="solde_id">
            <optgroup label="Epargne">
                <option value="">Choisir</option>	
                @foreach($soldes as $solde)	
                                    <option value="{{ $solde->id }}" {{  $transfert->solde_id == $solde->id ? 'selected' :  ''}}>
                                        {{ $solde->particulier->code }} --  {{ $solde->particulier->name }} {{ $solde->particulier->prename }}</option>
                                    @endforeach
                            
            </optgroup>							
        </select> --}}
        <input id="solde_id" type="text" class="form-control" name="solde_id" value="{{ $transfert->solde_id}}" autocomplete="solde_id">
            @error('solde_id')
                <div class="invalid-feedback">
                                {{ $errors->first('solde_id') }}
                </div>
            @enderror 
    </div>

    <div id="img2"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Courant
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sode_id') is-invalid @enderror" name="sode_id">
            <optgroup label="Courant">
                <option value="">Choisir</option>	
                @foreach($sodes as $sode)	
                <option value="{{ $sode->id }}" {{  $transfert->sode_id == $sode->id ? 'selected' :  ''}}>
                    {{ $sode->client->code }} --  {{ $sode->client->name }} {{ $sode->client->prename }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="sode_id" type="text" class="form-control" name="sode_id" value="{{ $transfert->sode_id}}" autocomplete="sode_id">
        @error('sode_id')
            <div class="invalid-feedback">
                            {{ $errors->first('sode_id') }}
            </div>
        @enderror 
    </div>

    <div id="img3"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Entreprise Epargne
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sold_id') is-invalid @enderror" name="sold_id">
            <optgroup label="Epargne">
                <option value="">Choisir</option>	
                @foreach($solds as $sold)	
                <option value="{{ $sold->id }}" {{  $transfert->sold_id == $sold->id ? 'selected' :  ''}}>
                    {{ $sold->entreprise->code }} --  {{ $sold->entreprise->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}

        <input id="sold_id" type="text" class="form-control" name="sold_id" value="{{ $transfert->sold_id}}" autocomplete="sold_id">
        @error('sold_id')
            <div class="invalid-feedback">
                            {{ $errors->first('sold_id') }}
            </div>
        @enderror 
    </div>

    <div id="img4"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Entreprise Courant
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sod_id') is-invalid @enderror" name="sod_id">
            <optgroup label="Courant">
                <option value="">Choisir</option>	
                @foreach($sods as $sod)	
                <option value="{{ $sod->id }}" {{  $transfert->sod_id == $sod->id ? 'selected' :  ''}}>
                    {{ $sod->society->code }} -- {{ $sod->society->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="sod_id" type="text" class="form-control" name="sod_id" value="{{ $transfert->sod_id}}" autocomplete="sod_id">
        @error('sod_id')
            <div class="invalid-feedback">
                            {{ $errors->first('sod_id') }}
            </div>
        @enderror 
    </div>

    <div id="img5" style="display:none;" class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
            ELITE CREDIT
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('credit_id') is-invalid @enderror" name="credit_id">
            <optgroup label="Credit">
                <option value="">Choisir</option>	
                @foreach($credits as $credit)	
                <option value="{{ $credit->id }}" {{  $transfert->credit_id == $credit->id ? 'selected' :  ''}}>
                    {{ $credit->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="credit_id" type="text" class="form-control" name="credit_id" value="{{ $transfert->credit_id}}" autocomplete="credit_id">
        @error('credit_id')
            <div class="invalid-feedback">
                            {{ $errors->first('credit_id') }}
            </div>
        @enderror 
    </div>


    <div class="form-group col-md-12 mb-0">
        <div class="input-group-prepend">
            <div class="input-group-text">
                Compte Reception
            </div>
        </div>
        {{-- <select onchange="mySecondfunction()" id="receive_id" class="form-control select2-show-search @error('receive_id') is-invalid @enderror" name="receive_id">
            <optgroup label="Reception">
                @foreach($receives as $receive)	
                                    <option value="{{ $receive->id }}" {{  $transfert->receive_id == $receive->id ? 'selected' :  ''}}>
                                    {{ $receive->name }} </option>
                @endforeach                                  
            </optgroup>							
        </select> --}}
        <input id="receive_id" type="text" class="form-control" name="receive_id" value="{{ $transfert->receive_id}}" autocomplete="receive_id">
            @error('receive_id')
                <div class="invalid-feedback">
                                {{ $errors->first('receive_id') }}
                </div>
            @enderror 									
    </div>


    <div id="help1"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Epargne
            </div>
        </div>
        {{-- onchange="valueGet()" --}}
        {{-- <select class="form-control select2-show-search @error('solde_id') is-invalid @enderror"   name="solde_id">
            <optgroup label="Epargne">
                <option value="">Choisir</option>	
                @foreach($soldes as $solde)	
                                    <option value="{{ $solde->id }}" {{  $transfert->solde_id == $solde->id ? 'selected' :  ''}}>
                                        {{ $solde->particulier->code }} --  {{ $solde->particulier->name }} {{ $solde->particulier->prename }}</option>
                                    @endforeach
                            
            </optgroup>							
        </select> --}}
        <input id="olde_id" type="text" class="form-control" name="olde_id" value="{{ $transfert->olde_id}}" autocomplete="olde_id">
            @error('olde_id')
                <div class="invalid-feedback">
                                {{ $errors->first('olde_id') }}
                </div>
            @enderror 
    </div>

    <div id="help2"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Client Courant
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sode_id') is-invalid @enderror" name="sode_id">
            <optgroup label="Courant">
                <option value="">Choisir</option>	
                @foreach($sodes as $sode)	
                <option value="{{ $sode->id }}" {{  $transfert->sode_id == $sode->id ? 'selected' :  ''}}>
                    {{ $sode->client->code }} --  {{ $sode->client->name }} {{ $sode->client->prename }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="ode_id" type="text" class="form-control" name="ode_id" value="{{ $transfert->ode_id}}" autocomplete="ode_id">
        @error('ode_id')
            <div class="invalid-feedback">
                            {{ $errors->first('ode_id') }}
            </div>
        @enderror 
    </div>

    <div id="help3"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Entreprise Epargne
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sold_id') is-invalid @enderror" name="sold_id">
            <optgroup label="Epargne">
                <option value="">Choisir</option>	
                @foreach($solds as $sold)	
                <option value="{{ $sold->id }}" {{  $transfert->sold_id == $sold->id ? 'selected' :  ''}}>
                    {{ $sold->entreprise->code }} --  {{ $sold->entreprise->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}

        <input id="old_id" type="text" class="form-control" name="old_id" value="{{ $transfert->old_id}}" autocomplete="old_id">
        @error('old_id')
            <div class="invalid-feedback">
                            {{ $errors->first('old_id') }}
            </div>
        @enderror 
    </div>

    <div id="help4"  class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                Entreprise Courant
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('sod_id') is-invalid @enderror" name="sod_id">
            <optgroup label="Courant">
                <option value="">Choisir</option>	
                @foreach($sods as $sod)	
                <option value="{{ $sod->id }}" {{  $transfert->sod_id == $sod->id ? 'selected' :  ''}}>
                    {{ $sod->society->code }} -- {{ $sod->society->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="od_id" type="text" class="form-control" name="od_id" value="{{ $transfert->od_id}}" autocomplete="od_id">
        @error('od_id')
            <div class="invalid-feedback">
                            {{ $errors->first('od_id') }}
            </div>
        @enderror 
    </div>

    <div id="help5" class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
            ELITE CREDIT
            </div>
        </div>
        {{-- <select class="form-control select2-show-search @error('redit_id') is-invalid @enderror" name="redit_id">
            <optgroup label="Credit">
                <option value="">Choisir</option>	
                @foreach($credits as $credit)	
                <option value="{{ $credit->id }}" {{  $transfert->credit_id == $credit->id ? 'selected' :  ''}}>
                    {{ $credit->name }}</option>
                @endforeach                        
            </optgroup>							
        </select> --}}
        <input id="redit_id" type="text" class="form-control" name="redit_id" value="{{ $transfert->redit_id}}" autocomplete="redit_id">
        @error('redit_id')
            <div class="invalid-feedback">
                            {{ $errors->first('redit_id') }}
            </div>
        @enderror 
    </div>

</div>

<div  style="display:none;"  class="form-row">
<div class="form-group col-md-6 mb-0"> 
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-italic"></i>
        </div>
        {{-- <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value="{{ old('montant') ?? $transfert->montant  }}"  autocomplete="montant" placeholder="{{ __('Montant à envoyé') }}" autofocus> --}}
        <input id="montant" type="text" class="form-control" name="montant" value="{{ $transfert->montant}}" autocomplete="montant">
        @error('montant')
            <div class="invalid-feedback">
                    {{ $errors->first('montant') }}
            </div>
        @enderror
    </div>
</div>
</div>
