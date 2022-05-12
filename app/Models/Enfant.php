<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;

    protected $table = 'enfants';

    protected $fillable = [
        'name_enfant',
        'prename_enfant',
        'age',
        'particulier_id'
    ];

    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }
}
