<?php

function config($key, $default = null)
{
    $value = getenv($key);
    return $value ? $value : $default;
}

return [
    'production' => config('SITE_ENV', true),
    'baseUrl' => config('SITE_URL', ''),
];
