<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Confire extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'confires';
    protected $fillable = ['motif','society_id'];
    public function society(){
        return $this->belongsTo('App\Models\Society');
    }
}
