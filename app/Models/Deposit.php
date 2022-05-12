<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deposit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'deposits';

    protected $fillable = ['montantD','montantR',
    'entreprise_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'user_id'

];


protected static function booted() {

    static::creating(function ($deposit) {
        $deposit->user_id = auth()->id();
    });
}
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function entreprise(){
        return $this->belongsTo('App\Models\Entreprise');
    }

    public function sold(){
        return $this->belongsTo('App\Models\Sold');
    }
    public function piece(){
        return $this->belongsTo('App\Models\Piece');
    }

}
