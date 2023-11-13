<?php

namespace LaravelEasyLog\EasyLog;

use Illuminate\Database\Eloquent\Model;
class CustomLog extends Model
{
    protected $table = 'custom_logs';
    protected $fillable = ['user_id', 'message', 'type', 'route'];
}
