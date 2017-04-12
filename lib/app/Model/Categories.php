<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'vp_categories';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];
}
