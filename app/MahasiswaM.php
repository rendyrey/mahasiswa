<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaM extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','jenis_kelamin'];
}
