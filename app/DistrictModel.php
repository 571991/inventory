<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model
{
    protected $table='districts';
    protected $primaryKey='d_id';
    protected $fillable=['d_name'];
}
