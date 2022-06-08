<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Confirmator extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'confirmators';
    protected $fillable = ['motif','customer_id'];
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
