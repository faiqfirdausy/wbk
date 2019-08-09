<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataFile extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id';

        public function Transaksi()
    {
        return $this->belongsTo('App\Model\Transaksi', 'id_transaksi', 'id_transaksi');
    }
}