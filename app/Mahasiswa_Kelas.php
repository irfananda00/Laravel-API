<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Kelas extends Model
{
    protected $table = 'Mahasiswa_kelas';

    public function mahasiswa(){
      return $this->belongsTo('App/Mahasiswa');
    }

    public function kelas(){
      return $this->belongsTo('App/Kelas');
    }
}
