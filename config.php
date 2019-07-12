<?php

function config($key, $default = null)
{
    $value = getenv($key);
    return $value ? $value : $default;
}

return [
];
