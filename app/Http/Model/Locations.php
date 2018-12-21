<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $table='locations';
    protected $primaryKey='loc_id';
    public $timestamps=false;
}
