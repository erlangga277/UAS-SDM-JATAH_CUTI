<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jatahCuti extends Model
{

    protected $table = 'jatah_cutis';

    protected $fillable = [
        'tahun',
        'jumlah',
        'nip',
    ];


    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }
}
