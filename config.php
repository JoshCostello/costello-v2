<?php

function config($key, $default = null)
{
    $value = getenv($key);
    return $value ? $value : $default;
}

return [
    'production' => config('PRODUCTION', false),
    'baseUrl' => config('BASE_URL', ''),
];
