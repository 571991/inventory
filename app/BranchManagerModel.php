<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchManagerModel extends Model
{
    protected $table='branch_managers';
    protected $primaryKey='bm_id';
    protected $fillable=['bm_user_id','bm_parent_id','bm_zone_id','bm_created_at','bm_updated_at'];
}
