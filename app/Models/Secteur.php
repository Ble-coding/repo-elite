<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;

    protected $table = 'secteurs';

    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany('App\Models\User');
    }

    public function societys(){
        return $this->hasMany('App\Models\Society');
    }
   
    public function entreprises(){
        return $this->hasMany('App\Models\Entreprise');
    }
}
