<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klausimukai extends Model
{
    protected $fillable = ['Klausimas','Teisingas_ats','Neteisingas_ats1','Neteisingas_ats2','Neteisingas_ats3'];
    public $timestamps = false;
   // protected $table = 'klausimukais';
}
