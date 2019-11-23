<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Soal extends Model
{
    //
    protected $fillable = [
        'pertanyaan',
        'benar',
        'salah1',
        'salah2'
    ];
}
