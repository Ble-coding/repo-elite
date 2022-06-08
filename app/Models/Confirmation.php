<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Confirmation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'confirmations';
    protected $fillable = ['motif','particulier_id'];
    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }

}
