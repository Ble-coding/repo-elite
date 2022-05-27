<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $table = 'credits';

    protected $fillable = [
        'name',
        'montant',
];


public function transferts(){
    return $this->hasMany('App\Models\Transfert');
}
   

    public function validates(){
        return $this->hasMany('App\Models\Validate');
    }

}
