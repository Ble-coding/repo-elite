@csrf


<div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Code Investissement
        </div>
    </div>
    <div style="display:none" >{{$o = $investi->id}}</div>
    <input id="code_inv" type="text" class="form-control" name="code_inv" value="{{$o}}" autocomplete="code_inv">
 
</div>  

{{-- <span>Vous etes sur le point d\'effectuer un retrait de compte. <br>Veuillez vous assurer de l'accord du client et d'avoir également la somme en <br> caisse à lui remettre. <br>Cette action est irreversible. Etes vous sur?</span> --}}





<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Epargne
        </div>
    </div>
    <input id="particulier_id" type="text" class="form-control" name="particulier_id" value="{{ $investi->particulier_id}}" autocomplete="particulier_id">
</div> 

<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Courant
        </div>
    </div>
    <input id="client_id" type="text" class="form-control" name="client_id" value="{{ $investi->client_id}}" autocomplete="client_id">
</div> 

<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Investiss
        </div> 
    </div>
    <input id="customer_id" type="text" class="form-control" name="customer_id" value="{{ $investi->customer_id}}" autocomplete="customer_id">
</div> 


{{-- <div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Envoie
        </div>
    </div>
    <input id="envoie_id" type="text" class="form-control" name="envoie_id" value="{{ $investi->envoie_id}}" autocomplete="envoie_id">
</div>  --}}

<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Jalon
        </div>
    </div>
    <input id="jalon" type="text" class="form-control" name="jalon" value="{{ $investi->jalon}}" autocomplete="jalon">
</div>
<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Forfait
        </div>
    </div>
    <select class="form-control select2-show-search" name="forfait_id">
        <optgroup label="Forfait">
            {{-- @foreach($forfaits as $forfait)														  --}}
            <option value="{{$investi->forfait_id}}"> 
                {{$investi->forfait_id }}
            {{-- </option> --}}
            {{-- @endforeach						 --}}
        </optgroup>							
    </select>
</div>  

