<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juridique extends Model
{
    use HasFactory;

    protected $table = 'juridiques';

    protected $fillable = ['name'
    ];
    public function mains(){
    return $this->hasMany('App\Models\Main');
    }
}
