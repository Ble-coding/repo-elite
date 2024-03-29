<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sode extends Model
{
    use HasFactory;

    
    protected $table = 'sodes';

    protected $fillable = ['montantD','montantR',
    'client_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'actif'
];

 
    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
    public function depositarys(){
        return $this->hasMany('App\Models\Depositary');
    }

    public function transferts(){
        return $this->hasMany('App\Models\Transfert');
    }

    public function validates(){
        return $this->hasMany('App\Models\Validate');
    }
    public function removes(){
        return $this->hasMany('App\Models\Remove');
    }
}
