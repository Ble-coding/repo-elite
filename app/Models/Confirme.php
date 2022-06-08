<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Confirme extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'confirmes';
    protected $fillable = ['motif','entreprise_id'];
    public function entreprise(){
        return $this->belongsTo('App\Models\Entreprise');
    }
}
