<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'oc_user';//指定表 默认表为文件名+s
    protected $primaryKey='user_id';//指定主键 默认id
    public $timestamps=false;//不要这些 Laravel 自动管理
}
