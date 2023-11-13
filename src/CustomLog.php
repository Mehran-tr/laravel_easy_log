<?php

namespace laravel_easy_log\easy_log;

use Illuminate\Database\Eloquent\Model;
class CustomLog extends Model
{
    protected $table = 'custom_logs';
    protected $fillable = ['user_id', 'message', 'type', 'route'];
}
