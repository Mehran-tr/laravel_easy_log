<?php

namespace laravel_easy_log\easy_log;
class CustomLogger
{
    public function log($userId, $message, $type, $route = null)
    {
        CustomLog::create([
            'user_id' => $userId,
            'message' => $message,
            'type' => $type,
            'route' => $route
        ]);
    }
}
