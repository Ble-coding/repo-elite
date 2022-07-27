<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Main extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'mains';

    protected $fillable = ['renseigne_id','name','address','resp',
    'depuis','nbr_emp','journal', 'datefond',
        'tel_com','sect','choice_id',
        'datebil','daterev','user_id','juridique_id','entreprise_id','society_id'
    ];
    public function juridique(){
    return $this->belongsTo('App\Models\Juridique');
    }
    public function renseigne(){
        return $this->belongsTo('App\Models\Renseigne');
        }
        public function user(){
            return $this->belongsTo('App\Models\User');
        }
        public function choice(){
            return $this->belongsTo('App\Models\Choice');
        }
        public function entreprise(){
            return $this->belongsTo('App\Models\Entreprise');
        }
        public function society(){
            return $this->belongsTo('App\Models\Society');
        }


        public function needs(){
            return $this->hasMany('App\Models\Need');
        }

        public function bancarisations(){
            return $this->hasMany('App\Models\Bancarisation');
        }
        public function referendums(){
            return $this->hasMany('App\Models\Referendum');
        }
        public function responsables(){
            return $this->hasMany('App\Models\Responsable');
        }
        public function actifs(){
            return $this->hasMany('App\Models\Actif');
        }

        public function passifs(){
            return $this->hasMany('App\Models\Passif');
        }
        public function recettes(){
            return $this->hasMany('App\Models\Recette');
        }
        public function spents(){
            return $this->hasMany('App\Models\Spent');
        }
        public function details(){
            return $this->hasMany('App\Models\Detail');
        }
        public function titres(){
            return $this->hasMany('App\Models\Titre');
        }
        public function assurances(){
            return $this->hasMany('App\Models\Assurance');
        }
        public function cannexes(){
            return $this->hasMany('App\Models\Cannexe');
        }

        public function propos(){
            return $this->hasMany('App\Models\Propo');
        }
        public function protections(){
            return $this->hasMany('App\Models\Protection');
        }
        public function personnels(){
            return $this->hasMany('App\Models\Personnel');
        }
}
