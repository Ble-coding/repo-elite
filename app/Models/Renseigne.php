<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renseigne extends Model
{
    use HasFactory;

    protected $table = 'renseignes';

    protected $fillable = [
 'name',
];

public function generals(){
    return $this->hasMany('App\Models\General');
}
public function mains(){
    return $this->hasMany('App\Models\Main');
}

}
