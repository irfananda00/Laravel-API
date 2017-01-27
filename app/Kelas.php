<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'Kelas';

    public function mahasiswa_kelas(){
      return $this->hasMany('App/Mahasiswa_Kelas');
    }
}
