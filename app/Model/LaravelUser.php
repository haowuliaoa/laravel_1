<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaravelUser extends Model
{
    //
    protected $table = 'oc_laravel_user';//指定表 默认表为文件名+s
    protected $primaryKey='uid';//指定主键 默认id
    public $timestamps=false;//不要这些 Laravel 自动管理
}
