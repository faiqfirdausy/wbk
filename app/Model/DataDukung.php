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

    public function File2()
    {
        return $this->hasMany('App\Model\File2', 'id_data_dukung', 'id');
    }

    public function filesx()
    {
        return $this->hasMany('App\Model\DataFile', 'id_datadukung', 'id');
    }

}
