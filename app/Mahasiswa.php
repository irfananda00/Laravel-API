<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';

    public function mahasiswa_kelas(){
      return $this->hasMany('App/Mahasiswa_Kelas');
    }
}
