<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'vp_comment';
    protected $primaryKey = 'com_id';
    protected $guarded = [];
}
