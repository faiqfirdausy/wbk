<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';
    // protected $fillable = ['nip_dosen', 'sidang_ta_id', 'slot_id', 'status', 'proposal_id', 'created_at', 'updated_at', 'deleted_at'];
        public function AbcSoal()
    {
        return $this->belongsTo('App\Model\AbcSoal', 'id', 'id_abcsoal');
    }


}
