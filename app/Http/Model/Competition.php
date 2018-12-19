<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table='competitions';
    protected $primaryKey='id';
    public $timestamps=false;
}
