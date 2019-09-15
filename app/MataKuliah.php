<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    public function perkuliahan() {
        return $this->belongsToMany('App\Perkuliahan');
    }
}
