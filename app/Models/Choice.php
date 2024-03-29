<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $table = 'choices';

    protected $fillable = [
        'name',
    ];

    public function investissements(){
        return $this->hasMany('App\Models\Investissement');
    }

  
}
