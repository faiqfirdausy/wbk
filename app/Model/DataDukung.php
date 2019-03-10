<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataDukung extends Model
{
    protected $table = 'data_dukung';
    protected $primaryKey = 'id';

    const PEMASYARAKATAN = 1;
    const IMIGRASI = 2;
    const ESELON_1 = 3;

    
    public function AbcSoal()
    {
        return $this->belongsTo('App\Model\AbcSoal', 'id', 'id_abcsoal');
    }

}
