<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $primaryKey='id';
    public $timestamps=false;
}
