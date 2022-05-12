{{-- @csrf --}}
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input  value="{{ old('name') ?? $client->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom') }}" id="name" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user-plus"></i>
                </div>
            </div>
            <input  value="{{ old('prename') ?? $client->prename }}" class="form-control @error('prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom') }}" id="prename" name="prename">
            @error('prename')
                <div class="invalid-feedback">
                    {{ $errors->first('prename') }}
                </div>
            @enderror
        </div>										
    </div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'anniversaire
        </div>
    </div>
    <input id="datenaiss" type="date" class="form-control @error('datenaiss') is-invalid @enderror" name="datenaiss" value="{{ old('datenaiss') ?? $client->datenaiss  }}" autocomplete="datenaiss" autofocus>
        @error('datenaiss')
            <div class="invalid-feedback">
                {{ $errors->first('datenaiss') }}
            </div>
        @enderror
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-map"></i>
        </div>
    </div>
    <input value="{{ old('lieu') ?? $client->lieu }}" class="form-control @error('lieu') is-invalid @enderror" type="text" placeholder="{{ __('Lieu de naissance') }}" id="lieu" name="lieu">
    @error('lieu')
        <div class="invalid-feedback">
            {{ $errors->first('lieu') }}
        </div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-sunset"></i>
                </div>
            </div>
            <input  value="{{ old('nationnalite') ?? $client->nationnalite }}" class="form-control @error('nationnalite') is-invalid @enderror" type="text" placeholder="{{ __('Nationnalité') }}" id="nationnalite" name="nationnalite">
            @error('nationnalite')
                <div class="invalid-feedback">
                    {{ $errors->first('nationnalite') }}
                </div>
            @enderror
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-map"></i>
                </div>
            </div>
            <input  value="{{ old('lieu_habitation') ?? $client->lieu_habitation }}" class="form-control @error('lieu_habitation') is-invalid @enderror" type="text" placeholder="{{ __('Lieu d`\'habitation') }}" id="lieu_habitation" name="lieu_habitation">
                        @error('lieu_habitation')
                                <div class="invalid-feedback">
                                                    {{ $errors->first('lieu_habitation') }}
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
                    <i class="fe fe-phone"></i>
                </div>
            </div>
            <input  value="{{ old('tel') ?? $client->tel }}" class="form-control @error('tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone') }}" id="tel" name="tel">
            @error('tel')
                    <div class="invalid-feedback">
                                    {{ $errors->first('tel') }}
                    </div>
            @enderror
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-mail"></i>
                </div>
            </div>
            <input  value="{{ old('email') ?? $client->email }}" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email') }}" id="email" name="email">
            @error('email')
                    <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                    </div>
            @enderror
        </div>										
    </div>
</div>
<div class="form-row mb-2">
    <div class="form-group col-md-6 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Sexe</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="sexe" value="M" @if (old('sexe') ==  'M'
                    || $client->sexe == 'M') checked @endif checked >
                    <span class="custom-control-label">M</span>
                </label>
                <label class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="sexe" @if (old('sexe') ==  'F'
                    || $client->sexe == 'F') checked @endif value="F">
                    <span class="custom-control-label">F</span>
                </label>             
            </div>
        </div>										
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="form-group m-0">
            <div class="form-label">Situation</div>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input  type="radio" class="custom-control-input" onclick="displayForm(this)" name="situation" 
                    value="Celibataire" @if (old('situation') ==  'Celibataire'
                    || $client->situation == 'Celibataire') checked @endif checked>
                    <span class="custom-control-label">Célibataire</span>
                </label> 
                <label class="custom-control custom-radio">
                    <input id="marie" type="radio" class="custom-control-input"  onclick="displayForm(this)" name="situation" 
                    value="Marie" @if (old('situation') ==  'Marie'
                    || $client->situation == 'Marie') checked @endif>
                    <span class="custom-control-label">Marié(e)</span>
                </label>              
            </div>
        </div>										
    </div>
</div>
<div style="visibility:hidden ; position:relative" id="ccform">

    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
            <input  value="{{ old('successeur_name') ?? $client->successeur_name }}" class="form-control @error('successeur_name') is-invalid @enderror" type="text" placeholder="{{ __('Nom conjoint(e)') }}" id="successeur_name" name="successeur_name">
                            @error('successeur_name')
                                    <div class="invalid-feedback">
                                                        {{ $errors->first('successeur_name') }}
                                    </div>
                            @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-user-plus"></i>
            </div>
        </div>
        <input   value="{{ old('successeur_prename') ?? $client->successeur_prename }}" class="form-control @error('successeur_prename') is-invalid @enderror" type="text" placeholder="{{ __('Prénom conjoint(e)') }}" id="successeur_prename" name="successeur_prename">
                    @error('successeur_prename')
                            <div class="invalid-feedback">
                                                {{ $errors->first('successeur_prename') }}
                            </div>
                    @enderror
                            </div>									
        </div>
    </div>
    
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-phone"></i>
            </div>
        </div>
        <input  value="{{ old('successeur_tel') ?? $client->successeur_tel }}" class="form-control @error('successeur_tel') is-invalid @enderror" type="tel" placeholder="{{ __('Numéro de téléphone conjoint(e)') }}" id="successeur_tel" name="successeur_tel">
        @error('successeur_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('successeur_tel') }}
                </div>
        @enderror
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user"></i>
                </div>
            </div>
            <input value="{{ old('personne_name') ?? $client->personne_name }}" class="form-control" type="text" placeholder="{{ __('Nom de la personne à contacter') }}" id="personne_name" name="personne_name">
                        {{-- @error('personne_name')
                                <div class="invalid-feedback">
                                                    {{ $errors->first('personne_name') }}
                                </div>
                        @enderror --}}
        </div>											
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-user-plus"></i>
                </div>
            </div>
            <input value="{{ old('personne_prename') ?? $client->personne_prename }}" class="form-control " type="text" placeholder="{{ __('Prénom de la personne à contacter') }}" id="personne_prename" name="personne_prename">
                        {{-- @error('personne_prename')
                                <div class="invalid-feedback">
                                                    {{ $errors->first('personne_prename') }}
                                </div>
                        @enderror --}}
        </div>
    </div>
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-phone"></i>
            </div>
        </div>
        <input  value="{{ old('personne_tel') ?? $client->personne_tel }}" class="form-control " type="tel" placeholder="{{ __('Numéro de téléphone à contacter en cas d\'urgence') }}" id="personne_tel" name="personne_tel">
        {{-- @error('personne_tel')
                <div class="invalid-feedback">
                                {{ $errors->first('personne_tel') }}
                </div>
        @enderror --}}
    </div>  
</div> 
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
            Type de pièce
            </div>   
            <select name="piece_id" id="piece_id" class="@error('piece_id') is-invalid @enderror form-control custom-select select2">
                @foreach($pieces as $piece)	
                <option value="{{ $piece->id }}" {{  $client->piece_id == $piece->id ? 'selected' :  ''}}>
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
    <div class="form-group col-md-6 mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
                <input id="numpiece" type="text" class="form-control @error('numpiece') is-invalid @enderror" name="numpiece" value="{{ old('numpiece') ?? $client->numpiece  }}"  autocomplete="numpiece" placeholder="{{ __('Numéro de la pièce') }}" autofocus>
                @error('numpiece')
                    <div class="invalid-feedback">
                                    {{ $errors->first('numpiece') }}
                    </div>
                @enderror
            </div>                   
    </div> 
</div> 
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Date d'expiration
        </div>
    </div>
    <input id="dateexp" type="date" class="form-control @error('dateexp') is-invalid @enderror" name="dateexp" value="{{ old('dateexp') ?? $client->dateexp}}" autocomplete="dateexp" autofocus placeholder="{{ __('Date d\'expriration de pièce') }}">
    @error('dateexp')
        <div class="invalid-feedback">
                        {{ $errors->first('dateexp') }}
    </div>
    @enderror
</div>
     @if(Route::is('clients.create') )
<div class="input-group mb-4">
    <div class="form-group col-md-6 mb-4"> 
        <div class="form-label">Selectionnez la photo d'identité</div>
            <div class="custom-file">
            <input class="@error('image') is-invalid @enderror" id="image" name="image[]" 
                    multiple  value="{{ old('image') ?? $client->image }}"
                    accept="image/png, image/jpeg" type="file">
                @error('image')
                    <div class="invalid-feedback">
                    {{ $errors->first('image') }}
                    </div>
                @enderror
            </div>
        </div>
</div>   
     @endif











{{-- <div class="input-group mb-4">
<div class="input-group-prepend">
    <div class="input-group-text">
        Selectionnez la photo d'identité
    </div>
</div>
<input class="@error('image_identite') is-invalid @enderror" id="image_identite" name="image_identite[]" 
     multiple value="{{ old('image') ?? $client->image_identite }}"
        accept="image/png, image/jpeg" type="file">
            @error('image_identite')
                <div class="invalid-feedback">
                 {{ $errors->first('image_identite') }}
                </div>
            @enderror
</div>
</div> --}}

{{-- 

<div class="mb-3">
<label for="input_stall_schedules" class="form-label w-100">
   Schedules
   <button type="button" id="button_add_schedule" class="btn btn-primary float-end">Add</button>
</label>
<div id="list_schedule" class="border rounded p-3">
   @if (old('schedules'))
      @foreach (old('schedules') as $key => $schedule)
         <div class="row" data-index-schedule="{{ $key }}">
            <div class="col-5">
               <div class="mb-3">
                  <label for="input_schedule_name_{{ $key }}" class="form-label">Name</label>
                  <input type="text" name="schedules[{{ $key }}][name]"
                     value="{{ $schedule['name'] }}"
                     class="form-control {{ $errors->has("schedules.{$key}.name") ? 'is-invalid' : null }}"
                     id="input_schedule_name_{{ $key }}"
                     aria-describedby="input_stall_schedule_name">
                  <div class="invalid-feedback">
                     {{ $errors->first("schedules.{$key}.name") }}
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="mb-3">
                  <label for="input_schedule_open_{{ $key }}" class="form-label">Open</label>
                  <input type="time" name="schedules[{{ $key }}][open]"
                     value="{{ $schedule['open'] }}"
                     class="form-control {{ $errors->has("schedules.{$key}.open") ? 'is-invalid' : null }}"
                     id="input_schedule_open_{{ $key }}"
                     aria-describedby="input_stall_schedule_open">
                  <div class="invalid-feedback">
                     {{ $errors->first("schedules.{$key}.open") }}
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="mb-3">
                  <label for="input_schedule_close_{{ $key }}"
                     class="form-label">Close</label>
                  <input type="time" name="schedules[{{ $key }}][close]"
                     value="{{ $schedule['close'] }}"
                     class="form-control {{ $errors->has("schedules.{$key}.close") ? 'is-invalid' : null }}"
                     id="input_schedule_close_{{ $key }}"
                     aria-describedby="input_stall_schedule_close">
                  <div class="invalid-feedback">
                     {{ $errors->first("schedules.{$key}.close") }}
                  </div>
               </div>
            </div>
            <div class="col-1 d-flex align-items-start justify-content-center">
               <button type="button" data-type="btn-remove" data-index-schedule="{{ $key }}"
                  class="btn btn-danger" style="margin-top: 2em">Remove</button>
            </div>
         </div>
      @endforeach
   @else
      <div class="row" data-index-schedule="0">
         <div class="col-5">
            <div class="mb-3">
               <label for="input_schedule_name_0" class="form-label">Name</label>
               <input type="text" name="schedules[0][name]" class="form-control"
                  id="input_schedule_name_0" aria-describedby="input_stall_schedule_name">
            </div>
         </div>
         <div class="col-3">
            <div class="mb-3">
               <label for="input_schedule_open_0" class="form-label">Open</label>
               <input type="time" name="schedules[0][open]" class="form-control"
                  id="input_schedule_open_0" aria-describedby="input_stall_schedule_open">
            </div>
         </div>
         <div class="col-3">
            <div class="mb-3">
               <label for="input_schedule_close_0" class="form-label">Close</label>
               <input type="time" name="schedules[0][close]" class="form-control"
                  id="input_schedule_close_0" aria-describedby="input_stall_schedule_close">
            </div>
         </div>
         <div class="col-1 d-flex align-items-start justify-content-center">
            <button type="button" data-type="btn-remove" data-index-schedule="0" class="btn btn-danger"
               style="margin-top: 2em">Remove</button>
         </div>
      </div>
   @endif
</div>
</div>
<div> --}}




{{-- 
@foreach ($enfants as $enfant)  --}}
{{-- <div class="form-row"> --}}
{{-- <div class="email-repeater form-group">
    <div data-repeater-list="repeater-group">
        <div data-repeater-item="" class="row m-b-15">
          
<div class="form-row">
<div class="form-row">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-type"></i>
            </div>   
            <input id="name_enfant" type="text" class="form-control @error('name_enfant') is-invalid @enderror" name="enfants[0][name_enfant] " value="{{ old('name_enfant') ?? $client->name_enfant  }}"  autocomplete="name_enfant" placeholder="{{ __('Nom enfant') }}" autofocus>
        </div>
    </div>
    <div class="form-group col-md-6 mb-0">
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
            <input id="prename_enfant" type="text" class="form-control @error('prename_enfant') is-invalid @enderror" name="enfants[0][prename_enfant]" value="{{ old('prename_enfant') ?? $client->prename_enfant  }}"  autocomplete="prename_enfant" placeholder="{{ __('Prenom de enfant') }}" autofocus>
        </div>
</div>


<div class="input-group mb-4">
    <div class="form-group col-md-6 mb-4"> 
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fe fe-check-square"></i>
                </div>
            </div>
        <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="enfants[0][age]" value="{{ old('age') ?? $client->age  }}"  autocomplete="age" placeholder="{{ __('Age') }}" autofocus> </div>
    </div>
</div>
</div> 
            <div class="col-md-2">
                <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button"><i class="ti-close"></i>
                </button>
            </div>
        </div>
    </div>
    <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Add Email
    </button>
</div>
</div> --}}
{{-- @endforeach --}}



{{-- 
@foreach ($enfants as $enfant) --}}    
{{-- <div class="form-row">
<div class="form-group col-md-6 mb-4"> 
    <div class="input-group-prepend">
        <div class="input-group-text">
            <i class="fe fe-type"></i>
        </div>   
        <input id="name_enfant" type="text" class="form-control @error('name_enfant') is-invalid @enderror" name="name_enfant[]" value="{{ old('name_enfant') ?? $client->name_enfant  }}"  autocomplete="name_enfant" placeholder="{{ __('Nom enfant') }}" autofocus>
    </div>
</div>
<div class="form-group col-md-6 mb-0">
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-check-square"></i>
            </div>
        </div>
        <input id="prename_enfant" type="text" class="form-control @error('prename_enfant') is-invalid @enderror" name="prename_enfant[]" value="{{ old('prename_enfant') ?? $client->prename_enfant  }}"  autocomplete="prename_enfant" placeholder="{{ __('Prenom de enfant') }}" autofocus>
    </div>
</div>


<div class="input-group mb-4">
<div class="form-group col-md-6 mb-4"> 
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fe fe-check-square"></i>
            </div>
        </div>
    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age[]" value="{{ old('age') ?? $client->age  }}"  autocomplete="age" placeholder="{{ __('Age') }}" autofocus> </div>
</div>
</div> --}}

{{-- @endforeach --}}







