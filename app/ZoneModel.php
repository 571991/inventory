<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZoneModel extends Model
{
    protected $table='zones';
    protected $primaryKey='z_id';
    protected $fillable=['z_name','z_d_id'];
}
