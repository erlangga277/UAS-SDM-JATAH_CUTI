<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{

    // Nama tabel (jika tidak mengikuti konvensi jamak)
    protected $table = 'divisis';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'kode',
        'nama',
        'manager',
    ];

    // Relasi: Satu divisi memiliki banyak pegawai
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'manager_id');
    }
}
