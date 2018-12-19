<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table='competitions';
    protected $primaryKey='competition_id';
    public $timestamps=false;
}
