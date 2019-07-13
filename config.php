<?php

function config($key, $default = null)
{
    $value = getenv($key);
    return $value ? $value : $default;
}

return [
    'production' => config('PRODUCTION', true),
    'baseUrl' => config('BASE_URL', ''),
];
