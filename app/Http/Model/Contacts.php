<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table='contacts';
    protected $primaryKey='reg_id';
    public $timestamps=false;
    protected $guarded=[];
}
