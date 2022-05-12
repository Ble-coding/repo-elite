<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forme extends Model
{
    use HasFactory;

    
    protected $table = 'formes';

    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany('App\Models\User');
    }

   
    public function entreprises(){
        return $this->hasMany('App\Models\Entreprise');
    }
}
