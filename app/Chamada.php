<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
        public $fillable = ['titulo','url','descr','prazo_inscr'];
}
