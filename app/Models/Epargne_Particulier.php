<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Epargne_Particulier extends Model
{
    use HasFactory;

    protected $table = 'epargne_particuliers';
    protected $fillable = ['name', 'prename', 'datenaiss','lieu','tel','email','nationnalite',
    'sexe',
    'lieu_habitation',
    'situation',
     'code',
    'successeur_name','successeur_prename','successeur_tel',
    'personne_name','personne_prename','personne_tel','piece_id','numpiece','dateexp','image',
    // 'image_piece'
];

// public static function boot()
//     {
//         parent::boot();
//         self::creating(function ($model) {
//             $model->code = IdGenerator::generate(['table' => 'epargne_particuliers', 'length' => 6, 'prefix' => 'EP-']);
//         });
//     }



// output: 160001

// public function roles(){
//     return $this->belongsToMany('App\Models\Role');
// }

// public function isAdmin(){
//     return $this->roles()->where('name', 'Administrateur','Commercial')->first();
// }

// public function hasAnyRole(array $roles){
//     return $this->roles()->whereIn('name', $roles)->first();
// }

public function users(){
    return $this->belongsToMany('App\Models\User');
}


}
