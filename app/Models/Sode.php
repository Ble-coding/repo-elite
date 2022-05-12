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
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant'
];

 
    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
    public function depositarys(){
        return $this->hasMany('App\Models\Depositary');
    }
    public function removes(){
        return $this->hasMany('App\Models\Remove');
    }
}
