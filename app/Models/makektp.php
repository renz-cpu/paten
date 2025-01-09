<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makektp extends Model
{
    use HasFactory;
    protected $table = 'makektps';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik','nama_lengkap','tanggal_lahir','alamat','email','nomor_telepon','foto_diri'];
}
