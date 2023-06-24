<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriPelajaran extends Model
{
    use HasFactory;

    protected $table = "materi_pelajarans";
    protected $guarded = [];

    public function dosen()
    {
        return $this->belongsTo(User::class);
    }

    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
