<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Confirmate extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'confirmates';
    protected $fillable = ['motif','client_id'];
    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
