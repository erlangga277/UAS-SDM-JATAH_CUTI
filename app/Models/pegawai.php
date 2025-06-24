<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{

    protected $table = 'pegawais';

    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nip',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'telepon',
        'alamat',
        'manager_id',
        'foto',
    ];


    public function manager()
    {
        return $this->belongsTo(Divisi::class, 'manager_id');
    }


    public function jatahCuti()
    {
        return $this->hasMany(JatahCuti::class, 'nip', 'nip');
    }


    public function pengajuanCuti()
    {
        return $this->hasMany(PengajuanCuti::class, 'nip', 'nip');
    }
}

