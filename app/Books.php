<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table='Books';
    public $primaryKey='id';
    public $timestamps=true;
}
