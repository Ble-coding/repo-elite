
<div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div> 
                <input  value="{{ old('nbr_part') ?? $titre->nbr_part }}" class="form-control @error('nbr_part') is-invalid @enderror" type="number" placeholder="{{ __('NOMBRE DE PARTS/ACTIONS ') }}" id="nbr_part" name="nbr_part">
                @error('nbr_part')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_part') }}
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
                <input  value="{{ old('description') ?? $titre->description }}" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="{{ __('DESCRIPTION') }}" id="description" name="description">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
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
                <input  value="{{ old('valeurM') ?? $titre->valeurM }}" class="form-control @error('valeurM') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR MARCHANDE') }}" id="valeurM" name="valeurM">
                @error('valeurM')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                </div>
                <input  value="{{ old('nbr_part1') ?? $titre->nbr_part1 }}" class="form-control @error('nbr_part1') is-invalid @enderror" type="number" placeholder="{{ __('NOMBRE DE PARTS/ACTIONS 1') }}" id="nbr_part1" name="nbr_part1">
                @error('nbr_part1')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_part1') }}
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
                        <i class="fe fe-sunset"></i>
                    </div>
                </div> 
                <input  value="{{ old('description1') ?? $titre->description1 }}" class="form-control @error('description1') is-invalid @enderror" type="text" placeholder="{{ __('DESCRIPTION 1') }}" id="description1" name="description1">
                @error('description1')
                    <div class="invalid-feedback">
                        {{ $errors->first('description1') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div> 
               <input  value="{{ old('valeurM1') ?? $titre->valeurM1 }}" class="form-control @error('valeurM1') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR MARCHANDE 1') }}" id="valeurM1" name="valeurM1">
                @error('valeurM1')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM1') }}
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
                <input  value="{{ old('nbr_part2') ?? $titre->nbr_part2 }}" class="form-control @error('nbr_part2') is-invalid @enderror" type="number" placeholder="{{ __('NOMBRE DE PARTS/ACTIONS 2') }}" id="nbr_part2" name="nbr_part2">
                @error('nbr_part2')
                    <div class="invalid-feedback">
                        {{ $errors->first('nbr_part2') }}
                    </div>
                @enderror
            </div>											
        </div>
        <div class="form-group col-md-6 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                  <input  value="{{ old('description2') ?? $titre->description2 }}" class="form-control @error('description2') is-invalid @enderror" type="text" placeholder="{{ __('DESCRIPTION 2') }}" id="description2" name="description2">
                @error('description2')
                    <div class="invalid-feedback">
                        {{ $errors->first('description2') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>
<div class="form-row">
        <div class="form-group col-md-4 mb-0">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-sunset"></i>
                    </div>
                </div>
                <input  value="{{ old('valeurM2') ?? $titre->valeurM2 }}" class="form-control @error('valeurM2') is-invalid @enderror" type="text" placeholder="{{ __('VALEUR MARCHANDE 2') }}" id="valeurM2" name="valeurM2">
                @error('valeurM2')
                    <div class="invalid-feedback">
                        {{ $errors->first('valeurM2') }}
                    </div>
                @enderror
            </div>										
        </div>
</div>














      

