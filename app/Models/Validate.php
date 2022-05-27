<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Validate extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'validates';

    protected $fillable = ['montant',
           'transfert_id',
           'solde_id','olde_id',
    'sode_id', 'ode_id', 'credit', 'redit',
    'sold_id','old_id',
     'sod_id','od_id',
 'montant', 
 'code',
       'receive_id','send_id',

];

public function solde(){
       return $this->belongsTo('App\Models\Solde');
   }
   
   
   public function sode(){
       return $this->belongsTo('App\Models\Sode');
   }
   public function sold(){
       return $this->belongsTo('App\Models\Sold');
   }
   
   public function sod(){
       return $this->belongsTo('App\Models\Sod');
   }

   public function credit(){
    return $this->belongsTo('App\Models\Credit');
}
   
   
   public function olde(){
       return $this->belongsTo('App\Models\Solde');
   }
   
   
   public function ode(){
       return $this->belongsTo('App\Models\Sode');
   }
   public function old(){
       return $this->belongsTo('App\Models\Sold');
   }
   
   public function od(){
       return $this->belongsTo('App\Models\Sod');
   }
   
   public function redit(){
    return $this->belongsTo('App\Models\Credit');
}
   public function receive(){
       return $this->belongsTo('App\Models\Receive');
   }
   public function send(){
       return $this->belongsTo('App\Models\Send');
   }

}
