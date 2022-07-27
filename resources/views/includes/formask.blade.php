

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <div class="input-group-text">
            Choisir le type client
        </div>
    </div>
    <select id="renseigne_id"  onchange="mySelectfunction1()"  class="form-control select2-show-search  @error('renseigne_id') is-invalid @enderror" name="renseigne_id">
        <optgroup label="Choix">
            {{-- <option value="">Choisir</option>	 --}}
            @foreach($renseignes as $renseigne)
                                <option value="{{ $renseigne->id }}" {{  $main->renseigne_id == $renseigne->id ? 'selected' :  ''}}>
                                {{ $renseigne->name}} </option>
                                @endforeach                                  
        </optgroup>							
    </select>
        @error('renseigne_id')
            <div class="invalid-feedback">
                            {{ $errors->first('renseigne_id') }}
            </div>
        @enderror  
</div>

<div id="help1"> 
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('name') ?? $main->name }}" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Nom Commercial ') }}" id="name" name="name">
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
                        <i class="fe fe-map"></i>
                    </div>
                </div>
                <input  value="{{ old('address') ?? $main->address }}" class="form-control @error('address') is-invalid @enderror" type="text" placeholder="{{ __('Adresse') }}" id="address" name="address">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
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
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('resp') ?? $main->resp }}" class="form-control @error('resp') is-invalid @enderror" type="text" placeholder="{{ __('Responsable') }}" id="resp" name="resp">
                @error('resp')
                    <div class="invalid-feedback">
                        {{ $errors->first('resp') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
           	<div class="input-group mb-4">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-sunset"></i>
                        </div>
                    </div>
                    <input  value="{{ old('depuis') ?? $main->depuis }}" class="form-control @error('depuis') is-invalid @enderror" type="text" placeholder="{{ __('Direction actuelle depuis') }}" id="depuis" name="depuis">
                    @error('depuis')
                        <div class="invalid-feedback">
                            {{ $errors->first('depuis') }}
                        </div>
                    @enderror
                </div>
            </div>								
        </div>
    </div>
    <div class="form-row">    
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div> 
                <input  value="{{ old('nbr_emp') ?? $main->nbr_emp }}" class="form-control @error('nbr_emp') is-invalid @enderror" type="number" placeholder="{{ __('Nombre d’employés ') }}" id="nbr_emp" name="nbr_emp">
                @error('nbr_emp')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_emp') }}
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
                <input  value="{{ old('journal') ?? $main->journal }}" class="form-control @error('journal') is-invalid @enderror" type="text" placeholder="{{ __('Journal') }}" id="journal" name="journal">
                @error('journal')
                    <div class="invalid-feedback">
                        {{ $errors->first('journal') }}
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
                        Date de fondation          
                    </div>
                </div>
                <input  value="{{ old('datefond') ?? $main->datefond }}" class="form-control @error('datefond') is-invalid @enderror" type="date" id="datefond" name="datefond">
                @error('datefond')
                    <div class="invalid-feedback">
                        {{ $errors->first('datefond') }}
                    </div>
                @enderror
            </div>										
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('tel_com') ?? $main->tel_com }}" class="form-control @error('tel_com') is-invalid @enderror" type="tel" placeholder="{{ __('Tél.') }}" id="tel_com" name="tel_com">
                @error('tel_com')
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_com') }}
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
                        <i class="fe fe-corner-left-up"></i>
                    </div>
                </div> 
                <input  value="{{ old('sect') ?? $main->sect }}" class="form-control @error('sect') is-invalid @enderror" type="text" placeholder="{{ __('Secteur d’activité') }}" id="sect" name="sect">
                    @error('sect')
                        <div class="invalid-feedback">
                            {{ $errors->first('sect') }}
                        </div>
                    @enderror		
            </div>											
        </div>
          <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Date bilan
                    </div>
                </div> 
                <input value="{{ old('datebil') ?? $main->datebil }}" class="form-control @error('datebil') is-invalid @enderror" type="date" placeholder="{{ __('Date bilan') }}" id="datebil" name="datebil">
                @error('datebil')
                    <div class="invalid-feedback">
                        {{ $errors->first('datebil') }}
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
                        Date revision
                    </div>
                </div> 
                <input value="{{ old('daterev') ?? $main->daterev }}" class="form-control @error('daterev') is-invalid @enderror" type="date" placeholder="{{ __('Date révision') }}" id="daterev" name="daterev">
                @error('daterev')
                    <div class="invalid-feedback">
                        {{ $errors->first('daterev') }}
                    </div>
                @enderror
            </div>											
        </div>
    </div>

    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <div class="input-group-text">
                Choisir la forme juridique
            </div>
        </div>
        <select id="juridique_id"  class="form-control select2-show-search  @error('juridique_id') is-invalid @enderror" name="juridique_id">
            <optgroup label="Choix">
                @foreach($juridiques as $juridique)
                                    <option value="{{ $juridique->id }}" {{  $main->juridique_id == $juridique->id ? 'selected' :  ''}}>
                                    {{ $juridique->name}} </option>
                                    @endforeach                                  
            </optgroup>							
        </select>
            @error('juridique_id')
                <div class="invalid-feedback">
                                {{ $errors->first('juridique_id') }}
                </div>
            @enderror  
    </div>
</div>




    <div id="help2" style="display: none" class="input-group mb-4"> 
        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    Compte
                </div>
            </div>
            <select id="service_id"  onchange="mySelectfunction()"  class="form-control select2-show-search  @error('service_id') is-invalid @enderror" name="service_id">
                <optgroup label="Compte">
                    <option value="">Choisir</option>	
                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{  $main->service_id == $service->id ? 'selected' :  ''}}>
                                        {{ $service->name}} </option>
                                        @endforeach                                  
                </optgroup>							
            </select>
                @error('service_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('service_id') }}
                    </div>
                @enderror  
        </div>
        
            <div class="">
                <div id="img1"  class="input-group mb-4"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Entreprise Epargne
                        </div>
                    </div>
                    <select class="form-control select2-show-search @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
                        <optgroup label="Epargne">
                            <option value="">Choisir</option>	
                            @foreach($entreprises as $entreprise)	
                                                <option value="{{ $entreprise->id }}" {{  $main->entreprise_id == $entreprise->id ? 'selected' :  ''}}>
                                                    {{ $entreprise->code }} -- {{ $entreprise->name }}</option>
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
            <div class="">
                <div id="img2" style="display:none;" class="input-group mb-4"> 
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Entreprise Courant
                        </div>
                    </div>
                    <select class="form-control select2-show-search @error('society_id') is-invalid @enderror" name="society_id">
                        <optgroup label="Courant">
                            <option value="">Choisir</option>	
                            @foreach($societys as $society)	
                            <option value="{{ $society->id }}" {{  $main->society_id == $society->id ? 'selected' :  ''}}>
                                {{ $society->code }} --  {{ $society->name }}</option>
                            @endforeach
                                        
                        </optgroup>							
                    </select>
                    @error('society_id')
                    <div class="invalid-feedback">
                                    {{ $errors->first('society_id') }}
                    </div>
                    @enderror 
                </div>
            </div>
        
    </div>
  










      

