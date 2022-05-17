<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;


    protected $table = 'receptions';

    protected $fillable = [
        'name',
    ];


    public function transferts(){
        return $this->hasMany('App\Models\Transfert');
    }
}
