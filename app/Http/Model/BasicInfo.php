<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    protected $table='basicInfos';
    protected $primaryKey='bi_id';
    public $timestamps=false;
}
