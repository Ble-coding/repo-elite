@csrf


<div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Code vente 
        </div>
    </div>
    <div style="display:none"  >{{$p = $vente->id}}</div>
    <input id="vente_id" type="text" class="form-control" name="vente_id" value="{{$p}}" autocomplete="vente_id">
 
</div>  

{{-- <span>Vous etes sur le point d\'effectuer un retrait de compte. <br>Veuillez vous assurer de l'accord du client et d'avoir également la somme en <br> caisse à lui remettre. <br>Cette action est irreversible. Etes vous sur?</span> --}}
<div  style="display:none" disabled class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Client
        </div>
    </div>
    <input id="visiteur_id" type="text" class="form-control" name="visiteur_id" value="{{ $vente->visiteur_id}}" autocomplete="visiteur_id">
</div>  

{{-- <div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Prénoms
        </div>
    </div>
    <input id="prename" type="text" class="form-control" name="prename" value="{{ $visiteur->prename}}" autocomplete="prename">
</div>  

<div style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Email
        </div>
    </div>
    <input id="email" type="email" class="form-control" name="email" value="{{ $visiteur->email}}" autocomplete="email">
</div> 

<div  style="display:none"  class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Immatricule
        </div>
    </div>
    <input id="immatricule" type="text" class="form-control" name="immatricule" value="{{ $visiteur->immatricule}}" autocomplete="immatricule">
</div>   --}}



<div style="display:none" class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Paiement
        </div>
    </div>
    <input id="payment" type="text" class="form-control" name="payment" value="{{ $vente->payment}}" autocomplete="payment">
</div>














 









   