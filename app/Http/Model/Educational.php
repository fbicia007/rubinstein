<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    protected $table='educational';
    protected $primaryKey='edu_id';
    public $timestamps=false;
}
