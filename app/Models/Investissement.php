<?php

namespace App\Models;

use App\Models\Forfait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investissement extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'investissements';

    protected $fillable = [
    'customer_id',
    //  'suppleant_id',
    'montant',
    'investiman',
    //  'suppleant',
       'forfait_id','status',
         'choix','bonus', 'jalon', 
         'compteur',
         'date_termine',
    'user_id'

];


protected static function booted() {

    static::creating(function ($investi) {
        $investi->user_id = auth()->id(); 
    });
}



public function suppleant(){
    return $this->belongsTo('App\Models\Suppleant');
}

public function customer(){
    return $this->belongsTo('App\Models\Customer');
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function forfait(){
        return $this->belongsTo('App\Models\Forfait' );
    }

    // public function forfait(){
    //     return $this->belongsTo(Forfait::class, 'forfait_id');
    // }
    public function diminishes(){
        return $this->hasMany('App\Models\Diminish');
    }
    


}
