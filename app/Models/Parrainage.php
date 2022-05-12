<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrainage extends Model
{
    use HasFactory;

    protected $table = 'parrainages';
    protected $fillable = [
   'bonus',
   'user_id'
];


protected static function booted() {

    static::creating(function ($parrain) {
        $parrain->user_id = auth()->id();
    });
}

public function user(){
    return $this->belongsTo('App\Models\User');
}

}
