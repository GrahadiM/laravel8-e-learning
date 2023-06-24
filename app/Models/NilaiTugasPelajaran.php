<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiTugasPelajaran extends Model
{
    use HasFactory;

    protected $table = "nilai_tugas_pelajarans";
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class);
    }

    public function tugas()
    {
        return $this->belongsTo(TugasPelajaran::class);
    }
}
