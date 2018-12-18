<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table='lecturers';
    protected $primaryKey='lecturer_id';
    public $timestamps=false;
}
