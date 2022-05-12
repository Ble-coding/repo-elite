<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'prename',
        // 'datenaiss',
        // 'numpiece',
        // 'dateexp',
        // 'typepiece',
        'tel',
        // 'piece_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function isAdmin(){
        return $this->roles()->where('name', 'Administrateur')->first();
    }

    public function hasAnyRole(array $roles){
        return $this->roles()->whereIn('name', $roles)->first();
    }

    public function piece(){
        return $this->belongsTo('App\Models\Piece');
    }

    public function secteur(){
        return $this->belongsTo('App\Models\Secteur');
    }


    public function type(){
        return $this->belongsTo('App\Models\Type');
    }
    public function recepts(){
        return $this->hasMany('App\Models\Recept');
    }

    public function decaisses(){
        return $this->hasMany('App\Models\Decaisse');
    }
    public function ventes(){
        return $this->hasMany('App\Models\Recept');
    }

    public function visiteurs(){
        return $this->hasMany('App\Models\Visiteur');
    }

    public function parrains(){
        return $this->hasMany('App\Models\Parrainage');
    }

    public function rachats(){
        return $this->hasMany('App\Models\Rachat');
    }
    
    
    public function valeurs(){
        return $this->hasMany('App\Models\Valeur');
    }
    public function particuliers(){
        return $this->hasMany('App\Models\Particulier');
    }
    public function withadrals(){
        return $this->hasMany('App\Models\Withadral');
    }

    public function widraws(){
        return $this->hasMany('App\Models\Widraw');
    }
    
    public function clients(){
        return $this->hasMany('App\Models\Client');
    }
    public function entreprises(){
        return $this->hasMany('App\Models\Entreprise');
    }
    public function depots(){
        return $this->hasMany('App\Models\Depot');
    }

    public function investissements(){
        return $this->hasMany('App\Models\Investissement');
    }
    
    public function diminishes(){
        return $this->hasMany('App\Models\Diminish');
    }

    public function deposits(){
        return $this->hasMany('App\Models\Deposit');
    }

    public function depositarys(){
        return $this->hasMany('App\Models\Depositary');
    }

    public function societys(){
        return $this->hasMany('App\Models\Society');
    }

}
