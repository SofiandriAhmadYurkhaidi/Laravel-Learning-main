<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinas extends Model
{
    protected $table = 'dinas_luar';
    protected $fillable = ['nip', 'nama', 'kota_asal', 'st_asal', 'ket_asal'];

    public $timestamps = FALSE;
    use HasFactory;
}
