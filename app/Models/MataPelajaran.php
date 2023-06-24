<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = "mata_pelajarans";
    protected $guarded = [];

    public function dosen()
    {
        return $this->belongsTo(User::class);
    }

    public function materi()
    {
        return $this->hasMany(MateriPelajaran::class, 'mapel_id');
    }

    public function tugas()
    {
        return $this->hasMany(TugasPelajaran::class, 'mapel_id');
    }

    public function forum()
    {
        return $this->hasMany(ForumPelajaran::class, 'mapel_id');
    }

}
