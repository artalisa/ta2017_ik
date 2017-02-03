<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vartotojo_informacija extends Model
{
     protected $fillable = ['vartotojo_vardas','miestas'];
    public $timestamps = false;
}
