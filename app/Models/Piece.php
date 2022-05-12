<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $table = 'pieces';

    protected $fillable = ['nom'];

    public function users(){
        return $this->hasMany('App\Models\User');
    }

    public function particuliers(){
        return $this->hasMany('App\Models\Particulier');
    }

    public function pieces(){
        return $this->hasMany('App\Models\Piece');
    }
    public function entreprises(){
        return $this->hasMany('App\Models\Entreprise');
    }
    public function visiteurs(){
        return $this->hasMany('App\Models\Visiteur');
    }
    public function deposit(){
        return $this->hasMany('App\Models\Deposit');
    }
    public function depose(){
        return $this->hasMany('App\Models\Deposit');
    }


    public function ventes(){
        return $this->hasMany('App\Models\Vente');
    }


}
