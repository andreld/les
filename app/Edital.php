<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edital extends Model
{
    protected $table = 'editais';
    public $timestamps = false;
    public $fillable = ['nome','url'];
}
