<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    public function files()
    {
        return $this->hasMany('App\Model\DataFile', 'id_transaksi', 'id_transaksi');
    }
}
