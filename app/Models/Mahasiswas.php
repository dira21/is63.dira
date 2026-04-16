<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswas extends Model
{
    use HasFactory;


    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'domisili',
        'email',
        'jenis_kelamin',
        'tahun_masuk',
    ];
}