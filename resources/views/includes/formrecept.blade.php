@csrf


<div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Code Bonus
        </div>
    </div>
    <div style="display:none" >{{$o = $investi->id}}</div>
    <input id="code_bonus" type="text" class="form-control" name="code_bonus" value="{{$o}}" autocomplete="code_bonus">
 
</div>  
{{-- <span>Vous etes sur le point d\'effectuer un retrait de compte. <br>Veuillez vous assurer de l'accord du client et d'avoir également la somme en <br> caisse à lui remettre. <br>Cette action est irreversible. Etes vous sur?</span> --}}
<div  style="display: none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Client
        </div>
    </div>
    <input id="customer_id" type="text" class="form-control" name="customer_id" value="{{ $investi->customer_id}}" autocomplete="customer_id">
</div> 


