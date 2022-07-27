<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class General extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'generals';

    protected $fillable = [
        'sexe','commune', 'name_naissance','nationnalite','address','nbr_dependant',
        'depuis','tel_residence','cel','bureau','datenaiss','prof','name','prename',
        'nom_conjoint','date_mariage','etat_id','email',
        'prename_fille','name_fille','regime_id','customer_id','client_id','particulier_id',
        'piece_id','envoie_id'
        ,'communeR'
        , 'renseigne_id',
        'user_id'
    ];
    public function etat(){
    return $this->belongsTo('App\Models\Etat');
    }
    public function regime(){
        return $this->belongsTo('App\Models\Regime');
        }
        public function customer(){
            return $this->belongsTo('App\Models\Customer');
            }
            public function renseigne(){
                return $this->belongsTo('App\Models\Renseigne');
                }

            public function client(){
                return $this->belongsTo('App\Models\Client');
                }
                public function particulier(){
                    return $this->belongsTo('App\Models\Particulier');
                    }
                    public function piece(){
                        return $this->belongsTo('App\Models\Piece');
                        }
                        public function envoie(){
                            return $this->belongsTo('App\Models\Envoie');
                            }
            public function besoins(){
                     return $this->hasMany('App\Models\Besoin');
             }
             public function reserves(){
                return $this->hasMany('App\Models\Reserve');
        }
        public function mobilieres(){
            return $this->hasMany('App\Models\Mobiliere');
    }
    public function patrimoines(){
        return $this->hasMany('App\Models\Patrimoine');
}
             public function conjoints(){
                return $this->hasMany('App\Models\Conjoint');
        }
        public function relations(){
            return $this->hasMany('App\Models\Relation');
    }
                 public function references(){
                    return $this->hasMany('App\Models\Reference');
            }
        public function emprunteurs(){
            return $this->hasMany('App\Models\Emprunteur');
    }
    public function spouses(){
        return $this->hasMany('App\Models\Spouse');
}
public function revenus(){
    return $this->hasMany('App\Models\Revenu');
}

public function depenses(){
    return $this->hasMany('App\Models\Depense');
}

public function bancaires(){
    return $this->hasMany('App\Models\Bancaire');
}

public function user(){
    return $this->belongsTo('App\Models\User');
}
}
