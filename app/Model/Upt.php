<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upt extends Model
{
    protected $table = 'upt';
    protected $primaryKey = 'id';

    public function userUpt()
    {
        return $this->belongsTo('App\User', 'id_upt', 'id_upt');
    }
}
