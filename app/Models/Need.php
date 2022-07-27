<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Need extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'needs';
 
    protected $fillable = [
        'montant','objet', 'auto','elite',
        'cout','main_id','pret_id'
    ];

    public function pret(){
        return $this->belongsTo('App\Models\Pret');
        }

        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}
