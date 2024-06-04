<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas_siswa',
        'status_siswa'
    ];
    public $timestamps = true;
}
