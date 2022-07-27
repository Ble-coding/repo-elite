<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'details';
     protected $fillable = [
        'reprise','reclamation','faillite','echus',
        'repriseD','reclamationD','failliteD','echusD',
        'main_id',

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}
