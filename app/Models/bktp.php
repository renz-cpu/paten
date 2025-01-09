<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bktp extends Model
{
    use HasFactory;
    protected $table = 'bktps';
    protected $primary = 'nik';
    protected $fillable = ['nik','nama','tmpt','tgl','pk','stts','almt','agama','email','provinsi','kota','kcmtn','klrhn','rt','rw','gender','gol'];

    function handleDelete(){
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
        }
        return true;
}
}
