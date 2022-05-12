<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'entreprises';
    protected $fillable = ['email',
        'cam' ,'caa' ,
        //  'partner' , 'payment' ,
        // 'credit' , 
        // 'secteur_id', 
        'name_partner',
        'secteur',
        'forme_id', 'name', 'siege','lieu','tel','name_gerant',
    'prename_gerant', 'capital','nr',
    'lieu_habitation','piece_id','numpiece','dateexp','datenaiss',
    'nationnalite', 'sexe', 'situation',
    'successeur_name','successeur_prename','successeur_tel', 'code',
    'personne_name','personne_prename','personne_tel','image',
    'user_id','tel_ent'

];


protected static function booted() {

    static::creating(function ($entreprise) {
        $entreprise->user_id = auth()->id();
    });
}


public function user(){
    return $this->belongsTo('App\Models\User');
}
public function piece(){
    return $this->belongsTo('App\Models\Piece');
}

public function forme(){
    return $this->belongsTo('App\Models\Forme');   
}

public function deposits(){
    return $this->hasMany('App\Models\Deposit');
}

public function deposes(){
    return $this->hasMany('App\Models\Depose');
}
    public function withadrals(){
        return $this->hasMany('App\Models\Withadral');
    }

    public function widraws(){
        return $this->hasMany('App\Models\Widraw');
    }

    public function solds(){
        return $this->hasMany('App\Models\Sold');
    }

    public function sods(){
        return $this->hasMany('App\Models\Sod');
    }

    public function secteurs(){
        return $this->hasMany('App\Models\Secteur');
    }
}
