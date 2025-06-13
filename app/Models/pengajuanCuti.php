<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengajuanCuti extends Model
{
    protected $table = 'pengajuan_cutis';

    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
        'jumlah',
        'ket',
        'status',
        'nip',
    ];


    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }
}
